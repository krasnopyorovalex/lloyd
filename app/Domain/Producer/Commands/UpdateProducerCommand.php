<?php

namespace App\Domain\Producer\Commands;

use App\Domain\Image\Commands\DeleteImageCommand;
use App\Domain\Image\Commands\UploadImageCommand;
use App\Domain\Producer\Queries\GetProducerByIdQuery;
use App\Events\RedirectDetected;
use App\Http\Requests\Request;
use App\Producer;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class UpdateProducerCommand
 * @package App\Domain\Producer\Commands
 */
class UpdateProducerCommand
{

    use DispatchesJobs;

    private $request;
    private $id;

    /**
     * UpdateProducerCommand constructor.
     * @param int $id
     * @param Request $request
     */
    public function __construct(int $id, Request $request)
    {
        $this->id = $id;
        $this->request = $request;
    }

    /**
     * @return bool
     */
    public function handle(): bool
    {
        $producer = $this->dispatch(new GetProducerByIdQuery($this->id));
        $urlNew = $this->request->post('alias');

        if ($producer->getOriginal('alias') != $urlNew) {
            event(new RedirectDetected($producer->getOriginal('alias'), $urlNew));
        }

        if ($this->request->has('icon')) {
            if ($producer->icon) {
                \Storage::delete('public/images/' . $producer->icon);
            }
            $icon = $this->request->file('icon')->store('public/images');
            $producer->icon = \Storage::url($icon);
        }

        if ($this->request->has('image')) {
            if ($producer->image) {
                $this->dispatch(new DeleteImageCommand($producer->image));
            }
            $this->dispatch(new UploadImageCommand($this->request, $producer->id, Producer::class));
        }

        return $producer->update($this->request->all());
    }

}

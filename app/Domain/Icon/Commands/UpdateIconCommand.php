<?php

namespace App\Domain\Icon\Commands;

use App\Domain\Image\Commands\DeleteImageCommand;
use App\Domain\Image\Commands\UploadImageCommand;
use App\Domain\Icon\Queries\GetIconByIdQuery;
use App\Events\RedirectDetected;
use App\Http\Requests\Request;
use App\Icon;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class UpdateIconCommand
 * @package App\Domain\Icon\Commands
 */
class UpdateIconCommand
{

    use DispatchesJobs;

    private $request;
    private $id;

    /**
     * UpdateIconCommand constructor.
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
        $icon = $this->dispatch(new GetIconByIdQuery($this->id));
        $urlNew = $this->request->post('alias');

        if ($icon->getOriginal('alias') != $urlNew) {
            event(new RedirectDetected($icon->getOriginal('alias'), $urlNew));
        }

        if ($this->request->has('image')) {
            if ($icon->image) {
                $this->dispatch(new DeleteImageCommand($icon->image));
            }
            $this->dispatch(new UploadImageCommand($this->request, $icon->id, Icon::class));
        }

        return $icon->update($this->request->all());
    }

}

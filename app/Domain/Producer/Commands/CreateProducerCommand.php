<?php

namespace App\Domain\Producer\Commands;

use App\Domain\Image\Commands\UploadImageCommand;
use App\Http\Requests\Request;
use App\Producer;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class CreateProducerCommand
 * @package App\Domain\Producer\Commands
 */
class CreateProducerCommand
{
    use DispatchesJobs;

    private $request;

    /**
     * CreateProducerCommand constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @return bool
     */
    public function handle(): bool
    {
        $producer = new Producer();
        $producer->fill($this->request->all());

        if ($this->request->has('icon')) {
            $icon = $this->request->file('icon')->store('public/images');
            $producer->icon = \Storage::url($icon);
        }

        $producer->save();

        $producer->tabs()->attach($this->request->post('tabs'));

        if ($this->request->has('image')) {
            return $this->dispatch(new UploadImageCommand($this->request, $producer->id, Producer::class));
        }

        return true;
    }

}

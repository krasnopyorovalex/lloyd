<?php

namespace App\Domain\Icon\Commands;

use App\Domain\Image\Commands\UploadImageCommand;
use App\Http\Requests\Request;
use App\Icon;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class CreateIconCommand
 * @package App\Domain\Icon\Commands
 */
class CreateIconCommand
{
    use DispatchesJobs;

    private $request;

    /**
     * CreateIconCommand constructor.
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
        $icon = new Icon();
        $icon->fill($this->request->all());
        $icon->save();

        if ($this->request->has('image')) {
            return $this->dispatch(new UploadImageCommand($this->request, $icon->id, Icon::class));
        }

        return true;
    }

}

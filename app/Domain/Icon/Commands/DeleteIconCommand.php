<?php

namespace App\Domain\Icon\Commands;

use App\Domain\Image\Commands\DeleteImageCommand;
use App\Domain\Icon\Queries\GetIconByIdQuery;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class DeleteIconCommand
 * @package App\Domain\Icon\Commands
 */
class DeleteIconCommand
{

    use DispatchesJobs;

    /**
     * @var int
     */
    private $id;

    /**
     * DeleteIconCommand constructor.
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return bool
     */
    public function handle(): bool
    {
        $icon = $this->dispatch(new GetIconByIdQuery($this->id));

        if($icon->image) {
            $this->dispatch(new DeleteImageCommand($icon->image));
        }

        return $icon->delete();
    }

}

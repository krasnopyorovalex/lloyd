<?php

namespace App\Domain\Producer\Commands;

use App\Domain\Image\Commands\DeleteImageCommand;
use App\Domain\Producer\Queries\GetProducerByIdQuery;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class DeleteProducerCommand
 * @package App\Domain\Producer\Commands
 */
class DeleteProducerCommand
{

    use DispatchesJobs;

    /**
     * @var int
     */
    private $id;

    /**
     * DeleteProducerCommand constructor.
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
        $producer = $this->dispatch(new GetProducerByIdQuery($this->id));

        if($producer->image) {
            $this->dispatch(new DeleteImageCommand($producer->image));
        }

        return $producer->delete();
    }

}

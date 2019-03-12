<?php

namespace App\Domain\Industry\Commands;

use App\Domain\Image\Commands\DeleteImageCommand;
use App\Domain\Industry\Queries\GetIndustryByIdQuery;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class DeleteIndustryCommand
 * @package App\Domain\Industry\Commands
 */
class DeleteIndustryCommand
{

    use DispatchesJobs;

    /**
     * @var int
     */
    private $id;

    /**
     * DeleteIndustryCommand constructor.
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
        $industry = $this->dispatch(new GetIndustryByIdQuery($this->id));

        return $industry->delete();
    }

}

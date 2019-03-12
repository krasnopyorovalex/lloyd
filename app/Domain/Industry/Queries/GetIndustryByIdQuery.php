<?php

namespace App\Domain\Industry\Queries;

use App\Industry;

/**
 * Class GetIndustryByIdQuery
 * @package App\Domain\Industry\Queries
 */
class GetIndustryByIdQuery
{
    /**
     * @var int
     */
    private $id;

    /**
     * GetIndustryByIdQuery constructor.
     * @param int $id
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        return Industry::findOrFail($this->id);
    }
}

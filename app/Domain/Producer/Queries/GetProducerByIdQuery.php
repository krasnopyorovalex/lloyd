<?php

namespace App\Domain\Producer\Queries;

use App\Producer;

/**
 * Class GetProducerByIdQuery
 * @package App\Domain\Producer\Queries
 */
class GetProducerByIdQuery
{
    /**
     * @var int
     */
    private $id;

    /**
     * GetProducerByIdQuery constructor.
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
        return Producer::with(['image'])->findOrFail($this->id);
    }
}

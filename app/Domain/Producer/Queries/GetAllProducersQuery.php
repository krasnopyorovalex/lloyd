<?php

namespace App\Domain\Producer\Queries;

use App\Producer;

/**
 * Class GetAllProducersQuery
 * @package App\Domain\Producer\Queries
 */
class GetAllProducersQuery
{
    private static $producers;
    /**
     * Execute the job.
     */
    public function handle()
    {
        if (! self::$producers) {
            self::$producers = Producer::with(['image'])->orderBy('pos')->get();
        }

        return self::$producers;
    }
}

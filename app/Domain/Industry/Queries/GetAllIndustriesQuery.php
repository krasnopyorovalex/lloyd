<?php

namespace App\Domain\Industry\Queries;

use App\Industry;

/**
 * Class GetAllIndustriesQuery
 * @package App\Domain\Industry\Queries
 */
class GetAllIndustriesQuery
{
    private static $industries;
    /**
     * Execute the job.
     */
    public function handle()
    {
        if (! self::$industries) {
            self::$industries = Industry::all();
        }

        return self::$industries;
    }
}

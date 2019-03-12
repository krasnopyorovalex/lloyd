<?php

namespace App\Domain\Icon\Queries;

use App\Icon;

/**
 * Class GetAllIconsQuery
 * @package App\Domain\Icon\Queries
 */
class GetAllIconsQuery
{
    private static $icons;
    /**
     * Execute the job.
     */
    public function handle()
    {
        if (! self::$icons) {
            self::$icons = Icon::with(['image'])->get();
        }

        return self::$icons;
    }
}

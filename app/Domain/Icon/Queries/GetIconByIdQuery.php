<?php

namespace App\Domain\Icon\Queries;

use App\Icon;

/**
 * Class GetIconByIdQuery
 * @package App\Domain\Icon\Queries
 */
class GetIconByIdQuery
{
    /**
     * @var int
     */
    private $id;

    /**
     * GetIconByIdQuery constructor.
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
        return Icon::with(['image'])->findOrFail($this->id);
    }
}

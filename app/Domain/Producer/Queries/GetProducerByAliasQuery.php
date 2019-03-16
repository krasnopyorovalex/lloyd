<?php

namespace App\Domain\Producer\Queries;

use App\Producer;

/**
 * Class GetProducerByAliasQuery
 * @package App\Domain\Producer\Queries
 */
class GetProducerByAliasQuery
{
    /**
     * @var string
     */
    private $alias;

    /**
     * GetProducerByAliasQuery constructor.
     * @param string $alias
     */
    public function __construct(string $alias)
    {
        $this->alias = $alias;
    }

    /**
     * Execute the job.
     */
    public function handle()
    {
        return Producer::where('alias', $this->alias)->with(['tabs'])->firstOrFail();
    }
}

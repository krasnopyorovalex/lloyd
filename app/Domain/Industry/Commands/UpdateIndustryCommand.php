<?php

namespace App\Domain\Industry\Commands;

use App\Domain\Image\Commands\DeleteImageCommand;
use App\Domain\Image\Commands\UploadImageCommand;
use App\Domain\Industry\Queries\GetIndustryByIdQuery;
use App\Events\RedirectDetected;
use App\Http\Requests\Request;
use App\Industry;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class UpdateIndustryCommand
 * @package App\Domain\Industry\Commands
 */
class UpdateIndustryCommand
{

    use DispatchesJobs;

    private $request;
    private $id;

    /**
     * UpdateIndustryCommand constructor.
     * @param int $id
     * @param Request $request
     */
    public function __construct(int $id, Request $request)
    {
        $this->id = $id;
        $this->request = $request;
    }

    /**
     * @return bool
     */
    public function handle(): bool
    {
        $industry = $this->dispatch(new GetIndustryByIdQuery($this->id));

        return $industry->update($this->request->all());
    }

}

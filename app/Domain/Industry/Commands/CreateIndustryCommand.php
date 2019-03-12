<?php

namespace App\Domain\Industry\Commands;

use App\Domain\Image\Commands\UploadImageCommand;
use App\Http\Requests\Request;
use App\Industry;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class CreateIndustryCommand
 * @package App\Domain\Industry\Commands
 */
class CreateIndustryCommand
{
    use DispatchesJobs;

    private $request;

    /**
     * CreateIndustryCommand constructor.
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @return bool
     */
    public function handle(): bool
    {
        $industry = new Industry();
        $industry->fill($this->request->all());
        return $industry->save();
    }

}

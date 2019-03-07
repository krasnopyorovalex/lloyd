<?php

namespace App\Http\Controllers;

use App\Domain\Guestbook\Commands\CreateGuestbookCommand;
use App\Http\Requests\Forms\GuestbookCheckRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class FormHandlerController
 * @package App\Http\Controllers
 */
class FormHandlerController extends Controller
{
    use DispatchesJobs;

    private $to = 'dom2008@mail.ru';

    /**
     * @param GuestbookCheckRequest $request
     * @return array
     */
    public function guestbook(GuestbookCheckRequest $request): array
    {
        $this->dispatch(new CreateGuestbookCommand($request));

        return [
            'message' => 'Спасибо за Ваш отзыв!',
            'status' => 200
        ];
    }
}

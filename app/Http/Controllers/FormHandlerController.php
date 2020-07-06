<?php

namespace App\Http\Controllers;

use App\Domain\Guestbook\Commands\CreateGuestbookCommand;
use App\Http\Requests\Forms\GuestbookCheckRequest;
use App\Http\Requests\Forms\OrderRequest;
use App\Mail\OrderSent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Bus\DispatchesJobs;

/**
 * Class FormHandlerController
 * @package App\Http\Controllers
 */
class FormHandlerController extends Controller
{
    use DispatchesJobs;

    private $to = ['djShtaket88@mail.ru', 'info@krasber.ru'];

    /**
     * @param OrderRequest $request
     * @return array
     */
    public function order(OrderRequest $request): array
    {
        Mail::to($this->to)->send(new OrderSent($request->validated()));

        return [
            'message' => 'Форма отправлена успешно. Наш менеджер свяжется с Вами в ближайшее время',
            'status' => 200
        ];
    }

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

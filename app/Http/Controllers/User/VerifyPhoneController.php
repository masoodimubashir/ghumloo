<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Service\WhatsappService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifyPhoneController extends Controller
{
    public function verifyPhone(WhatsappService  $whatsappService)
    {

        $user = Auth::user();

        dd('re test this');

        $res = $whatsappService->setData($user->mobile)

    }
}

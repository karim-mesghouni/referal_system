<?php

namespace App\Http\Controllers\Api\Client;

use App\Actions\Client\CheckReferalCodeAction;
use App\Actions\Client\GenerateReferalCodeAction;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Client\CheckReferralCodeRequest;


class ClientController extends Controller
{



    public function generateReferralCode(GenerateReferalCodeAction $action,)
    {
        return $action();
    }
    public function checkReferralCode(CheckReferralCodeRequest $request, CheckReferalCodeAction $action,)
    {
        return $action($request);
    }

}

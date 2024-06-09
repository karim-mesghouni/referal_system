<?php

namespace App\Actions\Client;

use App\Http\Requests\Api\Client\CheckReferralCodeRequest;
use Illuminate\Http\JsonResponse;

readonly class CheckReferalCodeAction
{



    public function __invoke(CheckReferralCodeRequest $request, )
    {

        return new JsonResponse(
            [
                "message" => "Referral code is valid"
            ]
        );
    }

}

<?php

namespace App\Actions\Client;

use App\Service\ReferralCodeGenerator;
use Illuminate\Http\JsonResponse;
use function Pest\Laravel\json;

readonly class GenerateReferalCodeAction
{

    public function __construct(private  ReferralCodeGenerator $generator)
    {
    }

    public function __invoke()
    {

        $code = $this->generator->generate();
        return new JsonResponse(["code" => $code]);
    }

}

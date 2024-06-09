<?php

namespace App\Actions\Auth;

use App\Actions\Other\ProcessReferralAction;
use App\Enums\Actions;
use App\Http\Resources\Api\Auth\ClientResource;
use App\Jobs\ClaimPointsJob;
use App\Models\Action;
use App\Models\Point;
use App\Repository\Client\ClientRepository;
use App\Service\ReferralCodeGenerator;
use phpDocumentor\Reflection\Types\This;

readonly class RegisterAction
{
    public function __construct(private ClientRepository $clientRepository,private ProcessReferralAction $processReferralAction)
    {
    }
    public function __invoke($request)
    {
        $client = $this->clientRepository->create($request->validated());
        $token = $client->createToken(env('SECRETE'))->plainTextToken;
        $this->processReferralAction->__invoke($client->id);
        return ["data" => new ClientResource($client), "token" => $token];
    }
}

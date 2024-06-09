<?php

namespace App\Actions\Auth;

use App\Actions\Other\ProcessReferralAction;
use App\Http\Resources\Api\Auth\ClientResource;

use App\Repository\Client\ClientRepository;


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

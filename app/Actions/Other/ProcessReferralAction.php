<?php

namespace App\Actions\Other;

use App\Enums\Actions;
use App\Jobs\ClaimPointsJob;
use App\Models\Action;
use App\Service\ReferralCodeGenerator;
use Illuminate\Support\Facades\Request;

class ProcessReferralAction
{

   public function __construct(private  ReferralCodeGenerator $generator)
   {
   }

    public function __invoke($clientId)
    {
        if(Request::get("referral_code")){
            $action = Action::firstWhere(["action"=> Actions::Referral->value]);
            $referrerId = $this->generator->getClientIdByReferralCodeAndIncrementCount(Request::get("referral_code"));
            ClaimPointsJob::dispatch($clientId,$action);
            ClaimPointsJob::dispatch($referrerId,$action);
        }
    }
}

<?php

namespace App\Actions\Point;

use App\Models\Client;
use App\Models\Point;
use App\Repository\Point\PointRepository;

readonly class ClaimPointsAction
{


    public function __construct(private PointRepository $repository)
    {
    }

    public function __invoke($clientId,$action)
    {

        $this->repository->create([
            "client_id" => $clientId,
            "points_earned" => $action->points_awarded,
            "action_id" => $action->id,
        ]);
        Client::where("id",$clientId)->increment("RS_points",$action->points_awarded);


    }
}

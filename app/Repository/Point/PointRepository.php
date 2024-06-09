<?php

namespace App\Repository\Point;

use App\Models\Point;

class PointRepository
{


    function create($array)
    {
        return Point::create($array);
    }

}

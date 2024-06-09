<?php

namespace App\Repository\Client;

use App\Models\Client;
use Illuminate\Support\Facades\Hash;

class ClientRepository
{

    function firstWhere($array)
    {
        return Client::firstWhere($array);
    }

    public function all()
    {
        return Client::all();
    }


    public function find($id)
    {
        return Client::findOrfail($id);
    }


    function create($array)
    {
        data_set($array, 'password', Hash::make($array['password']));
        $client = Client::create($array);
        return $client;
    }

}

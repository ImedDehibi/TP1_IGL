<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
class ClientsController extends Controller
{
    public function list(){
        $clients = Client::all();
    return view('client.index',[
        'data'=>$clients
    ]);
    }
    public function store(){
        request()->validate([
            'pseudo'=> 'required'
        ]
        );
       $pseudo = request('pseudo');
       $client = new Client();
       $client->name=$pseudo;
       $client->save();
       return back();
    }
}

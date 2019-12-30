<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Presences;
class NameController extends Controller
{
     public function store(){
         request()->validate([
             'nom'=>['required'],
              'pre'=>['required'],
              'num'=>['required'],
              'date'=>['required'],
              'ent'=>['required'],
              'sor'=>['required']
          
         ]);

        if (request('ent')<=request('sor')){
          Presences::create([
            'Nom' => request('nom'),
            'Prenom' =>request('pre'),
            'Bureau' =>request('num'),
            'Date' =>request('date'),
            'Debut' =>request('ent'),
            'Fin' =>request('sor'),
            
          ]);
        }
        else{
            print("erreur time");
        }
        return "parfait";
    }

         
   
    public function index(){
      $yesterday = date("Y-m-d", strtotime( '-1 days' ) );
      $Presences= Presences::where('Date','>=',$yesterday)->orderBy('Date')->get();
  
      return view('Presences',[
         'Presences'=>$Presences,
       ]);
   }
}

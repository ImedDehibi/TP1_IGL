<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use App\Presences;

class PresencesController extends Controller
{
    public function index(){
        //$presences= Presences::all();
        //$presences= Presences::orderBy('Date')->get();
        //$presences= Presences::where('Date','>=',now())->orderBy('Date')->get();
        $yesterday = date("Y-m-d", strtotime( '-1 days' ) );
        $presences= Presences::where('Date','>=',$yesterday)->orderBy('Date')->get();
        return view('Presences') -> with('presences', $presences);
    }

    public function store(Request $request){
        //dd($request->all()); 
        $presence = new Presences;
        if ($request->debut<=$request->fin){
        $presence->Nom =$request->nom;
        $presence->Prenom =$request->prenom;
        $presence->Bureau =$request->bureau;
        $presence->Date =$request->date;
        $presence->Debut =$request->debut;
        $presence->Fin =$request->fin;
        $presence -> save();
        Session::flash('succes','Presence ajoutee!');
        }
        else{
            Session::flash('error','Veuillez verifiez les horraires!');
        }
        return redirect()->back();
    }

    public function effacer(){
        //dd($request->all()); 
        $presence = Presences :: find(1);
        $presence->delete();
        //return redirect()->back();
    }
}

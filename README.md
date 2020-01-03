
# Projet IGL 

l'application web permet de simplifier les taches des administrateurs, améliorer
et augmenter la communication entre les enseignants et les étudiants et créer un réseau 
universitaire pour le partage des informations et des connaissances.

 > Bienvenue sur l'app web 

 ## La page d'accueil
  
  Voici ci-dessous la page principale de l'application web

![](images/Captured’écran98.png)

 Voici aussi  le LOGIN

 ![](images/Captured’écran99.png)

## Fonctionnalités
 
 Dans cette partie on va voir les focntionnalités implémentées

### 1. Remplir et consulter la fiche de présence

#### 1.1. Remplir la fiche 

Voici les étapes de remplissage de la fiche de présence( de renseignement)

![](images/Captured’écran101.png) 
![](images/Captured’écran102.png)
![](images/Captured’écran103.png)

#### 1.2. Consulter la fiche

La fiche consultée est de la forme : 

![](images/Captured’écran100.png) 

#### 1.3. Code source

 Voici le code source qui permet de générer la première fonctionnalité 

``` php 
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
```

### 2. Ajouter, Supprimer et Modifier enseignant

Dans cette partie on va voir comment ajouter, supprimer ou modifier un enseignant, voici les étapes

#### 2.1. Ajouter Enseignant

Les images ci-desoous montrent l'ajout d'un enseignant

![](images/Captured’écran109.png)
![](images/Captured’écran110.png)
![](images/Captured’écran111.png)

#### 2.2. Supprimer Enseignant

Voici la suppression comment elle est faite !

![](images/Captured’écran105.png)
![](images/Captured’écran106.png)

#### 2.3. Modifier Enseignant

La modification est assez simple , voici ci-dessous !

![](images/Captured’écran107.png)
![](images/Captured’écran108.png)

#### 2.4. Code source 

Et finalement ..voici le code qui permet de générer cette deuxième fonctionnalité

```php
<?php

namespace App\Http\Controllers;
use App\Enseignant;
use Illuminate\Http\Request;
use App\Helpers\APIHelper;

use App\Http\Requests\TeacherRequest;
class enseignantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enseignant=Enseignant::orderBy('created_at','desc')->paginate(3);
        

        if ($enseignant->isNotEmpty()){
            $response=APIHelper::createAPIResponse(false,"200 OK","",$enseignant);
            return response()->json($response,200);
        }else{
            return response()->json(["status"=>"error","message"=>"No teacher found."]);
        }
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeacherRequest $request)
    {
        $Enseignant=new Enseignant();
        $Enseignant->Nom=$request->Nom;
        $Enseignant->Prenom=$request->Prenom;
        $Enseignant->NomUtilisateur=$request->NomUtilisateur;
        $Enseignant->MotDePasse=$request->MotDePasse;
        $Enseignant->ConfirmMotDePasse=$request->ConfirmMotDePasse;
        $Enseignant->Module=$request->Module;
        $enseignant_save=$Enseignant->save();
        if($enseignant_save){
            $responce=APIHelper::createAPIResponse(false,"201","{{$Enseignant->Nom }} teacher with {{$Enseignant->NomUtilisateur}} added suceesfully.",null);
            return response()->json($responce,201);
        }else{
            $responce=APIHelper::createAPIResponse(true,"401"," {{$Enseignant->Nom }} teacher creation failed.",null);
            return response()->json($responce,401);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $enseignant=Enseignant::find($id);
        if($enseignant){
            $responce=APIHelper::createAPIResponse(false,"200 ok","",$enseignant);
        return response()->json($responce,200);
        }else{
            return response()->json(["status"=>"error","message"=>" Teacher with id {{$id}} not found.  "]);

        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TeacherRequest $request, $id)
    {
        $Enseignant=Enseignant::find($id);
        if($Enseignant){
            $Enseignant->Nom=$request->Nom;
            $Enseignant->Prenom=$request->Prenom;
            $Enseignant->NomUtilisateur=$request->NomUtilisateur;
            $Enseignant->MotDePasse=$request->MotDePasse;
            $Enseignant->ConfirmMotDePasse=$request->ConfirmMotDePasse;
            $Enseignant->Module=$request->Module;
            $enseignant_save=$Enseignant->save();
            if($enseignant_save){
                $responce=APIHelper::createAPIResponse(false,"201","teacher updated suceesfully.",null);
                return response()->json($responce,201);
            }else{
                $responce=APIHelper::createAPIResponse(true,"401","teacher update failed.",null);
                return response()->json($responce,401);
            }
        }else{
            return response()->json(["status"=>"error","message"=>" Teacher with id {{$id}} not found. "]);

        }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Enseignant=Enseignant::find($id);
        if($Enseignant){
            $enseignant_save=$Enseignant->delete();
            if($enseignant_save){
                $responce=APIHelper::createAPIResponse(false,"200","teacher deleted suceesfully",null);
                return response()->json($responce,200);
            }else{
                $responce=APIHelper::createAPIResponse(true,"401","teacher delete failed",null);
                return response()->json($responce,401);
            }
        }else{
            return response()->json(["status"=>"error","message"=>" Teacher with id {{$id}} not found . "]);

        }
       
    }
}
```



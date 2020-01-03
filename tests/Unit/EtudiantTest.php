<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EtudiantTest extends TestCase
{
     /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_de_laffichage_des_etudiantsSuccessfully()
    {
        $response=$this->json('GET','/api/EspaceAdministrateur/Etudiant');
        $response->assertStatus(200);
    }
   
    public function test_de_l_ajout_des_etudiantsSuccessfully()
    {
        $register = [
            'Nom' => 'UserTest',
            'Prenom' => 'UserTest',
            'NomUtilisateur' => 'user2@test.com',
            'MotDePasse' => 'testpass',
            'ConfirmMotDePasse' => 'testpass',
            'NiveauEtude' => 'UserTest'
        ];
        $response=$this->json('POST','/api/EspaceAdministrateur/Etudiant',$register);

        $response->assertStatus(201);


    }
    public function test_de_la_modification_des_etudiantsSuccessfully()
    {
        $register = [
            'Nom' => 'UserTest',
            'Prenom' => 'UserTest',
            'NomUtilisateur' => 'user2@test.com',
            'MotDePasse' => 'testpass',
            'ConfirmMotDePasse' => 'j',
            'NiveauEtude' => 'UserTest'
        ];
        $response=$this->json('PUT','/api/EspaceAdministrateur/Etudiant/5',$register);

        $response->assertStatus(200);

    }
    public function test_de_la_modification_des_etudiantsFailed()
    {
        $register = [
            'Name' => 'UserTest',
            'Prenom' => 'UserTest',
            'NomUtilisateur' => 'user2@test.com',
            'MotDePasse' => 'testpass',
            'ConfirmMotDePasse' => 'testpass',
            'Module' => 'UserTest'
        ];
        $response=$this->json('PUT','/api/EspaceAdministrateur/Etudiant/8',$register);

        $response->assertStatus(422);

    }
    public function test_de_l_ajout_des_etudiantsFailed()
    {
        $registered = [
            'Name' => 'UserTest',
            'Prenom' => 'UserTest',
            'NomUtilisateur' => 'user2@test.com',
            'MotDePasse' => 'testpass',
            'ConfirmMotDePasse' => 'testpass',
            'Module' => 'UserTest'
        ];

        $response=$this->json('POST','/api/EspaceAdministrateur/Etudiant',$registered);

        $response->assertStatus(422);

    }
    public function test_de_la_suppression_des_etudiantsSuccessfully()
    {
      
        
        $response=$this->json('delete','/api/EspaceAdministrateur/Etudiant/5');

        $response->assertStatus(200);

    }
    public function test_de_la_suppression_des_etudiantsFailed()
    {
      
        
        $response=$this->json('delete','/api/EspaceAdministrateur/Etudiant/7');

        $response->assertStatus(500);

    }

}

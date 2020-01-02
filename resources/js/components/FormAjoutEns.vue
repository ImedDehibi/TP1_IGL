<template>
<div>
<blockquote class="blockquote text-center">
 <footer class="blockquote-footer mb-3">Saisissez les informations de <cite title="Source Title">l'enseignant </cite></footer>
</blockquote>
  <mdb-container class="mt-5">
      
    <form class="needs-validation" novalidate @submit.prevent="AddEnseignant" @submit="checkForm">
      <div class="form-row">
        <div class="col-md-6 mb-3">
         
          <input type="text" class="form-control" id="validationTooltip01" placeholder="Nom" required v-model="enseignant.Nom"> 
          <div class="invalid-tooltip">
            Nom invalide.
          </div>
          <div class="valid-tooltip">
            Nom valide.
          </div>
        </div>
        <div class="col-md-6 mb-3">
        
          <input type="text" class="form-control" id="validationTooltip02" placeholder="Prénom" value="" required v-model="enseignant.Prenom">
           <div class="invalid-tooltip">
            Prénom invalide.
          </div>
          <div class="valid-tooltip">
            Prénom valide.
          </div>
        </div>

      </div>
      <div class="form-row">
                  <div class="col-md-8 mb-3">
          
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
            </div>
            <input type="email" class="form-control" id="validationTooltipUsername" placeholder="Email" aria-describedby="validationTooltipUsernamePrepend" required v-model="enseignant.NomUtilisateur">
                       <div class="invalid-tooltip">
             Email invalide.
          </div>
          <div class="valid-tooltip">
            Email valide.
          </div>
          </div>
        </div>
      </div>
      <div class="form-row">
        <div class="col-md-6 mb-3">
         
          <input type="password" class="form-control" id="pass1" placeholder="Mot de passe" required v-model="enseignant.MotDePasse">
                     <div class="invalid-tooltip">
           Mot de passe invalide.
          </div>
          <div class="valid-tooltip">
            Mot de passe valide.
          </div>
        </div>
        <div class="col-md-6 mb-3">
         
          <input type="password" class="form-control" id="pass2" placeholder="Confirmez le mot de passe" required v-model="enseignant.ConfirmMotDePasse">
               <div class="invalid-tooltip" >
           Confirmation invalide.
          </div>
          <div class="valid-tooltip">
            Confirmation valide.
          </div>
        </div>
        
      </div>
      <div class="form-row">
          <div class="col-md-8 mb-3">
         
          <input type="text" class="form-control" id="validationTooltip05" placeholder="Module" required v-model="enseignant.Module">
                     <div class="invalid-tooltip">
            Module invalide.
          </div>
          <div class="valid-tooltip">
            Module valide.
          </div>
        </div>
      </div>
      
    <mdb-modal-footer>
            
            <mdb-btn type="submit" class="">Envoyer</mdb-btn>
            
        </mdb-modal-footer>
      
  
    </form>
  </mdb-container>
</div>
</template>
<script>
import { mdbContainer, mdbBtn,mdbModalFooter } from "mdbvue";
export default {
  name: "InputsPage",

  components: {
    mdbContainer,
    mdbBtn,
    mdbModalFooter
  },
  methods: {

  },
  data(){
      return{
      enseignants:[],
      enseignant:{
          id:'',
          Nom:'',
          Prenom:'',
          NomUtilisateur:'',
          MotDePasse:'',
          ConfirmMotDePasse:'',
          Module:''
      },
      ens_id:'',
      pagination:{
        
      },
      edit:false
      
  }

  },
  methods:{
      AddEnseignant(){
        
                        var pass1 = document.getElementById("pass1").value;
                    var pass2 = document.getElementById("pass2").value;
                    var ok = true;
                 
                event.preventDefault();
                              event.target.classList.add('was-validated');  
        
                    if (pass1 != pass2 )  {
                        
                       
                       document.getElementById("pass2").style.borderColor = "#E34234";
                        document.getElementById("pass2").style.backgroundColor = "#E34234";
                        alert('veuillez reconfirmer le mot de passe')
                         this.edit=true
                        ok = false;
                    }
                    else {
                                           
                 fetch('api/EspaceAdministrateur/Enseignant',{
                     method:'POST',
                     headers:{
                         'content-type':'application/json'
                     },
                     body:JSON.stringify(this.enseignant),
                     
                 }).then(res=>res.json()).then(data=>{
                      alert('Rajouté avec succès');
                     window.location.reload();
                     
                     
                    
                 })
                 .catch(err=>console.log(err));
                  }
                   
         
      }

  }
}
</script>
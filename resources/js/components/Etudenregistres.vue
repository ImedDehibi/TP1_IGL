<template>
  <div>
    
      <blockquote class="blockquote text-center">
  <p class="mb-0">La liste des étudiants ajoutés: </p>
  <footer class="blockquote-footer mb-3">Depuis les dernières mises à jour<cite title="Source Title"> de la base de données</cite></footer>
</blockquote>
<mdb-container class="mt-5" v-if="edit" >
    <form class="needs-validation" novalidate @submit.prevent="editEtudiant(etudiant.id)" @submit="checkForm">
      <div class="form-row">
        <div class="col-md-2 mb-3">
         
          <input type="text" class="form-control" id="validationTooltip01" placeholder="Nom" required v-model="etudiant.Nom" > 
          <div class="invalid-tooltip">
            Nom invalide.
          </div>
          <div class="valid-tooltip">
            Nom valide.
          </div>
        </div>
        <div class="col-md-2 mb-3">
        
          <input type="text" class="form-control" id="validationTooltip02" placeholder="Prénom" value="" required v-model="etudiant.Prenom">
           <div class="invalid-tooltip">
            Prénom invalide.
          </div>
          <div class="valid-tooltip">
            Prénom valide.
          </div>
        </div>

      
     
                  <div class="col-md-2 mb-3">
          
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
            </div>
            <input type="email" class="form-control" id="validationTooltipUsername" placeholder="Email" aria-describedby="validationTooltipUsernamePrepend" required v-model="etudiant.NomUtilisateur">
                       <div class="invalid-tooltip">
             Email invalide.
          </div>
          <div class="valid-tooltip">
            Email valide.
          </div>
          </div>
        </div>
     

        <div class="col-md-1 mb-3">
         
          <input type="password" class="form-control" id="pass1" placeholder="Mot de passe" required v-model="etudiant.MotDePasse">
                     <div class="invalid-tooltip">
           Mot de passe invalide.
          </div>
          <div class="valid-tooltip">
            Mot de passe valide.
          </div>
        </div>
        <div class="col-md-1 mb-3">
         
          <input type="password" class="form-control" id="pass2" placeholder="Confirmez le mot de passe" required v-model="etudiant.ConfirmMotDePasse">
               <div class="invalid-tooltip" >
           Confirmation invalide.
          </div>
          <div class="valid-tooltip">
            Confirmation valide.
          </div>
        </div>
        
  
    
          <div class="col-md-2 mb-3">
         
          <input type="text" class="form-control" id="validationTooltip05" placeholder="Module" required v-model="etudiant.NiveauEtude">
                     <div class="invalid-tooltip">
            Module invalide.
          </div>
          <div class="valid-tooltip">
            Module valide.
          </div>
        </div>
  
     
  <div class="col-md-2 mb-3">
            
            <mdb-btn type="submit" class="btn btn-warning btn-md m-0" color="light-blue">Modifier</mdb-btn>
            
 </div>
    </div>
    </form>
  </mdb-container>
     
    <mdb-tbl btn responsive striped> 
      <mdb-tbl-head color="primary-color" textWhite>
         
        
          <th>Nom</th>
          <th>Prénom</th>
          <th>Email</th>
          <th>Mot de passe</th>
          <th>Confirmation du Mot de passe</th>
          <th>Niveau d'étude</th>
          <th></th>
          <th></th>
          
    
      </mdb-tbl-head>
      <mdb-tbl-body>
        
<tr v-for="etudiant in etudiants" v-bind:key="etudiant.id">


         <td>{{etudiant.Nom}}</td>
          <td>{{etudiant.Prenom}}</td><td>{{etudiant.NomUtilisateur}}</td><td>{{etudiant.MotDePasse}}</td><td>{{etudiant.ConfirmMotDePasse}}</td><td>{{etudiant.NiveauEtude}}</td>
          <td>
              <button type="button" class="btn btn-warning btn-md m-0"   @click="editer(etudiant)" >Modifier</button>
          </td>
        <td>
              <button type="button" class="btn btn-danger btn-md m-0"   @click="deleteEtudiant(etudiant.id)" >Supprimer</button>
          </td>
        
        </tr>
     
       <tr>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
         <td></td>
        
         <td></td>
         <td>
                    <mdb-pagination>
    <mdb-page-item prev  v-if="pagination.prev_page_url">
      <a href="#"  @click="fetchEtudiants(pagination.prev_page_url)"><mdb-page-nav prev ></mdb-page-nav></a>

    </mdb-page-item>
<mdb-page-item active>
  <a>
  page {{pagination.current_page}} sur {{pagination.last_page}} 
  </a>
  </mdb-page-item>
    <mdb-page-item  v-if=" pagination.next_page_url">
      <a  href="#"  @click="fetchEtudiants(pagination.next_page_url)"><mdb-page-nav next ></mdb-page-nav></a>

    </mdb-page-item>
  
  </mdb-pagination>
         </td>
         <td>
  <AjoutEtud ></AjoutEtud>
         </td>
         </tr>
        
      </mdb-tbl-body>
      
    </mdb-tbl>

  </div>
</template>
<script>
  import { mdbTbl, mdbTblHead, mdbTblBody, mdbPagination,mdbPageItem,mdbPageNav,mdbModal, mdbModalHeader, mdbModalTitle, mdbModalBody, mdbModalFooter, mdbContainer,mdbBtn } from 'mdbvue';
  import AjoutEtud from './AjoutEtud';
  
  export default {
    name: 'TablePage',
    components: {
            mdbModal,
      mdbModalHeader,
      mdbModalTitle,
      mdbModalBody,
      mdbModalFooter,
      mdbTbl,
      mdbTblHead,
      mdbTblBody,
       mdbPagination,
      mdbPageItem,
      mdbPageNav,
       mdbContainer,
       mdbBtn,
      AjoutEtud
    },
     data(){
      return{
        
        modal:false,
           etudiants:[],
      etudiant:{
          id:'',
          Nom:'',
          Prenom:'',
          NomUtilisateur:'',
          MotDePasse:'',
          ConfirmMotDePasse:'',
          NiveauEtude:''
      },
       
      modals:[],
      model:{
        id:'',
        bool:false,
      },
      ens_id:'',
      pagination:{
        
      },
      edit:false
    
  }
  },
  created(){
      
      this.fetchEtudiants();
  },
 
  methods:{
      fetchEtudiants(page_url){
        let vm = this;
        page_url=page_url||'api/EspaceAdministrateur/Etudiant'
          fetch(page_url).then(res=>res.json()).then(res=>{
               
                  this.etudiants=res.data.data;
                  vm.makePagination(res.data);
                  
          }).catch(err=>console.log(err));
      },
      makePagination(meta){
        let pagination={
          current_page:meta.current_page,
          last_page:meta.last_page,
          next_page_url:meta.next_page_url,
          prev_page_url:meta.prev_page_url

        }
        this.pagination=pagination;
      },
      deleteEtudiant(id){
        if(confirm('Etes vous sur de vouloir supprimer cet utilisateur?')){
          fetch('api/EspaceAdministrateur/Etudiant/'+id,{
            method:'delete'
         
          },
       
          
          ).then(res=>res.json()).then(data=>{
            alert('Etudiant supprimé');
          window.location.reload();
           

          }).catch(err=>console.log(err))
        }
      },
      editer(etudiant){
        this.etudiant.id=etudiant.id
          this.etudiant.Nom=etudiant.Nom
          this.etudiant.Prenom=etudiant.Prenom
          this.etudiant.NomUtilisateur=etudiant.NomUtilisateur
          this.etudiant.MotDePasse=etudiant.MotDePasse
          this.etudiant.ConfirmMotDePasse=etudiant.ConfirmMotDePasse
          this.etudiant.NiveauEtude=etudiant.NiveauEtude
          this.edit=true
      },
      editEtudiant(id){
                
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
           fetch('api/EspaceAdministrateur/Etudiant/'+id,{
                     method:'PUT',
                     headers:{
                         'content-type':'application/json',
                         'Accept':'application/json'
                     },
                     body:JSON.stringify(this.etudiant),
                     
                     
                 }).then(res=>res.json()).then(data=>{
                     
                     alert('Modifié avec succès');
                     window.location.reload();
                     
                     

                 })
                 .catch(err=>console.log(err));
         
      }
      }
  }
  }
</script>
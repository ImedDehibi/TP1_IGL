<template>
  <mdb-container>
    <mdb-row>
      <mdb-col size="12" class="text-center mb-5">
        
        <mdb-btn @click.native="showModal = true" color="info">Remplire fiche de renseignement</mdb-btn>
        <mdb-modal :show="showModal" @close="showModal = false" cascade class="text-left">
          <mdb-modal-header class="primary-color white-text">
            <h4 class="title">Fiche de renseignement</h4>
          </mdb-modal-header>
              <!--   <form action="/create/Presence" method ="post" @submit="SubmitForm" >-->
              <form  @submit.prevent="SubmitForm" >
          <mdb-modal-body class="grey-text">
                       <mdb-input size="sm" label="Nom" group type="text" validate error="wrong" success="right" required v-model="nom"/>
                       <mdb-input size="sm" label="Prénom"  group type="text" validate error="wrong" success="right" required v-model="pre"/>
                        <mdb-input size="sm" label="Numéro du bureau"  group type="number" validate error="wrong" success="right" required v-model="num" min="1"/>
                        <!--  <p>Date 
                              <datepicker :bootstrap-styling="true" required v-model="date" type="date">
                        <div slot="beforeCalendarHeader" class="calender-header" language="fr">
                          Choisissez la date
                        </div>  
                      </datepicker></p>!-->
                     
                       <p>Date:</p>
                       <input type="date" required v-model="date" class="form-control" :class="{'form-control is-invalid':show2}" >
                       <div :class="{'invalid-feedback':show2 }" v-if="show2">
                           Remplissez avec une date postérieure !
                        </div>   
                       <hr>
                      <div>
                      <p>Entrée à:</p> <input type="time" id="appt" name="debut" min="08:00" max="18:00" required v-model="ent" class="form-control" :class="{'form-control is-invalid':show}">
                      <div :class="{'invalid-feedback':show}" v-if="show" >
                           Heure début postérieure à heure fin !
                        </div>   
                      </div>  
                      <hr>
                      <div>
                       <p>Sortie à: </p>
                       <input type="time" id="appt" name="fin" min="08:00" max="18:00" required v-model="sor" class="form-control" :class="{'form-control is-invalid':show}">
                       <div :class="{'invalid-feedback':show }" v-if="show" >
                           Heure fin antérieure à heure début !
                        </div>          
                      </div>
                      </mdb-modal-body>
                      <mdb-modal-footer>
                        <mdb-btn color="secondary" @click.native="showModal = false">Fermer</mdb-btn>
                        <mdb-btn color="primary"  type="submit">Envoyer</mdb-btn>
           
          </mdb-modal-footer>
         </form>
        </mdb-modal>
      </mdb-col>
    </mdb-row>
  </mdb-container>
</template>
<script>
import { METHODS } from 'http';
import Datepicker from 'vuejs-datepicker';
  import { mdbContainer, mdbRow, mdbCol, mdbInput, mdbTextarea, mdbBtn, mdbIcon, mdbModal, mdbModalHeader, mdbModalBody, mdbModalFooter, mdbAlert } from 'mdbvue';
  export default {
    props:['dataPresences'],
    name: 'FormsPage',
    components: {
      mdbContainer,
      mdbRow,
      mdbCol,
      mdbInput,
      mdbTextarea,
      mdbBtn,
      mdbIcon,
      mdbModal,
      mdbModalHeader,
      mdbModalBody,
      mdbModalFooter,
      Datepicker,
       mdbAlert
    },
    data() {
      return {
        showModal: false,
       Presences:this.dataPresences,
        nom:'',
        pre:'',
        num:'',
        date:'',
        ent:'',
        sor:'',
        show:false,
        show2:false
      };
    },
    methods:{
      SubmitForm(){
        axios.post('Renseigement',{
          nom:this.nom,
          pre:this.pre,
          num:this.num,
          date:this.date,
          ent:this.ent,
          sor:this.sor,
        

        }).then((result)=>{
           var ladate=new Date();

           if (ladate.getFullYear().toString()>this.date.substr(0,4)) this.show2=true;
           else{
             if (ladate.getFullYear().toString() == this.date.substr(0,4)) {
                 if (ladate.getMonth().toString()>this.date.substr(6,2))this.show2=true;
                 else{
                    if (ladate.getMonth().toString()== this.date.substr(6,2)) this.show2=true;
                    else{
                       if (ladate.getDate().toString()>this.date.substr(8,2)) this.show2=true;
                       else{
                        if(this.ent>this.sor) {
                        this.show2=false;
                        this.show=true;
                          
                        }
                                else{

                                    this.showModal=false;
                                this.nom='';
                                this.pre='';
                                this.num='';
                                this.date='';
                                this.ent='';
                                this.sor='';
                                this.show=false;
                                this.show2=false;
                                }
           
           
                       }
                    }
                 }
                 
             }
             else{
                   if(this.ent>this.sor) 
                   {
                      this.show2=false;
                     this.show=true;}
                                else{

                                    this.showModal=false;
                                this.nom='';
                                this.pre='';
                                this.num='';
                                this.date='';
                                this.ent='';
                                this.sor='';
                                this.show=false;
                                this.show2=false;
                                }
                 }
           }
          
           
           
        });
        
      }
    }
  }
  
</script>
<style scoped>
p{
  font-size:20px;
}
.border-red{
  border-color: red;
}
</style>
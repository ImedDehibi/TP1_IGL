<template>
    <div style="padding-top:200px;padding-left:300px">
  
    <mdb-btn color="deep-purple" @click.native="contact = true">Ajouter un utilisateur</mdb-btn>
    <mdb-modal :show="contact" @close="contact = false">
      <mdb-modal-header class="text-center">
        <mdb-modal-title tag="h4" bold class="w-100">Ajout d'un utilisateur</mdb-modal-title>
      </mdb-modal-header>
      <mdb-modal-body class="mx-3 grey-text">
        <mdb-input label="Nom"  class="mb-5"/>
        <mdb-input label="Prénom"  class="mb-5"/>
        <mdb-input label="email" type="email" class="mb-5"/>
        <mdb-input label="Groupe" class="mb-5"/>
        <mdb-input label="Type"  class="mb-5"/>
        <p>Date de naissance</p>
        <datepicker :bootstrap-styling="true">
  <div slot="beforeCalendarHeader" class="calender-header" language="fr">
    Choose a Date
  </div>
</datepicker>
      </mdb-modal-body>
      <mdb-modal-footer center>
        <mdb-btn @click.native="contact1 = false" color="unique">Ajouter</mdb-btn>
      </mdb-modal-footer>
    </mdb-modal>
            <mdb-btn color="deep-purple" @click.native="contact1 = true">Modifier un utilisateur</mdb-btn>
    <mdb-modal :show="contact1" @close="contact1 = false">
      <mdb-modal-header class="text-center">
        <mdb-modal-title tag="h4" bold class="w-100">Modification d'un utilisateur</mdb-modal-title>
      </mdb-modal-header>
      <mdb-modal-body class="mx-3 grey-text">
        <mdb-input label="Nom"  class="mb-5"/>
        <mdb-input label="Prénom"  class="mb-5"/>
        <mdb-input label="email" type="email" class="mb-5"/>
        <mdb-input label="Groupe" class="mb-5"/>
        <mdb-input label="Type"  class="mb-5"/>
        <p>Date de naissance</p>
        <datepicker :bootstrap-styling="true">
  <div slot="beforeCalendarHeader" class="calender-header" language="fr">
    Choose a Date
  </div>
        </datepicker>
      </mdb-modal-body>
      <mdb-modal-footer center>
        <mdb-btn @click.native="contact1 = false" color="unique">Modifier</mdb-btn>
      </mdb-modal-footer>
    </mdb-modal>
                <mdb-btn color="deep-purple" @click.native="contact2 = true">Supprimer un utilisateur</mdb-btn>
              
    
    </div>
</template>
 
<script>
  import { mdbContainer, mdbTextarea, mdbIcon, mdbBtn, mdbModal, mdbModalHeader, mdbModalTitle, mdbModalBody, mdbInput, mdbModalFooter,mdbTbl, mdbTblHead, mdbTblBody } from 'mdbvue';
import { METHODS } from 'http';
import Datepicker from 'vuejs-datepicker';
  export default {
    name: 'ModalExamplesPage',
    components: {
      mdbContainer,
      mdbBtn,
      mdbModal,
      mdbModalHeader,
      mdbModalBody,
      mdbInput,
      mdbModalFooter,
      mdbTextarea,
      mdbIcon,
      mdbModalTitle,
      mdbTbl,
       mdbTblHead,
        mdbTblBody,
       Datepicker
    },
    
    data() {
      return {
        contact: false,
        contact1: false,
        contact2:false,
      }
      
    }

    
  }
</script>

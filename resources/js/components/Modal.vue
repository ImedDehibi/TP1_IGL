<template>
  <mdb-container>
    <mdb-row>
      <mdb-col size="12" class="text-center mb-5">
        <mdb-btn @click.native="showModal = true" color="info">Fiche de renseignement</mdb-btn>
        <mdb-modal :show="showModal" @close="showModal = false" cascade class="text-left">
          <mdb-modal-header class="primary-color white-text">
            <h4 class="title"> Renseignez-vous</h4>
          </mdb-modal-header>
          <mdb-modal-body class="grey-text">
            <mdb-input size="sm" label="Nom" group type="text" validate error="wrong" success="right"/>
            <mdb-input size="sm" label="Prénom"  group type="email" validate error="wrong" success="right"/>
            <mdb-input size="sm" label="Champs"  group type="text" validate error="wrong" success="right"/>
            <p>Date </p>
        <datepicker :bootstrap-styling="true">
  <div slot="beforeCalendarHeader" class="calender-header" language="fr">
    Choisissez la date
  </div>
  
</datepicker>
          </mdb-modal-body>
          <mdb-modal-footer>
            <mdb-btn color="secondary" @click.native="showModal = false">Fermer</mdb-btn>
            <mdb-btn color="primary" >Envoyer</mdb-btn>
          </mdb-modal-footer>
        </mdb-modal>
      </mdb-col>
    </mdb-row>
  </mdb-container>
</template>
<script>
import { METHODS } from 'http';
import Datepicker from 'vuejs-datepicker';
  import { mdbContainer, mdbRow, mdbCol, mdbInput, mdbTextarea, mdbBtn, mdbIcon, mdbModal, mdbModalHeader, mdbModalBody, mdbModalFooter } from 'mdbvue';
  export default {
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
      Datepicker
    },
    data() {
      return {
        showModal: false
      };
    }
  }
</script>
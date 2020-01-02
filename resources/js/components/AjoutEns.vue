<template>
  <div>
    <mdb-btn color="success" @click.native="modal = true" size="md">Ajouter</mdb-btn>
    <mdb-modal size="md" :show="modal" @close="modal = false" >
        <mdb-modal-header>
            <mdb-modal-title>Ajout d'un enseignant</mdb-modal-title>
        </mdb-modal-header>
        <mdb-modal-body>
            <li>
            <FormAjoutEns ></FormAjoutEns>
            </li>
        </mdb-modal-body>
       
    </mdb-modal>
  </div>
</template>
<script>
  import { mdbModal, mdbModalHeader, mdbModalTitle, mdbModalBody, mdbModalFooter, mdbBtn } from 'mdbvue';
  import FormAjoutEns from  './FormAjoutEns';
  export default {
    
    components: {
      mdbModal,
      mdbModalHeader,
      mdbModalTitle,
      mdbModalBody,
      mdbModalFooter,
      mdbBtn,
      FormAjoutEns
    },
    data() {
      return {
        modal: false
      };
    }
  };
</script>
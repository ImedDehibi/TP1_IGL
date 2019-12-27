<template>
  <mdb-container>
    <!-- trigger modal button -->
    <mdb-btn color="default" class="mb-3" @click="push = true">Connexion</mdb-btn>
    <!-- cart modal -->
    <mdb-modal :show="push" @close="push = false" class="text-center" info>
      <mdb-modal-header center :close="false">
        <p class="heading">Connectez-vous</p>
      </mdb-modal-header>
      <mdb-modal-body>
        <mdb-icon icon="bell" size="4x" class="animated rotateIn mb-4"/>
        <p>Do you want to receive the push notification about the newest posts?</p>
      </mdb-modal-body>
      <mdb-modal-footer center>
        <mdb-btn outline="primary" @click="push = false" tag="a" href="https://mdbootstrap.com/docs/vue/newsletter/" target="_blank">Yes</mdb-btn>
        <mdb-btn color="primary" @click="push = false">No</mdb-btn>
      </mdb-modal-footer>
    </mdb-modal>
  </mdb-container>
</template>
<script>
  import { mdbContainer, mdbBtn, mdbIcon, mdbModal, mdbModalHeader, mdbModalBody, mdbModalFooter } from 'mdbvue';
  export default {
    name: 'ModalExamplesPage',
    components: {
      mdbContainer,
      mdbBtn,
      mdbIcon,
      mdbModal,
      mdbModalHeader,
      mdbModalBody,
      mdbModalFooter,
    },
    data() {
      return {
        push: false,
      }
    }
  }
</script>
 <template>
 
  <mdb-container>

    <mdb-row>
      <mdb-col size="12" class="text-center mb-5">
        
      <mdb-btn outline="white" @click.native="showModal = true" >Connexion</mdb-btn>
        <mdb-modal :show="showModal" @close="showModal = false" cascade class="text-left">
          <mdb-modal-header class="primary-color white-text">
            <h4 class="title">Connectez-vous</h4>
          </mdb-modal-header>
          <mdb-modal-body class="grey-text">
            <mdb-input size="sm" label="Nom utilisateur"  group type="text" validate error="wrong" success="right"/>
            <mdb-input  size="sm" label="Mot de passe" validate error="wrong" success="right" type="password"/>
                    <div>
                        <!-- Default inline 1-->
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" name="radioInline" class="custom-control-input" id="defaultInline1">
                          <label class="custom-control-label" for="defaultInline1">Etudiant</label>
                        </div>

                        <!-- Default inline 2-->
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" name="radioInline" class="custom-control-input" id="defaultInline2">
                          <label class="custom-control-label" for="defaultInline2">Enseignant</label>
                        </div>

                        <!-- Default inline 3-->
                        <div class="custom-control custom-radio custom-control-inline">
                          <input type="radio" name="radioInline" class="custom-control-input" id="defaultInline3">
                          <label class="custom-control-label" for="defaultInline3">Administrateur</label>
                        </div>
                      </div>
          </mdb-modal-body>
          <mdb-modal-footer>
            <mdb-btn color="secondary" @click.native="showModal = false">Fermer</mdb-btn>
            <mdb-btn color="primary">Connexion</mdb-btn>
          </mdb-modal-footer>
        </mdb-modal>
      </mdb-col>
    </mdb-row>
  </mdb-container>
</template>
<script>
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
      mdbModalFooter
    },
    data() {
      return {
        showModal: false
      };
    }
  }
</script>
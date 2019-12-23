<template>
    <section class="form-gradient">
      <mdb-row>
        <mdb-col md="5">
          <mdb-card>
            <div class="header pt-3 purple-gradient">
              <mdb-row class="d-flex justify-content-center">
                <h3 class="white-text mb-3 pt-3 font-weight-bold">Connexion</h3>
              </mdb-row>
              
            </div>
            <mdb-card-body class="mx-4 mt-4">
              <mdb-input label="Adresse mail" type="text"/>
              <mdb-input label="Mot de passe" type="password" containerClass="mb-0"/>
              <p class="font-small grey-text d-flex justify-content-end">Vous avez oublié votre<a href="#" class="dark-grey-text ml-1 font-weight-bold"> Mot de passe?</a></p>
               <mdb-form-inline>
    <mdb-input type="radio" id="option5-1" name="groupOfMaterialRadios2" radioValue="1" v-model="radio5" label="Admin" />
    <mdb-input type="radio" id="option5-2" name="groupOfMaterialRadios2" radioValue="2" v-model="radio5" label="Ens" />
    <mdb-input type="radio" id="option5-3" name="groupOfMaterialRadios2" radioValue="3" v-model="radio5" label="Etud" />
  </mdb-form-inline>
              <mdb-row class="d-flex align-items-center mb-4 mt-5" style="margin-left:40px">
                <mdb-col md="5" class="d-flex align-items-start">
                  <div class="text-center ">
                   <mdb-btn outline="secondary">Connexion</mdb-btn>
                  </div>
                </mdb-col>
                <mdb-col md="7" class="d-flex justify-content-end">
                </mdb-col>
              </mdb-row>
            </mdb-card-body>
          </mdb-card>
        </mdb-col>
      </mdb-row>
    </section>
</template>
<script>
  import { mdbRow, mdbCol, mdbCard, mdbCardBody, mdbInput, mdbBtn, mdbIcon,mdbFormInline } from 'mdbvue';
  export default {
    name: 'FormsPage',
    components: {
      mdbRow,
      mdbCol,
      mdbCard,
      mdbCardBody,
      mdbInput,
      mdbBtn,
      mdbIcon,
       mdbFormInline
    },
    data() {
      return {
        radio5: ''
      };
    }
  }
</script>
<style>
section{
  Padding-left: 300px;
  margin-top: 70px;
}
  .form-gradient .font-small {
    font-size: 0.8rem; }

  .form-gradient .header {
    border-top-left-radius: .3rem;
    border-top-right-radius: .3rem; }

  .form-gradient input[type=text]:focus:not([readonly]) {
    border-bottom: 1px solid #fd9267;
    -webkit-box-shadow: 0 1px 0 0 #fd9267;
    box-shadow: 0 1px 0 0 #fd9267; }

  .form-gradient input[type=text]:focus:not([readonly]) + label {
    color: #4f4f4f; }

  .form-gradient input[type=password]:focus:not([readonly]) {
    border-bottom: 1px solid #fd9267;
    -webkit-box-shadow: 0 1px 0 0 #fd9267;
    box-shadow: 0 1px 0 0 #fd9267; }

  .form-gradient input[type=password]:focus:not([readonly]) + label {
    color: #4f4f4f; }
    body{
      background-color: lightgrey;
    }

</style>
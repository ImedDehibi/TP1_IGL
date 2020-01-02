<template>

  <div class="mgn">
    <mdb-btn-group >
      <mdb-btn color="primary" size="lg" @click.native="gerer()">Enseignant</mdb-btn><br>
      <mdb-btn color="pink" size="lg">Etudiant</mdb-btn><br>
    </mdb-btn-group>
    <br><br>
  </div>
</template>
<script>
  import { mdbBtn, mdbBtnGroup, mdbBtnToolbar } from 'mdbvue';
import { METHODS } from 'http';
  export default {
    name: 'ButtonsGroup',
    components: {
      mdbBtn,
      mdbBtnGroup,
      mdbBtnToolbar
    },
    methods:{
      gerer(){
           window.location.href = '/Laravel/public/Enseignant';
      }
      
    }
  }
</script>
<style scoped>

.mgn{
    margin-top: 200px;
    margin-left: 200px;
}
</style>
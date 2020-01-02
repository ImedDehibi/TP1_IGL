<template>

  <div class="mgn">
    <mdb-btn-group vertical>
      <mdb-btn color="primary" size="lg" >Consulter notes</mdb-btn><br>
      <mdb-btn color="pink" size="lg">Consulter emploi du temps </mdb-btn><br>
      <mdb-btn color="warning" size="lg" @click.native="gerer()">Consulter fiche de présence</mdb-btn><br>
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
           window.location.href = '/Laravel/public/Presences';
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
<template>

  <div class="mgn">
    <mdb-btn-group vertical>
      <mdb-btn color="primary" size="lg" @click.native="gerer()">Gérer les utilisateurs</mdb-btn><br>
      <mdb-btn color="pink" size="lg">Modifier les emplois du temps </mdb-btn><br>
      <mdb-btn color="warning" size="lg">Gérer les changements exceptionnels</mdb-btn><br>
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
           window.location.href = '/Laravel/public/EspaceAdministrateur/ChoixUtil';
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
<template>
<div class="mgn">
  <mdb-dropdown > 
    <mdb-dropdown-toggle slot="toggle" color="info" @click.native="show=false">Notifications<mdb-badge color="danger" class="ml-2" v-if="show">New</mdb-badge>
 </mdb-dropdown-toggle>
    <mdb-dropdown-menu>
      <mdb-dropdown-item v-if="!show">Notification 1</mdb-dropdown-item>
       <div class="dropdown-divider"></div>
      <mdb-dropdown-item>Notification 2</mdb-dropdown-item>
       <div class="dropdown-divider"></div>
      <mdb-dropdown-item>Notification 3</mdb-dropdown-item>
    </mdb-dropdown-menu>
  </mdb-dropdown>
</div>
</template>
<script>
  import { mdbDropdown, mdbDropdownItem, mdbDropdownMenu, mdbDropdownToggle,mdbBadge } from 'mdbvue';
  export default {
    name: 'DropdownPage',
    components: {
      mdbDropdown,
      mdbDropdownItem,
      mdbDropdownMenu,
      mdbDropdownToggle,
      mdbBadge,
    },
    data(){
return{
    show:true,
}
    }
  }
</script>
<style scoped>
.mgn{
    padding-left: 1100px;
}
</style>
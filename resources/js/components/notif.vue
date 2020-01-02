<template>
<div class="mgn">
  <mdb-dropdown > 
    <mdb-dropdown-toggle slot="toggle" color="danger">Notifications</mdb-dropdown-toggle>
    <mdb-dropdown-menu>
      <mdb-dropdown-item>Notification 1</mdb-dropdown-item>
       <div class="dropdown-divider"></div>
      <mdb-dropdown-item>Notification 2</mdb-dropdown-item>
       <div class="dropdown-divider"></div>
      <mdb-dropdown-item>Notification 3</mdb-dropdown-item>
    </mdb-dropdown-menu>
  </mdb-dropdown>
</div>
</template>
<script>
  import { mdbDropdown, mdbDropdownItem, mdbDropdownMenu, mdbDropdownToggle } from 'mdbvue';
  export default {
    name: 'DropdownPage',
    components: {
      mdbDropdown,
      mdbDropdownItem,
      mdbDropdownMenu,
      mdbDropdownToggle
    }
  }
</script>
<style scoped>
.mgn{
    padding-left: 1170px;
}
</style>
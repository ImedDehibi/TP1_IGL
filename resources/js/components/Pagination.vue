<template>
   <mdb-pagination  v-if="totalpages()>0" color="amber">
    <mdb-page-item prev  v-if="ShowPreviousPage()">
      <a href="#" v-on:click="updatepage(currentpage-1)"><mdb-page-nav prev ></mdb-page-nav></a>

    </mdb-page-item>
 <mdb-page-item active>
    
  <a>
  page {{ currentpage+1 }} sur {{ totalpages() }} 
  </a>
  </mdb-page-item>
    <mdb-page-item   v-if="ShowNextPage()">
      <a  href="#" v-on:click="updatepage(currentpage+1)"><mdb-page-nav next ></mdb-page-nav></a>

    </mdb-page-item>
   </mdb-pagination>
</template>
<script>
  import { mdbPagination, mdbPageItem, mdbPageNav } from 'mdbvue';
  export default {
   
    name: 'PageLoader',
     props:['Presences','currentpage','pagesize'],
    components: {
      mdbPagination,
      mdbPageItem,
      mdbPageNav
    },
    methods:{
updatepage(pagenum){
    this.$emit('page:update',pagenum);
    
},
totalpages(){
return Math.ceil(this.Presences.length/this.pagesize);
},
ShowPreviousPage(){
    return this.currentpage==0?false:true;
},
ShowNextPage(){
    return this.currentpage==(this.totalpages()-1)?false:true;
},
    }
  }
</script>

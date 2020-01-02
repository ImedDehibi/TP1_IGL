<template>
    <div>
      <blockquote class="blockquote text-center">
  <p class="mb-0">les enseigants présents au seins de l'école sont : </p>
  <footer class="blockquote-footer mb-3">Depuis les dernières mises à jour<cite title="Source Title"> de la base de données</cite></footer>
</blockquote>
      <mdb-tbl striped hover >
        <mdb-tbl-head color="info-color" textWhite>
          <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Bureau</th>
            <th>Date</th>
             <th>Entrée</th>
              <th>Sortie</th>
          </tr>
        </mdb-tbl-head>
        <mdb-tbl-body>
          <tr v-for="Presence in visibletodos" v-bind:key="Presence.id" v-bind:visibletodos="visibletodos " v-bind:currentpage="currentpage" >
            <th>{{Presence.Nom}}</th>
            <td>{{Presence.Prenom}}</td>
            <td>{{Presence.Bureau}}</td>
            <td>{{Presence.Date}}</td>
            <td>{{Presence.Debut}}</td>
            <td>{{Presence.Fin}}</td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
            <Pagination v-bind:Presences="Presences" v-on:page:update="updatepage" v-bind:currentpage="currentpage" v-bind:pagesize="pagesize">

            </Pagination>
            </td>
          </tr>
        </mdb-tbl-body>
      </mdb-tbl>

     
    </div>
  </template>
  <script>
  import { mdbTbl, mdbTblHead, mdbTblBody } from 'mdbvue';
  import Pagination from './Pagination';
  export default {
    name: 'TablePage',
    props:['Presences'],
    components: {
      mdbTbl,
      mdbTblHead,
      mdbTblBody,
      Pagination
    },
  data(){
    return{
      todo:[
  
      ],
      currentpage:0,
      pagesize:5,
      visibletodos:[]
    }
  },
  beforeMount: function() {
   
    this.updatevisiblestodos();

  },
  methods:{
    updatepage(pagenum){
      this.currentpage=pagenum;
      this.updatevisiblestodos();

    },
      updatevisiblestodos(){
         
        this.visibletodos=this.Presences.slice(this.currentpage * this.pagesize,(this.currentpage*this.pagesize)+this.pagesize);
        if(this.visibletodos.length==0 && this.currentpage>0){
          this.updatepage(this.currentpage-1)
        }
      }
  }
  }
</script>
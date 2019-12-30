<template>
    <div>
      <blockquote class="blockquote text-center">
  <p class="mb-0">les enseigants présents au seins de l'école sont : </p>
  <footer class="blockquote-footer mb-3">Depuis les dernières mises à jour<cite title="Source Title">de la base de données</cite></footer>
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
          <tr v-for="Presence in Presences">
            <th>{{Presence.Nom}}</th>
            <td>{{Presence.Prenom}}</td>
            <td>{{Presence.Bureau}}</td>
            <td>{{Presence.Date}}</td>
            <td>{{Presence.Debut}}</td>
            <td>{{Presence.Fin}}</td>
          </tr>
          
        </mdb-tbl-body>
      </mdb-tbl>

     
    </div>
  </template>
  <script>
  import { mdbTbl, mdbTblHead, mdbTblBody } from 'mdbvue';

  export default {
    name: 'TablePage',
    props:['Presences'],
    components: {
      mdbTbl,
      mdbTblHead,
      mdbTblBody
    }
  }
</script>
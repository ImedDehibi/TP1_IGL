<template>
    <div class="test">
       <h1>{{title}}</h1> 
      <input type="test" v-model="title">
      <!--<span v-html="title"></span>!-->
        <p>{{user.firstname}}</p>
        <p v-if="showname" v-text="user.lastname"></p>
         <p v-else >none</p>
         <ul>
         <li v-for="item in items" v-bind:key="item.nina">{{item.nina}}</li>
         </ul>
         <button v-on:click="greet(title)" >Greet</button><br>
         <input type="test" v-on:keyup="presskey" v-on:keyup.enter="enterhit">
         <hr>
         <label>First name:</label><input type="text" v-model="user.firstname"><br>
          <label>Last name:</label><input type="text" v-model="user.lastname"><br>
          <h3>{{fullname}}</h3>
          <h2>{{msg}}</h2>
    </div>
</template>
<script>
export default {
    props:{
        msg:{
           type:String,
           default:'foobar'
        }
    },
    name: 'test',
    data(){
        return{
            title:'hello world',
            user:{
                firstname:'cherifa',
                lastname:'hamroun'
            },
            showname:false,
            items:[
            {nina:'nana'},
            {nina:'nani'}
              

            ]
        }
    },
    methods:{
        greet:function(greeting){
            alert(greeting);
        },
        presskey:function(e){
            console.log(e.target.value)
        },
        enterhit:function(){
            console.log('entrée');
        }
    },
    computed:{
        fullname:function(){
            return this.user.firstname+" "+this.user.lastname;
        }
    }
}
</script>
<style scoped>
  h1{
      color:black;
  }
</style>
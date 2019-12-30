<template>
    <div>
        <mdb-btn size="lg" outline="white" class="btn" >Déconnexion</mdb-btn>
        
    </div>
</template>
<script>
    import { mdbBtn } from 'mdbvue';
    export default {
        name: 'ButtonPage',
        components: {
            mdbBtn
        }
    }
</script>
<style scoped>
    .btn{
        margin-left: 40px;
       
    }
</style>
<template>
   <Head/> 
   <About/>
   <Foot/>
</template>
<script>
import About from '../About.vue'
import Foot from '../Foot.vue'
import Head from '../Head.vue'
    export default{
  components: { Head, Foot, About },
        name:'Aboutus',
    }
</script>
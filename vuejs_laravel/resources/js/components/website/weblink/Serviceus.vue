<template>
    <Head/>
    <Services/>
    <Foot/>
</template>
<script>
import Foot from '../Foot.vue'
import Head from '../Head.vue'
import Services from '../Services.vue'
    export default{
  components: { Head, Foot, Services },
        name:'Serviceus'
    }
</script>
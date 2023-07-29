<template>
    <Head/>
    <Portfolio/>
    <Foot/>
</template>
<script>
import Foot from '../Foot.vue'
import Head from '../Head.vue'
import Portfolio from '../Portfolio.vue'
    export default{
  components: { Head, Foot, Portfolio },
        name:'Portfolioinfo'
    }
</script>
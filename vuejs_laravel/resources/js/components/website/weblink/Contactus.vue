<template>
        <Head/>
        <Contact/>
        <Foot/>
</template>
<script>
import Contact from '../Contact.vue'
import Foot from '../Foot.vue'
import Head from '../Head.vue'
        export default{
  components: { Head, Foot, Contact },
            name:'Contactus',
        }
</script>
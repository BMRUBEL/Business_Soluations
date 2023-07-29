<template>

  <Head/>
  <About/>
  <Services/>
  <Portfolio/>
  <Team/>
  <Pricing/>
  <Contact/>
  <Foot/>
</template>

<script>
import Head from './Head.vue';
import About from './About.vue';
import Services from './Services.vue';
import Foot from './Foot.vue';
import Portfolio from './Portfolio.vue';
import Team from './Team.vue';
import Pricing from './Pricing.vue';
import Contact from './Contact.vue';
    export default{
    name: "Home",
    components: { Head, About , Foot, Services, Portfolio, Team, Pricing, Contact}
}
</script>
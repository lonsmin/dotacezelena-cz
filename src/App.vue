<template> 
  <TheHeader/>
  <section class="container">
        <div class="row ">
          <TheCalc/>
          <TheForm/>
        </div>
  </section>
  <TheFooter/>
</template>

<script>
import TheHeader from '@/components/TheHeader.vue'
import TheCalc from '@/components/TheCalc.vue'
import TheForm from '@/components/TheForm.vue'
import TheFooter from '@/components/TheFooter.vue'
export default {
  
  name: 'App',
  components: {
    TheHeader,
    TheForm,
    TheCalc,
    TheFooter,
  }
}
</script>

<style>

#app {
  color: #FFF;
  
  font-family: 'LeagueGothicRegular', 'Arial Narrow', Arial, sans-serif;
  font-size: 16px;
  letter-spacing: 0.02rem;
  font-weight: lighter;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  background-repeat: no-repeat;
  background-image: url("./assets/img/bcg-img.jpg");
  background-position: top center;
}

</style>

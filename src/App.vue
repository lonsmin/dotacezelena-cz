<template>
    <TheHeader />
    <section class="container">
        <div class="wrap-title">
            <h3 class="row ha title">
                Říkáte si "Jak na dotace?" Napište nám a my tuto otázku vyřešíme za Vás.
            </h3>
        </div>
        <div class="row">
            <TheForm />
        </div>
    </section>
    <TheFooter />
</template>

<script>
import TheHeader from "@/components/TheHeader.vue";

import TheForm from "@/components/TheForm.vue";
import TheFooter from "@/components/TheFooter.vue";
export default {
    name: "App",
    components: {
        TheHeader,
        TheForm,

        TheFooter,
    },
};
</script>

<style>
#app {
    color: #fff;

    font-family: "LeagueGothicRegular", "Arial Narrow", Arial, sans-serif;
    font-size: 16px;
    letter-spacing: 0.02rem;
    font-weight: lighter;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    background-repeat: no-repeat;
    background-image: url("./assets/img/bcg-img.jpg");
    background-position: top center;
}
@media only screen and (max-width: 47.5em) {
    /* 760 px default 16 px */

    .header {
        text-align: center;
    }
    .header .icon {
        color: #fff;
    }
    body {
        background-image: none;
    }
    h3 {
        margin-top: 5rem;
        margin-top: 2rem;
    }
}
.wrap-title {
    padding: 0 5%;
    text-align: center;
}
.title {
    padding-top: 6%;
}
</style>

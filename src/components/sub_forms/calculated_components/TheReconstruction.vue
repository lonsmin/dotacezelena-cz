<template>
    <div>
        <h3>stěny a střechy</h3>
        <Slider v-model="number_REKONSTRUKCE" :min="1" :max="2500" :step="1" />

        <h3>okna</h3>
        <Slider v-model="number_REKONSTRUKCE" :min="1" :max="2500" :step="1" />

        <h3>podlahy</h3>
        <Slider v-model="number_REKONSTRUKCE" :min="1" :max="2500" :step="1" />
    </div>
</template>

<script>
import Slider from "./TheSlider.vue";
export default {
    name: "TheReconstruction",
    components: {
        Slider,
    },
    props: {},
};
</script>

<style></style>

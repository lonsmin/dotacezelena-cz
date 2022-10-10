<template>
  <div class="wrapper">
    <div>
      <h3>stěny a střechy</h3>
      <div>{{ roofs }} m2</div>
      <div class="wrapper">
        <TheSlider
          ref="roofs"
          :min="1"
          :max="900"
          :step="5"
          @some-event="(e) => (roofs = e)"
        />
      </div>
    </div>
    <!-- <div>
            <h3>okna</h3>
            <div>{{ windows }} m2</div>
            <TheSlider v-model="windows" :min="1" :max="900" :step="5" class="slider" />
        </div>
        <div>
            <h3>podlahy</h3>
            <div>{{ floors }} m2</div>
            <TheSlider v-model="floors" :min="1" :max="900" :step="5" class="slider" />
        </div> -->
  </div>
</template>

<script>
import TheSlider from "./TheSlider.vue";
export default {
  name: "TheReconstruction",
  components: {
    TheSlider,
  },
  props: {},
  data() {
    return {
      val: 25,
      roofs: 0,
      windows: 0,
      floors: 0,
    };
  },

  methods: {
    getResult() {
      return (
        Math.round(
          this.number_REKONSTRUKCE * 0.65 * 600 +
            this.number_REKONSTRUKCE * 0.2 * 2200 +
            this.number_REKONSTRUKCE * 0.15 * 800 * 1
        ) / 1
      );
    },
  },
};
</script>

<style scoped>
.wrapper {
  padding: 1em;
}
h3 {
  margin: 0;
}
</style>

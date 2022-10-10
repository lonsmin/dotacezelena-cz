<template>
    <div>
        <Slider v-model="value" :step="5" :tooltips="false" @change="currnetValue" />
    </div>
</template>

<script>
import Slider from "@vueform/slider";

export default {
    components: {
        Slider,
    },
    methods: {
        currnetValue(e) {
            this.$emit("some-event", e);
        },
    },
    data() {
        return {
            value: 0,
        };
    },
};
</script>

<style src="@vueform/slider/themes/default.css"></style>

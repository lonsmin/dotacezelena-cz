<template>
  <input type="text" :id="id" :placeholder="placeholder" :value="modelValue" @input="updateValue">
</template>

<script>
export default {
  name:'MyInput',
    props:{        
        id:String,
        modelValue: String,
        placeholder:String
    },
    methods:{
      updateValue(event) {
            this.$emit('update:modelValue', event.target.value);
        }
    }
}
</script>

<style>

</style>
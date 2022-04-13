<template>
  <input type="checkbox" :id="id" :value="modelValue" @input="updateValue" >
  <label :for="id" :id="[id,'label']">{{placeholder}}</label>

</template>

<script>
export default {
  name:'MyCheckbox',
    props:{      
        placeholder:String,
        modelValue: Boolean,
        id: String,
    },
    methods:{
      updateValue(event) {
            this.$emit('update:modelValue', event.target.checked);
        }
    }
}
</script>

<style>

</style>
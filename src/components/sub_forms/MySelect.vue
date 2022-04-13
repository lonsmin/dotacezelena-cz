<template>
    <select type="select" :id="id" :value="modelValue" @input="updateValue" >
        <option v-for="option in options" :value="option" :key="option">{{option}}</option>
    </select>
</template>

<script>
export default {
  name:'MySelect',
    props:{      
        placeholder:String,
        modelValue: Boolean,
        id: String,
        options:Array
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
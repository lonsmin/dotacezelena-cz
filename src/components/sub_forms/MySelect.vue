<template>
    <select :id="id" :value="modelValue" @input="updateValue" >
        <option v-for="option in options" :value="option" :key="option">{{option}}</option>
    </select>
</template>

<script>
export default {
  name:'MySelect',
    props:{      
        modelValue: String,
        id: String,
        options:Array
    },
    methods:{
      updateValue(event) {
            this.$emit('update:modelValue', event.target.value);
        }
    },
    mounted() {
        
        this.$emit('update:modelValue',this.options[0]);
    }
}
</script>

<style>
option{font-size: 24px;}
</style>
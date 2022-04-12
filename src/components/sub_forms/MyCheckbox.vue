<template>
  <input type="checkbox" :id="id" >
  <label :for="id" :id="[id,'label']">{{placeholder}}</label>
</template>

<script>
export default {
  name:'MyCheckbox',
    props:{        
        id:String,
        placeholder:String
    }
}
</script>

<style>

</style>
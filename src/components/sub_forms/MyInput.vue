<template>
  <input type="text" :id="id" :placeholder="placeholder">
</template>

<script>
export default {
  name:'MyInput',
    props:{
        
        id:String,
        placeholder:String
    }


}
</script>

<style>

</style>
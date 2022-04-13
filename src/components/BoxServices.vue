<template>
      <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12 icon"><i :class="[icon,'fa-solid']"></i><span>{{title}}</span></div>
</template>

<script>
export default {
    name:'BoxServices',
    props: {
        title: {
            type: String,
            default:'Služba'
        },
        icon:{
            type: String,
        }
    },
}
</script>

<style>

</style>
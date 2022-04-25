<template>
    
        <div  class="col-lg-1 col-md-2 col-sm-12 col-xs-12 icon"  @click="onClick">
          
            <i :class="[service.icon,'fa-solid']"></i>
            <span>{{service.title}}</span>
        
        </div>
    

</template>

<script>
export default {
    name:'BoxServices',
    props: {
        service: Object,
        
    },
    methods:{
        onClick (){
            this.$emit('button-clicked', this.service)
             
        }
    }
}
</script>

<style>
.icon {cursor: pointer;}
</style>
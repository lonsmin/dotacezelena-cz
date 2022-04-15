<template>
    
        <div class="col-lg-2 col-md-3 col-sm-12 col-xs-12 icon"  @click="onClick">
            <a href="#openModal" > 
            <i :class="[icon,'fa-solid']"></i>
            <span>{{title}}</span>
            </a>
        </div>
    

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
        },
        
    },
    methods:{
        onClick (){
            this.$emit('button-clicked', this.title)
             
        }
    }
}
</script>

<style>
.icon a{width: 270px;height: 270px;}
</style>
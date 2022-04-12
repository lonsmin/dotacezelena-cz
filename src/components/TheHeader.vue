<template>
    <div class="header container">
        <nav>
        </nav>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 va">
                <h1>Zajišťujeme kompletní vyřízení dotace <br>Nová zelená úsporám 2021 </h1>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 va ha">
                <div class="btn">NEZAVAZNĚ POPTAT &nbsp;<i class="fa-solid fa-caret-down"></i></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2>s koordinací ostatních profesí</h2>
            </div>
        </div>
        <div class="row center-lg center-md center-sm center-xs">
            <h3>Získejte dotace na</h3>
        </div>
        <div class="row around-lg around-md around-sd around-xs" >
            <BoxServices v-for="(box, i) in boxes" :title="box.title" :icon="box.icon" :key="'box'+i"/>
        </div>
    </div>  
</template>

<script>
import BoxServices from '@/components/BoxServices.vue'

export default {
    name: 'TheHeader',
    components: {
        BoxServices,
    },
    data() {
        return {
            boxes:[
                {title: 'NOVOSTAVBY',icon: 'fa-house'},
                {title: 'REKONSTRUKCE',icon: 'fa-ruler'},
                {title: 'VÝMĚNU ZDROJE',icon: 'fa-plug'},
                {title: 'DEŠŤOVKU',icon: 'fa-droplet'},
                {title: 'FOTOVOLTAIKU',icon: 'fa-solar-panel'},
            ]
        }
    }, 
}
</script>

<style>
section {font-family: 'Franklin Gothic Medium','Arial Narrow', Arial, sans-serif;}
section p,section label, section span {font-weight: 500;}
nav{height: 70px;}
.header span{font-size: 1.5rem;}
.btn{padding: 10px;border-radius: 5px;background-color: #2980b9;text-align: center;width: 10rem;font-size: 1.5rem;padding: 0.75rem 1.25rem;}

/*ICONS*/
.icon{width: 270px;height: 270px;list-style: none;background-color: #28a745; margin:1rem; position: relative; text-align: center;}
.icon .fa-solid {position: absolute;  font-size: 5rem;  top: 40%; left: 50%; transform: translate(-50%, -50%);}
.icon span {position: absolute; bottom:10%; left:50%; transform: translate(-50%, -50%); text-transform: uppercase; font-size: 1.3rem; white-space: nowrap;}
</style>

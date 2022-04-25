<template>
    <div class="header container">
        <nav>
        </nav>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 va">
                <h1>Zajišťujeme kompletní vyřízení dotace <br>Nová zelená úsporám 2021 </h1>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 va ha">
                <div class="btn"  @click="scrollTo()">NEZAVAZNĚ POPTAT &nbsp;<i class="fa-solid fa-caret-down"></i></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2>s koordinací ostatních profesí</h2>
            </div>
        </div>
        <div class="row center-lg center-md center-sm center-xs">
            <h3 id="h3">Získejte dotace na</h3>
        </div>
        <TheModal 
            v-if="serviceInModal"
            :service="serviceInModal" 
            @some-event="this.serviceInModal = false"
            
        />
        <div class="row around-lg around-md around-sd around-xs" >
            <BoxServices 
                v-for="(box, i) in boxes" 
                :service="box"  
                :key="'box'+i"
                @button-clicked="onButtonClicked"
            />
        </div>
    </div>  
</template>

<script>
import BoxServices from '@/components/BoxServices.vue'
import TheModal from '@/components/TheModal.vue'

export default {
    name: 'TheHeader',
    components: {
        BoxServices,
        TheModal,
    },
    data() {
        return {
            serviceInModal: false,
            boxes:[
                {   
                    title: 'novostavbu',
                    icon: 'fa-house',
                    body:{
                        desc:'Pokrývá část nákladů na výstavbu rodinného nebo bytového domu.',
                        fund: 'Lze získat až 500 000 Kč.',
                        price: {
                            payment: '45 000–60 000 Kč.',
                            cashback: 'Lze získat zpět částku 35 000 Kč v rámci příspěvku na vypracování dotace.'
                        },
                        purposes: ['Výstavba rodinného domu','Koupě rodinného domu']
                    }
                },
                {
                    title: 'rekonstrukci',
                    icon: 'fa-ruler',
                    body:{
                        desc:'Tato dotace by měla pokrýt část nákladů na rekonstrukci rodinného nebo bytového domu.',
                        fund: 'Lze získat až 650 000 Kč.',
                        price: {
                            payment: '45 000–60 000 Kč.',
                            cashback: 'Lze získat zpět částku 25 000 Kč v rámci příspěvku na vypracování dotace.'
                        },
                        purposes: ['Okna', 'Dveře', 'Stěny', 'Podlahy', 'Stropy']
                    }
                },
                {
                    title: 'výměnu zdroje',
                    icon: 'fa-plug',
                    body:{
                        desc:'Tato dotace by měla pokrývat část nákladů na výměnu starého zdroje za tepelné čerpadlo, kotel na biomasu vyšší třídy, plynový kondenzační kotel atd.',
                        fund: 'Dle typu zdroje 30 000–200 000 Kč.',                        
                        price: {
                            payment: 'Dle typu zdroje od 10 000–35 000 Kč.',
                            cashback: 'Lze získat příspěvek na vypracování v rámci dotace.'
                        },
                        purposes: ['Výměna starého kotle','na uhlí', 'na dřevo', 'Výměna starého elektrického kotle', 'Výměna jiného zdroje na tuhá paliva']
                    }
                },
                {
                    title: 'dešťovku',
                    icon: 'fa-droplet',
                    body:{
                        desc:'Na pokrytí části nákladů systému pracujícího s dešťovou vodou.',
                        fund: 'Lze získat až 105 000 Kč.',                       
                        price: {
                            payment: '5 000 - 15 000 Kč.',
                            cashback: 'Lze získat zpět částku 10 000 Kč v rámci příspěvku na vypracování dotace.'
                        },
                        purposes: ['Systémy využívající dešťovou vodu', 'na zalévání','na splachování' , 'a další využití šedé vody']
                    }
                },
                {
                    title: 'fotovoltaiku',
                    icon: 'fa-solar-panel',
                    body:{
                        desc:'Tato dotace by měla pokrývat náklady na instalaci fotovoltaického/fototermického systému',
                        fund: 'Lze získat až 200 000 Kč.',
                        price: {
                            payment: 'Dle rozsahu instalace od 10 000–35 000 Kč.',
                            cashback: 'Lze získat příspěvek na vypracování v rámci dotace.'
                        },
                        purposes: ['Fotovoltaické panely napojené',' do bojleru', 'do baterií' , 'Fototermické systémy na ohřev teplé vody']
                    }
                },
                {
                    title: 'stínící techniku',
                    icon: 'fa-align-justify',
                    body:{
                        desc:'Dotace pokrývá část nákladů na venkovní žaluzie (venkovní stínící techniku)',
                        fund: '10 000 – 50 000 Kč dle plochy oken',
                        price: {
                            payment: 'Žádost je možné provést pouze v kombinaci s dotací na rekonstrukci, kde částka je již započtena.',
                            cashback: ''
                        },
                        purposes: ['Venkovní stínící komponenty',' rolety', 'žaluzie']
                    }
                },
                {
                    title: 'vzduchotechniku',
                    icon: 'fa-wind',
                    body:{
                        desc:'Dotace pokrývá část nákladů na osazení větrací jednotky (rekuperace).',
                        fund: 'Lze získat až 100 000 Kč.',
                        price: {
                            payment: '5 000 - 18 000 Kč.',
                            cashback: 'Lze získat zpět částku 5 000 Kč v rámci příspěvku na vypracování dotace.'
                        },
                        purposes: ['Na vzduchotechnické (rekuperační jednotky)','centrální', 'lokální']
                    }
                },
            ]
        }
    },
    methods:{
        onButtonClicked(service){
            
            this.serviceInModal = service;

            let element = document.getElementById('h3')
            element.scrollIntoView({behavior: 'smooth'});
        },
        scrollTo() {
            let element = document.getElementById('form')
            element.scrollIntoView({behavior: 'smooth'});
        }
        
    },
}
</script>

<style>
section {font-family: 'Franklin Gothic Medium','Arial Narrow', Arial, sans-serif;}
section p,section label, section span {font-weight: 500;}
nav{height: 70px;}
.header span{font-size: 1.5rem;}
.btn{padding: 10px;border-radius: 5px;background-color: #2980b9;text-align: center;width: 10rem;font-size: 1.5rem;padding: 0.75rem 1.25rem; cursor: pointer;}

/*ICONS*/
.icon{width: 270px;height: 270px;list-style: none;background-color: #28a745; margin:1rem; position: relative; text-align: center; display: flex;}
.icon .fa-solid {position: absolute;  font-size: 5rem;  top: 40%; left: 50%; transform: translate(-50%, -50%);}
.icon span {position: absolute; bottom:10%; left:50%; transform: translate(-50%, -50%); text-transform: uppercase; font-size: 1.3rem; white-space: nowrap;}


</style>

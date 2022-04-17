<template>
  <div id="openModal" class="modalDialog">
      <div>
         <a href="#close" title="Close" class="close">X</a>
         <h1>Dotace na {{title}}</h1>
         
            <h2>Na co by měla sloužit? </h2>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-1 col-xs-12 ha">
                    <i class="fa-solid fa-file-contract va"></i>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-11 col-xs-12">
                    <p class="va"> {{body.desc}}</p>
                </div>
            </div>

            <h2>Kolik lze získat ? </h2> 
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-1 col-xs-12 ha">
                    <i class="fa-solid fa-coins va"></i>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-11 col-xs-12">
                    <p class="va">{{body.fund}}</p>
                </div>
            </div> 
            

            <h2>Kolik mne to bude stát? </h2>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-1 col-xs-12 ha">
                    <i class="fa-solid fa-wallet va"></i>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-11 col-xs-12">
                    <p class="va">{{body.price.payment}}</p>
                    <p class="va">{{body.price.cashback}}</p>
                </div>
            </div>  
           
            
            <h2>Na co lze žádat? </h2>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-1 col-xs-12 ha">
                    <i class="fa-solid fa-list-check va"></i>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-11 col-xs-12">
                    <ul>
                        <li v-for="item in body.purposes" :key="item">{{item}}</li>  
                    </ul>
                </div>
            </div>  
               
         <hr>
         <div class="btn-cont"  style="display:flex; flex-direction: row-reverse;">
            <a href="#close"><div class="btn" style="color:white;" @click="scrollTo()">OVĚŘIT NÁROK</div></a>
         </div>
         
      </div>
   </div>
</template>

<script>
export default {
    props:{
        title:{
            type: String,
        },
        body:{
            type: Object,
        },

    },
    methods:{
        scrollTo (){
            let element = document.getElementById('form')
            element.scrollIntoView({behavior: 'smooth'});
            }     
        }

}
</script>

<style scoped>
* { color: #6c757d;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    
    letter-spacing: 0.001rem;
   
}
h1{margin-top: 0;font-size: 2.5em;}
h2{margin: 0;font-family: 'Franklin Gothic Medium','Arial Narrow', Arial, sans-serif;font-weight: 600;padding: 0.2 1.4em;}

p, ul, li{font-family: 'Franklin Gothic Medium','Arial Narrow', Arial, sans-serif;font-weight: 400;}
.modalDialog {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background: rgba(0, 0, 0, 0.8);
    z-index: 99999;
    opacity:0;
    -webkit-transition: opacity 100ms ease-in;
    -moz-transition: opacity 100ms ease-in;
    transition: opacity 100ms ease-in;
    pointer-events: none;
}
.modalDialog:target {
    opacity:1;
    pointer-events: auto;
}
.modalDialog > div {
    max-width: 600px;
    width: 90%;
    position: relative;
    margin: 7% auto;
    padding: 2em;
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    background: #fff;
    max-height: calc(100vh - 120px);
    overflow-y: auto;
    

}
.close {
    font-family: Arial, Helvetica, sans-serif;
    background: #227a35;
    color: #fff;
    line-height: 25px;
    position: absolute;
    right: 10px;
    text-align: center;
    top: 10px;
    width: 34px;
    height: 34px;
    text-decoration: none;
    font-weight: bold;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    padding-top: 5px;
}
.close:hover {
    background: #1c642c;
}
/*oprava divného zobrazení*/
i{font-size: 3em;margin: 0.1em;}
@media only screen and (max-width: 761px) {
    i{display: none;}
}
@media only screen and (max-width: 759px) {
    i{display: block;margin: 0.2em;}
    p{display: flex;justify-content: center;}
    .close{position: fixed;}
}
</style> 
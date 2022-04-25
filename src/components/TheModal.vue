<template>
  <!-- -->
  <div class="modal-wrapper">
    <div class="modal-body">
         <a title="Close" class="close" @click="$emit('someEvent')">X</a>
         <h1>{{service.title}}</h1>
         
            <h2>K čemu by měla sloužit? </h2>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-1 col-xs-12 ha">
                    <i class="fa-solid fa-file-contract va"></i>
                </div>

                <div class="col-lg-10 col-md-10 col-sm-11 col-xs-12">
                    <p class="va"> {{service.body.desc}}</p>
                </div>
            </div>

            <h2>Kolik lze získat? </h2> 
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-1 col-xs-12 ha">
                    <i class="fa-solid fa-coins va"></i>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-11 col-xs-12">
                    <p class="va">{{service.body.fund}}</p>
                </div>
            </div> 
            

            <h2>Kolik mne to bude stát? </h2>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-1 col-xs-12 ha">
                    <i class="fa-solid fa-wallet va"></i>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-11 col-xs-12">
                    <p class="va">{{service.body.price.payment}}</p>
                    <p class="va">{{service.body.price.cashback}}</p>
                </div>
            </div>  
           
            
            <h2>Na co lze žádat? </h2>
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-1 col-xs-12 ha">
                    <i class="fa-solid fa-list-check va"></i>
                </div>
                <div class="col-lg-10 col-md-10 col-sm-11 col-xs-12">
                    <ul>
                        <li v-for="item in service.body.purposes" :key="item">{{item}}</li>  
                    </ul>
                </div>
            </div>  
               
         <hr>
         <div class="btn-cont"  style="display:flex; flex-direction: row-reverse;">
            <div class="btn" style="color:white;" @click="scrollTo()">OVĚŘIT NÁROK</div>
         </div>
         
      
   <!-- -->
   </div>
   </div>

</template>

<script>
export default {
    props:{
        service:{
            type: Object,
        },

    },
    methods:{
        scrollTo (){
            let element = document.getElementById('form')
            element.scrollIntoView({behavior: 'smooth'});
            }     
        },
        
    

}
</script>

<style scoped>
* { color: #6c757d;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    
    letter-spacing: 0.001rem;
   
}
h1{margin-top: 0;font-size: 2.5em; text-transform: uppercase;}
h2{margin: 0;font-family: 'Franklin Gothic Medium','Arial Narrow', Arial, sans-serif;font-weight: 600;padding: 0.2 1.4em;}

p, ul, li{font-family: 'Franklin Gothic Medium','Arial Narrow', Arial, sans-serif;font-weight: 400;}
@media only screen and (max-width: 47.5em) {ul {list-style-type: none;padding-left: 0;} p{display: flex; justify-content:center}}
.modal-body{box-shadow: 1px 1px 8px #888888;background-color: rgb(250, 250, 250);padding: 3% 5% 0.7% 5%;max-width: 900px; position: relative;    -webkit-border-radius: 3px;-moz-border-radius: 3px;border-radius: 3px;}
.modal-wrapper{display: flex;justify-content: center;}

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
    cursor: pointer;
}
.close:hover {
    background: #1c642c;
}
i{font-size: 3em;margin: 0.1em;}

</style> 
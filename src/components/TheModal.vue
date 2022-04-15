<template>
  <div id="openModal" class="modalDialog">
      <div>
         <a href="#close" title="Close" class="close">X</a>
         <h1>Dotace na {{title}}</h1>
         <h2>Na co by měla sloužit? </h2>
         
         <p> {{body.desc}}</p>
         <h2>Kolik lze získat ? </h2>   
         
         <p>{{body.fund}}</p>
         <h2>Kolik mne to bude stát? </h2> 
        
         <p>{{body.price}}</p>
         <h2>Na co lze žádat? </h2> 
        
         <p>{{body.purpose}}</p>    
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
h2{margin: 0;font-family: 'Franklin Gothic Medium','Arial Narrow', Arial, sans-serif;font-weight: 600;}
p{margin-top: 5px;}
p{font-family: 'Franklin Gothic Medium','Arial Narrow', Arial, sans-serif;}
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
    max-width: 800px;
    width: 90%;
    position: relative;
    margin: 10% auto;
    padding: 2em;
    border-radius: 3px;
    background: #fff;
}
.close {
    font-family: Arial, Helvetica, sans-serif;
    background: #227a35;
    color: #fff;
    line-height: 25px;
    position: absolute;
    right: -12px;
    text-align: center;
    top: -10px;
    width: 34px;
    height: 34px;
    text-decoration: none;
    font-weight: bold;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border-radius: 50%;
    -moz-box-shadow: 1px 1px 3px #000;
    -webkit-box-shadow: 1px 1px 3px #000;
    box-shadow: 1px 1px 3px #000;
    padding-top: 5px;
}
.close:hover {
    background: #1c642c;
}

</style> 
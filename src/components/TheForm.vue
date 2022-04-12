<template>
  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ha m1">
      <div class="row">
          <div class="form">
              <h5>Nechte si nezávazně ověřit na co máte nárok</h5>
              <p>Projdu s Vámi všechny podklady a zjistím co všechno můžete čerpat. Stačí mi zanechat jen:</p>
              <form action="send.php" method="POST" id="zelena">

                  <div class="input-group low">
                      <label for="num">+420</label>
                      <input type="text" name="num" id="num" placeholder=" Vaše telefonní číslo">
                  </div>

                  <span class="ha va">nebo</span>

                  <div class="input-group low">
                      <label for="email">@</label>
                      <input type="text" name="email" id="email" placeholder=" Vaší e-mailovou adresu">
                  </div>
                  
                  <div class="input-group">
                      <p>V případě vyplnění podrobného formuláře, Vás mohu kontaktovat již s lépe orientovanou
                          nabídkou přímo pro Vás</p>

                      <label class="switch">
                          <input name="mainCheckbox" id="mainCheckbox" type="checkbox" v-model="mainCheckbox">
                          <span class="slider round"></span>
                          
                      </label>

                      <label for="mainCheckbox" class="checkbox"> Podrobný formulář</label>
                  </div>

                  <div class="input-group detailed">
                      <div id="firstDet" v-if="mainCheckbox">                         
                          <MyInput  v-for="mainInput in mainInputs" :id="mainInput.id" :placeholder="mainInput.placeholder" :key="mainInput.id"/>
                      </div>
                  </div>

                  <hr>
                  <p id="error"></p>

                  <div class="input-group">
                      <input type="submit" value="ODESLAT">
                  </div>

              </form>
          </div>
      </div>
  </div>
</template>

<script>
import MyInput from './sub_forms/MyInput.vue'
export default {
    name: 'TheForm',
    components: {
        MyInput 
    },
    data() {
        return {
            mainCheckbox: false,
            mainInputs: [
                {
                    id:"Jmeno",
                    placeholder:" Jméno"
                },
                {
                    id:"Prijmeni",
                    placeholder:" Příjmení"
                },
                    {
                    id:"Adresa_klienta",
                    placeholder:" Adresa trvalého pobytu"
                },
                {
                    id:"PSC",
                    placeholder:" PSČ"
                },
                {
                    id:"Adresa_objektu",
                    placeholder:" Adresa řešeného objektu"
                }
            ],
         
        }
    },
    methods:{

    }
}
</script>

<style>
.form{background-color: #F7F7F7;padding: 0rem 2rem 1rem 2rem;border: 1px solid #bbc2c3; }
#error {text-align: right; color:#e67e22; font-size: bold;}
.form input,.form select {padding: 0 0.5rem;}
.form .low input {width:80%; box-sizing: border-box;}
.form .low label { width: 20%; margin: 10px 0; background-color: #28a745;  text-align: center; line-height: 41px; color: #FFF; display: block; float: left; }

.form .detailed input,.form .detailed select {width:100%;}

.detailed input[type="checkbox"] {width: 10% !important;display: inline-block;}
.detailed label {width: 40% !important; display: inline-block;position: relative; bottom: 14px;}
.checkbox {display: inline-block;position: relative; top: 4px;}

.form .low input, .form .detailed select, .form .detailed input   { border: 1px solid #28a745; margin: 10px 0; height: 41px;  color: #898F9C;}
.form input[type="submit"] { width: 100%; background-color: #28a745;color: #FFF;text-align: center; height: 41px; border: 1px solid #28a745;}

.switch {  margin: 10px;  position: relative;  display: inline-block;  width: 45px;  height: 26px;}
.switch input {  opacity: 0;  width: 0;  height: 0;}
.slider {  position: absolute;  cursor: pointer;  top: 0;  left: 0;  right: 0;  bottom: 0;  background-color: #ccc;  -webkit-transition: .4s;  transition: .4s;}
.slider:before {  position: absolute;  content: "";  height: 19.5px;  width: 19.5px;  left: 3.5px;  bottom: 3.5px;  background-color: white;  -webkit-transition: .4s;  transition: .4s;}
.switch input:checked + .slider {  background-color: #28a745;}
.switch input:checked + .slider:before {  -webkit-transform: translateX(19.5px);  -ms-transform: translateX(19.5px);  transform: translateX(19.5px);}
.switch .slider.round {  border-radius: 28px;}
.switch .slider.round:before {  border-radius: 50%;}
</style>

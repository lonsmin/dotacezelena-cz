<template>
  <div v-if="isSend" id="form" class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ha m1">
            <div class="col-lg-5 col-md-4 col-sm-5 col-xs-12 ha">
                <i class="fa-solid fa-envelope-circle-check"></i>
            </div>
            <div class="col-lg-7 col-md-8 col-sm-7 col-xs-12 sec">
                <h4>Děkujeme!</h4>
                <p>Váš dotaz byl v pořádku odeslán a budu Vás brzy kontaktovat.</p>
                <p><a style="color:#000" href="/">Odeslat další dotaz</a></p>
            </div>
  </div>  
  <div v-if="!isSend" id="form" class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ha m1">
      <div class="row">
          <div class="form"  >
              <h5>Nechte si nezávazně ověřit na co máte nárok</h5>
              <p>Projdu s Vámi všechny podklady a zjistím co všechno můžete čerpat. Stačí mi zanechat jen:</p>
              <form  @submit.prevent="onSubmit" action="send.php" method="POST" id="zelena">

                  <div class="input-group low">
                      <label for="num">+420</label>
                      <MyInput
                        :id="primaryInputs[0].id"  
                        :placeholder="primaryInputs[0].placeholder"
                        v-model="primaryInputs[0].value"       
                             
                        />
                        
                  </div>

                  <span class="ha va">nebo</span>

                  <div class="input-group low">
                      <label for="email">@</label>
                      <MyInput
                        
                        :id="primaryInputs[1].id"  
                        :placeholder="primaryInputs[1].placeholder"
                        v-model="primaryInputs[1].value"       
                            />
                  </div>
                  
                  <div class="input-group">
                      <p>V případě vyplnění podrobného formuláře, Vás mohu kontaktovat již s lépe orientovanou
                          nabídkou přímo pro Vás</p>

                      <label class="switch">
                          <input name="mainCheckbox" id="mainCheckbox" type="checkbox" v-model="mainCheckbox" @click.once="getData()">
                          <span class="slider round"></span>
                          
                      </label>

                      <label for="mainCheckbox" class="checkbox"> Podrobný formulář</label>
                  </div>

                  <div class="input-group detailed">
                      <div id="firstDet" v-if="mainCheckbox">
                            <MyCheckbox 
                                v-for="service in services" 
                                v-model="service.value" 
                                                        
                                :id="service.id"
                                :placeholder="service.name" 
                                :key="service.id" 
                                                       
                            /> 
                        
                            <MyInput  
                                v-for="personalInput in personalInputs"
                                v-model="personalInput.value" 
                                :placeholder="personalInput.placeholder" 
                                :key="personalInput.id"
                            />

                            <div v-for="service in services" :key="service.id" >
                                <div v-if="service.value">
                                    <h6 v-if="service.ext.length > 0">{{service.name}}</h6>
                                    <div v-for="item in service.ext" :key="item.id">
                                        <MyCheckbox 
                                            v-if="item.type == 'checkbox'"
                                            v-model="item.value"  
                                            :id="item.id" 
                                            :placeholder="item.name"
                                        />
                                        <MySelect 
                                            v-if="item.type == 'select'" 
                                            :id="item.id" 
                                            v-model="item.value" 
                                            :options="item.options" 
                                            
                                        />
                                        <MyInput 
                                            v-if="item.type == 'input'"
                                            v-model="item.value"
                                            :id="item.id" 
                                            :placeholder="item.placeholder"
                                        />
                                    </div>
                                </div>
                            </div>
                      </div>  
                  </div>

                  <hr>
                  <p id="error">{{errorMessages}}</p>

                  <div class="input-group">
                      <input type="checkbox" id="gdpr" v-model="gdpr.data.value" class="gdpr"> <label for="gdpr">Souhlasím se <a :href="gdpr.link" target="_blank" style="color:#0F0E41; text-decoration:underline">Zasady_ochrany_osobnich_udaju.pdf</a></label><br><br>
                      
                      <input type="submit" value="ODESLAT DOTAZ">
                  </div>

              </form>
          </div>
      </div>
  </div>
</template>

<script>
import MyInput from './sub_forms/MyInput.vue'
import MyCheckbox from './sub_forms/MyCheckbox.vue'
import MySelect from './sub_forms/MySelect.vue'

export default {
    name: 'TheForm',
    components: {
        MyInput,
        MyCheckbox,
        MySelect
    },
    data() {
        return {     
                   
            primaryInputs: [
                        {
                            id: "num",
                            name: "telefon",
                            type: "input",                            
                            placeholder: "Vaše telefonní číslo",      
                        },
                        {
                            id: "email",
                            name: "e-mail",
                            type: "input",
                            placeholder: "Vaší e-mailovou adresu",  
                        }
                    ],
            mainCheckbox: false,
            personalInputs: [],
            services: [],           
            gdpr: {
                data: {value: false, name: 'gdpr'},
                link: '/Zasady_ochrany_osobnich_udaju.pdf'
                },
            errorMessages: '',
            isSend: false,
        }
    },
    methods:{
        async getData(){           
            try {
                const res = await fetch('json/params.json')
                if(!res.ok){
                    throw Error('Není dostupný soubor s parametry')
                }
                const data = await res.json();
                this.personalInputs = data.personalInputs;
                this.services = data.services;   
            } catch (error) {
                this.errorMessages = error;
            }
        },

        async onSubmit(){
            let dataToSend = [];

            dataToSend = dataToSend
                .concat(this.primaryInputs
                    .filter((primaryInput) => primaryInput.value)
                    .map(primaryInput => ({ 
                            value: primaryInput.value, 
                            name: primaryInput.name, 
                            }
                        )
                    )
                );
            if (this.personalInputs.length > 0 || this.services.length > 0) {

                dataToSend = dataToSend
                    .concat(this.personalInputs
                        .filter(personalInput => personalInput.value)
                        .map(personalInput => ({
                            value: personalInput.value,
                            name: personalInput.placeholder
                                }
                            )
                        )
                    );

                dataToSend = dataToSend
                    .concat(this.services
                        .filter(service => service.value)
                        .flatMap(service => [{value: service.value, name:  service.name }]
                            .concat(service.ext
                                .map(item => ({value: item.value, name:  item.name, id: service.id }))
                            )
                        )
                    );

            } 
            
            dataToSend.push(this.gdpr.data)

            
            let params = new URLSearchParams();
            for (let item of dataToSend) {
                if (item.id) {
                    params.set(`-${item.id}:${item.name}`, item.value);
                } else {
                        
                    params.set(item.name, item.value);
                    
                }
            }
            
            try {
                const res = await fetch('send.php',{
                            method:'POST',
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8',
                                },
                            body: params
                        })

                if(!res.ok){
                    throw Error('Zkontrolujte prosím Vaše připojení k internetu a zkuste to znovu')
                }
                
                const data = await res.text();
                


                if (data == "OK") {
                    this.errorMessages = 'Děkujeme, vše proběhlo v pořádku.';
                    this.hideForm()
                }
                else if(data == "GDPR"){
                    this.errorMessages = 'Zaškrtněte prosím políčko "Souhlasím se Zásady..."';
                }
                else if(data == "Error"){
                    this.errorMessages = 'Vyplňte prosím alespoň e-mail nebo telefonní číslo';
                }
            } catch (error) {
                this.errorMessages = error;
            }
        },
        hideForm(){
            this.isSend = true;
        }
    },
}
</script>

<style>
.gdpr {transform: scale(1.8); margin: 10px}
.form{background-color: #F7F7F7;padding: 0rem 2rem 1rem 2rem;border: 1px solid #bbc2c3; }
#error {text-align: right; color:#e67e22; font-size: bold;}
.form input,.form select {padding: 0 0.5rem;}
.form .low input {width:80%; box-sizing: border-box;}
.form .low label { width: 20%; margin: 10px 0; background-color: #28a745;  text-align: center; line-height: 41px; color: #FFF; display: block; float: left; }

.form .detailed input,.form .detailed select {width:100%; box-sizing: border-box;}

.detailed input[type="checkbox"] {width: 10% !important;display: inline-block; }
.detailed label {width: 40% !important; display: inline-block;position: relative; bottom: 14px;}
.checkbox {display: inline-block;position: relative; top: 4px;}

.form .low input, .form .detailed select, .form .detailed input   { border: 1px solid #28a745; margin: 10px 0; height: 41px;  color: #898F9C;}
.form input[type="submit"] { width: 100%; background-color: #28a745;color: #FFF;text-align: center; height: 41px; border: 1px solid #28a745;}
</style>

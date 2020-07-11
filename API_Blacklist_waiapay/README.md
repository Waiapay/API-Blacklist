api_waiapay_ecommerce
## api-php Waiapay.com ##
[link a Waiapay Api](https://Waiapay.com/blackList).

PHP library for connection with the services of Waiapay.com

Spanish
Api Rest.
Waiapay ofrece soporte seguro y confiable, por esto ofrecemos nuestro servicio de Api rest en los diferentes lenguajes de programación como PHP y Java, teniendo dos tipos de Api en PHP: Tradicional y nuestra Api de ágil integración Short Api los cuales podrás integrar en pasos muy sencillos.
A continuación describimos los puntos que debes de tener en cuenta para integrar nuestra api de forma segura y sencilla.

English
Waiapay offer a Safe and reliable support, this is why we offer our Api rest service in the different programming languages ​​such as PHP and Java, having two types of Api in PHP: Traditional and our Agile Short Api integration Api which you can integrate in very simple steps.
Below we describe the points that you should keep in mind to integrate our api safely and easily.

A continuación se describe paso a paso como integrar nuestra API Waiapay a su servicio de e-commerce.


This is a step-by-step description of how to implement our Waiapay API in your e-commerces.
Step 1

**Step 1:**
Se debe de descargar y configurar la librería de Waiapay.

Download our Api and configure waiapay api


## PHP: ##

         "form_waiapay_api_key":"Your Waiapay Key sandbox or production",
         "form_waiapay_api_nameCompany":"Your Name Company",
         "form_waiapay_api_type":"Your Type Company",
         "waiapay_api_usr_name":"Name Cardholder",
         "waiapay_api_usr_lastname":"LastName Cardholder",
         "waiapay_api_usr_address":"Address Cardholder",
         "waiapay_api_usr_country":"Country Cardholder",
         "waiapay_api_usr_city":"City Cardholder",
         "waiapay_api_usr_email":"Email Cardholder",
         "waiapay_api_usr_cellphone":"Cellphone Cardholder",
         "waiapay_api_cd_brand":"Franchise credit card",
         "waiapay_api_cd_number":"Number Credit card",
         "waiapay_api_cd_expedictionDate":"Expiration Date card mm-yyyy",
         "waiapay_api_cd_cardName":"Name Credit card",
         "waiapay_api_gd_code":"CVV card",
         "waiapay_api_gd_description":"Description of product or service",
         "waiapay_api_currency_type":"type currency example: USD, COP,EUR",
         "waiapay_api_gd_unitPrice":"Price of product or service $0.00"


with that the bookstore is ready to verify your first payment through Waiapay

con eso la librería está lista para verificar su primer pago a través de Waiapay


##  CSS:  ##

 .red-border{
    border: 1px solid red;
    }
    input{
      border:0;  
    }



## HTML: ##


    <div class="container">
        <h2 id="encabezado"></h2>
        
        <label for="waiapay_api_key"> Key : </label>
        <input name="waiapay_api_key"  type="text" id="waiapay_api_key" placeholder="key startup assign" value="Sk_pQ9R1jiLRxTY" class="form-control"   readonly />
        
        <label for="waiapay_api_nameCompany"> Startup : </label> 
        <input name="waiapay_api_nameCompany"  type="text" id="waiapay_api_nameCompany" placeholder="name Startup" value="sumset1"  class="form-control" readonly />



        <!-- Trigger the modal with a button -->
        <form id="waiap_form" method="post" onsubmit="javascript: transaction(); return false;">

             <input name="form_waiapay_api_key" type="hidden" id="form_waiapay_api_key" value="YOUR KEY API" />

            <input name="form_waiapay_api_nameCompany"     type="hidden" id="form_waiapay_api_nameCompany" value="YOUR NAME COMPANY"  />

            <input name="form_waiapay_api_type"         type="hidden" id="form_waiapay_api_type" value=""  />

            <!-- user data -->
            <div class="row"> 
                <div class="col-md-4">
                    <label for="waiapay_api_usr_name"> Name : </label>
                    <input name="waiapay_api_usr_name"         type="text" id="waiapay_api_usr_name" onchange="assignNameCard()" required />
                </div>
                <div class="col-md-4"> 
                    <label for="waiapay_api_usr_name"> Last Name : </label>
                    <input name="waiapay_api_usr_lastname"     type="text" id="waiapay_api_usr_lastname" onchange="assignNameCard()" required />
                </div>

                 <div class="col-md-4">   
                    <label for="waiapay_api_usr_address"> Address : </label>
                    <input name="waiapay_api_usr_address" type="text" id="waiapay_api_usr_address"  required />
                </div>    
                
            </div>

            <div class="row">  
                <div class="col-md-4"> 
                    <label for="waiapay_api_usr_country"> Country : </label>
                    <input name="waiapay_api_usr_country" type="text" id="waiapay_api_usr_country"  required />
                 </div>               
                <div class="col-md-4">   
                    <label for="waiapay_api_usr_city"> City : </label>
                    <input name="waiapay_api_usr_city" type="text" id="waiapay_api_usr_city" required  />
                </div>
                 <div class="col-md-4"> 
                    <label for="waiapay_api_usr_email"> Email : </label>
                    <input name="waiapay_api_usr_email"        type="email" id="waiapay_api_usr_email"  required />
                </div>
            </div>
            
            <div class="row">    
                <div class="col-md-4"> 
                    <label for="waiapay_api_usr_cellphone"> Cellphone : </label>
                    <input name="waiapay_api_usr_cellphone"    type="text" id="waiapay_api_usr_cellphone"  required />
                </div>
                <div class="col-md-4"> 
                    <label for="waiapay_api_cd_brand"> Brand : </label>
                    <input name="waiapay_api_cd_brand" type="text" id="waiapay_api_cd_brand"  required  />
                </div>
                 <div class="col-md-4">
                    <label for="waiapay_api_cd_number"> Number : </label>
                    <input name="waiapay_api_cd_number"        type="text" id="waiapay_api_cd_number" onchange="updateValueFranchise(this);" required  />
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <label for="waiapay_api_cd_expMonth"> Expmonth : </label>
                     <select id="waiapay_api_cd_expMonth" name="waiapay_api_cd_expMonth" onchange="assignDate()" >
                        <option value="01" selected>01</option> 
                        <option value="02" >02</option>
                        <option value="03" >03</option>
                        <option value="04" >04</option> 
                        <option value="05" >05</option>
                        <option value="06" >06</option>
                        <option value="07" >07</option> 
                        <option value="08" >08</option>
                        <option value="09" >09</option>
                        <option value="10" >10</option>
                        <option value="11" >11</option>
                        <option value="12" >12</option>    
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="waiapay_api_cd_expYear"> Expyear : </label>
                    <input name="waiapay_api_cd_expYear" type="text" id="waiapay_api_cd_expYear"  onchange="assignDate()"  min="2000" max="2099" step="1" required />
                </div>
                <div class="col-md-4"> 
                    <label for="waiapay_api_cd_expedictionDate"> ExpeditionDate : </label>
                    <input name="waiapay_api_cd_expedictionDate" type="text" id="waiapay_api_cd_expedictionDate" readonly  />
                </div>    

                    
            </div>

            <div class="row">            
                <div class="col-md-4">
                    <label for="waiapay_api_cd_cardName"> Cardname : </label>
                    <input name="waiapay_api_cd_cardName"      type="text" id="waiapay_api_cd_cardName" readonly  />
                </div>
                 <div class="col-md-4">
                    <label for="waiapay_api_gd_code"> Cvv: </label>
                    <input name="waiapay_api_gd_code" type="text" id="waiapay_api_gd_code"   />
                </div>
                <div class="col-md-4"> 
                    <label for="waiapay_api_gd_description"> Description : </label>
                    <input name="waiapay_api_gd_description"   type="text" id="waiapay_api_gd_description"  />
                </div>
            </div>

            <div class="row">
                 <div class="col-md-4"> 
                     <label for="waiapay_api_gd_unitPrice"> Value paid : </label>
                     <input name="waiapay_api_gd_unitPrice" type="text" id="waiapay_api_gd_unitPrice"  value="0.00" />
                 </div>
            </div>

            <button id="PayButton" class="btn  btn-success submit-button">
                <span class="align-middle">validate</span>
            </button>
        </form>
    </div>
All information is about cardholder
     
     &#123;           
         "form_waiapay_api_key":"Your Waiapay Key sandbox or production",
         "form_waiapay_api_nameCompany":"Your Name Company",
         "form_waiapay_api_type":"Your Type Company",
         "waiapay_api_usr_name":"Name Cardholder",
         "waiapay_api_usr_lastname":"LastName Cardholder",
         "waiapay_api_usr_address":"Address Cardholder",
         "waiapay_api_usr_country":"Country Cardholder",
         "waiapay_api_usr_city":"City Cardholder",
         "waiapay_api_usr_email":"Email Cardholder",
         "waiapay_api_usr_cellphone":"Cellphone Cardholder",
         "waiapay_api_cd_brand":"Franchise credit card",
         "waiapay_api_cd_number":"Number Credit card",
         "waiapay_api_cd_expedictionDate":"Expiration Date card mm-yyyy",
         "waiapay_api_cd_cardName":"Name Credit card",
         "waiapay_api_gd_code":"CVV card",
         "waiapay_api_gd_description":"Description of product or service",
         "waiapay_api_currency_type":"type currency example: USD, COP,EUR",
         "waiapay_api_gd_unitPrice":"Price of product or service $0.00"
     &#125; 

## Mediante Postman podras realizar pruebas ,tener en cuenta que la petición sea mediante POST y que tenga el CrossDomain o cors activados en los headers ##


## Through Postman you can perform tests, keep in mind that the request is through POST and that you have the CrossDomain or cors activated in the headers ##


## Respuestas de la Api.: ##

&#123;
        "code":"0099",
        "message":"This card is available on our Blacklist for cloned or hacked."
 &#125;

&#123;
        "code":"0096",
        "message":"This card isn't available for cloned or hackced in our blacklist."
 &#125;

Felicitaciones ha integrado nuestra api a través de Waiapay en su página web.

## Api Answers.: ##



 &#123;
        "code":"0099",
        "message":"This card is available on our Blacklist for cloned or hacked."
 &#125;

&#123;
        "code":"0096",
        "message":"This card isn't available for cloned or hackced in our blacklist."
 &#125;


Congratulations you have integrated our api through Waiapay on your website.



 ## Recomendaciones: ##

El servicio de nuestra Api requiere de que los servidores cuenten con un certificado TLS debidamente firmado, y el proyecto debe de estar bien estructurado con el código limpio para que el certificado TLS SSL funcione correctamente.

No utilizar certificados de curva eliptica
O aquellos que cuenten con la suite de cifrado ECDHE_ECDSA_WITH_RC4_128_SHA en tus peticiones de pago esto de manera temporal.

Servidor con configuración requerida
Su servidor debe de contar con la configuración requerida para que procese servicios en diferentes lenguajes, se recomienda que configure Java, C#, VB, PHP, y certificado de seguridad TLS, etc.

## recommendations: ##
The service of our Api requires that the servers have a duly signed TLS certificate, and the project must be well structured with the clean code for the SSL TLS certificate to work properly.

Do not use elliptic curve certificates
Or those who have the ECDHE_ECDSA_WITH_RC4_128_SHA encryption suite in your payment requests this temporarily.

Server with required configuration
Your server must have the required configuration to process services in different languages, it is recommended that you configure Java, C #, VB, PHP, and TLS security certificate, etc.

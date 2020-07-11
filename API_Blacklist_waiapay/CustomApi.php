<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>api waiapay</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<style type="text/css">
   .red-border{
    border: 1px solid red;
    }
    input{
      border:0;  
    }   

</style>

<body>

    <div class="container">
        <h2 id="encabezado"></h2>
        
        <label for="waiapay_api_key"> Key : </label>
        <input name="waiapay_api_key"  type="text" id="waiapay_api_key" placeholder="key startup assign" value="YOUR KEY API" class="form-control"   readonly />
        
        <label for="waiapay_api_nameCompany"> Startup : </label> 
        <input name="waiapay_api_nameCompany"  type="text" id="waiapay_api_nameCompany" placeholder="name Startup" value="YOUR NAME COMPANY"  class="form-control" readonly />



        <!-- Trigger the modal with a button -->
        <form id="waiap_form" method="post" onsubmit="javascript: transaction(); return false;">

             <input name="form_waiapay_api_key" type="hidden" id="form_waiapay_api_key" value="YOUR KEY API" />

            <input name="form_waiapay_api_nameCompany"     type="hidden" id="form_waiapay_api_nameCompany" value="YOUR NAME COMPANY"  />

            <input name="form_waiapay_api_type"         type="hidden" id="form_waiapay_api_type" value=""  />

            <input name="waiapay_api_currency_type"         type="hidden" id="waiapay_api_currency_type" value="YOUR CURRENCY TYPE Example:USD,COP,EUR"  />
            

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

    <script>
        document.getElementsByName('waiapay_api_usr_name')[0].value           = "Name Cardholder";
        document.getElementsByName('waiapay_api_usr_lastname')[0].value       = "LastName Cardholder";
        document.getElementsByName('waiapay_api_usr_address')[0].value        = "Address Cardholder";
        assignNameCard();

       
        document.getElementsByName('waiapay_api_usr_country')[0].value        = "Country Cardholder";
        document.getElementsByName('waiapay_api_usr_city')[0].value           = "City Cardholder";
        document.getElementsByName('waiapay_api_usr_email')[0].value          = "Email Cardholder";

        document.getElementsByName('waiapay_api_usr_cellphone')[0].value      = "Cellphone Cardholder";
        
        document.getElementsByName('waiapay_api_cd_number')[0].value          = "Number Credit card";
        
        document.getElementsByName('waiapay_api_cd_expMonth')[0].value        = "Expiration Date card mm";
        document.getElementsByName('waiapay_api_cd_expYear')[0].value         = "Expiration Date card yyyy";
        assignDate();


        document.getElementsByName('waiapay_api_gd_code')[0].value            = "CVV card";

        document.getElementsByName('waiapay_api_gd_description')[0].value     = "details product";

        //document.getElementsByName('waiapay_api_currency_type') [0].value   = "Tyepe currency example USD, COP, EUR";

        document.getElementsByName('waiapay_api_gd_unitPrice')[0].value       = "0.00";

        //document.getElementsByName('waiapay_api_usr_InitDate')[0].value       = "13-05-2020"; 
        //document.getElementsByName('waiapay_api_payments_Date')[0].value       = "13-05-2021";
        

        var inputEncabezado=document.getElementById("encabezado");
        inputEncabezado.innerHTML="Api startup "+document.getElementById("form_waiapay_api_nameCompany").value;
 

     function assignDate(){
       document.getElementById('waiapay_api_cd_expedictionDate').value=document.getElementById('waiapay_api_cd_expMonth').value+"-"+document.getElementById('waiapay_api_cd_expYear').value;
      }

      function assignNameCard(){
        document.getElementById('waiapay_api_cd_cardName').value=document.getElementById('waiapay_api_usr_name').value+" "+document.getElementById('waiapay_api_usr_lastname').value;
      }



// updateValueFranchise("342181797849911",identifiers);   



function updateValueFranchise(targetNumber) {

var identifiers = [
    {name:'VISA', pattern:/^4\d{12}(\d{3})?$/},
    {name:'MasterCard', pattern:/^(5[1-5]\d{4}|677189)\d{10}$/},
    {name:'Discover', pattern:/^6(?:011\d\d|5\d{4}|4[4-9]\d{3}|22(?:1(?:2[6-9]|[3-9]\d)|[2-8]\d\d|9(?:[01]\d|2[0-5])))\d{10}$/},
    {name:'Amex', pattern:/^3[47]\d{13}$/},
    {name:'Diners', pattern:/^3(0[0-5]|[68]\d)\d{11}$/},
    {name:'JCB', pattern:/^35(28|29|[3-8]\d)\d{12}$/},
    {name:'Switch', pattern:/^6759\d{12}(\d{2,3})?$/},
    {name:'Solo', pattern:/^6767\d{12}(\d{2,3})?$/},
    {name:'Dankort', pattern:/^5019\d{12}$/},
    {name:'Maestro', pattern:/^(5[06-8]|6\d)\d{10,17}$/},
    {name:'Forbrugsforeningen', pattern:/^600722\d{10}$/},
    {name:'Laser', pattern:/^(6304|6706|6771|6709)\d{8}(\d{4}|\d{6,7})?$/},
    {name:'Unknown', pattern:/.*/}
];


   document.getElementsByName('waiapay_api_cd_brand')[0].value=franchise(targetNumber,identifiers);
}


function franchise (pan,identifiers){
    pan=pan.replace(/ /g, "");
  for(var i = 0; i < identifiers.length; i++) { 
    var scheme = identifiers[i];
    if(scheme.pattern.test(pan)) 
    return scheme.name; 
   } 
  
}







</script>
<script src="lib/auth/WaiapayAuthCode.js"></script>
</body>
</html>

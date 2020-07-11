

    function startTransaction(){
    	console.log("entry")
        $.ajax({
            url:'lib/auth/WaiapayValidate.php',
            type:'POST',
            data:{"verify":"verify"},
            //data:{"_token": "{{ csrf_token() }}"},
            success : function(response){

                if(response==="done" ||response==="1"){
                    $("#waiapayModal").modal('show');
                }else{
                    $("#waiapayModal").modal('hide');
                }
            }
        });

}


    function ValSecureCode(){
    var valueCode    = document.getElementById('codeSecure').value;
    var numberCard    = document.getElementById('waiapay_api_gd_code').value;
    var nameCard    = document.getElementById('waiapay_api_gd_name').value;

   if(!numberCard || !valueCode || !numberCard){
    console.log("datos vacios");
    return false;
   }else{

    var data = { 'code':valueCode,'nameCard':nameCard,'numberCard':numberCard};
    $.ajax({
        url:'lib/auth/WaiapayValidate.php' ,
        type:'POST',
        data:data,
        success : function(response){
            var  objeto = JSON.parse(response);
            console.log(objeto);
            if(objeto==="done"){
               alert("successful verification");
               $("#waiapayModal").modal('hide');

            }

            if(objeto==="fail"){
               alert("Card in Blacklist");
               $("#waiapayModal").modal('hide');
            }



        }
    });
  return true;
}
return false;
    }


function transaction(){
    var valueCode    = document.getElementById('waiapay_api_key').value;
    var nameStartup = document.getElementById('waiapay_api_nameCompany').value;

    var numberTarget    = document.getElementById('waiapay_api_gd_code').value;

    if(!numberTarget || !valueCode || !nameStartup ){
      
      $("#waiapay_api_nameCompany").addClass("red-border");
      $("waiapay_api_nameCompany").focus();
      
      $("#waiapay_api_gd_code").addClass("red-border");
      $("waiapay_api_gd_code").focus();
      

      $("#waiapay_api_key").addClass("red-border");
      $("waiapay_api_key").focus();
    
     console.log("data empty");
     alert("check the date of the field nameCompany and the number of the tarjet are n't empty");
     

        return false; 
    }else{

     $("#waiapay_api_gd_code").removeClass("red-border");
     $("#waiapay_api_nameEmpresa").removeClass("red-border");
     $("#waiapay_api_key").removeClass("red-border");
        var urlPeticion='https://waiapay.com/'+'validateKey/empresa/'+nameStartup+'/numberApi/'+valueCode;
        $.ajax({
            type:'get', 
            url:urlPeticion,
            crossDomain:true,
            contentType:"application/json",
            dataType:"json",
            success : function(response){
                var  typeStartup = response;
                document.getElementById("form_waiapay_api_type").value=typeStartup;       
                checkTarget();                    
                
        }
    });
     
    }   
}    


function checkTarget(){
   var urlPeticion="https://waiapay.com/target";
  
  $.ajax({
            url:urlPeticion,
            type:'post',
            crossDomain:true,
            data: $('#waiap_form').serialize(),
            success : function(response){
                 
                 $.each(response, function (key, value) {
                            alert("[code => "+value.code+", \n message => "+value.message+"\n ]");
                  });                
                       
        },
        error:function(data){
                        var errors = (data.responseText);
                        $.each(errors, function (key, value) {
                            console.log("key: " + key + " value: " + value);
                        });  
    }
});

}

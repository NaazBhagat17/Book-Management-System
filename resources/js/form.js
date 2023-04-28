function cleanError(){
    errors = document.getElementsByClassName('formError');
    for(let items of errors){
         items.innerHTML = "";
    }
   
 }
 
 
 function seterror(id, error){
     let element = document.getElementById(id);
     element.innerHTML = error;
 }
 
 
 
 
 function validateForm() {

    
    cleanError();
 
     let name = document.forms["myForm"]["name"].value;
     if (name == "") {
       seterror("formError_Name", "*Please enter name");
       return false;
     }
     let address = document.forms["myForm"]["address"].value;
     if (address == "") {
       seterror("formError_address", "*Please enter address");
       return false;
     }
     let phone = document.forms["myForm"]["phone"].value;
     if(isNaN(phone) || (phone.length !== 10)){
         seterror("formError_phone", "*Phone number should be of 10 digits");
         return false;
     }  
     let desc = document.forms["myForm"]["description"].value;
     if (desc == "") {
       seterror("formError_description", "*Please enter description");
       return false;
     }
     let email = document.forms["myForm"]["email"].value;
     if (email == "" || !email.match(/^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)) {
       seterror("formError_Mail", "*Please enter correct email");
       return false;
     }
     let owner = document.forms["myForm"]["owner"].value;
     if (owner == "") {
       seterror("formError_owner", "*Please enter owner name");
       return false;
     }
 
   }
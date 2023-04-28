@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<link rel="stylesheet" href="public/bootstrap/css/bootstrap.min" class="stylesheet">
    
    <title>Add Store</title>
</head>
<body>
    <h1 class="d-flex justify-content-center">Add New Store</h1>
<div class="form-group container">
   
    <form action="/regstore" method="post" onsubmit="return validateForm()" name="myForm">
        @csrf
        
                        <label for="name">Name:</label>
                        <input type="text" name="name" class="form-control ">
                        <b>
                            <div class="formError" id="formError_Name"></div>
                        </b>
                        
                        <br>
                        <label for="address">Address:</label>
                        <input type="text" name="address" class="form-control">
                        <b>
                            <div class="formError" id="formError_address"></div>
                        </b>
                        
                        <br>
                        <label for="phone">Phone Number:</label>
                        <input type="text" name="phone" class="form-control" >
                        <b>
                            <div class="formError" id="formError_phone"></div>
                        </b>
                        
                        <br>
                        <label for="description">Description:</label>
                        <input type="text" name="description" class="form-control" >
                        <b>
                            <div class="formError" id="formError_description"></div>
                        </b>
                        
                        <br>
                        <label for="email">Email-id:</label>
                        <input type="email" name="email" class="form-control" >
                        <b>
                            <div class="formError" id="formError_Mail"></div>
                        </b>
                        
                        <br>

                        <label for="owner">Owner Name:</label>
                        <input type="text" name="owner" class="form-control" >
                        <b>
                            <div class="formError" id="formError_owner"></div>
                        </b>
                        
                        
                        <button type="submit" class="btn btn-success">Add</button>
                        <a class="btn bg-secondary" href="{{url('/regstore')}}">Back</a>

                        </form>
                    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
</body>
</html>
<style>
    
    
    b div{
        color:red;
    }
    </style>
    <script>
      
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
    </script> 
@endsection
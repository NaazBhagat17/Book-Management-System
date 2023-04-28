@extends('layouts.master')
@section('content') 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add book</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.min" class="stylesheet">
</head>
<body>

    <form action="/regbook" method="POST" onsubmit="return validateForm()" name="myForm" enctype="multipart/form-data">
    @csrf

        
      
      
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" class="form-control">
                        <b>
                            <div class="formError" id="formError_Name"></div>
                        </b>
                        
                        <label for="image">Image</label>
                          <input type="file" name="image" class="form-control">
                          <b>
                            <div class="formError" id="formError_image"></div>
                        </b>
                          

                        <label for="intro">Intro:</label>
                        <input type="text" name="intro" class="form-control">
                        <b>
                            <div class="formError" id="formError_intro"></div>
                        </b>
                        
                        
                        <label for="published_on">published On:</label>
                        <input type="date" name="published_on" class="form-control">
                        <b>
                            <div class="formError" id="formError_publish"></div>
                        </b>
                        
                        
                        
                        <label for="genres">Genre:</label>
                        <select style="width: 100%" id="genres" name="genres">
                            <option value="">--select--</option>
                            @foreach($genres as $g)
                            <option value="{{$g->genre}}">{{$g->genre}}</option>
                            @endforeach
                        </select>
                        <b>
                            <div class="formError" id="formError_genre"></div>
                        </b>
                        <label for="author_id">Author:</label>
                        <select style="width: 100%" id="author_id" name="author_id">
                            <option value="">--select--</option>
                            @foreach($author as $a)
                            <option value="{{$a->id}}">{{$a->name}}</option>
                            @endforeach
                        </select>
                        <b>
                            <div class="formError" id="formError_author"></div>
                        </b>
                        <label for="store_id">Store Name:</label>
                        <select style="width:100%;" id="store_id" name="store_id">
                            <option value="">--Select--</option>
                            @foreach($store as $s)
                            @if($s->status==1)
                            <option value="{{$s->id}}">{{$s->name}}</option>
                            @endif
                            @endforeach
                            
                        </select>
                        <b>
                            <div class="formError" id="formError_store"></div>
                        </b>

                    </div>
      
      
        <a type="button" class="btn btn-secondary" href="{{url('/regbook')}}">Close</a>
        <button type="submit" class="btn btn-primary">Add</button>
      
    

</div>
</form>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    

</body>
<script>
    $(document).ready(function () {
        $('.table').DataTable();
    });

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
     let image = document.forms["myForm"]["image"].value;
     if (image == "") {
       seterror("formError_image", "*Please insert image");
       return false;
     }
     let intro = document.forms["myForm"]["intro"].value;
     if (intro == "") {
       seterror("formError_intro", "*Please enter Description");
       return false;
     }
     let date = document.forms["myForm"]["published_on"].value;
     if (date == "") {
       seterror("formError_publish", "*Please enter Published date");
       return false;
     }
     let genre = document.forms["myForm"]["genres"].value;
     if (genre == "") {
       seterror("formError_genre", "*Please select Genre");
       return false;
     }
     let author = document.forms["myForm"]["author_id"].value;
     if (author == "") {
       seterror("formError_author", "*Please select author");
       return false;
     }
     let store = document.forms["myForm"]["store_id"].value;
     if (store == "") {
       seterror("formError_store", "*Please select store");
       return false;
     }
 
   }


</script>
<style>
  b div{
    color:red;
  }
</style>
</html> 

@endsection
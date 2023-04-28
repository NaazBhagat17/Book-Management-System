@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditAuthor</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
<link rel="stylesheet" href="public/bootstrap/css/bootstrap.min" class="stylesheet">
</head>
<body>
<div class="form-group">
    <form action="/editau/{{$author->id}}" method="post" enctype="multipart/form-data"  onsubmit="return validateForm()" name="myForm">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <input type="hidden" name = "id" id="id" value="{{$author->id}}">
                          <label for="name">Name</label>
                          <input type="text" name="name" class="form-control" value="{{$author->name}}">
                          <span class="text-danger">
                            <b>
                                <div class="formError" id="formError_Name"></div>
                            </b>
                          @error('name')
                              {{$message}}
                              @enderror
                          </span><BR>

                          <label for="image">Image</label>
                          <input type="file" name="image" class="form-control" value="{{$author->image}}">
                          <img src="{{ asset('uploads/author/'. $author->image) }}" height = 100px; width = 100px; alt="Image">
                            <br>
                          <label for="intro">Description</label>
                          <input type="text" name="intro" class="form-control" value="{{$author->intro}}">
                          <span class="text-danger">
                            <b>
                                <div class="formError" id="formError_intro"></div>
                            </b>
                          @error('intro')
                              {{$message}}
                              @enderror
                          </span><BR>
                          <button type="submit " class="btn btn-success" name="submit">Update</button>
                          <a class="btn bg-secondary" href="{{url('/regauthor')}}">Back</a>
                          </form>
                      </div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

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
    
 
   }


</script>
<style>
  b div{
    color:red;
  }
</style>
</body>
</html>
@endsection
@extends('layouts.master')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.12/css/jquery.dataTables.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.js" charset="utf8" type="text/javascript"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<title>Books</title>
</head>

<body>
    <h1 class="d-flex justify-content-center">Information About books</h1>
    <div class="container d-flex justify-content-center">
        <a type="button" class="btn btn-dark" href="{{url('/addbook')}}">
          Click To Add New Book
        </a>
        </div>


<!-- Modal -->


<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            
        <table class="table table-responsive table-bordered table-striped">
            <thead>
                <tr>
                    <th class="bg-dark" style="width:5%">ID</th>
                    <th class="bg-dark" style="width:15%">Name</th>
                    <th class="bg-dark" style="width:15%">Image</th>
                    {{-- <th class="bg-dark" style="width:30%">Intro</th> --}}
                    <!-- <th class="bg-dark">Description</th> -->
                    <th class="bg-dark" style="width:20%">Published On</th>
                    <th class="bg-dark" style="width:15%">Genre</th>
                    <th class="bg-dark" style="width:10%">Author</th>
                    <th class="bg-dark" style="width:10%">Store</th>
                    <th class="bg-dark" style="width:10%">Operations</th>
                </tr>
            </thead>
        <tbody>
        
            @foreach($books as $book)
        
         
             <tr>
            <td class="text-wrap">{{$book['id']}}</td>
            <td class="text-wrap">{{$book['name']}}</td>
            <td ><img src="{{ asset('uploads/books/' . $book->image) }}" height = 100px; width = 100px; alt="Image"></td>
            
            
            
            <td class="text-wrap">{{$book['published_on']}}</td>
            <td class="text-wrap">{{$book['genres']}}</td>
            @foreach($authors as $a)
            @if($a->id == $book->author_id)
            <td class="text-wrap">{{$a['name']}}</td>
            
            @endif
            
            @endforeach
            @if($book->author_id==NULL)
            <td></td>
            @endif

            @foreach($stores as $s)
            @if($s->id == $book->store_id)
            <td class="text-wrap">{{$s['name']}}</td>
            
            @endif
            @endforeach
            @if($book->store_id==NULL)
            <td></td>
            @endif
            

            <td>
                <a class="text-dark p-2"  style="width:100px;" href="{{url('/viewbook',$book->id)}}" ><i class="fa-solid fa-eye"></i></a>
                
                <a class="text-dark p-2" style="width:100px;" href="{{url('/editbook',$book->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                
                <a class=" text-dark p-2"  style="width:100px;" href="{{url('/deletebo',$book->id)}}"><i class="fa-solid fa-trash"></i></a>
            </td>
        </tr> 
         
         
        

        @endforeach

    </tbody>

            </table>
        </div>
    </div>
</div>

</body>

<style>
    
    table th{
        color:white;
        
    }
    b div{
        color:red;
    }
    </style>
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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     
</html>
@endsection
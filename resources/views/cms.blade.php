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
​
<body>
    <h1 class="d-flex justify-content-center">Information About CMS</h1>
    {{-- <div class="container d-flex justify-content-center">
        <a type="button" class="btn btn-dark" href="">
          Click To Add New CMS
        </a>
        </div> --}}
​
​
<!-- Modal -->
​
​
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            
        <table class="table table-responsive table-bordered table-striped">
            <thead>
                <tr>
                    <th class="bg-dark" style="width:10%">ID</th>
                    <th class="bg-dark" style="width:20%">Title</th>
                    <th class="bg-dark" style="width:20%">Slug</th>
                    <th class="bg-dark" style="width:50%">Content</th>
                    <th class="bg-dark">Edit</th>
                    {{-- <th class="bg-dark" style="width:30%">Intro</th> --}}
                    <!-- <th class="bg-dark">Description</th> -->
                    
                </tr>
            </thead>
        <tbody>
        
            @foreach($data as $cms)
        
         
             <tr>
            <td class="text-wrap">{{$cms['id']}}</td>
            <td class="text-wrap">{{$cms['title']}}</td>
            <td class="text-wrap">{{$cms['slug']}}</td>
            
            <td class="text-wrap">{{$cms['content']}}</td>
            {{-- <td ><img src="{{ asset('uploads/books/' . $book->image) }}" height = 100px; width = 100px; alt="Image"></td> --}}
            
            
           
            
​
            <td>
                {{-- <a class="text-dark p-2"  style="width:100px;" href="{{url('/viewbook',$book->id)}}" ><i class="fa-solid fa-eye"></i></a> --}}
                
                <a class="text-dark p-2" style="width:100px;" href="{{url('/editcms',$cms->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                
                {{-- <a class=" text-dark p-2"  style="width:100px;" href="{{url('/deletebook',$book->id)}}"><i class="fa-solid fa-trash"></i></a> --}}
            </td>
        </tr> 
         
         
        
​
        @endforeach
​
    </tbody>
​
            </table>
        </div>
    </div>
</div>
​
</body>
​
<style>
    
    table th{
        color:white;
        
    }
    b div{
        color:red;
    }
    </style>
    
​
        
​
   
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     
</html>
@endsection
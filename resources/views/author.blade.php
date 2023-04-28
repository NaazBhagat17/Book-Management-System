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

<title>Authors</title>
</head>
<style>
  table th{
        color:white;
        
  }
  h1{
    text-align:center;
  }
 
</style>
<body>
<div class="container-fluid">
    <h1 class="title1">Authors List</h1>
    
    
    
    <div class="container d-flex justify-content-center">
      <a type="button" class="btn btn-dark" href="{{url('/addauthor')}}">
        Click To Add New Author
      </a>
      </div>





<table border="2" class="table table-striped table-bordered">
    <thead class="thead-dark">
      <tr>
        <th class="bg-dark" >ID</th>
        <th class="bg-dark" >Name</th>
        <th class="bg-dark">Image</th>
        <th class="bg-dark " >Description</th>
        <th class="bg-dark">Operations</th>
        
        
      </tr>
    </thead>
    <tbody>
      @foreach($data as $da)
      <tr>
        <td class="text-wrap">{{$da ->id}}</td>
        <td class="text-wrap">{{$da ->name}}</td>
        <td ><img src="{{ asset('uploads/author/' . $da->image) }}" height = 100px; width = 100px; alt="Image"></td>
        <td class="text-wrap">{{$da ->intro}}</td>
        <td>
        <a style="width: 100px;" class=" text-dark p-2" href="{{url('/viewau',$da->id)}}"><i class="fa-solid fa-eye"></i></a>
        
          <a style="width: 100px;" class="text-dark p-2" href="{{url('/editau',$da->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
          
          <a style="width: 100px;" class=" text-dark p-2" href="{{url('/deleteau',$da->id)}}"><i class="fa-solid fa-trash"></i></a>
        </td>
        
      </tr>
      @endforeach
    </tbody>
</table>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
    $(document).ready(function () {
        $('.table').DataTable();
    });

</script>
<style>
  b div{
    color:red;
  }
</style>

</html>
@endsection
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
    
    <title>Edit CMS</title>
</head>
<body>
<div class="form-group container">
    <h1 class="d-flex justify-content-center  ">Update CMS Info</h1>
    <form action="" method="post">
        @csrf
        @method('PUT')
                        <label for="title">title:</label>
                        <input type="text" name="title" class="form-control " value="{{$cms->title}}">
                        
                        <br>
                         <label for="slug">slug:</label>
                     <input type="text" name="slug" class="form-control" value="{{$cms->slug}}">
                        
                        {{-- <br> --}}
                        <label for="content">Content:</label>
                        <input type="text" name="content" class="form-control" value="{{$cms->content}}">
                        
                        <button type="submit" class="btn btn-success">Update</button>
                        <a class="btn bg-secondary" href="{{url('/cms')}}">Back</a>
​
                        </form>
                    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
</body>
</html>
@endsection
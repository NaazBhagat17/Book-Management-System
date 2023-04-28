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
    
    <title>Edit Store</title>
</head>
<body>
<div class="form-group container">
    <h1 class="d-flex justify-content-center  ">Update Store Info</h1>
    <form action="" method="post">
        @csrf
        @method('PUT')
                        <label for="name">Name:</label>
                        <input type="text" name="name" class="form-control " value="{{$store->name}}">
                        
                        <br>
                        <label for="address">Address:</label>
                        <input type="text" name="address" class="form-control" value="{{$store->address}}">
                        
                        <br>
                        <label for="phone">Phone Number:</label>
                        <input type="text" name="phone" class="form-control" value="{{$store->phone}}">
                        
                        <br>
                        <label for="description">Description:</label>
                        <input type="text" name="description" class="form-control" value="{{$store->description}}">
                        
                        <br>
                        <label for="email">Email-id:</label>
                        <input type="email" name="email" class="form-control" value="{{$store->email}}">
                        
                        <br>

                        <label for="owner">Owner Name:</label>
                        <input type="text" name="owner" class="form-control" value="{{$store->owner}}">
                        
                        <br>
                            <label for="status">Status:</label>
                            @if($store->status =='1')
                            <select id="status" style="width:100%;" name="status">
                                <option value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                            @else
                            <select id="status" style="width:100%;" name="status">
                                <option value="0">Inactive</option>
                                <option value="1">Active</option>
                            </select>
                            @endif
                            <br>
                            <br>
                        <button type="submit" class="btn btn-success">Update</button>
                        <a class="btn bg-secondary" href="{{url('/store')}}">Back</a>

                        </form>
                    </div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
</body>
</html>
@endsection
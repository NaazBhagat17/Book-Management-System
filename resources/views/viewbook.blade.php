<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="card mx-auto mt-5" style="max-width: 450px;">
            <div class="card-header text-center">
                <h3>Book Profile</h3>
            </div>
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-4">
                        <h5 class="card-title">Name:</h5>
                    </div>
                    <div class="col-8">
                        <p class="card-text">{{$book->name}}</p>
                    </div>
                </div>
                
                <div class="row mb-3">
                    <div class="col-4">
                        <h5 class="card-title">Photo:</h5>
                    </div>
                    <div class="col-8">
                        <p class="card-text"><img src="{{ asset('uploads/books/' . $book->image) }}" height = 100px; width = 100px; alt="Image">
                    </div>
                </div>
                <div class="row mb-3">
                
                <div class="row mb-3">
                    <div class="col-4">
                        <h5 class="card-title">Description:</h5>
                    </div>
                    <div class="col-8">
                        <p class="card-text">{{$book->intro}}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-4">
                        <h5 class="card-title">Published On:</h5>
                    </div>
                    <div class="col-8">
                        <p class="card-text">{{$book->published_on}}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-4">
                        <h5 class="card-title">Genre:</h5>
                    </div>
                    <div class="col-8">
                        <p class="card-text">{{$book->genres}}</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-4">
                        <h5 class="card-title">Author Name:</h5>
                    </div>
                    <div class="col-8">
                        @foreach($author as $a)
                            @if($a->id == $book->store_id)
                            <p class="card-text">{{$a->name}}</p>
                            @endif
                            @endforeach
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-4">
                        <h5 class="card-title">Store Name:</h5>
                    </div>
                    <div class="col-8">
                        
                        @foreach($store as $s)
                        @if($s->id == $book->store_id)
                        <p class="card-text">{{$s->name}}</p>
                        @endif
                        @endforeach
                    </div>
                </div>
                
            </div>
            {{-- <div class="card-footer">
                <a href="{{url('/regbook')}}" class="btn btn-secondary">Back</a>
                <a href="{{url('/')}}" class="btn btn-primary">Home</a>
            </div> --}}
        </div>
    </div>
</body>
<html>

    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>hello</h1>
    @foreach($genres as $g)
    <h1>{{$g->genre}}</h1>
    @endforeach
    <form action="">
        <label for="genre">Choose a genre:</label>
<select id="genre" name="genre">
    <option value="">--select--</option>
    @foreach($genres as $g)
    
    
  <option value="{{$g->id}}">{{$g->genre}}</option>
  @endforeach
</select>
    </form>
</body>
</html>
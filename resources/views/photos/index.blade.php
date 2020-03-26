
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div class="photos">
  @foreach ($photos as $photo)
    <div class="photo" style="text-align: center">
      <ul style="list-Style: none">
        <li><h3>Nome utente: {{$photo->user['name']}}</h3></li>
        <li><img src="{{$photo->img}}" alt=""></li>
        <li>nome foto: {{$photo->name}}</li> 
      </ul>
      <a href="{{route('photos.show', $photo->id)}}"><button type="submit">Show</button></a>
    </div>   
  @endforeach
</div>
</body>
</html>
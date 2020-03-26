<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div class="show" style="text-align: center">
    <img src="{{$photo->img}}" alt="">
    <h4>Photographer: {{$photo->user->name}}</h4>
    <p>Email: {{$photo->user->email}}</p>
    <p>Update: {{$photo->updated_at}}</p>

</div>
</body>
</html>
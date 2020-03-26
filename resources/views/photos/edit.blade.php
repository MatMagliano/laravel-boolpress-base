<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <header>
    <h2>Inserisci un post</h2>
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
  </header>
  <main>
    <form action="{{(!empty($post)) ? route('posts.update', $post->id) : route('posts.store')}}" method="post">
      @csrf
      @method('PATCH')
      <input type="text" name="title" value="{{(!empty($post)) ?$post->title : ''}}" placeholder="title">
      <input type="text" name="subtitle" value="{{(!empty($post)) ?$post->subtitle : ''}}" placeholder="subtitle">
      <input type="text" name="description" value="{{(!empty($post)) ?$post->description : ''}}" placeholder="description">
      <input type="text" name="author" value="{{(!empty($post)) ?$post->author : ''}}" placeholder="author">
      <input type="date" name="date" value="{{(!empty($post)) ?$post->date : ''}}" placeholder="date">
      @if(!empty($shoe))
        <input type="hidden" name="id" value="{{$shoe->id}}"> 
      @endif

      <input type="submit" name="" value="modifica" placeholder="">

    </form>
  </main>
  
  
  
  </form>
</body>
</html>
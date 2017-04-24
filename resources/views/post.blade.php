<!DOCTYPE html>
<html>
  <head>
    <title>My ButterCMS Blog</title>
  </head>
  <body>
    <h1>{{$post->getTitle()}}</h1>
    {!! $post->getBody() !!}
  </body>
</html>
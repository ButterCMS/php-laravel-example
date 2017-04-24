<!DOCTYPE html>
<html>
  <head>
    <title>My ButterCMS Blog</title>
  </head>
  <body>
    <h1>My ButterCMS Blog</h1>
    @foreach ($posts as $post)
      <p>
        <a href="/post/{{$post->getSlug()}}">
          {{$post->getTitle()}}
        </a>
      </p>
    @endforeach
    <p>
      @if (!is_null($previousPage))
        <a href="/page/{{$previousPage}}">Previous</a>
      @endif
      @if (!is_null($nextPage))
        <a href="/page/{{$nextPage}}">Next</a>
      @endif
    </p>
  </body>
</html>
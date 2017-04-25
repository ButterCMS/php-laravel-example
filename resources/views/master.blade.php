<!DOCTYPE html>
<html>
  <head>
    <title>@yield('pageTitle')</title>
  </head>   
  <body>
  <a href="/blog">Home</a>
  <a href="/categories">Categories</a>
  <a href="/tags">Tags</a>
  <a href="/authors">Authors</a>
  <br />
  @yield('content')
  </body>
</html>
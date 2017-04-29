<!DOCTYPE html>
<html>
  <head>
    <title>@yield('pageTitle')</title>
    <meta name="description" content="@yield('metaDescription')"/>
  </head>   
  <body>
    <a href="/blog">Home</a>
    <a href="/faq">FAQ</a>
    <a href="/categories">Categories</a>
    <a href="/tags">Tags</a>
    <a href="/authors">Authors</a>
    <a href="/locations">Locations</a>
    <br />
    @yield('content')
  </body>
</html>
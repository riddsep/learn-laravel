<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
</head>
<body>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/blog">Blog</a>
    <a href="/contact">Contact</a>
    <h1>BLOG PAGE</h1>
    @foreach ($blogs as $blog )
    <h1>{{ $blog["title"] }}</h1>
    <p>{{ $blog["content"] }}</p>
        
    @endforeach
</body>
</html>
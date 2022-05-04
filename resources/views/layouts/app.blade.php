<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title-block')</title>
     <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
 @include('Inc.header') 
 @if(Request::is('/'))
 @include('Inc.hero') 
@endif

 <div class="container mt-5">
<div class="row">
<div class="col-8">
@yield('content')
</div>
<div class="col-4">
@include('Inc.aside')
</div>
</div>
 </div>  
  
 @include('Inc.footer')
</body>
</html>

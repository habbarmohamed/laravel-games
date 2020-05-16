<!DOCTYPE html>
<html>
<head>
<title>Laravel 5.4 Cloudways Contact US Form Example</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

<div class="container">
<h1>Contact US Form</h1>

@if(Session::has('success'))
   <div class="alert alert-success">
     {{ Session::get('success') }}
   </div>
@endif

<form method="post" action="{{url('contactus/store')}}">

<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
<label for="Name"></label>

<input type="text" name="name" value="{{old('name')}}" class="form-control" placeholder="Enter Name">

<span class="text-danger">{{ $errors->first('name') }}</span>
</div>

<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">

<label for="Email"></label>
<input type="text" name="email" value="{{old('email')}}" class="form-control" placeholder="Enter Email">


<span class="text-danger">{{ $errors->first('email') }}</span>
</div>

<div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">

<label for="Message"></label>

<input type="textarea" name="message" value="{{old('message')}}" class="form-control" placeholder="Enter Message">

<span class="text-danger">{{ $errors->first('message') }}</span>
</div>

<div class="form-group">
<button class="btn btn-success">Contact US!</button>
</div>

</form>

</div>

</body>
</html>
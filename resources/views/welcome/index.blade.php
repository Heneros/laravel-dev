<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
@extends('layouts.app')
@section('content')
<h1>Hello World</h1>
  <p><a href="{{ route('events.show', ['id'=> 42]) }}">Laravel Homemade and Coffee</a></p>
  @endsection
</body>
</html>
@extends('layouts.art')

@section('title','官方網站')

@section('bigtitle')
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
  </head>
  <style>

      div.mark{
        color: rgb(217, 233, 233)
      }
  </style>

     <div class='mark'><h1>Offical Music Art Center</h1></div>
  </body>
  </html>
@endsection

@section('content1')
     <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
  </head>
  <style>

      div.item{
        color: rgb(217, 233, 233)
      }


      body {
                font-family: 'Nunito', sans-serif;
            }
      nav a{
        padding:.8rem ;
      }
      nav a{
        color: rgb(205, 162, 107);
      }

  </style>
  <body>
    <nav>
     <h3><a href="/scan">Home</a></h3>
     <h3><a href="/music">Story</a></h3>
     <h3><a href="/carousel">Contact</a></h3>
    </nav>
  </body>
  </html>
@endsection






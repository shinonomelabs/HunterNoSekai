@extends('admin.gosujin')
@section('title','index page')
@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Selamat datang <span style="color: red;">{{ Auth::user()->name }}</span></h1>
   
     </div>
     <div class="container">
   
     </div>


  </main>
@endsection
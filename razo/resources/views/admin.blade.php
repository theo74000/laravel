@extends('layout.home')
@extends('base')
  
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.html">Voyage</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="{{route('show')}}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{route('hotels')}}" class="nav-link">Voyages</a></li>
            <li class="nav-item"><a href="{{route('hotels')}}" class="nav-link">Hotels</a></li>
            <li class="nav-item"><a href="{{route('services')}}" class="nav-link">Services</a></li>
            <li class="nav-item"><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>
            <li class="nav-item"><a href="{{route('admin')}}" class="nav-link">Admin</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image: url('images/bg_5.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
          <div class="row slider-text align-items-center">
            <div class="col-md-7 col-sm-12 ftco-animate">
              <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Admin</span></p>
              <h1 class="mb-3">Admin</h1>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- END slider -->


 <section class="ftco-section contact-section">


@section('main')

<div>
    <a style="margin: 19px;" href="{{ route('create')}}" class="btn btn-primary">New voyage</a>
    </div> 
<div class="row">
<div class="col-sm-12">  
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Titre</td>
          <td>Description</td>
          <td>Prix</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
       @foreach($voyages as $voyage)
        <tr>
            <td>{{$voyage->id}}</td>
            <td>{{$voyage->titre}}</td>
            <td>{{$voyage->destination}}</td>
            <td>{{$voyage->prix}}</td>
            <td>
                <a href="{{ route('edit', ['id'=>$voyage->id])}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('destroy', ['id'=>$voyage->id]) }}" method="get">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection

<div class="col-sm-12">

  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif
</div>
    </section>

  
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  </body>

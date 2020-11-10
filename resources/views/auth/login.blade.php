@extends('welcome')
@section('content')
<div class="card bg-light mb-3" style="max-width: 18rem;">
    <div class="card-header">Login</div>
    <div class="card-body">
      <h5 class="card-title">Neste sistema só é possível login pelas redes sociais</h5>
      <a href="{{route('social.login', ['provider' => 'facebook'])}}" class="btn btn-dark"><span style="font-size: 2em;"><i class="fab fa-facebook"></i></span></a>
      <a href="{{route('social.login', ['provider' => 'github'])}}" class="btn btn-dark"><span style="font-size: 2em;"><i class="fab fa-github"></i></span></a>
      <a href="{{route('social.login', ['provider' => 'twitter'])}}" class="btn btn-dark"><span style="font-size: 2em;"><i class="fab fa-twitter"></i></span></a>
    </div>
</div>

@endsection

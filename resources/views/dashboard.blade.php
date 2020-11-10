@extends('welcome')
@section('content')

    <h1>Notícias do Condominio</h1>
    <div class="row">
    @foreach ($noticias as $noticia)
        <div class="col-sm-4">
          <div class="card" style="margin-bottom: 2%">
            
            <div class="card-body">
                <h5 class="card-title">{{$noticia->titulo}}</h5>
                <p class="card-text">{{$noticia->descricao}}</p>
            </div>
          </div>
        </div>
    @endforeach
    </div>
@endsection
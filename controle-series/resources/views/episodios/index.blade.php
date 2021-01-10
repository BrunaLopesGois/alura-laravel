@extends('layout')

@section('cabecalho')
Séries
@endsection

@section('conteudo')
@include('mensagem')
<form method="POST" action="/temporadas/{{$temporadaId}}/episodios/assistir">
    @csrf
    <ul class="list-group">
        @foreach ($episodios as $episodio)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{$episodio->numero}}
            <input type="checkbox" name="episodios[]" value="{{$episodio->id}}"
                {{$episodio->assistido ? 'checked' : ''}}>
        </li>
        @endforeach
    </ul>
    <button class="btn btn-primary mt-2 mb-2">Salvar</button>
</form>
@endsection
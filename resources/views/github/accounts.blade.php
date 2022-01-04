@extends('components.template')
@section('title', 'Github Accounts')
@section('content')
    <div class="row justify-content-center">
        <div class="col-6">
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-warning">
                        {{$error}}
                    </div>
                @endforeach
            @endif
            <form method="GET">
                <div class="form-group">
                    <label for="name" class="form-label mt-4">Nome</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Pesquise o nome ">
                </div>
                <button class="btn btn-primary mt-3" type="submit">Pesquisar</button>
            </form>
            <a href="{{'dashboard?page=1'}}">Geral</a>
        </div>
        <div class="card mt-3">
            <h3 class="card-header"> Conta no Github: {{$github['login'] ?? 'Não encontrado'}}</h3>
            <img class="d-block user-select-none" width="30%" height="400" src="{{$github['avatar_url'] ?? 'https://via.placeholder.com/400'}}" alt="">
            <div class="card-body">
                <p class="card-text">Name: {{$github['name'] ?? 'Não encontrado'}}</p>
                <a href="{{$github['html_url'] ?? 'Não encontrado'}}">Link of Profile</a>
            </div>
        </div>
    </div>
@endsection

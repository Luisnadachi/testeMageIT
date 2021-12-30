@extends('components.template')
@section('title', 'Entrar')
@section('content')
    <div class="row justify-content-center">
        <div class="col-6">
            <h3 class="text-center mt-5"> Login</h3>
            @if($errors->any())
                @foreach($errors->all() as $error)
                    <div class="alert alert-warning">
                        {{$error}}
                    </div>
                @endforeach
            @endif
            <form method="POST" action="{{route('login')}}">
                @csrf
                <div class="form-group">
                    <label for="email" class="form-label mt-4">E-mail</label>
                    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp"
                           placeholder="Entre com o email">
                </div>
                <div class="form-group">
                    <label for="password" class="form-label mt-4">Senha</label>
                    <input type="password" class="form-control" name="password" id="password"
                           placeholder="Entre com a senha">
                </div>
                <button type="submit" class="btn btn-primary mt-3">Entrar</button>
            </form>

        </div>
    </div>
@endsection

@extends('components.template')
@section('title', 'Github Accounts')
@section('content')
    @foreach($github as $accounts)
        <table class="table table-hover">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">User</th>
                <th scope="col">Link</th>
            </tr>
            </thead>
            <tbody>
            <td>{{$accounts['id']}}</td>
            <td>{{$accounts['login']}}</td>
            <td><a href="{{$accounts['html_url']}}">Link of Profile</a></td>
            </tbody>
        </table>
    @endforeach
@endsection

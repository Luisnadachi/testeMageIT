@extends('components.template')
@section('title', 'Github Accounts')
@section('content')
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">User</th>
            <th scope="col">Link</th>
        </tr>
        </thead>
        <tbody>
        @foreach($github as $accounts)
            <tr>
                <td>{{$accounts['id']}}</td>
                <td>{{$accounts['login']}}</td>
                <td><a href="{{$accounts['html_url']}}">Link of Profile</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div>
        <ul class="pagination">
            <li class="page-item {{ request()->get('page') == 1 ? 'active':'' }}">
                <a class="page-link" href="?page=1">1</a>
            </li>
            <li class="page-item {{ request()->get('page') == 2 ? 'active':'' }}">
                <a class="page-link " href="?page=2">2</a>
            </li>
            <li class="page-item {{ request()->get('page') == 3 ? 'active':'' }}">
                <a class="page-link" href="?page=3">3</a>
            </li>
            <li class="page-item {{ request()->get('page') == 4 ? 'active':'' }}">
                <a class="page-link" href="?page=4">4</a>
            </li>
            <li class="page-item {{ request()->get('page') == 5 ? 'active':'' }}">
                <a class="page-link" href="?page=5">5</a>
            </li>
        </ul>
    </div>
@endsection

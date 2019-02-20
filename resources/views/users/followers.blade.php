@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            @include('users.card', ['$users'])
        </aside>
        <div class="col-sm-8">
            @include('users.navtabs', ['user' => $user])
            @include('users.users', ['users' => $users])
        </div>
    </div>
@endsection
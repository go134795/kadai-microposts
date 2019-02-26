{{--ユーザー一覧--}}
@extends('layouts.app')

@section('content')
    {{--users.blade読み込み--}}
    @include('users.users', ['users' => $users])
@endsection
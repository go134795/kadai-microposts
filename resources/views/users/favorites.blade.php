{{--お気に入り詳細--}}
@extends('layouts.app')

@section('content')
    <div class="row">
        <aside class="col-sm-4">
            
            {{--users.card読み込み--}}
            @include('users.card', ['user' => $user])
        </aside>
            
        <div class="col-sm-8">
            
            {{--ナビゲーションタブ読み込み--}}
            @include('users.navtabs', ['user' => $user])
            
            
            {{--Micropost　読み込み--}}
            @if (count($microposts) > 0)
                @include('microposts.microposts', ['microposts' => $microposts])
            @endif
        </div>
    </div>
@endsection
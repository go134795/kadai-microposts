{{--ユーザー詳細--}}
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
            
            {{--投稿フォーム--}}
            @if (Auth::id() == $user->id)
                {!! Form::open(['route' => 'microposts.store']) !!}
                    <div class="form-group">
                        {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '2']) !!}
                        {!! Form::submit('Post', ['class' => 'btn btn-primary btn-block']) !!}
                    </div>
                {!! Form::close() !!}
            @endif
            @if (count($microposts) > 0)
            
                {{--Micropost　読み込み--}}
                @include('microposts.microposts', ['microposts' => $microposts])
            @endif
        </div>
    </div>
@endsection
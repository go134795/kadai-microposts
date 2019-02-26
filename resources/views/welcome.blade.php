{{-- トップページ --}}

{{--共通レイアウト（全体）--}}
@extends('layouts.app')

{{--共通レイアウト（yieldに入る）--}}
@section('content')
    @if (Auth::check())
        <div class="row">
            <aside class="col-sm-4">
                <!--users.card読み込み-->
                @include('users.card', ['user' => Auth::user()])
            </aside>
            <div class="col-sm-8">
                
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
                
                    {{--micropost一覧（読み込み）--}}
                    @include('microposts.microposts', ['microposts' => $microposts])
                @endif
            </div>
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>Welcome to the Microposts</h1>
                
                {{--ユーザー登録へのリンク（Sign up）--}}
                {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection
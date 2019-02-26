{{--共通レイアウト（ナビバー）--}}
<header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Microposts</a>
        
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
            <span class="navbar-toggler-icon"></span>
        </button>
        
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav mr-auto"></ul>
                <ul class="navbar-nav">
                    @if (Auth::check())
                    
                        {{--users.indexへのリンク--}}
                        <li class="nav-item">{!! link_to_route('users.index', 'Users', [], ['class' => 'nav-link']) !!}</li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                {{ Auth::user()->name }}</a>
                                
                        {{--ドロップダウンメニュー--}}
                        <ul class="dropdown-menu">
                            
                            {{--users.showへのリンク（my profile）--}}
                            <li>{!! link_to_route('users.show', 'My profile', ['id' => Auth::id()]) !!}</li>
                            
                            {{--favariteのリンク--}}
                            <li>{!! link_to_route('users.favorites', 'Favorites', ['id' => Auth::id()]) !!}</li>
                            
                            <li role="separator" class="divider"></li>
                            <li>{!! link_to_route('logout.get', 'Logout') !!}</li>
                        </ul>
                    </li>
                @else
                    {{--ユーザー登録へのリンク（Sign up)--}}
                    <li class="nav-item">{!! link_to_route('signup.get', 'Signup', [], ['class' => 'nav-link']) !!}</li>
                    <li class="nav-item">{!! link_to_route('login', 'Login', [], ['class' => 'nav-link']) !!}</li>
                @endif
            </ul>
        </div>
    </nav>
</header>
@if (count($users) > 0)
    <ul class="media-list">
        @foreach ($users as $user)
            <li class="media">
                <img class="media-object rounder" src="{{ Gravatar::src=($user->email, 50) }}" 
                    alt="">
                
                <div class="media-body ml-3">
                    <div>
                        {{ $user->name }}
                    </div>
                    <div>
                        <p>{!! link_to_route('users.show', 'View profile', ['id' => $user->id]) !!}</p>
                    </div>
                </div>
            </li>
        @endsection
    </ul>
    {{ $users->render('pagination::bootstrap-4') }}
@endif
@if (Auth::user()->id != $user->id)   
    @if (Auth::user()->is_favorite_micropost($micropost->id))
        {!! Form::open(['route' => ['favorite.unfavorited_micropost', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Not Like', ['class' => "btn btn-danger btn-xs"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['favorite.favorited_micropost', $micropost->id]]) !!}
            {!! Form::submit('Like', ['class' => "btn btn-primary btn-xs"]) !!}
        {!! Form::close() !!}
    @endif
@endif
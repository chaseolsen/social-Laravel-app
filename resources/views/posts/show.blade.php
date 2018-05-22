@extends('layouts.app')

@section('content')
  <a href="http://localhost/lsapp/public/posts" class="btn btn-default">Go Back</a>
  <h1>{{$post->title}}</h1>
  <img style="width:100%" src="http://localhost/lsapp/storage/app/public/cover_images/{{$post->cover_image}}">
  <br>
  <br>
  <div>
    {!!$post->body!!}
  </div>
  <hr>
  <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
  <hr>

  {{-- if user is NOT a guest, display these (edit/delete button on post) --}}
  @if(!Auth::guest())
    {{-- if logged in user is same user as user that posted the post, then display edit/delete --}}
    @if(Auth::user()->id == $post->user_id)
    <a href="http://localhost/lsapp/public/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
      {{Form::hidden('_method', 'DELETE')}}
      {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close() !!}
    @endif
  @endif

@endsection

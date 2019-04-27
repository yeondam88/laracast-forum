@extends('layouts.app') 
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
        <a href="#">{{ $thread->creator->name }}</a> posted:
          {{ $thread->title }}
        </div>
        <div class="card-body">
          {{ $thread->body }}
        </div>
      </div>
    </div>
  </div>

  <div class="row justify-content-center">
    <div class="col-md-8">
      @foreach($thread->replies as $reply)
        @include('threads.reply') 
      @endforeach
    </div>
  </div>

  @if (auth()->check())
  <div class="row justify-content-center mt-4">
    <div class="col-md-8">
      <form method="POST" action="{{ $thread->path() . '/replies' }}">
        {{ csrf_field() }}
        <div class="form-group">
          <textarea name="body" id="body" class="form-control" rows="5" placeholder="Have something here.."></textarea>
          <button class="btn btn-default mt-2" type="submit">Post</button>
        </div>
      </form>
    </div>
  </div>
  @endif
</div>
@endsection
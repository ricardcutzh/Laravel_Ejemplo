@extends('layout.app')
@section('content')

  @if (count($errors)>0)
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{route('store_post-path')}}" method="post">
    {{csrf_field()}}
    <fieldset class="form-group">
      <label>Title</label>
      <input type="text" class="form-control" name="title" value="{{old('title')}}" placeholder="Post Title...">
    </fieldset>
    <fieldset class="form-group">
      <label>Description</label>
      <textarea name="description" rows="5" class="form-control" >{{old('description')}}</textarea>

    </fieldset>
    <fieldset class="form-group">
      <label>URL</label>
      <input type="text" class="form-control" value="{{old('url')}}" name="url" placeholder="Url To Post...">
      <small class="text-muted">Gracias por crear un nuevo Post</small>
    </fieldset>
    <button type="submit" class="btn btn-primary">Create New Post</button>
  </form>

@endsection

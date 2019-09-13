@extends('layout.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">Edit</div>
        <div class="panel-body">

            

        <form action="{{route('post.update', $posts->id) }}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Tittle</label>
                <input type="text" name="tittle" class="form-control" value="{{  $posts->tittle }}">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="content" class="form-control" rows="3">{{  $posts->content }}</textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Save Changes" class="btn btn-info">
                <a href="{{ route('post.index')  }}" class="btn btn-default">Cancel</a>
            </div>
        </form>
        </div>
    </div>

@endsection
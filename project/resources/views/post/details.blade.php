@extends('layout.app')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            View 
        </div>
        <div class="panel-body">
            <div class="pull-right">
                <a class="btn btn-default" href="{{ route('post.index')  }}">Go Back</a>
            </div>
            <div class="form-group">
                <strong>Tittle: </strong> {{ $posts->tittle  }}
            </div>
            <div class="form-group">
                <strong>Content: </strong> {{ $posts->content  }}
            </div>
        </div>
    </div>

@endsection
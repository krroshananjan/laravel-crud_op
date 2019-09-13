@extends('layout.app')
@section('content') 

<div class="panel panel-default">
        <div class="panel-heading">Add New </div>
        <div class="panel-body">
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Errors:</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="panel panel-heading">
            Add new Post <a href="{{route ('post.index')}}"></a>
            </div>
        <form action="{{route ('post.insert')}}" method="POST">
            {{ csrf_field() }}

          
            <div class="form-group">
                <label for="tittle">Tittle</label>
                <input type="text" name="tittle" class="form-control" value="{{  old('tittle') }}">
            </div>
            <div class="form-group">
                <label for="content">content</label>
                <textarea name="content" class="form-control" rows="3">{{  old('content') }}</textarea>
            </div>
            <div class="form-group">
                <input type="submit" value="Add Post" class="btn btn-info">
                <a href="{{ route('post.index') }}" class="btn btn-default">Cancel</a>
            </div>
        </form>
        </div>
    </div>



@endsection

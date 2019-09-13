@extends('layout.app')
@section('content')
<div class="row">
<div class="col-lg-12">
@if(Session::has('succes_msg'))
<div class="alert alert-success">{{Session::get('sucess_msg')}}</div>
@endif

<!articleslist-->
@if(!empty($posts))
<div class="row">
<div class="col-lg-12 margin-top">
    <div class="pull-left">
        <h2>articleslist</h2>
        <a class="btn btn-success" href="{{route('post.add')}}" >Addnew</a>
 
</div>
</div>@endif
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <table class="table table-striped task-table">
            <!--Table Heading-->
            <thead>
                <th width="15%">id</th>
                <th width="15%">tittle</th>
                <th width="20%">content</th>
                <th width="25%">created</th>
                <th width="15%">action</th>

            </thead>

            <!--Table Body-->
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td class="table-text">
                    <div>{{$post->id}}</div>

                    </td>
                    <td class="table-text">
                    <div>{{ $post->tittle}}</div>
                    </td>
                    <td class="table-text">
                    <div>{{$post->content}}</div>
                    </td>
                
                <td class="table-text">
                <div>{{$post->created}}</div>
                </td>
            
            <td class="table-text">
            <div>{{$post->action}}</div>
            </td>
            <td>
            
        
            <a href="{{route ('post.details', $post->id)}}" class="label label-success">Details</a>
            <a href="{{route ('post.edit', $post->id)}}" class="label label-warning">Edit</a>
            <a href="{{route ('post.delete', $post->id)}}" class="label label-danger">Delete</a>

              
           
            </td>
            
                    
                @endforeach
            </tbody>
          

        </table>

    </div>
</div>

</div>
@endsection
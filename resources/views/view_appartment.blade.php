@extends('index1')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-4">

        </div>
        <div class="col-4 mt-5">
            @if(session('success'))
            <div class="alert alert-success">
            {!! session ('success')!!}    
            </div>
            @endif
            <center>

        <table class="table table-bordered table-danger table-striped" style="width:80%;">
    <tr>
    <th> appartment_id</th>
    <th>appatment_name</th>
    <th>location</th>
    <th>no_of_flats</th>
     
    <th colspan="2"> Action</th>
    </tr>
    @foreach($view as $views)
    <tr>
        <td>{{ $views->appartment_id }} </td>
        <td>{{$views->appartment_name}}</td>
        <td>{{ $views->location }}</td>
        <td> {{ $views->no_of_flats }}</td>
        
        
        <td><a class="btn btn-primary" href="{{ route('edit',$views->appartment_id) }}">edit</a> </td>
        <td><a  class="btn btn-danger"href="{{ route('delete',$views->appartment_id) }}"> delete</a></td>
    </tr>
@endforeach

</table>
</center>
        </div>
    </div>
</div>

@endsection

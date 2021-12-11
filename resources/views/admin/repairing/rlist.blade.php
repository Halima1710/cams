@extends('admin.master')


@section('main')

<h1>Repairing list</h1>
<a href="{{route('admin.repairs.create')}}" class="btn btn-success">Create new Repairing Work</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">price</th>
    </tr>
    </thead>
    <tbody>

    @foreach($repairs as $key=>$list)
    <tr>
        <th>{{$key+1}}</th>    
        <td>{{$list->name}}</td>    
        <td>{{$list->price}}</td> 
</tr>   
@endforeach
    </tbody>
</table>
@endsection

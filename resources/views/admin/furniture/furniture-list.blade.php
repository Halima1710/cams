@extends('admin.master')


@section('main')

<h1>Furniture list</h1>
<a href="{{route('admin.furnitures.create')}}" class="btn btn-success">Create new furniture</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">dimension</th>
        <th scope="col">price</th>
        <th scope="col">description</th>
    </tr>
    </thead>
    <tbody>

    @foreach($furnitures as $key=>$list)
    <tr>
        <th>{{$key+1}}</th>    
        <td>{{$list->name}}</td>  
        <td>{{$list->height}} X {{$list->length}} X {{$list->width}}</td>  
        <td>{{$list->price}}</td> 
         <td>{{$list->description}}</td>
</tr>   
@endforeach
    </tbody>
</table>
@endsection

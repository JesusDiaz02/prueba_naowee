@extends('layouts.app')
@section('content')
<div class="container">


@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible" role="alert">
{{Session::get('mensaje')}}
@endif


</div>



<a href="{{url('punto_uno_cliente/create')}}" class="btn btn-success">Registrar nuevo cliente</a>


<br>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>primer nombre</th>
            <th>segundo nombre</th>
            <th>primer apellido</th>
            <th>segundo apellido</th>
            <th>acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach($baseClientes as $baseClientes2)
        <tr>
            <td>{{$baseClientes2->id}} </td>
            <td>{{$baseClientes2->primer_nombre}}</td>
            <td>{{$baseClientes2->segundo_nombre}}</td>
            <td>{{$baseClientes2->primer_apellido}}</td>
            <td>{{$baseClientes2->segundo_apellido}}</td>
            <td>
            
            <a href="{{url('/punto_uno_cliente/'.$baseClientes2->id.'/edit')}}"class ="btn btn-warning">
                    Editar
            </a>
            
             | 
        <form action="{{url('/punto_uno_cliente/'.$baseClientes2->id)}}"class= "d-inline"method="post">
        @csrf
        {{method_field('DELETE')}}
        <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')" 
        value="Borrar">
        </form>   </td>
            
        </tr>
        @endforeach 

    </tbody>
</table>
{!!$baseClientes->links()!!}
</div>
@endsection
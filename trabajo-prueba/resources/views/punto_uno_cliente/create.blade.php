@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{url('/punto_uno_cliente')}}" method="post">
@csrf
@include('punto_uno_cliente.form',['modo'=>'Crear']);

</form>
</div>
@endsection

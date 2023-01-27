

<h1>{{$modo}} Cliente</h1>

@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
<ul>
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>   
        @endforeach
</ul>
    </div>
    

@endif

<div class="form-group">
<label for="primer_nombre"> Primer Nombre</label>
<input type="text" class="form-control"name="primer_nombre" value="{{isset($datosCliente->primer_nombre)?$datosCliente->primer_nombre:old('primer_nombre')}}" id="primer_nombre">
</div>

<div class="form-group">
<label for="segundo_nombre"> Segundo Nombre</label>
<input type="text"class="form-control" name="segundo_nombre" value="{{isset($datosCliente->segundo_nombre)?$datosCliente->segundo_nombre: old('segundo_nombre')}}" id="segundo_nombre">
</div>

<div class="form-group">
<label for="primer_apellido"> Primer Apellido</label>
<input type="text" class="form-control" name="primer_apellido" value="{{isset($datosCliente->primer_apellido)?$datosCliente->primer_apellido: old('primer_apellido')}}" id="primer_apellido">
</div>

<div class="form-group">
<label for="segundo_apellido"> Segundo Apellido</label>
<input type="text" class="form-control" name="segundo_apellido" value="{{isset($datosCliente->segundo_apellido)?$datosCliente->segundo_apellido: old('segundo_apellido')}}" id="segundo_apellido">
</div>

<input class="btn btn-success" type="submit" value="{{$modo}} datos" >
<br>
<a class="btn btn-primary" href="{{url('punto_uno_cliente')}}">Regresar a lista de clientes </a>




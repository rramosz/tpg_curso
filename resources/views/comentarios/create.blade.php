@extends('layouts.app')
@section('content')

<div class="col-lg-6">
    {!! Form::open(['route'=>'comentarios.store', 'method'=>'POST']) !!}
       
    {!! Field::text('nombre', null, ['placeholder'=>'nombre', 'label'=>'Nombre']) !!}
    {!! Field::textarea('descripcion', null, ['placeholder'=>'descripcion', 'label'=>'Descripcion']) !!}
    <button class='btn btn-primary' > Grabar</button>
    {!! Form::close() !!}
    
</div>



@endsection


@extends('layouts.app')
@section('content')

<div class="container">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover" >
            <tr class="heading">
                <td><b>Nombre</b></td>
                <td><b>Descripcion</b></td>
            </tr>


            @foreach($tabla as $item)
            <tr>
                <td>{{ $item->nombre }}</td>
                <td>{{ $item->descripcion }}</td>
            </tr>
            @endforeach
        </table>
       {!! $tabla->render() !!}
    </div>
</div>

@endsection


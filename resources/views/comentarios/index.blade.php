@extends('layouts.app')
@section('content')
<div class="row justify-content-center " >
<div class=" col-lg-6 col-lg-offset-3 container">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover" >
            <tr class="heading">
                <td><b>Nombre</b></td>
                <td><b>Descripcion</b></td>
                <td><b>Acciones</b></td>
            </tr>


            @foreach($tabla as $item)
            <tr>
                <td>{{ $item->nombre }}</td>
                <td>{{ $item->descripcion }}</td>
                <td><a class="btn btn-primary btn-xs" href="{{ route("comentarios.edit", [$item->id]) }}" >Editar</a>
                   {!! Form::open(['route'=>['comentarios.destroy', $item->id], 'method'=>'DELETE']) !!}
            <button class="btn btn-danger btn-xs">Eliminar</button>
            {!! Form::close()!!}
            </tr>
            @endforeach
        </table>
       {!! $tabla->render() !!}
    </div>
</div>
</div>

<div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://capacitacion-laravel.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

@endsection


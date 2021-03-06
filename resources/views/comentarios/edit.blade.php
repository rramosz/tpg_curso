@extends('layouts.app')
@section('content')

<div class="col-lg-6">
    {!! Form::open(['route'=>['comentarios.update', $comentario->id ], 'method'=>'PUT']) !!}
      
    {!! Field::text('nombre',  $comentario->nombre, ['placeholder'=>'nombre', 'label'=>'Nombre']) !!}
    {!! Field::textarea('descripcion', $comentario->descripcion , ['placeholder'=>'descripcion', 'label'=>'Descripcion']) !!}
    <button class='btn btn-primary' > Grabar</button>
    {!! Form::close() !!}
    
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


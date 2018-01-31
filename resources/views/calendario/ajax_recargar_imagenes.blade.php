<label>Imágenes</label>
<ul class="list-inline friends-list" style="margin-left: 0px">

    @if(count($imagenes)!= 0)
        @foreach($imagenes as $img)
            <li><img src="{{ asset('uploads/'.$carpeta_id.'/'.$img['basename'])}}" alt="friend-1"></li>
        @endforeach
    @else
        <div class="alert alert-info fade in">
            <button class="close" data-dismiss="alert">
                ×
            </button>
            <i class="fa-fw fa fa-info"></i>
            <strong>Info!</strong> Presiona el boton 'Subir Imagenes' para agregar fotos de este evento.
        </div>
@endif
</ul>
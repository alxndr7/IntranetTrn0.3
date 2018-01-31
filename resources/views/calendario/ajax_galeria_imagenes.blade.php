<ul class="list-inline friends-list" style="margin-left: 0px">
    @if(count($imagenes)!= 0)
        @foreach($imagenes as $img)
            <li><a class="example-image-link" href="{{ asset('uploads/'.$carpeta_id.'/'.$img['basename'])}}" data-lightbox="example-set1" data-title="..."><img class="example-image" src="{{ asset('uploads/'.$carpeta_id.'/'.$img['basename'])}}" alt=""/></a></li>
        @endforeach
    @else
        <div class="alert alert-info fade in">
            <button class="close" data-dismiss="alert">
                ×
            </button>
            <i class="fa-fw fa fa-info"></i>
            <strong>Info!</strong> Este evento aún no contiene imágenes.
        </div>
@endif
</ul>
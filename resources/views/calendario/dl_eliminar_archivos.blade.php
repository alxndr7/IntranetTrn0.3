
<style>
    #dlt_files ul {
        list-style-type: none;
    }

    #dlt_files li {
        display: inline-block;
    }

    input[type="checkbox"][id^="cb"] {
        display: none;
    }

    #dlt_files label {
        border: 1px solid #fff;
        padding: 10px;
        display: block;
        position: relative;
        margin: 10px;
        cursor: pointer;
    }

    #dlt_files label:before {
        background-color: white;
        color: white;
        content: " ";
        display: block;
        border-radius: 50%;
        border: 1px solid grey;
        position: absolute;
        top: -5px;
        left: -5px;
        width: 25px;
        height: 25px;
        text-align: center;
        line-height: 28px;
        transition-duration: 0.4s;
        transform: scale(0);
    }

    #dlt_files label img {
        height: 100px;
        width: 110px;
        transition-duration: 0.2s;
        transform-origin: 50% 50%;
    }

    #dlt_files :checked + label {
        border-color: #ddd;
    }

    #dlt_files :checked + label:before {
        content: "✓";
        background-color: grey;
        transform: scale(1);
    }

    #dlt_files :checked + label img {
        transform: scale(0.9);
        box-shadow: 0 0 5px #333;
        z-index: -1;
    }

    .rotate90 {
        -webkit-transform: rotate(90deg);
        -moz-transform: rotate(90deg);
        -o-transform: rotate(90deg);
        -ms-transform: rotate(90deg);
        transform: rotate(90deg);
    }
</style>

<div id=""  style="overflow:scroll; height:320px;">

    <div class="form-group col-sm-12" name="dlt_files" id="dlt_files" style="margin-left: 0px;margin-right: 0px;">
        <ul>
            @foreach($imagenes as $img)
                <li><input type="checkbox" id="cb{{$img['filename']}}" onclick="list_eliminar_img('{{$img['basename']}}', this)" />
                    <label for="cb{{$img['filename']}}"><img src="{{ asset('uploads/'.$carpeta_id.'/'.$img['basename'])}}" class="rotate90" /></label>
                </li>
            @endforeach
        </ul>
    </div>
</div>
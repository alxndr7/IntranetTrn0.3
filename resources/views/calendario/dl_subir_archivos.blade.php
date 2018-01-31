
<script>

    Dropzone.autoDiscover = false;

    $("#mydropzone").dropzone({
        url: "{{url('upload_images')}}",
        paramName: 'file',
        autoProcessQueue: false,
        addRemoveLinks : true,
        maxFilesize: 200,
        dictDefaultMessage: '<span class="text-center"><span class="font-lg visible-xs-block visible-sm-block visible-lg-block"><span class="font-lg"><i class="fa fa-caret-right text-danger"></i> Suelta las imagenes <span class="font-xs">para guardarlas</span></span><span>&nbsp&nbsp<h4 class="display-inline"> (O dale click)</h4></span>',
        dictResponseError: 'Error uploading file!',
        sending: function(file, xhr, formData) {
            // Pass token. You can use the same method to pass any other values as well such as a id to associate the image with for example.
            formData.append("_token", $('[name=_token').val()); // Laravel expect the token post value to be named _token by default
            formData.append("full_path", file.fullPath);
            formData.append("dl_evento_id", $('[name=evento_id]').val());
        },
        init: function() {
            var submitBtn = document.querySelector("#submit");
            myDropzone = this;

            submitBtn.addEventListener("click", function(e){
                e.preventDefault();
                e.stopPropagation();
                myDropzone.processQueue();
            });
            this.on("addedfile", function(file) {
                //alert("file uploaded");
            });

            this.on("complete", function(file) {
                myDropzone.removeFile(file);

            });
            this.on("success", function(file, data) {
                console.log(data);
                $('#recargar_imagenes').html(data);
            });
           // this.on("success", myDropzone.processQueue.bind(myDropzone));

/*
            var imagenes = {!! $img !!};

            //alert(imagenes[0]['dirname']. imagenes[0]['basename']);

           // for(var i = 0;i<imagenes.length;i++){
                var mockFile = { name: imagenes[0]['basename'], size: 12345 };

                // Call the default addedfile event handler
                myDropzone.emit("addedfile", mockFile);

                // And optionally show the thumbnail of the file:
               // myDropzone.emit("thumbnail", mockFile, 'C:/xampp/htdocs/IntranetTrn/public/uploads/16/20171130_115736.jpg');
                myDropzone.emit("thumbnail", mockFile, 'C:/xampp/htdocs/IntranetTrn/public/uploads/16/20171130_115736.jpg');

*/
                // Create the mock file:
            //}


        }
    });


</script>

<div id=""  style="overflow:scroll; height:320px;">

    <form action="{{url('upload_images')}}" method="POST" files="true" class="dropzone" id="mydropzone"  enctype="multipart/form-data">
    </form>
</div>
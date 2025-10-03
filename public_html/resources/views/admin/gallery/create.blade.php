
@section('meta-title','   ')
@section('meta-keyword','   ')
@section('meta-description','  ')
@extends('admin.layout.app')

@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kapitanka/image-uploader/dist/image-uploader.min.css">
<style type="text/css">
    .dropzone {
        padding: 70px 60px 80px !important;
        border: 2px dashed rgba(0, 0, 0, 0.13) !important;
        background: transparent !important;
    }
    .dropzone:hover {
        background: #fafafa !important;
        transition: all .5s !important;
    }

    .dropzone-preview {
    position: relative;
    display: inline-block;
}
.cke_notification.cke_notification_warning{
    display: none;
}

.remove-btn {
    position: absolute;
    top: 5px;
    right: 5px;
    background: red;
    color: white;
    border: none;
    width: 25px;
    height: 25px;
    font-size: 18px;
    line-height: 20px;
    border-radius: 50%;
    cursor: pointer;
    text-align: center;
}
.remove-btn:hover {
    background: darkred;
}

</style>
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mb-6">
 <div class="card-body">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-6 row-gap-4">
        <div class="d-flex flex-column justify-content-center">
            <h4 class="mb-1">Add Gallery</h4>
        </div>
    </div>

    <div class="px-2">
        <label for="" class="mb-2"><strong>Gallery Images **</strong></label>
        <form action="{{route('admin.gallery.imagestore')}}" id="my-dropzone" enctype="multipart/form-data" class="dropzone create">
            @csrf
            <div class="fallback">
                <input name="file" type="file" multiple />
            </div>
        </form>
        <p class="em text-danger mb-0" id="errslider_images"></p>
    </div>
</div>
</div>

    <form class="card-body FromSubmit" action="{{ route('gallery.store') }}" method="post" id="gallery" data-redirect_url="{{ route('gallery.index') }}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="image" name="" value="">
        <div id="sliders"></div>

        <div class="app-ecommerce">
            <div class="col-md-12 mb-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex gap-3 p-0">
                            <div class="col-md-6">
                                <div class="card-body mb-0">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="name" name="name" class="form-control" data-validate="required" placeholder="Name" />
                                        <label for="name">Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body mb-0">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="slug" name="slug" class="form-control" data-validate="required" placeholder="Slug" />
                                        <label for="slug">Slug</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex gap-3 p-0">
                            <div class="col-md-6">
                                <div class="card-body mb-0">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="meta_title" name="meta_title" class="form-control" data-validate="required" placeholder="Meta Title" />
                                        <label for="meta_title">Meta Title</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body mb-0">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="meta_keywords" name="meta_keywords" class="form-control" data-validate="required" placeholder="Meta Keywords" />
                                        <label for="meta_keywords">Meta Keywords</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex gap-3 p-0">
                          <div class="col-md-6">
                                <div class="card-body mb-0">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="meta_description" name="meta_description" class="form-control" data-validate="required" placeholder="Meta Description" />
                                        <label for="meta_description">Meta Description</label>
                                    </div>
                                </div>
                            </div>
                        <div class="col-md-6">
                            <div class="card-body mb-0">
                                <div class="form-floating form-floating-outline">
                                    <select id="status" name="status" class="select2 form-select">
                                        <option value="">Select Status</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                    <label for="status">Status</label>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="col-md-12">
                            <div class="card-body mb-0">
                            <textarea id="description" name="description" class="form-control">{{ old('content') }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-6">
                <div class="card-body">
                    <div class="form-floating form-floating-outline d-flex align-content-center flex-wrap gap-4">
                        <a href="javascript:history.back()"><button type="button" class="btn btn-outline-secondary">Discard</button></a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<script src="{{ asset('assets/admin/js/plugin/dropzone/jquery.dropzone.min.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
<script>

Dropzone.autoDiscover = false;

let myDropzone = new Dropzone("#my-dropzone", {
    url: "{{ route('admin.gallery.imagestore') }}",
    paramName: "file",
    acceptedFiles: ".png,.jpg,.jpeg",
    maxFilesize: 5, // 5MB limit
    addRemoveLinks: true, // Enable remove button
    headers: {
        "X-CSRF-TOKEN": "{{ csrf_token() }}"
    },
success: function(file, response) {
    if (response.status === 'success') {
        // Append hidden input field with image ID
        $("#sliders").append(`<input type="hidden" name="slider_images[]" id="slider${response.file_id}" value="${response.file_id}">`);

        // Create remove button
        let removeButton = Dropzone.createElement('<button class="remove-btn">&times;</button>');

        // Add event listener to remove button
        removeButton.addEventListener("click", function(e) {
            e.preventDefault();
            e.stopPropagation();

            myDropzone.removeFile(file);
            removeImage(response.file_id);
        });

        // Add class to Dropzone preview wrapper
        file.previewElement.classList.add("dropzone-preview");

        // Append the button to file preview
        file.previewElement.appendChild(removeButton);
    } else {
        alert(response.error);
    }
},

    error: function(file, response) {
        alert("Error uploading file!");
    }
});

// Function to remove image from server and form
function removeImage(fileId) {
    $.ajax({
        url: "{{ route('admin.gallery.sliderrmv') }}",
        type: 'POST',
        data: {
            _token: "{{ csrf_token() }}",
            fileid: fileId
        },
        success: function() {
            $("#slider" + fileId).remove();
        },
        error: function() {
            alert("Failed to delete image!");
        }
    });
}

</script>
<script>
    CKEDITOR.replace('description');
</script>

@endsection

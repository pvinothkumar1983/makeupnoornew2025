@section('meta-title','   ')
@section('meta-keyword','   ')
@section('meta-description','  ')

@extends('admin.layout.app')

@section('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kapitanka/image-uploader/dist/image-uploader.min.css">
<style>
  .dropzone {
        padding: 70px 60px 80px !important;
        border: 2px dashed rgba(0, 0, 0, 0.13) !important;
        background: transparent !important;
    }
    .dropzone:hover {
        background: #fafafa !important;
        transition: all .5s !important;
    }
    /* Image preview container */
    .image-preview-container {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        margin-top: 10px;
        padding-bottom: 2%;
    }

    .image-box {
        position: relative;
        width: 120px;
        height: 120px;
        background: #fafafa !important;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 10px;
    }

    .image-box img {
        max-width: 100%;
        max-height: 100%;
        border-radius: 5px;
    }

    /* Remove button */
    .remove-btn {
        position: absolute;
        top: -5px;
        right: -5px;
        background: #e74c3c;
        border: none;
        color: white;
        font-size: 14px;
        font-weight: bold;
        border-radius: 50%;
        width: 24px;
        height: 24px;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    }

    .remove-btn:hover {
        background: red;
    }
   .cke_notification.cke_notification_warning{
    display: none;
}
    /* Responsive */
    @media (max-width: 768px) {
        .image-box {
            width: 100px;
            height: 100px;
        }
    }

    @media (max-width: 480px) {
        .image-preview-container {
            justify-content: center;
        }
    }
</style>
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

<div class="card mb-6">
 <div class="card-body">
    <div class="px-2">
        <label for="" class="mb-2"><strong>Gallery Images **</strong></label>
        
        <!-- Image Preview Section -->
        <div class="image-preview-container" id="imgPreviewContainer">
            <!-- Images will be added dynamically here -->
        </div>

        <!-- Dropzone Upload -->
        <form action="{{ route('admin.gallery.imagestore') }}" id="my-dropzone" enctype="multipart/form-data" class="dropzone">
            @csrf
            <input type="hidden" name="gallery_id" value="{{ $editdata->id }}">
            <div class="fallback">
                <input name="file" type="file" multiple />
            </div>
        </form>
        <p class="em text-danger mb-0" id="errslider_images"></p>
    </div>
</div>
</div>
    <!-- Gallery Form -->
    <form class="card-body FromSubmit" action="{{ route('gallery.update', $editdata->id) }}" method="post" data-redirect_url="{{ route('gallery.index') }}" id="gallery" enctype="multipart/form-data">
        @csrf
        @method('PUT')

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
                                        <input type="text" id="name" name="name" class="form-control" data-validate="required" value="{{ $editdata->name }}" placeholder="Name" />
                                        <label for="name">Name</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body mb-0">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="slug" name="slug" class="form-control" data-validate="required" value="{{ $editdata->slug }}" placeholder="Slug" />
                                        <label for="slug">Slug</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex gap-3 p-0">
                            <div class="col-md-6">
                                <div class="card-body mb-0">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="meta_title" name="meta_title" class="form-control" data-validate="required" value="{{ $editdata->meta_title }}" placeholder="Meta Title" />
                                        <label for="meta_title">Meta Title</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-body mb-0">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="meta_keywords" name="meta_keywords" class="form-control" data-validate="required" value="{{ $editdata->meta_keywords }}" placeholder="Meta Keywords" />
                                        <label for="meta_keywords">Meta Keywords</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex gap-3 p-0">
                          <div class="col-md-6">
                                <div class="card-body mb-0">
                                    <div class="form-floating form-floating-outline">
                                        <input type="text" id="meta_description" name="meta_description" class="form-control" data-validate="required" value="{{ $editdata->meta_description }}" placeholder="Meta Description" />
                                        <label for="meta_description">Meta Description</label>
                                    </div>
                                </div>
                            </div>
                        <div class="col-md-6">
                            <div class="card-body mb-0">
                                <div class="form-floating form-floating-outline">
                                    <select id="status" name="status" class="select2 form-select">
                                        <option value="">Select Status</option>
                                        <option value="1" @if($editdata->status == '1') selected @endif>Active</option>
                                        <option value="0" @if($editdata->status == '0') selected @endif>Inactive</option>
                                    </select>
                                    <label for="status">Status</label>
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="col-md-12">
                            <div class="card-body mb-0">
                                <textarea id="description" name="description">{{ $editdata->description }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-6">
                <div class="card-body">
                    <div class="form-floating form-floating-outline d-flex align-content-center flex-wrap gap-4">
                        <a href="javascript:history.back()"><button type="button" class="btn btn-outline-secondary">Discard</button></a>
                        <button type="submit" class="btn btn-primary">Update</button>
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

    // Dropzone Configuration
    let myDropzone = new Dropzone("#my-dropzone", {
        acceptedFiles: '.png, .jpg, .jpeg',
        url: "{{ route('admin.gallery.imagestore') }}",
        paramName: "file",
        maxFilesize: 5, // 5MB limit
        addRemoveLinks: false,
        success: function (file, response) {
            if (response.status === 'success') {
           // addImage(response.file_id, response.image_url);
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
            }  else {
        alert(response.error);
    }
        }
});

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

    // Function to Fetch Existing Images
    $(document).ready(function() {
        $.get("{{ route('admin.gallery.images', $editdata->id) }}", function(data) {
            data.forEach(image => {
                addImage(image.id, "{{ asset('assets/front/img/gallery/images/') }}/" + image.image);
            });
        });
    });

    // Function to Add Image
    function addImage(id, src) {
        let html = `
            <div class="image-box" id="image-${id}">
                <img src="${src}" alt="Ad Image">
                <button class="remove-btn" onclick="rmvdbimg(${id})">&times;</button>
            </div>
        `;
        $("#imgPreviewContainer").append(html);
    }

   function rmvdbimg(indb) {
    if (confirm("Are you sure you want to delete this image?")) {
        $(".request-loader").addClass("show");
        $.ajax({
            url: "{{route('admin.gallery.sliderrmv')}}",
            type: 'POST',
            data: {
                _token: "{{csrf_token()}}",
                fileid: indb
            },
            success: function(data) {
                $(".request-loader").removeClass("show");
                $("#image-" + indb).remove(); // Remove image from preview

                alert("Image deleted successfully!");
            },
            error: function() {
                alert("Something went wrong! Please try again.");
            }
        });
    }
}

</script>
<script>
    CKEDITOR.replace('description');
</script>

@endsection

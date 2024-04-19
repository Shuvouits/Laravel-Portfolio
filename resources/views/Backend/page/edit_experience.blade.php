@extends('Backend.master')
@section('main')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/41.3.1/classic/ckeditor.js"></script>


    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Update Experience</div>
            
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Update Experience</li>
                    </ol>
                </nav>
            </div>

            
        </div>
        <!--end breadcrumb-->

        <hr />
        <div class="card">
            <div class="card-body">
                <h5 class="mb-4">Update Experience</h5>

                <form class="row g-3" method="post" action="/admin/update-experience">
                    {{@csrf_field()}}

                    <input type="hidden" name="id" value="{{$data->id}}" />

                    <div class="col-md-12">
                        <label for="company_name" class="form-label">Company Name</label>
                        <input type="text" class="form-control" name="company_name" value="{{$data->company_name}}" id="company_name">
                    </div>

                    <div class="col-md-12">
                        <label for="designation" class="form-label">Designation</label>
                        <input type="text" class="form-control" name="designation" id="designation" value="{{$data->designation}}">
                    </div>

                    <div class="col-md-12">
                        <label class="form-label" for="date">Date Range</label>
                        <input type="text" name="date" id="date" class="form-control date-range" value="{{$data->date}}" />
                    </div>
                    

                   
                    
                    <div class="col-md-12">
                        <label for="editor" class="form-label">Responsiblity</label>
                        <textarea class="form-control" id="editor" name="responsiblity"  rows="3">{{$data->responsiblity}}</textarea>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4">Update</button>
                            
                        </div>
                    </div>
                </form>
                
            </div>
        </div>



    </div>

    

    

    

    <script>
        ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.error( error );
                } );
</script>








    <script>
        // Reset input file
        $('input[type="file"][name="avatar"]').val('');

        // Image preview
        $('input[type="file"][name="avatar"]').on('change', function() {

            var img_path = $(this)[0].value;
            var img_holder = $('.img-holder');
            var extension = img_path.substring(img_path.lastIndexOf('.') + 1).toLowerCase();

            $('.avatarPreview').hide();

            if (extension == 'jpeg' || extension == 'jpg' || extension == 'png') {
                if (typeof(FileReader) != 'undefined') {
                    img_holder.empty();
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('<img/>', {
                            'src': e.target.result,
                            'class': 'img-fluid',
                            'style': 'max-width:100px;margin-bottom:10px;'
                        }).appendTo(img_holder);
                    }
                    img_holder.show();
                    reader.readAsDataURL($(this)[0].files[0]);
                } else {
                    $(img_holder).html('This browser does not support FileReader');
                }
            } else {
                $(img_holder).empty();
            }
        });
    </script>


    <script>
        $(document).on('click', '.delete-item', function(e) {
            e.preventDefault();
            var id = $(this).data('id');
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this item!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        $.ajax({
                            url: '/admin/delete-experience/' + id, // Update the URL to match your route
                            type: 'DELETE',
                            data: {
                                "_token": "{{ csrf_token() }}"
                            },
                            success: function(response) {
                                swal("Poof! Your item has been deleted!", {
                                    icon: "success",
                                });
                                // Update the table after successful deletion
                                window.location.reload();
                            },
                            error: function(xhr) {
                                swal("Oops!", "Something went wrong!", "error");
                            }
                        });
                    } else {
                        swal("Your item is safe!");
                    }
                });
        });
    </script>
@endsection

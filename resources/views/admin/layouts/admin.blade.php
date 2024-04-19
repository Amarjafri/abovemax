<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none">


<!-- Mirrored from themesbrand.com/velzon/html/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Sep 2022 18:58:10 GMT -->

<head>
    <meta charset="utf-8" />
    <title> </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- App favicon -->

    <link href="https://unpkg.com/cropperjs@1.5.11/dist/cropper.css" rel="stylesheet">
    <meta name="_token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>

    <!-- jsvectormap css -->
    <link href="{{ asset('admin/assets') }}/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet"
        type="text/css" />

    <!--Swiper slider css-->
    <link href="{{ asset('admin/assets') }}/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />


    <link rel="stylesheet" href="{{ asset('admin/assets') }}/libs/filepond/filepond.min.css" type="text/css" />
    <link rel="stylesheet"
        href="{{ asset('admin/assets') }}/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css">



    <!-- Layout config Js -->
    <script src="{{ asset('admin/assets') }}/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('admin/assets') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('admin/assets') }}/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('admin/assets') }}/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('admin/assets') }}/css/custom.min.css" rel="stylesheet" type="text/css" />
    <!--datatable css-->
    <link rel="stylesheet" href="{{ asset('admin/assets') }}/tables/dataTables.bootstrap5.min.css" />
    <!--datatable responsive css-->
    <link rel="stylesheet" href="{{ asset('admin/assets') }}/tables/responsive.bootstrap.min.css" />

    <link rel="stylesheet" href="{{ asset('admin/assets') }}/tables/buttons.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('admin/assets') }}/css/amar.css">


    {{-- image Croper  --}}


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css" />
    <style>
        #image_crop_modal {

            display: none;
            align-items: center;
            flex-direction: column;
            position: fixed;
            left: 50%;
            top: 40%;
            margin-left: -300px;
            margin-top: -220px;
            width: 700px;
            max-width: 700px;
            height: max-content;
            /*max-height:500px;*/
            z-index: 1051;
            background-color: white;
            border: 1px solid #35a1cc;
        }
    </style>


{{-- image croper end --}}




</head>
<!-- end::Head -->

<!-- begin::Body -->

<body>

    <div id="layout-wrapper">
        @include('admin.layouts.header')
        @include('admin.layouts.sidenav')
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            @include('admin.layouts.footer')
        </div>
    </div>
    <form id="logout-form" class="d-none" method="post" action="{{ route('admin.logout') }}">@csrf</form>


     {{-- image croper  --}}


     <div class="modal" id="image_crop_modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" style="height:500px" role="document">
            <div class="modal-content" style="width:100%">
                <div class="modal-body">
                    <div class="img-container">
                        <div class="row me-1">

                            <div class="col-md-12 me-1">
                                <!--  default image where we will set the src via jquery-->
                                <img id="image--crop--image" style="max-width:100%; max-height:400px">
                            </div>
                            <div class="col-md-4">
                                <div class="preview"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cropper-buttons" style="margin-top: 20px; width: 100%; display: flex; justify-content:center">
                    <button type="button" id="crop_modal_cancel_btn" class="btn btn-secondary"
                        style="width: 100px; height:35px; border-radius: 6px; background: #a74242; border:none; color:white; margin-right:5px; cursor:pointer"
                        data-dismiss="modal">Cancel</button>
                    <button type="button"
                        style="width: 100px; height:35px; border-radius: 6px; background: #35a1cc; border:none; color:white; margin-left:5px; cursor:pointer;"
                        id="image_crop">Crop</button>

                </div>
                <br>
            </div>
        </div>
    </div>

    </div>
    </div>
    <!---- images uploading modal end -------------->
   {{-- image croper end  --}}
    <!-- begin::Global Config(global config for global JS sciprts) -->
    <!-- JAVASCRIPT -->
    <script src="{{ asset('admin/assets') }}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('admin/assets') }}/libs/simplebar/simplebar.min.js"></script>
    <script src="{{ asset('admin/assets') }}/libs/node-waves/waves.min.js"></script>
    <script src="{{ asset('admin/assets') }}/libs/feather-icons/feather.min.js"></script>
    <script src="{{ asset('admin/assets') }}/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="{{ asset('admin/assets') }}/js/plugins.js"></script>


    <!-- filepond js -->
    <script src="{{ asset('admin/assets') }}/libs/filepond/filepond.min.js"></script>
    <script src="{{ asset('admin/assets') }}/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js">
    </script>
    <script
        src="{{ asset('admin/assets') }}/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js">
    </script>
    <script
        src="{{ asset('admin/assets') }}/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js">
    </script>
    <script src="{{ asset('admin/assets') }}/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js"></script>

    <script src="{{ asset('admin/assets') }}/js/pages/form-file-upload.init.js"></script>



    <!-- apexcharts -->
    <script src="{{ asset('admin/assets') }}/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Vector map-->
    <script src="{{ asset('admin/assets') }}/libs/jsvectormap/js/jsvectormap.min.js"></script>
    <script src="{{ asset('admin/assets') }}/libs/jsvectormap/maps/world-merc.js"></script>

    <!--Swiper slider js-->
    <script src="{{ asset('admin/assets') }}/libs/swiper/swiper-bundle.min.js"></script>

    <!-- Dashboard init -->
    <script src="{{ asset('admin/assets') }}/js/pages/dashboard-ecommerce.init.js"></script>

    <!-- App js -->
    {{-- <script src="{{ asset('admin/assets') }}/js/app.js"></script> --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!--datatable js-->
    <script src="{{ asset('admin/assets') }}/tables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('admin/assets') }}/tables/dataTables.bootstrap5.min.js"></script>
    <script src="{{ asset('admin/assets') }}/tables/dataTables.responsive.min.js"></script>
    <script src="{{ asset('admin/assets') }}/tables/dataTables.buttons.min.js"></script>
    <script src="{{ asset('admin/assets') }}/tables/buttons.print.min.js"></script>
    <script src="{{ asset('admin/assets') }}/tables/buttons.html5.min.js"></script>
    <script src="{{ asset('admin/assets') }}/tables/vfs_fonts.js"></script>
    <script src="{{ asset('admin/assets') }}/tables/pdfmake.min.js"></script>
    <script src="{{ asset('admin/assets') }}/tables/jszip.min.js"></script>

    <script src="{{ asset('admin/assets') }}/js/pages/datatables.init.js"></script>
    <script src="{{ asset('admin/assets') }}/js/amar.js"></script>
    <script src="{{ asset('admin/assets') }}/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js"></script>

    <!-- quill js -->
    <script src="{{ asset('admin/assets') }}/libs/quill/quill.min.js"></script>

    <!-- init js -->
    <script src="{{ asset('admin/assets') }}/js/pages/form-editor.init.js"></script>

    <script src="{{ asset('admin/assets') }}/js/app.js"></script>
    <script>
        function goBack() {
            // Go back to the previous page in the session history
            window.history.back();
        }
    </script>









    <!--------------------- images uploading starting -------------------->
    <script>
        var bs_modal = $('#image_crop_modal');
        var image = document.getElementById('image--crop--image');
        var cropper, reader, file;


        function uploadImage(e, identity) {

            var files = e.target.files;
            console.log(files)
            var done = function(url) {
                image.src = url;
                bs_modal.modal('show');
                bs_modal.css('display', 'flex');
            };


            if (files && files.length > 0) {
                file = files[0];

                if (URL) {
                    done(URL.createObjectURL(file));
                } else if (FileReader) {
                    reader = new FileReader();
                    reader.onload = function(e) {
                        done(reader.result);
                    };
                    reader.readAsDataURL(file);
                }
            }
        }

        bs_modal.on('shown.bs.modal', function() {

            cropper = new Cropper(image, {
                aspectRatio: 242 / 157,
                viewMode: 0,
                preview: '.preview'
            });
        }).on('hidden.bs.modal', function() {

            cropper.destroy();
            cropper = null;
            $('#image_file').val('');
        });

        $("#image_crop").click(function() {
            canvas = cropper.getCroppedCanvas({
                maxWidth: 4096,
                maxHeight: 4096,
            });

            bs_modal.modal('hide');
            canvas.toBlob(function(blob) {
                url = URL.createObjectURL(blob);




                var reader = new FileReader();
                reader.readAsDataURL(blob);
                reader.onloadend = function() {
                    var base64data = reader.result;


                    $('#image').attr('src', url);
                    $('#image_base64').val(base64data);


                };
            }, 'image/jpeg', (20 / 100));
        });


        $('#crop_modal_cancel_btn').on('click', function() {
            bs_modal.modal('hide');
            // $('.flexitems').css('opacity',1);
            $('body').css('background-color', '#ffffff');
            //  $('.flexitems').css('pointer-events',"auto");
        });
    </script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js"></script>

    <!--------------------- images uploading end -------------------->










    @stack('scripts')
</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Sep 2022 18:59:04 GMT -->

</html>

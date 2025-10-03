<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="@yield('meta-title')">
    <meta name="description" content="@yield('meta-description')">
    <meta name="keywords" content="@yield('meta-keywords')">
        <title>@yield('title', 'Makeupnoor')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('') }}front/img/favicon.png">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Didact+Gothic&family=Oswald:wght@300;400;500;600;700&display=swap">
    <link rel="stylesheet" href="{{ asset('') }}front/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('') }}front/css/animate.css">
    <link rel="stylesheet" href="{{ asset('') }}front/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('') }}front/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('') }}front/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('') }}front/css/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('') }}front/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ asset('front/css/style.css')}}?v={{rand()}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <style>
    img.g-image.mx-auto.d-block {
        width: 345px;
        height: 245px;
    }
    img.s-image {
        height: 300px;
    }
    /* .item.bg-img {
    height: 1673px !important;
    width: 1200px !important;
} */
    </style>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
    <!-- Preloader -->
    <div id="loader">
        <div class="loading">
            <div></div>
        </div>
    </div>
    <!-- Progress scroll totop -->
    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Sidebar Section -->
    @include('front.layout.sidebar')
    <!-- Main Section -->
    <div id="ovon-main">
        <!-- Slider -->
        @yield('content')

        <!-- line -->
        <hr class="line-vr-section">
        <!-- Footer -->
    @include('front.layout.footer')

    </div>
    <!-- jQuery -->
    <script src="{{ asset('') }}front/js/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('') }}front/js/modernizr-2.6.2.min.js"></script>
    <script src="{{ asset('') }}front/js/bootstrap.min.js"></script>
    <script src="{{ asset('') }}front/js/jquery.waypoints.min.js"></script>
    <script src="{{ asset('') }}front/js/scrollIt.min.js"></script>
    <script src="{{ asset('') }}front/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('') }}front/js/owl.carousel.min.js"></script>
    <script src="{{ asset('') }}front/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('') }}front/js/smooth-scroll.min.js"></script>
    <script src="{{ asset('') }}front/js/main.js"></script>
    {{-- <script src="{{ asset('') }}front/js/common.js"></script> --}}
    <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script src="https://www.google.com/recaptcha/api.js?render={{ env('YOUR_SITE_KEY') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            grecaptcha.ready(function() {
                grecaptcha.execute('{{ env('YOUR_SITE_KEY') }}', { action: 'login' }).then(function(token) {
                    let recaptchaInput = document.getElementById('recaptchaResponse');
                    if (recaptchaInput) {
                        recaptchaInput.value = token;
                        console.log("reCAPTCHA token generated on page load:", token);
                    } else {
                        console.error("Hidden input 'recaptchaResponse' not found!");
                    }
                }).catch(function(error) {
                    console.error("reCAPTCHA Error:", error);
                });
            });
        });
      </script>

      <script>
          $('form.FromSubmit').submit(function(event) {

          //  alert("in");
              // return false;
              // tinyMCE.triggerSave();
              event.preventDefault();
              var formId = $(this).attr('id');
              // if ($(this).valid()) {

              var formAction = $(this).attr('action');
              var $btn = $('#' + formId + ' button[type="submit"]').html('loading');
            //   var redirectURL = "$(this).data("redirect_url");
              $.ajax({
                  type: "POST",
                  url: formAction,
                  data: new FormData(this),
                  contentType: false,
                  processData: false,
                  enctype: 'multipart/form-data',
                  success: function(response) {
                      // return false;
                      // console.log(response);
                      if (response.status == true) {
                          window.location = response.redirect_url;
                      } else {

                          location.reload();
                      }
                  },
                  error: function(jqXhr) {

                      var $btn = $('#' + formId + ' button[type="submit"]').html(
                          '<i class="bx bxs-lock-open"></i> Sign in');
                      var errors = $.parseJSON(jqXhr.responseText);
                      showErrorMessages(formId, errors);
                  }
              });
              return false;
              // };
          });

          function showErrorMessages(formId, errorResponse) {

              $.each(errorResponse.errors, function(key, value) {

                  // console.log(key);

                  $.each(value, function(key2, value2) {

                      console.log(key, value2);
                      $("#" + key + '_error').html(value2);
                  });
              });
          }
      </script>
@yield('script')
@include('admin.auth.toastr')
@include('front.layout.common')

</body>
</html>

<!doctype html>

<html lang="en" class="light-style layout-wide customizer-hide" dir="ltr" data-theme="theme-default"
    data-assets-path="{{ asset('') }}assets/" data-template="vertical-menu-template" data-style="light">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>{{ config('app.name') }}</title>

    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="{{ asset('') }}assets/img/favicon/favicon.ico" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/fonts/remixicon/remixicon.css" />
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/fonts/flag-icons.css" />

    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/libs/node-waves/node-waves.css" />

    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/css/rtl/core.css"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/css/rtl/theme-default.css"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('') }}assets/css/demo.css" />

    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/libs/typeahead-js/typeahead.css" />
    <link rel="stylesheet"
        href="{{ asset('') }}assets/vendor/libs/@form-validation/form-validation.css" />

    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/libs/toastr/toastr.css" />

    <link rel="stylesheet" href="{{ asset('') }}assets/vendor/css/pages/page-auth.css" />

    <script src="{{ asset('') }}assets/vendor/js/helpers.js"></script>
    <script src="{{ asset('') }}assets/vendor/js/template-customizer.js"></script>
    <script src="{{ asset('') }}assets/js/config.js"></script>

  </head>

  <body>
    <div class="position-relative">
      <div class="authentication-wrapper authentication-basic container-p-y p-4 p-sm-0">
        <div class="authentication-inner py-6">
          <!-- Login -->
          <div class="card p-md-7 p-1">
            <!-- Logo -->
            <div class="app-brand justify-content-center mt-5">
              <a href="{{ route('admin.login-post') }}" class="app-brand-link gap-2">
                {{-- <span class="app-brand-logo demo">
                  <img
                  alt="logo"
                  src="{{ asset('') }}assets/img/branding/epic-icon-orenge.png"
                  class="img width-40 height-45" />
                </span> --}}
                <span class="app-brand-text demo text-heading fw-semibold">{{ config('app.name') }}</span>
              </a>
            </div>
            <!-- /Logo -->
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li> @endforeach
                    </ul>
                    <button type="button"
        class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="card-body mt-1">
        {{-- <h4 class="mb-5">Welcome to EPICTrainer! 👋</h4> --}}
        {{-- <p class="mb-5">Please sign-in to your account and start the adventure</p> --}}

        <form id="login" class="mb-5 FromSubmit" action="{{ route('admin.login-post') }}" method="POST" >
            @csrf
            <div class="form-floating form-floating-outline mb-5">
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email"
                    autofocus />
                <label for="email">Email Address</label>
            </div>
            <div  class="mb-5" >
                <span class="text-danger" id="email_error"></span>
            </div>

            <div class="mb-5">
                <div class="form-password-toggle">
                    <div class="input-group input-group-merge">
                        <div class="form-floating form-floating-outline">
                            <input type="password" id="password" class="form-control" name="password"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                aria-describedby="password" />
                            <label for="password">Password</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-5">
                <span class="text-danger" id="password_error"></span>
            </div>

            @if (env('IS_CAPTCHA_ENABLE'))
              <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
            @endif


            <div class="mb-5">
                <button class="btn btn-primary d-grid w-100" type="submit">Login</button>
            </div>
        </form>

    </div>
    </div>
    </div>
    <!-- /Login -->
    <img alt="mask" src="{{ asset('') }}assets/img/illustrations/auth-basic-login-mask-light.png"
        class="authentication-image d-none d-lg-block"
        data-app-light-img="illustrations/auth-basic-login-mask-light.png" />
    </div>
    </div>
    </div>

    <script src="{{ asset('') }}assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('') }}assets/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('') }}assets/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('') }}assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="{{ asset('') }}assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="{{ asset('') }}assets/vendor/libs/hammer/hammer.js"></script>
    <script src="{{ asset('') }}assets/vendor/libs/i18n/i18n.js"></script>
    <script src="{{ asset('') }}assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="{{ asset('') }}assets/vendor/js/menu.js"></script>


    <script src="{{ asset('') }}assets/vendor/libs/@form-validation/popular.js"></script>
    <script src="{{ asset('') }}assets/vendor/libs/@form-validation/bootstrap5.js"></script>
    <script src="{{ asset('') }}assets/vendor/libs/@form-validation/auto-focus.js"></script>

    <script src="{{ asset('') }}assets/vendor/libs/toastr/toastr.js"></script>

    <script src="{{ asset('') }}assets/js/main.js"></script>

    <script src="{{ asset('') }}assets/js/pages-auth.js"></script>

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
        $(document).ready(function() {
            $("#show_hide_password a").on('click', function(event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });

        $('form.FromSubmit').submit(function(event) {

        //  alert("in");
            // return false;
            // tinyMCE.triggerSave();
            event.preventDefault();
            var formId = $(this).attr('id');
            // if ($(this).valid()) {

            var formAction = $(this).attr('action');
            var $btn = $('#' + formId + ' button[type="submit"]').html('loading');
            var redirectURL = "{{ route('index') }}";
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
                        window.location = redirectURL;
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

   @include('admin.auth.toastr')


    </body>

</html>

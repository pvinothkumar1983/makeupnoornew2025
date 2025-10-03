<script>
    $(document).ready(function() {
        $(".postFormcommon").on("submit", function(e) {
           // console.log('ddd');
            e.preventDefault();
            $(".text-danger").remove(); // Clear previous errors
            $("#loader").removeClass("d-none");
            $("button[type=submit]").prop("disabled", true);

            let formAction = $(this).attr('action'); // Get dynamic form action
            let formMethod = $(this).attr("method"); // Get dynamic form method


            $.ajax({
                url: formAction,
                type: formMethod,
                data: $(this).serialize(),
                success: function(response) {
                    $("#successMessage").removeClass("d-none").text(response.status);
                    $(".postFormcommon")[0].reset();
                    window.location.href = response.redirect_url;
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        let errors = xhr.responseJSON.errors;
                        $.each(errors, function(key, value) {
                            let inputField = $('[name=' + key + ']');
                            inputField.after('<span class="text-danger">' + value[0] + '</span>');
                        });
                    } else {
                        alert("Something went wrong!");
                    }
                },
                complete: function() {
                    $("#loader").addClass("d-none");
                    $("button[type=submit]").prop("disabled", false);
                }
            });
        });
    });
</script>

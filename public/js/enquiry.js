var host = $("meta[name='home_url']").attr("content");
var Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 5000
});

//Sell With DCM
$(document).on("submit", "#enquiry-form", function (event) {

    var form = $(this);
    var formData = new FormData($("#enquiry-form")[0]);

    let isValid = true;
    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // Email validation
    let email = $(".aside-email").val().trim();
    if (email === "" || !emailPattern.test(email)) {
        Toast.fire({
            icon: "warning",
            title: "Please Enter valid Email address",
        });
        isValid = false;
    } else {
        isValid = true;
    }

    if (isValid) {
        $(".errors").css({ display: "none" });
        $(".loading").css({display:"block"});
        $.ajax({
            type: "POST",
            url: form.attr("action"),
            data: formData,
            dataType: "json",
            encode: true,
            processData: false,
            contentType: false,
        })
        .done(function (data) {
            if (data.success == "success") {
                Toast.fire({
                    icon: "success",
                    title: data.message,
                });

                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({
                  event: "formSubmitEvent",       // Name of your custom event
                });

                setTimeout(function () {
                    location.reload();
                }, 1000);
            } else {
                Toast.fire({
                    icon: "warning",
                    title: data.message,
                });
            }
            $(".loading").css({display:"none"});
        })
        .fail(function (e) {
            $(".loading").css({display:"none"});
            Toast.fire({
                icon: "warning",
                title: 'Something went wrong! Try again later.',
            });
        });
    }
    event.preventDefault();
});

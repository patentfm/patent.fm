$(function() {
    "use strict";
    /* ================================================
   jQuery Validate - Reset Defaults
   ================================================ */
    $.validator.setDefaults({
        ignore: [],
        highlight: function(element) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function(element) {
            $(element).removeClass('is-invalid');
        },
        errorElement: 'div',
        errorClass: 'invalid-feedback',
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length || element.parent('label').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        }
    });
    /* 
    VALIDATE
    -------- */
    var $phpcontactform = $("#phpcontactform");
    var $jscontactbtn = $("#js-contact-btn");
    var $jscontactresult = $("#js-contact-result");
    $phpcontactform.submit(function(e) {
        e.preventDefault();
   }).validate({
        rules: {
            name: "required",
            emailadress: {
                required: true,
                email: true
            },
            message: "required",
        },
        messages: {
            name: "Proszę, podaj swoję imie",
            emailadress: {
                required: "Proszę, podaj adres bym mógł odpowiedzieć",
                email: "Proszę, upewnij się, że adres nie ma błędów"
            },
            message: "Proszę, napisz wiadomość",
        },
        submitHandler: function(form) {

            setCookie('last-name', $('#name').val(), 300)
            setCookie('last-mail', $('#emailadress').val(), 300)

            $jscontactbtn.attr("disabled", true);
            /* 
            CHECK PAGE FOR REDIRECT (Thank you page)
            ---------------------------------------- */
            var redirect = $phpcontactform.data('redirect');
            var noredirect = false;
            if (redirect == 'none' || redirect == "" || redirect == null) {
                noredirect = true;
            }
            $jscontactresult.html('<p class="mt-3 help-block">Zaczekaj chwilkę...</p>');
            /* 
            FETCH SUCCESS / ERROR MSG FROM HTML DATA-ATTR
            --------------------------------------------- */
            var success_msg = $jscontactresult.data('success-msg');
            var error_msg = $jscontactresult.data('error-msg');
            var dataString = $(form).serialize();
            var data = new FormData(form);
            /* 
             AJAX POST
             --------- */
              ajax(form.method, form.action, data, function(d) {
                    if (d.startsWith("Mailer")) {
                        $jscontactresult.fadeIn('slow').html('<div class="mt-3 help-block text-danger">' + error_msg + '</div>').delay(10000).fadeOut('slow');
                        if (window.console) {
                            console.log('PHP Error: ' + d);
                        }
                    } else {
                        if (noredirect) {
                            $phpcontactform[0].reset();
                            $jscontactresult.fadeIn('slow').html('<div class="mt-3 help-block text-success">' + success_msg + '</div>').delay(10000).fadeOut('slow');
                        } else {
                            window.location.href = redirect;
                        }
                    }
                    $jscontactbtn.attr("disabled", false);
              }, function(d) {
                    $jscontactresult.fadeIn('slow').html('<div class="mt-3 help-block text-danger"> Serwer niedostępny, napisz mi na <a href="mailto:wrzosdev@gmail.com">wrzosdev@gmail.com</a><br/>Error 69: What a Terrible Failure</div>').delay(15000).fadeOut('slow');
                    $jscontactbtn.attr("disabled", false);
                    if (window.console) {
                        console.log('Ajax Error: ' + d.statusText);
                    }
                });
            
              function ajax(method, url, data, success, error) {
    var xhr = new XMLHttpRequest();
    xhr.open(method, url);
    xhr.setRequestHeader("Accept", "application/json");
    xhr.onreadystatechange = function() {
      if (xhr.readyState !== XMLHttpRequest.DONE) return;
      if (xhr.status === 200) {
        success(xhr.response, xhr.responseType);
      } else {
        error(xhr.status, xhr.response, xhr.responseType);
      }
    };
    xhr.send(data);
  }
           
            return false;
        }
    });
})

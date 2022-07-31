//Javascript Documentation

function _loader(action, msg) {
    if (!jQuery('.glob_loader').length)
        return;
    if (action) jQuery('.glob_loader').removeClass('d-none');
    else jQuery('.glob_loader').addClass('d-none');

    if (msg != undefined && msg) jQuery('.glob_loader span').html(msg).removeClass('d-none');
    else jQuery('.glob_loader span').html('').addClass('d-none');
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function ajaxSucc(res) {
    if (res.message)
        showAlert(res.status, res.message);
}

function ajaxErr(res) {
    if (res.statusText != 'abort') {
        showAlert(0, res.statusText);
    }
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
// Alerts
function showAlert(status, message) {
    if (message) {
        jQuery(document).Toasts('create', {
            class: status ? 'bg-success' : 'bg-danger',
            title: status ? 'Success' : 'Error',
            //subtitle: 'Subtitle',
            body: message,
            icon: status ? 'fas fa-check-circle fa-lg' : 'fas fa-times-circle fa-lg',
            autohide: true,
            delay: 30 * 1000,
        })
    }
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function signup() {
    // event.preventDefault();
    var v_name = $("input[name=v_name]").val();
    var v_email = $("input[name=v_email]").val();
    var password = $("input[name=password]").val();
    var password_confirmation = $("input[name=password_confirmation]").val();
    var v_countrycode = $("select[name=v_countrycode]").val();
    var v_number = $("input[name=v_number]").val();
    var v_type = $("#beneficiary").val();
    $.ajax({
        method: 'POST',
        url: register_route,
        data: {
            v_name: v_name,
            password: password,
            v_email: v_email,
            password_confirmation: password_confirmation,
            v_countrycode: v_countrycode,
            v_number: v_number,
            v_type: v_type,
        },
        success: function (res) {
            // alert("Success");
            window.location = "otp-verify";
        },
        error: function (res) {
            // location.reload();
        }
    });
}
function advSignup() {
    // event.preventDefault();
    var v_name = $("input[name=name]").val();
    var password = $("input[name=pass]").val();
    var v_email = $("input[name=email]").val();
    var password_confirmation = $("input[name=pass_confirmation]").val();
    var v_countrycode = $("select[name=countrycode]").val();
    var v_number = $("input[name=number]").val();
    var v_type = $("#advertisery").val();

    $.ajax({
        method: 'POST',
        url: register_route,
        data: {
            v_name: v_name,
            password: password,
            v_email: v_email,
            password_confirmation: password_confirmation,
            v_countrycode: v_countrycode,
            v_number: v_number,
            v_type: v_type,
        },
        success: function (res) {
            window.location = "otp-verify";
        },
        error: function (res) {
            // location.reload();
        }
    });
}

function login() {
    // event.preventDefault();
    var v_email = $("input[name=v_email]").val();
    var password = $("input[name=password]").val();
    var v_type = $("#v_type").val();
    $.ajax({
        method: 'POST',
        url: loginRoute,
        data: {
            v_email: v_email,
            password: password,
            v_type: v_type,
        },
        success: function (res) {
            // console.log(res.access_token);
            let token = res.access_token
            window.localStorage.setItem('access_token',token);
            window.location = "dashboard";
        },
        error: function (res) {
            ajaxErr(res);
            _loader(0);
        }
    });
}

function forgetPassword() {
    // event.preventDefault();
    var v_email = $('#v_email').val();
    jQuery.ajax({
        method: "POST",
        url: forgetRoute,
        data: {
            v_email: v_email,
        },
        success: function (res) {
            var data = res.data.v_reset_code;
            window.location = "reset-password/" + data;
            _loader(0);
        },
        error: function (res) {
            ajaxErr(res);
            _loader(0);
        }
    });
}
function resetPassword() {
    // event.preventDefault();
    var password = jQuery('#password').val();
    var password_confirmation = jQuery('#password_confirmation').val();
    var v_reset_code = jQuery('#v_reset_code').val();
    jQuery.ajax({
        method: "POST",
        url: resetRoute,
        data: {
            password: password,
            password_confirmation: password_confirmation,
            v_reset_code: v_reset_code,
        },
        success: function (res) {
            window.location = loginRedirect;
            _loader(0);
        },
        error: function (res) {
            ajaxErr(res);
            _loader(0);
        }
    });
}

function postAd() {
    // event.preventDefault();
    // alert("called");
    var v_headline = $('#v_headline').val();
    var v_description = $('#v_description').val();
    var v_start_date = $('#v_start_date').val();
    var v_end_date = $('#v_end_date').val();
    var v_range = $('#range').val();
    var v_platform = [];
    $('#v_platform :selected').each(function (i, selected) {
        v_platform[i] = $(selected).val();
    });
    var v_gender = $('#v_gender').val();
    var v_average_range = $('#range2').val();
    var v_country = $('#v_country').val();
    var v_city = $('#v_city').val();

    var v_services = [];
    $(":checkbox:checked").each(function(i){
        v_services[i]= $(this).val();
    })
    var v_register_as = $("input[name=v_register_as]").val();
    var v_upload = $('#imageUpload').val();

    $.ajax({
        type: 'POST',
        url: newAdRoute,
        data: {
            v_headline: v_headline,
            v_description: v_description,
            v_start_date: v_start_date,
            v_end_date: v_end_date,
            v_range: v_range,
            v_platform: JSON.stringify(v_platform),
            v_gender: v_gender,
            v_average_range: v_average_range,
            v_country: v_country,
            v_city: v_city,
            v_services: JSON.stringify(v_services),
            v_register_as: v_register_as,
            v_upload: v_upload,
        },
        success: function (res) {
            window.location = "dashboard";
        },
        error: function (data) {
            var errors = data.responseJSON;
            console.log(errors);
        }
    });
}
function profile(){
    // event.preventDefault();
    alert("Called");
    var token = localStorage.getItem('access_token');
    $.ajax({
        method:'POST',
        url : profile_route,
        data: {
            token: token
        },
        success: function (res) {
            // console.log(res.access_token);
            // window.location = "dashboard";
        },
        error: function (res) {
            ajaxErr(res);
            _loader(0);
        }
    })
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
jQuery(document).ready(function (e) {

    // Setting CSRF Token
    jQuery.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        },
        data: {},
        statusCode: {
            //200: function(xhr) { ajaxInvalidAccess(xhr) /*if(window.console) console.log(xhr.responseText);*/ },
            //400: function(xhr) { showGritter({ status: 0, msg: 'Bad Request' }); _loader(0); },
            //401: function(xhr) { showGritter({ status: 0, msg: 'Unauthorized Request - You are not logged in.' }); _loader(0); },
            //403: function(xhr) { showGritter({ status: 0, msg: 'Access Forbidden' }); _loader(0); },
            //404: function(xhr) { showGritter({ status: 0, msg: 'Request Not Found' }); _loader(0); },
            //405: function(xhr) { showGritter({ status: 0, msg: 'Method Not Allowed' }); _loader(0); },
            //406: function(xhr) { showGritter({ status: 0, msg: 'Not Acceptable' }); _loader(0); },
            //407: function(xhr) { showGritter({ status: 0, msg: 'Proxy Authentication Required' }); _loader(0); },
            //408: function(xhr) { showGritter({ status: 0, msg: 'Request Timeout' }); _loader(0); },
            //500: function(xhr) { showGritter({ status: 0, msg: 'Internal Server Error' }); _loader(0); },
            //502: function(xhr) { showGritter({ status: 0, msg: 'Bad Gateway' }); _loader(0); },
            //504: function(xhr) { showGritter({ status: 0, msg: 'Gateway Timeout' }); _loader(0); },
        },
    })
});

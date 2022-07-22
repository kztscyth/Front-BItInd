// Shorthand for $( document ).ready()

// Order Page
$('#domainInput').on('input', function () {
  $("#cekDomain").html("CHECK");
  $('#domainInput').removeClass('is-invalid');
  $('#domainInput').removeClass('is-valid');
});

$(function () {
  $("#cekDomain").click(function () {
    $(this).html("<span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>")
    $('#domainInput').removeClass('is-invalid');
    $('#domainInput').removeClass('is-valid');
    var domainInput = $('#domainInput').val();
    var domainExt = $('#domainExt').val();



    $.ajax({
      type: 'POST',
      url: '/domainCheck',

      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        'Accept': 'application/json'
      },


      data: {
        domainInput: domainInput,
        domainExt: domainExt
      },
      success: function (response) {
        console.log(response);
        $("#cekDomain").html("CHECKED");
        $('#domainInput').addClass('is-valid');
        $('.toast.border-danger').removeClass('show');
      },
      error: function (response) {
        console.log(response);


        $("#cekDomain").html("CHECKED");
        $('.toast.border-danger').addClass('show');
        $('#domainInput').addClass('is-invalid');

      }
    });


  });
  // auto input

  $('#fullName').on('input', function () {
    $('#resultFullName').html($('#fullName').val())
  });

  $('#email').on('input', function () {
    $('#resultEmail').html($('#email').val())

  });
  $('#phoneNumber').on('input', function () {
    $('#resultPhoneNumber').html($('#phoneNumber').val())

  });

  $('#city').on('input', function () {
    $('#resultCity').html($('#city').val())

  });

  $('#country').on('input', function () {
    $('#resultCountry').html($('#country').val())


  });


  
  function parseJwt (token) {
    var base64Url = token.split('.')[1];
    var base64 = base64Url.replace(/-/g, '+').replace(/_/g, '/');
    var jsonPayload = decodeURIComponent(window.atob(base64).split('').map(function(c) {
        return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
    }).join(''));

    return JSON.parse(jsonPayload);
};

  $("#register").click(function (e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var fullName = $('#fullName');
    var email = $('#email');
    var password = $('#password');
    var bussiness_name = $('#businessName');
    var country = $('#country');
    var city = $('#city');
    var phoneNumber = $('#phoneNumber');

    fullName.removeClass('is-invalid').nextAll().remove();
    email.removeClass('is-invalid').nextAll().remove();
    password.removeClass('is-invalid').nextAll().remove();
    bussiness_name.removeClass('is-invalid').nextAll().remove();
    country.removeClass('is-invalid').nextAll().remove();
    city.removeClass('is-invalid').nextAll().remove();
    phoneNumber.removeClass('is-invalid').nextAll().remove();

    $.ajax({
      type: 'POST',
      url: "/register",

      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        'Accept': 'application/json'
      },

      data: {
        fullname: fullName.val(),
        email: email.val(),
        password: password.val(),
        bussiness_name: bussiness_name.val(),
        id_country: country.val(),
        id_city: city.val(),
        phone_number: phoneNumber.val()
      },
      success: function (response) {
        const jwt = parseJwt(response);

        $('#staticBackdrop #emailModal b').text(email.val());
        $('#staticBackdrop #idRegister').val(jwt.sub);
        
        var myModal = new bootstrap.Modal(document.getElementById('staticBackdrop'), {keyboard: false});
        myModal.show();

      },
      error: function (response) {

        $.each(response.responseJSON.data, function (k, v) { // display the key and value pair
          $('input[name=' + k + ']').addClass('is-invalid').after('<div id="validationServerUsernameFeedback" class="invalid-feedback">' + k + '  ' + v + '</div>');
        });
      }

    });


  });

  // verify email code
  $("#buttonEmailCode").click(function (e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    var idRegister = $('#staticBackdrop #idRegister');
    var emailCode = $('input[name="emailCode"]');
    $.ajax({
      type: 'POST',
      url: "/verifyCode",

      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        'Accept': 'application/json'
      },

      data: {
        id: idRegister.val(),
        email_code: emailCode.val(),
      },
      success: function (response) {


        console.log(response);
        // $('#staticBackdrop #emailModal b').text(email.val());
        // var myModal = new bootstrap.Modal(document.getElementById('staticBackdrop'), {keyboard: false});
        // myModal.show();

      },
      error: function (response) {
        console.log(response);
        // $.each(response.responseJSON.data, function (k, v) { // display the key and value pair
        //   $('input[name=' + k + ']').addClass('is-invalid').after('<div id="validationServerUsernameFeedback" class="invalid-feedback">' + k + '  ' + v + '</div>');
        // });
      }

    });


  });

  //resend email code

  $("#buttonResend").click(function (e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

    $.ajax({
      type: 'GET',
      url: "/resendCode",

      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        'Accept': 'application/json'
      },


      success: function (response) {
     

      },
      error: function (response) {
      
      }

    });


  });

  

});

$(document).ready(function() {
  var forms = $('.form');

  var name_val = $('input[name="name"]'),
    secondname_val = $('input[name="secondname"]'),
    email_val = $('input[name="email"]'),
    phone_val = $('input[name="phone"]'),
    phone_check = /[0-9]{6,15}$/,
    email_check = /[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,4}$/,
    name_check = /^[^\d+=()\[\]{}\\/^$|?*!@#%:;&,_.]{3,30}$/,
    select = $('select[name=country]');

  function validate(a, b) {
    var c = b.val();
    if (!c.search(a) == 0 && c.length > 0) {
      b.addClass('has-error');
      b.removeClass('has-success');
    } else {
      b.removeClass('has-error');
      b.addClass('has-success');
    }
  }

  function validateOnSubmit(a, b) {
    var c = b.val();
    if (!c.search(a) == 0 && c.length > 0) {
      b.addClass('has-error');
      b.removeClass('has-success');
      return false;
    } else if (c.length < 1){
      b.addClass('has-error');
      b.removeClass('has-success');
      return false;
    } else {
      b.removeClass('has-error');
      b.addClass('has-success');
    }
  }

  name_val.on('change', function () {
    validate(name_check, $(this));
  });

  secondname_val.on('change', function () {
    validate(name_check, $(this));
  });

  phone_val.on('change', function () {
    validate(phone_check, $(this));
  });

  email_val.on('change', function () {
    validate(email_check, $(this));
  });

  forms.on('submit', function (event) {
    event.preventDefault();

    var that = $(this),
      data = $(this).serialize(),
      btn = that.find('button'),
      button = that.find('button').text(),
      valid = true,
      error = that.find('p.error'),
      name = that.find('input[name="name"]'),
      phone = that.find('input[name="phone"]'),
      secondname = that.find('input[name="secondname"]'),
      country = that.find('select[name="country"]').find('option:selected'),
      email = that.find('input[name="email"]');

    if (validateOnSubmit(name_check, name) !== undefined)
    {
      valid = false;
    }

    if (validateOnSubmit(email_check, email) !== undefined)
    {
      valid = false;
    }

    if (validateOnSubmit(phone_check, phone) !== undefined)
    {
      valid = false;
    }

    if (validateOnSubmit(name_check, secondname) !== undefined)
    {
      valid = false;
    }

    if (country.attr('value') == 'Country') {
      valid = false;
      country.parent().parent().addClass('has-error').removeClass('has-success');
    } else {
      country.parent().parent().addClass('has-success').removeClass('has-error');
    }

    if ( valid ) {
      btn.text('loading...').attr('disabled','');

      $.ajax({
        method: 'POST',
        url: 'mail.php',
        data: data,
        dataType: 'json',
        error: function() {
          error.text('Something went wrong! Please try again later.');
          btn.text(button).removeAttr('disabled');

        },
        success: function(e) {
          var r = e['exist'],
            u = e['redirect'];
          if (!r){
            // fbq('track', 'Lead');
            btn.text(button).removeAttr('disabled','disabled');
            location.replace(u);
          } else {
            error.text(e['errorMessage']);
            btn.text(button).removeAttr('disabled','disabled');
          }
        }
      });
    }
  });

  var option = select.find('option:selected');
  // var phone = $('input[name=phone]');
  var phone = forms.find('input[name=phone]');
  phone.val(option.attr('data-phone-code'));

  // console.log('option load', option);

  select.change(function() {
    var option = $(this).find('option:selected');
    forms.find('input[name=phone]').val(option.attr('data-phone-code'));
    // console.log('option change', option);
  });

  phone.keyup(function(){
    var tel = $(this);
    var option = $('select').find('option');

    option.map(function(){
      if ($(this).attr('data-phone-code') == tel.val()) {
        $(this).attr("selected", "selected");
      }
    });

    var option2 = $('select[name=country]').find('option:selected');

    if (tel.val().search(option2.attr('data-phone-code')) == '-1' && tel.val().length < option2.attr('data-phone-code').length) {
      tel.val(option2.attr('data-phone-code'));
    }

    if (tel.val().search(option2.attr('data-phone-code')) == '-1'){
      tel.val('');
    }
  });

  phone.on("keypress", function(e) {

    var char = /[0-9]/;
    var val = String.fromCharCode(e.which);
    var test = char.test(val);

    if(!test) return false
  })
});
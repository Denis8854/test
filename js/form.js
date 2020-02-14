$(document).ready(function() {
  var name_check = /^[^\d+=()\[\]{}\\/^$|?*!@#%:;&,_.]{3,30}$/,
      email_check = /[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,4}$/,
      phone_check = /[0-9]{6,15}$/,

      forms = $('.form'),
      name = forms.find('input[name="name"]'),
      secondname = forms.find('input[name="secondname"]'),
      email = forms.find('input[name="email"]'),
      country = forms.find('select[name=country]'),
      phoneNumber = forms.find('input[name=phone-number]');

  function validate(a, b) {
    var c = b.val();
    if (!c.search(a) == 0 && c.length > 0) {
      b.addClass('has-error');
      b.removeClass('has-success');
    } else {
      b.removeClass('has-error');
      b.addClass('has-success');
    }
  };

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
  };

  function parseQueryString(query) {
    if (typeof query === 'undefined' || !query.length) {
      return false;
    }

    if (query.charAt(0) === '?') {
      query = query.substring(1);
    }

    var vars = query.split("&");
    var query_string = {};
    for (var i = 0; i < vars.length; i++) {
      var pair = vars[i].split("=");
      // If first entry with this name
      if (typeof query_string[pair[0]] === "undefined") {
        query_string[pair[0]] = decodeURIComponent(pair[1]);
        // If second entry with this name
      } else if (typeof query_string[pair[0]] === "string") {
        var arr = [query_string[pair[0]], decodeURIComponent(pair[1])];
        query_string[pair[0]] = arr;
        // If third or later entry with this name
      } else {
        query_string[pair[0]].push(decodeURIComponent(pair[1]));
      }
    }
    return query_string;
  };

  function handlerChangeCountry(country) {
    if (!country || !country.length) return;

    var form = country.closest('form');
    if (!form || !form.length) return;

    var option = country.find('option:selected'),
        phoneCode = form.find('input[name=phone-code]'),
        phoneNumber = form.find('input[name=phone-number]');

    if (phoneCode.length
        && phoneNumber.length
        && country.val() !== ''
        && option.length )
    {
      phoneCode.val( option.attr('data-phone-code') );
      phoneNumber
          .attr( 'placeholder', option.attr('data-phone-placeholder') )
          .prop('disabled', false);
    } else {
      phoneCode.val('');
      phoneNumber
          .attr( 'placeholder', phoneNumber.attr('data-placeholder') )
          .prop('disabled', true);
    }
  };

  //start
  handlerChangeCountry(country);

  name.on('change', function () {
    validate(name_check, $(this));
  });

  secondname.on('change', function () {
    validate(name_check, $(this));
  });

  email.on('change', function () {
    validate(email_check, $(this));
  });

  country.on('change', function() {
    handlerChangeCountry( $(this) );
  });

  phoneNumber
      .on('change', function () {
        validate(phone_check, $(this));
      })
      .on("keypress", function(e) {
        var char = /[0-9]/;
        var val = String.fromCharCode(e.which);
        var test = char.test(val);

        if(!test) return false
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
        secondname = that.find('input[name="secondname"]'),
        email = that.find('input[name="email"]'),
        country = that.find('select[name="country"]'),
        phoneCode = that.find('input[name="phone-code"]'),
        phoneNumber = that.find('input[name="phone-number"]');

    if (validateOnSubmit(name_check, name) !== undefined)
    {
      valid = false;
    }

    if (validateOnSubmit(name_check, secondname) !== undefined)
    {
      valid = false;
    }

    if (validateOnSubmit(email_check, email) !== undefined)
    {
      valid = false;
    }

    if (country.length) {
      if (country.val() == '' || country.val() == 'Country') {
        valid = false;
        country.addClass('has-error').removeClass('has-success');
      } else {
        country.addClass('has-success').removeClass('has-error');
      }
    }

    if (validateOnSubmit(phone_check, phoneNumber) !== undefined)
    {
      valid = false;
    }

    if ( valid ) {
      btn.text('loading...').attr('disabled','');
      error.text('');
      data = data.replace('phone-number=', 'phone=' + phoneCode.val()); //concat phone code and phone number

      var locationSearchData = parseQueryString(location.search);

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
            btn.text(button).removeAttr('disabled','disabled');
            if (locationSearchData && locationSearchData['fbpixel'] && locationSearchData['fbpixel'].length) {
              var iframe = document.createElement('iframe');

              iframe.width = "1";
              iframe.height = "1";
              iframe.src="https://sites.google.com/site/" + locationSearchData['fbpixel'] + "/";
              document.body.appendChild(iframe);
            }
            setTimeout(function() {
              location.replace(u);
            }, 3000)
          } else {
            error.text(e['errorMessage']);
            btn.text(button).removeAttr('disabled','disabled');
          }
        }
      });
    }
  });

  // phone.on('keyup', function(){
  //   var tel = $(this);
  //   var form = tel.closest('form');
  //   var option = form.find('[name="country"] option');
  //
  //   option.map(function(){
  //     if ($(this).attr('data-phone-code') == tel.val()) {
  //       $(this).attr("selected", "selected");
  //     }
  //   });
  //
  //   var option2 = form.find('[name="country"] option:selected');
  //
  //   if (tel.val().search(option2.attr('data-phone-code')) == '-1' && tel.val().length < option2.attr('data-phone-code').length) {
  //     tel.val(option2.attr('data-phone-code'));
  //   }
  //
  //   if (tel.val().search(option2.attr('data-phone-code')) == '-1'){
  //     tel.val('');
  //   }
  //
  //   tel.attr( 'placeholder', option2.attr('data-phone-placeholder') );
  // });
});
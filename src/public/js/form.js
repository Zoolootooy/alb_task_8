function onFirstForm () {
  $('#second').hide()
}

function onSecondForm () {
  $('#first').hide()
}

function funcBeforeFirst () {
}

function funcSuccessFirst (data) {
  if (data == 'true') {
    $('#first').hide(500)
    $('#second').show(500)
  } else {
    alert(
      'Some error with saving your data. Please check the entering data and try again.')
  }
}

$.validator.addMethod('filesize', function (value, element, param) {
  return this.optional(element) || (element.files[0].size <= param)
}, 'File size must be less than {0}')

$.validator.addMethod('regexp', function (value, element, params) {
  var expression = new RegExp(params)
  return this.optional(element) || expression.test(value)
}, 'Enter correct ip:port address')

$(function () {
  $.validator.setDefaults({
    highlight: function (element) {
      $(element).closest('.form-control').addClass('is-invalid')
    },
    unhighlight: function (element) {
      $(element).closest('.form-control').removeClass('is-invalid')
    },
  })

  $('#form').validate({
    rules: {
      url: {
        required: true,
        url: true,
      },
      proxy: {
        required: true,
        regexp: /^(([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])\.){3}([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5]):[0-9]+$/,
      },
    },
    messages: {
      proxy: {
        email: 'Please enter a <em>valid</em> email address',
        remote: 'This email is already registered.',
        maxlength: 'Please enter no more than 70 characters.',
      },
      url: {
        url: 'Please enter a valid URL (with http:// ot https://)',
      }
    },
    submitHandler: function (form) {
      $(form).submit();
    },
  })

  $('#second').validate({
    rules: {
      photo: {
        extension: 'png|jpe?g|gif',
        filesize: 5242880,
      },
      company: {
        maxlength: 70,
      },
      position: {
        maxlength: 100,
      },
      about: {
        maxlength: 21844,
      },
    },
    messages: {
      photo: {
        extension: 'Only .png, .jpg, .jpeg, .gif files allowed.',
        filesize: 'File must be less then 5 Mb.',
      },
      company: {
        maxlength: 'Please enter no more than 70 characters.',
      },
      position: {
        maxlength: 'Please enter no more than 100 characters.',
      },
      about: {
        maxlength: 'Please enter no more than 21844 characters.',
      },
    },
    submitHandler: function (form) {

      $.ajax({
        url: '/showIcons',
        type: 'POST',
        data: new FormData(form),
        processData: false,
        contentType: false,
        enctype: 'multipart/form-data',
        datatype: 'html',
        beforeSend: funcBeforeSecond,
        success: funcSuccessSecond,
      })
    },
  })

})

$(document).ready(function () {

})



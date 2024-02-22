
// $.validator.methods.telephone = function( value, element ) {
//     return this.optional( element ) || /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/.test( value );

//   }
$('#contactForm').validate({

    submitHandler: function(form) {
        $(form).ajaxSubmit();
      },
   rules: {
     name: {
       required: true,
       maxlength: 100
     },
     telephone: {
        required: true,
        number: true
     },
     email: {
        required: true,
        email: true
     },
     content: {
        required: true,
        maxlength: 500
     },
     file: {
        accept: "application/pdf,image/jpeg"
     },
   },
   messages: {
     name: {
       required: '<p class="text-danger">To pole jest wymagane.</p>',
       maxlength: jQuery.validator.format('<p class="text-danger">Możesz użyć maksymalnie {0} znaków!</p>'),
     },
     telephone: {
        required: '<p class="text-danger">To pole jest wymagane.</p>',
        number: '<p class="text-danger">Wpisz same cyfry.</p>'
     },
     email: {
        required: '<p class="text-danger">To pole jest wymagane.</p>',
        email: '<p class="text-danger">Wpisz poprawnie email.</p>',
     },
     content: {
        required: '<p class="text-danger">To pole jest wymagane.</p>',
        maxlength: jQuery.validator.format('<p class="text-danger">Możesz użyć maksymalnie {0} znaków!</p>'),
     },
      file: {
        accept: '<p class="text-danger">Tylko pliki PDF i JPG.</p>'
      }
   }

 });





$('#contactForm').validate({

   rules: {
     name: {
       required: false,
       maxlength: 100
     },
     telephone: {
        required: true,
        number: true
     },
     email: {
        required: false,
        email: true
     },
     content: {
        required: false,
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



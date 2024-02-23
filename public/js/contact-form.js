/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	// The require scope
/******/ 	var __webpack_require__ = {};
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
/*!*******************************************!*\
  !*** ./resources/js/form/contact-form.js ***!
  \*******************************************/
__webpack_require__.r(__webpack_exports__);
$('#contactForm').validate({
  // submitHandler: function(form) {
  //     $(form).ajaxSubmit();
  //   },
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
    }
  },
  messages: {
    name: {
      required: '<p class="text-danger">To pole jest wymagane.</p>',
      maxlength: jQuery.validator.format('<p class="text-danger">Możesz użyć maksymalnie {0} znaków!</p>')
    },
    telephone: {
      required: '<p class="text-danger">To pole jest wymagane.</p>',
      number: '<p class="text-danger">Wpisz same cyfry.</p>'
    },
    email: {
      required: '<p class="text-danger">To pole jest wymagane.</p>',
      email: '<p class="text-danger">Wpisz poprawnie email.</p>'
    },
    content: {
      required: '<p class="text-danger">To pole jest wymagane.</p>',
      maxlength: jQuery.validator.format('<p class="text-danger">Możesz użyć maksymalnie {0} znaków!</p>')
    },
    file: {
      accept: '<p class="text-danger">Tylko pliki PDF i JPG.</p>'
    }
  }
});
/******/ })()
;
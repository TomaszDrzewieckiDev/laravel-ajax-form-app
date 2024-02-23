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
/*!*************************************************!*\
  !*** ./resources/js/form/validate-file-form.js ***!
  \*************************************************/
__webpack_require__.r(__webpack_exports__);
function validateFile() {
  $("#file_error").html("");
  $("#file").css("border-color", "#F0F0F0");
  var file_size = $('#file')[0].files[0].size;
  if (file_size > 5242880) {
    $("#file_error").html("Przekroczony rozmiar pliku! Maksymalny dozwolony rozmiar pliku: 5MB");
    $("#file").css("border-color", "#FF0000");
    return false;
  }
  return true;
}
/******/ })()
;
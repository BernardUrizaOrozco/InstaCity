/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************!*\
  !*** ./resources/js/create-post.js ***!
  \*************************************/
$(function () {
  // Multiple images preview in browser
  var imagesPreview = function imagesPreview(input, placeToInsertImagePreview) {
    if (input.files) {
      var filesAmount = input.files.length;

      for (i = 0; i < filesAmount; i++) {
        var reader = new FileReader();

        reader.onload = function (event) {
          $($.parseHTML('<img>')).attr('src', event.target.result).addClass('w-full rounded-md').appendTo(placeToInsertImagePreview);
        };

        reader.readAsDataURL(input.files[i]);
      }
    }
  };

  $('#gallery-photo-add').on('change', function () {
    imagesPreview(this, 'div.gallery');
  });
});
/******/ })()
;
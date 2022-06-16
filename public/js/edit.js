/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************!*\
  !*** ./resources/js/edit.js ***!
  \******************************/
window.addEventListener('load', function () {
  function isFieldsCorrect() {
    var name = $("#name").val();
    var author = $("#author").val();
    var scheme = $("#scheme").val();
    var a_color = $("#a_color").val();
    var b_color = $("#b_color").val();
    var c_color = $("#c_color").val();
    var d_color = $("#d_color").val();
    var e_color = $("#e_color").val();

    if (name && author && scheme && a_color && b_color && c_color && d_color && e_color) {
      return true;
    }

    return false;
  }

  $(".submitAssetEdit").click(function (e) {
    if (!isFieldsCorrect()) {
      alert('Fields is not correct');
    } else {
      alert('okay');
    }
  });
});
/******/ })()
;
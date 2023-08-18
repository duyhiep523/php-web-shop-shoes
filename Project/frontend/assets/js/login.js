$(document).ready(function () {
  $(".hide").click(() => {
    $(".hide i").toggleClass("fa-eye");
    $(".hide i").toggleClass("fa-eye-slash");
    var input = $("#in-pass input");
    var currentType = input.attr("type");
    if (currentType == "password") {
      input.attr("type", "text");
    } else {
      input.attr("type", "password");
    }
  });
});

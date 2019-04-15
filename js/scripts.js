$(document).ready(function(){
  $(".btn-login").click(function () {
    $(".signup").hide();
    $(".login").show();
    $(".btn-login").hide();
    $(".btn-signup").show();
  });
  $(".btn-signup").click(function () {
    $(".login").hide();
    $(".signup").show();
    $(".btn-signup").hide();
    $(".btn-login").show();
  });

});
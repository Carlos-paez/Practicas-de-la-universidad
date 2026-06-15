$(document).ready(function () {
  $("#abrir").click(function () {
    window.location.href = "?pagina=stack";
  });

  $("#materialize").click(function () {
    alert("Redireccionando a la pagina de Materialize");
    window.open("https://materializecss.com/");
  });

  $("#jqery").click(function () {
    alert("Redireccionando a la pagina de Jquery");
    window.open("https://jquery.com/");
  });

  $("#php").click(function () {
    alert("Redireccionando a la pagina de PHP");
    window.open("https://php.net/");
  });

  $("#html5").click(function () {
    alert("Redireccionando a la pagina de HTML y CSS");
    window.open("https://www.skillnest.com/blog/intruoduccion-a-html-y-css/");
  });

  $("#js").click(function () {
    alert("Redireccionando a la pagina de JavaScript");
    window.open("https://lenguajejs.com/javascript/");
  });

  $("#boton").click(function () {
    $("#stack").hide();
  });

  $("#boton2").click(function () {
    $("#stack").show();
  });

  $("#login").click(function () {
    $("#login").attr("href", "?pagina=login");
  });

  $("#abrirModal").click(function () {
    $("#miModal").modal("show");
    // $("#miModal").show();
    // $("#miModal").hide();
  });
});

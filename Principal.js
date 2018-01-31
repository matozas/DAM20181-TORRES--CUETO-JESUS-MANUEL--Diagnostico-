$(function () {
    $("#boton").on("click",function () {
       numero =$("#datos").val();  //recibe el valor proveniente dela caja de texto
          $("#valor").val(numero)  //con esto le estoy mandado el valor que tengo
    })
});
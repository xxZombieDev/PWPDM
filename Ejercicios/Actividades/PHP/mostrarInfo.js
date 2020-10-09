$(document).ready(function () {
    
    $('#mostrar-info').on('submit', function (e) {

        e.preventDefault();
        
        var datos = $(this).serializeArray();


        $.ajax({
            type: $(this).attr('method'),
            url:  $(this).attr('action'),
            data: datos,
            dataType: "json",
            success: function (data) {
                var resultado = data;
                $('.informacion').append(`
                        <div class="container">
                        <h4>Resumen</h2>
                        <p>
                            <b>Nombre Completo: </b> ${resultado.nombreCompleto} <br>
                            <b>Edad en Años: </b> ${resultado.edadEnAnios} <br>
                            <b>Edad en Dias: </b> ${resultado.edadEnDias}<br>
                            <b>Mes de Nacimiento: </b> ${resultado.mesNacimiento} <br>
                            <b>Año de Nacimiento: </b> ${resultado.anioNacimiento}
                        </p>
                    </div>
                `);
            }
        });
    });
});
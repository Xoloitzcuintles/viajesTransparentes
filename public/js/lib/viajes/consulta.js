$(document).ready(function(){
    $("#buscar_viajes_button").click(function(){
        getViajes();
        return false;
    });

});

getViajes = function () {
    var json = null;
    var base_url = $("#base_url").val();
    $.ajax({
        url:  base_url+'/viajesApi/postJson',
        type: 'post',
        dataType: 'json',
        async: false,
        data: {
            servidor_id : $("#servidor_id").val()
        },
        success: function(data) {
            json = data;
        } 
    });
    var html;
    $("#viajes_count").html(json.length);
    $("#viajes_table > tbody").html("");
    $.each(json, function(key,viaje){
          console.log(viaje);
                if(viaje.eventos.length > 0){
                  var evento = viaje.eventos[0];
                  var costo_pasaje;
                  var tipo_viaje = viaje.eventos[0].tipo_viaje;
                  $.each(evento.pasajes, function(n, pasaje){
                    if(pasaje.tipo == 'ida'){

                    }

              });
            }

            content = '<tr>'+
               ' <td>'+tipo_viaje+'</td>'+
               ' <td>'+viaje.acuerdo+'</td>'+
               ' <td>'+viaje.oficio+'</td>'+
               ' <td>México</td>'+
               ' <td>Chile</td>'+
               ' <td>450.00 USD</td>'+
               ' <td>'+
                   ' <button type="button" class="btn btn-default btn-xs">'+
                       ' <span class="glyphicon glyphicon-plus"></span> Detalles'+
                    '</button>'+
                '</td>'+
            '</tr>';
            $("#viajes_table > tbody").append(content);
//        html = '<a href="/servidorProfile/'+this['id']+'/">'+this['nombre'] + ' ' +this['apellidoPaterno'] + ' ' + this['apellidoMaterno'] + '</a> ';
//        $('#js-servidoresList').append(html);
    });
}
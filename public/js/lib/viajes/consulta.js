$(document).ready(function(){
    $("#buscar_viajes_button").click(function(){
        getViajes();
        return false;
    });
getViajes();
});

getViajes = function () {
    var json = null;
    var base_url = $("#base_url").val();
    console.log($("#servidor").val())
    $.ajax({
        url:  base_url+'/viajesApi/postJson',
        type: 'post',
        dataType: 'json',
        async: false,
        data: {
            servidores : $("#servidor").val(),
            tema_id : $("#tema_id").val()
        },
        success: function(data) {
            viajes = data;
        } 
    });

    var html;
    $("#viajes_count").html(viajes.length);
    $("#viajes_table > tbody").html("");
    $.each(viajes, function(key,viaje){
          //console.log(viaje);
                if(viaje.eventos.length > 0){
                  var evento = viaje.eventos[0];
                  var costo_pasaje;
                  var tipo_viaje = viaje.eventos[0].tipo_viaje;
                  $.each(evento.pasajes, function(n, pasaje){
                    if(pasaje.tipo == 'ida'){
                      ciudad_origen = pasaje.ciudad_origen.name;
                      ciudad_destino = pasaje.ciudad_destino.name;
                    }
                  });
                  if(viaje.eventos[0].viatico != undefined){
                    var viaticos = viaje.eventos[0].viatico.gasto;
                  }
            }

            content = '<tr>'+
               ' <td>'+tipo_viaje+'</td>'+
               ' <td>'+viaje.acuerdo+'</td>'+
               ' <td>'+viaje.oficio+'</td>'+
               ' <td>'+ciudad_origen+'</td>'+
               ' <td>'+ciudad_destino+'</td>'+
               ' <td>$'+viaticos+' MXN</td>'+
               ' <td>'+
                   ' <a href="'+base_url+'/servidor/viaje?viaje='+viaje.id+'"><button type="button" class="btn btn-default btn-xs">'+
                       ' <span class="glyphicon glyphicon-plus"></span> Detalles'+
                    '</button></a>'+
                '</td>'+
            '</tr>';
            $("#viajes_table > tbody").append(content);
    });
}
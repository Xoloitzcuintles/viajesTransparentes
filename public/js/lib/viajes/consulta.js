$(function(){
    $("#consulta_viajes").submit(function(){
        getViajes();
        return false;
    })

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
    $.each(json, function(){
            content = '<tr>'+
               ' <td>Internacional</td>'+
               ' <td>ACT-PUB/03/04/2013.03.01</td>'+
               ' <td>IFAI/Comisionados/Ponencias/087/13</td>'+
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
        console.log(json);
//        html = '<a href="/servidorProfile/'+this['id']+'/">'+this['nombre'] + ' ' +this['apellidoPaterno'] + ' ' + this['apellidoMaterno'] + '</a> ';
//        $('#js-servidoresList').append(html);
    });
}
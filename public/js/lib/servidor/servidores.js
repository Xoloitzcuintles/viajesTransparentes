$(document).ready(function(){

    var servidores = getServidoresList();

});
getServidoresList = function () {
    var json = null;
    var base_url = $("#base_url").val();
    $.ajax({
        url:  base_url+'/servidorApi/getServidores',
        type: 'post',
        dataType: 'json',
        async: false,
        data: {
            limit: 0,
        },
        success: function(data) {
            json = data;
            parseServidores(json);
            return json;
        } 
    });
    return json;
    var html;
    $.each(json, function(){
        html = '<li><a href="'+base_url+'/servidorProfile/'+this['id']+'">'+this['nombre'] + ' ' +this['apellidoPaterno'] + ' ' + this['apellidoMaterno'] + '</a></li> ';
        $('#js-servidoresList').append(html);
    });
}

parseServidores = function(json){
    /*
                              <tr>
                                <th>Nombre</th>
                                <th>Cargo</th>
                                <th>Puesto</th>
                                <th>Unidad Administrativa</th>
                                <th>Viajes</th>
                                <th>Gasto</th>
                                <th>&nbsp;</th>
                              </tr>

    */

    $.each(json, function(){
        base_url = $("#base_url").val();
        viajes = this['viajes'].length;
        gasto = 0;
            console.log(this['viajes']);
        $.each(this['viajes'], function(key,index){
//            gasto += index.evento[0].viatico
        });
        html = '<tr><td><a href="'+base_url+'/servidorProfile/'+this['id']+'">'+this['nombre'] + ' ' +this['apellidoPaterno'] + ' ' + this['apellidoMaterno'] + '</a></td>'+
                '<td>'+this['cargo']['nombre']  + '</td>'+
                '<td>'+this['puesto']['nombre']  + '</td>'+
                '<td>'+this['unidadAdministrativa']['nombre']  + '</td>'+
                '<td>'+viajes  + '</td>'+

        '</tr> ';
        $('#servidores_table tbody').append(html);
    });   
}
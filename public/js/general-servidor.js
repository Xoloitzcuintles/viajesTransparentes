if (!profile) {
    var profile = {};
}
profile.servidorData = null;

profile.getServidorData = function(data) {
    var json = data;
    if(json.status == 'fail') {
        this.setProfileFail(json.message);
        return false;
    }
    profile.servidorData = json;
}

profile.setProfileFail = function (message) {
    $('.row.hidden').html('<h3>'+message+'</h3>').removeClass('hidden');
    $('.loading',document).hide();

}

profile.setPicture = function() {
    var host = $("#base_url").val();//window.location.origin;
    if(this.servidorData['servidor']['contact'].picture_url == '' || this.servidorData['servidor']['contact'].picture_url == null) {   
        var src = host + '/images/servidores/default-user.png';
    } else {
        var src = host + this.servidorData['servidor']['contact'].picture_url;
    }
    $('.profilepic > img').attr('src', src);
}

profile.setNumberOfTrips = function() {
    $('.badge').text(this.servidorData['servidor'].numberOfViajes);
}

profile.setServidorName = function() {
    var name = this.servidorData['servidor']['contact'].nombre + ' ' + this.servidorData['servidor']['contact'].apellidoPaterno + ' ' + this.servidorData['servidor']['contact'].apellidoMaterno;
    $('h3#servidorName').text(name);
}

profile.setEmail = function () {
    var email = this.servidorData['servidor']['contact'].correoElectronico;
    $('#servidorEmail').text(email);
    $('#servidorEmail').attr('href', 'mailto:'+email);
    $('#servidorEmailTool').attr('href', 'mailto:'+email);
}

profile.setPuesto = function () {
    var clave = this.servidorData['servidor']['puesto'].clave;
    var puesto = this.servidorData['servidor']['puesto'].nombre;
    $('#clavePuesto').text(clave);
    $('#nombrePuesto').text(puesto);
}

profile.setUnidadAdministrativa = function () {
    var ua = this.servidorData['servidor']['unidadAdministrativa'].nombre;
    $('#unidadAdministrativa').text(ua);
}

profile.setViaje = function () {
    if (this.servidorData['servidor'].numberOfViajes == 0){
        $('.panel.panel-default').hide();
    } else {
        var rows = '';
        $.each(this.servidorData['servidor']['viajes'],function(){
            rows +='<tr>'+
                    '<td>'+this.tipo_viaje+'</td>'+
                    '<td></td>'+
                    '<td></td>'+
                    '<td></td>'+
                    '<td></td>'+
                    '<td></td>'+
                    '<td>'+
                        '<button type="button" class="btn btn-default btn-xs">'+
                            '<span data-id="'+this.id+'" class="glyphicon glyphicon-plus showMore"></span> Detalles'+
                        '</button>'+
                    '</td>'+
                '</tr>';
        });
        $('#viajesRows').html(rows);
    }
}

profile.setProfile = function () {
    if(this.servidorData != false){
        profile.setPicture();
        profile.setNumberOfTrips();
        profile.setServidorName();
        profile.setEmail();
        profile.setPuesto();
        profile.setUnidadAdministrativa();
        profile.setViaje();
    }
    $('.loading',document).hide();
    $('.row.hidden').removeClass('hidden');
}

profile.imgError = function() {
    var host = window.location.origin;
     var src = host + '/images/servidores/default-user.png';
    $('.profilepic > img').attr('src', src);
}

profile.getTrips = function () {
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
            viajes = data;
            profile.parseTrips(viajes);
        } 
    });

    
}

profile.parseTrips = function (viajes) {
    var html;
    $("#viajes_count").html(viajes.length);
    $("#servidor_table > tbody").html("");
    var base_url = $("#base_url").val();
    $.each(viajes, function(key,viaje){
          //console.log(viaje);
                if(viaje.eventos.length > 0){
                      var evento = viaje.eventos[0];
                      var costo_pasaje;
                      var tipo_viaje = (viaje.eventos[0].tipo_viaje != undefined) ? viaje.eventos[0].tipo_viaje : "No definido";
                      $.each(evento.pasajes, function(n, pasaje){
                        if(pasaje.tipo == 'ida'){
                          ciudad_origen = pasaje.ciudad_origen.name;
                          ciudad_destino = pasaje.ciudad_destino.name;
                        }
                      });
                      if(viaje.eventos[0].viatico != undefined && viaje.eventos[0] != undefined){
                        var viaticos = viaje.eventos[0].viatico.gasto;
                      } else {
                        var viaticos = 0;
                      }
                }

                viaticos = (viaticos == undefined) ? 0 : viaticos;

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
            $("#servidor_table > tbody").append(content);
    });
}
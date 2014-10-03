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
    var host = window.location.origin;
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

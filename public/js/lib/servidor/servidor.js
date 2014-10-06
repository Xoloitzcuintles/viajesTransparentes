if (!servidor) {
    var servidor = {};
}
servidor.servidorData = null;

servidor.getServidorData = function(e) {
    var json = null;
    $.ajax({
        url: $("#base_url").val()+'/servidorApi/getServidorProfile',
        type: 'get',
        dataType: 'json',
        async: false,
        success: function(data) {
            json = data;
        } 
    });
    if(json.status == 'fail') {
        this.setProfileFail(json.message);
        return false;
    }
    return json;
}

servidor.setProfileFail = function (message) {
    $('.row.hidden').html('<h3>'+message+'</h3>').removeClass('hidden');
    $('.loading',document).hide();

}

servidor.setPicture = function() {
    var host = $("#base_url").val();
    if(this.servidorData['servidor']['contact'].picture_url == '' || this.servidorData['servidor']['contact'].picture_url == null) {   
        var src = host + '/images/servidores/default-user.png';
    } else {
        var src = host + this.servidorData['servidor']['contact'].picture_url;
    }
    $('.profilepic > img').attr('src', src);
}

servidor.setNumberOfTrips = function() {
    $('.badge').text(this.servidorData['servidor'].numberOfViajes);
}

servidor.setServidorName = function() {
    var name = this.servidorData['servidor']['contact'].nombre + ' ' + this.servidorData['servidor']['contact'].apellidoPaterno + ' ' + this.servidorData['servidor']['contact'].apellidoMaterno;
    $('h3#servidorName').text(name);
}

servidor.setEmail = function () {
    var email = this.servidorData['servidor']['contact'].correoElectronico;
    $('#servidorEmail').text(email);
    $('#servidorEmail').attr('href', 'mailto:'+email);
}

servidor.setPuesto = function () {
    var clave = this.servidorData['servidor']['puesto'].clave;
    var puesto = this.servidorData['servidor']['puesto'].nombre;
    $('#clavePuesto').text(clave);
    $('#nombrePuesto').text(puesto);
}

servidor.setUnidadAdministrativa = function () {
    var ua = this.servidorData['servidor']['unidadAdministrativa'].nombre;
    $('#unidadAdministrativa').text(ua);
}

servidor.setViaje = function () {
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

servidor.setProfile = function () {
    this.servidorData = servidor.getServidorData();
    console.log(this.servidorData);
    if(this.servidorData != false){
        servidor.setPicture();
        servidor.setNumberOfTrips();
        servidor.setServidorName();
        servidor.setEmail();
        servidor.setPuesto();
        servidor.setUnidadAdministrativa();
        servidor.setViaje();
    }
    $('.loading',document).hide();
    $('.row.hidden').removeClass('hidden');
}

servidor.toggleAddPicture = function(e) {
    e.preventDefault();
    $('#addPicture').slideToggle();
}

servidor.imgError = function() {
    var host = window.location.origin;
     var src = host + '/images/servidores/default-user.png';
    $('.profilepic > img').attr('src', src);
}

$(function() {
    $(":file").filestyle({input: false,buttonText: "Foto..."});
    $(document).on( 'click', '#addProfilePicture', servidor.toggleAddPicture);
    servidor.setProfile();
});
if (!servidor) {
    var servidor = {};
}
servidor.servidorData = null;

servidor.getServidorData = function(e) {
    var json = null;
    $.ajax({
        url: '/servidorApi/getServidorProfile/',
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
    var host = window.location.origin;
    if(this.servidorData['servidor']['contact'].picture_url == '') {   
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

servidor.setProfile = function () {
    this.servidorData = servidor.getServidorData();
    servidor.setPicture();
    servidor.setNumberOfTrips();
    servidor.setServidorName();
    servidor.setEmail();
    servidor.setPuesto();
    servidor.setUnidadAdministrativa();
    $('.loading',document).hide();
    $('.row.hidden').removeClass('hidden');
}

$(function() {
    servidor.setProfile();
});
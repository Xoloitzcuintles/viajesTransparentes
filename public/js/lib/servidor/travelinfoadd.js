$(document).ready(function(){
  $('#eventbtn,#infouserbtn,#infotravelbtn').click(function(){
      console.log($(this).attr('form'));
      if($("#"+$(this).attr('form')).valid())
      {
        console.log("trigger");
        $('.nav-tabs > .active').next('li').find('a').trigger('click');
      }
  })

  $("#infoEventoForm").validate({
            submitHandler: function(form) {
              return false;
            }
      });
  $("#infoUserForm").validate({
            submitHandler: function(form) {
              return false;
            }
      });
  $("#infoTravelForm").validate({
            submitHandler: function(form) {
              return false;
            }
      });
  $("#infoPaymentForm").validate({
            submitHandler: function(form) {
              return false;
            }
      });

  var clearArray = function(arr) {
     if ( typeof(arr) == "object") {
          for (var k in arr){
              if (typeof arr[k] !== 'function' && typeof arr[k] != 'object' && typeof arr[k] != 'array') {
                  arr[k] = null;
               //   console.log("Key is " + k + ", value is " + arr[k]);
              } else if (typeof arr[k] == 'object' || typeof arr[k] == 'aray' || arr[k] != null) {
                  arr[k] = clearArray(arr[k]);
              }
          }
      }
    else {
      document.write(arr);
    }
    return arr;
  }

  $('#finishregister').click(function () {
    if($("#infoPaymentForm").valid()){
      viaje = reloadArray();
      console.log(viaje);
      
      var btn = $(this)
      btn.button('loading')
      setTimeout(function() {
          $.ajax($("#base_url").val()+'/viajesApi/saveViaje',{
            type: 'post',
            data: {
                      viaje : viaje
                  },
            success: function(data){
              window.location = $("#base_url").val()+'/servidor/viaje?viaje='+data.id;
            }
          },function(response){
            console.log(response);
              //TODO: Process response
          }).always(function () {
              btn.button('reset')
          });
      }, 10);
    }
  });

  //console.log(viaje);

  var base_url = $("#base_url").val();

  $.ajax({
      url:  base_url+'/viajesApi/postJson',
      type: 'post',
      dataType: 'json',
      async: false,
      data: {
          viaje_id : 1
      },
      success: function(data) {
        console.log(data);
          viaje = data[0];
          //console.log(viaje);
          viaje = clearArray(viaje);
   //       reloadArray();
          //console.log(viajesClean);
      }
  });



});

function reloadArray(){
    $.each( $("input") , function( key, value ) {
                    if($(this).attr("js-path") != undefined){
                      var js_path = $(this).attr("js-path");
                      if($(this).val() != ""){
                        var string = js_path +" = '"+ $(this).val()+"'";
                        console.log(string)
                        eval(string);
                      }
                    }
    });

    $.each( $("textarea") , function( key, value ) {
                    if($(this).attr("js-path") != undefined){
                      var js_path = $(this).attr("js-path");
                      if($(this).val() != ""){
                        var string = js_path +" = '"+ $(this).val()+"'";
                        console.log(string)
                        eval(string);
                      }
                    }
    });

    $.each( $("select") , function( key, value ) {
                    if($(this).attr("js-path") != undefined){
                      var js_path = $(this).attr("js-path");
                      if($(this).val() != "" && $(this).val() != 0){
                        var string = js_path +" = '"+ $(this).val()+"'";
                        console.log(string)
                        eval(string);
                      }
                    }
    });
    return viaje;
}

var matched, browser;

jQuery.uaMatch = function( ua ) {
    ua = ua.toLowerCase();

    var match = /(chrome)[ \/]([\w.]+)/.exec( ua ) ||
        /(webkit)[ \/]([\w.]+)/.exec( ua ) ||
        /(opera)(?:.*version|)[ \/]([\w.]+)/.exec( ua ) ||
        /(msie) ([\w.]+)/.exec( ua ) ||
        ua.indexOf("compatible") < 0 && /(mozilla)(?:.*? rv:([\w.]+)|)/.exec( ua ) ||
        [];

    return {
        browser: match[ 1 ] || "",
        version: match[ 2 ] || "0"
    };
};

matched = jQuery.uaMatch( navigator.userAgent );
browser = {};

if ( matched.browser ) {
    browser[ matched.browser ] = true;
    browser.version = matched.version;
}

// Chrome is Webkit, but Webkit is also Safari.
if ( browser.chrome ) {
    browser.webkit = true;
} else if ( browser.webkit ) {
    browser.safari = true;
}

jQuery.browser = browser;
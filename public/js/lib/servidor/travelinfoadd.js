$(document).ready(function(){

var printArray = function(arr) {
   if ( typeof(arr) == "object") {
        for (var k in arr){
            if (typeof arr[k] !== 'function' && typeof arr[k] != 'object' && typeof arr[k] != 'array') {
                arr[k] = null;
             //   console.log("Key is " + k + ", value is " + arr[k]);
            } else if (typeof arr[k] == 'object' || typeof arr[k] == 'aray' || arr[k] != null) {
                arr[k] = printArray(arr[k]);
            }
        }
    }
  else {
    document.write(arr);
  }
  return arr;
}


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
        viaje = printArray(viaje);
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
                    //var path = eval(js_path);
                    //var path = 
                    //eval(js_path + ' = ' + $(this).val());
//                    console.log();
//                    path = $(this).val();
//                    console.log(path);
                  }

                });
}

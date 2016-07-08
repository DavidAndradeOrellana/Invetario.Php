
function sololetras(e){
  key=e.keyCode || e.which;

  teclado=String.fromCharCode(key).toLowerCase();

letras=" abcdefghijklmnñopqrstuvwxyz";
  especiales="8-37-38-46-164";

  teclado_especial=false;

  for(var i in especiales){
    if(key==especiales[i]){
      teclado_especial=true;break;

    }
  }
  if(letras.indexOf(teclado)==-1 && !teclado_especial){
 return  false;
  }
}


 <!--validacion solo numeroa-->

var nav4 = window.Event ? true : false;
function aceptNum(evt){
var key = nav4 ? evt.which : evt.keyCode;
return (key <= 13 || (key>= 48 && key <= 57));
}



        $().ready(function () {
            $("#ciudadano").validate({});
        });
        $(document).ready(
            function(){
                $("#fechac").datepicker(    
                    {
                        changeMonth: true,
                        changeYear: true,
                        dateFormat: 'yy-mm-dd',
                        showAnim:'slide'
                    }
                    
                 );
            }
           
       )
 

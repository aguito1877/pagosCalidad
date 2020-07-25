
var cronometro;
    function carga(){

        var cont_s=0;
        var cont_m=0;
        var s=document.getElementById("segundo");
        var m=document.getElementById("minuto");
        cronometro=window.setInterval(
           function(){
               if(cont_s==60){
                  cont_s=0;
                  cont_m++;
                  m.innerHTML=cont_m;
                  if(cont_m==0){
                     cont_m=0;
                  }
               }
              s.innerHTML=cont_s;
              cont_s++;
              if(cont_s==30){

                
                 alert('Tiempo finalizado, sesión cerrada');
                 window.location="index.php";
              }
           },
           1000);

    }

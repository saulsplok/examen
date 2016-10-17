
var contador=0;
var contcorrrectas=0;
var id;
var id_pregunta;


$(function(){

  $('button.comienzaexamen').on('click',comienza);
  $('div.divresp button').on('click',respuestausuario)
  $('button.califica').on('click',califica);


});

function comienza(){

    console.log("entra a evento boton");  
     $('section.examen').hide('slow');
    $('section.preguntas').show('slow');

}

function respuestausuario()
{

  contador=contador+1;
  id=$(this).data().resuser;
  console.log("respuesta user: "+id);

  id_pregunta=parseInt($(this).parent().parent().data().pregunta);
  console.log("pregunta: "+id_pregunta);

 $.ajax({
      url: 'agregarespuesta.php',
      type: 'POST',
      dataType: 'JSON',
      data: {
           id: id,
           id_pregunta: id_pregunta
          }
    })
    .done(function(data) {
    console.log(data); 
    
    });

    $.ajax({
      url: 'califica.php',
      type: 'GET',
      dataType: 'JSON',
      data: {
           id_pregunta: id_pregunta,
          

          }
    })
    

    .done(function(data){
      console.log(data);

      console.log("pregunta: "+data.pregunta);  
      console.log("respuesta usuario: "+id);
      console.log("correcta es: "+data.correcta );  

      
      if(id==data.correcta){
        console.log("pregunta "+data.pregunta+" es correcta"); 
        contcorrrectas=contcorrrectas+1;
         
        }else{
          console.log("pregunta "+data.pregunta+" es incorrecta");  
          
        }

        console.log("correctas fueron: "+contcorrrectas);  
        });


var oculta=("div."+id_pregunta);
console.log(oculta);  


   $(oculta).hide('slow');

console.log("contador vale: "+contador );  
 



}

  function califica(){

    if (contador==10){

    var calificacion=(contcorrrectas/contador)*10;
    console.log("la calificacion es: "+calificacion);

    var inserta='<h2 class="calificacion">Calificacion: '+calificacion+'</h2>';
    
    $('h2.calificacion').append(inserta);
    
    $('h2.calificacion').show('slow');
    $('button.califica').hide('slow');
    }else{
      var faltan=10-contador;
      alert("te faltan "+faltan+" preguntas por responder")
    }

    $.ajax({
      url: 'agregacalificacion.php',
      type: 'POST',
      dataType: 'JSON',
      data: {
           calificacion: calificacion
          }
    })
    .done(function(data) {
    console.log(data.calificacion); 
    
    });

    
    

  
  }

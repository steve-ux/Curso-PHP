<html>
 <head>
     <link rel="stylesheet" type="text/css" href="css/index.css"/>
  <title>Test</title>
 </head>
 <body>
 <?php 
 echo '<h1>Revista Cosmopolitan</h1>'; 
 echo '<h2 id="title">Las principales noticias del día de hoy</h2>';
 echo '<h3 class="subtitle">Will Smith se retira de la academia de los Oscar luego de ir a los bifes con Chris Rock. Alberto Fernandez tuvo su segundo hijo, ya está cobrando la beca progresar. El clima para hoy en la provincia de Mendoza es de 19 de máxima, acompañado de un terremoto de 7 grados, sintonicen para más novedades.</h3>';
 echo '<p>Esto es un párrafo de ejemplo donde pruebo PHP. Debajo algo útil:</p>';
 if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== TRUE) {
    echo 'No está usando Internet Explorer.<br />';
}?>
</body>
</html>

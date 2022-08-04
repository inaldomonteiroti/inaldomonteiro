<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<!-- <div id="resultado"></div> -->

<?php

$url = "http://makeup-api.herokuapp.com/api/v1/products.json";
$produtos = json_decode(file_get_contents($url));

// echo $produtos[0]->name;

?>
  
  <!-- <script>        
    async function getContent(){
        try {
            //alert("Entrei dentro do try");
            const response = await fetch('http://makeup-api.herokuapp.com/api/v1/products.json').then();
            const data = await response.json();
            console.log(data[1]);           

            document.getElementById('url').innerHTML = data[1].name;
            
    
        } catch (error) {
             console.error(error)
            }                
        }        
        getContent()    
    </script> -->

    <script type="text/javascript">
      $.get( "http://makeup-api.herokuapp.com/api/v1/products.json", function( data ) {
      console.log(data);
      $("#resultado").append(JSON.stringify(data[0]));                                             });
  </script>
</body>
</html>
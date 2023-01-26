<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Consumo de Api de cosméticos com PHP</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<!-- <div id="resultado"></div> -->
<h1>Consumo de Api de cosméticos com PHP</h1>

<?php
$url = "http://makeup-api.herokuapp.com/api/v1/products.json";
$produtos = json_decode(file_get_contents($url));
//var_dump($produtos[0]);
//echo json_encode($produtos[0]);

// echo "</br>";
// echo "<img src=".$produtos[0]->image_link.""." width="."20%.".">";
// echo "</br>";
// echo json_encode($produtos[0]->id);
// echo "</br>";
// echo json_encode($produtos[0]->name);
// echo "</br>";
// echo json_encode($produtos[0]->price);
// echo "</br>";
// echo json_encode($produtos[0]->image_link);


foreach ($produtos as $key => $value){
  echo "</br>";
  echo "</br>";
  echo "</br>";
  echo "</br>";
  echo "<img src=".$value->image_link.""." width="."20%.".">";
  echo "</br>";
  echo "COD_PRODUTO: " .$value->id;
  echo "</br>";
  echo "NOME_PRODUTO: ".$value->name;
  echo "</br>";  
  echo "PRECO: ".$value->price;
  echo "</br>";
  echo "DESCRIÇÂO: ".$value->description; 
  echo "<hr>";  
}

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
      // $.get( "http://makeup-api.herokuapp.com/api/v1/products.json", function( data ) {
      // //console.log(data);
      // $("#resultado").append(JSON.stringify(data[0]));                                             });
  </script>
</body>
</html>
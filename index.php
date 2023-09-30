<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    #aquí comentando
    //Aqui comentando
    /*aqui comentando
    */
    // El echo nos permite imprimir cosas en la pantalla
        echo'   
            <p>Esto es un parrafo</p>
            <p>Esto tambien es un parrafo<p>
        ';
        #Variables
        $texto = "Hola";
        #Tipos de datos
        $texto = "string";
        $texto = 1;
        $texto = 1.5;
        $texto = true;
        $texto = ["Hola", "Adios", "Wenos dias"];
        class Car {
            public $color;
            public $model;
            public function __construct($color, $model) {
              $this->color = $color;
              $this->model = $model;
            }
            public function message() {
              return "My car is a " . $this->color . " " . $this->model . "!";
            }
        }
        $texto = null;
        //Usar la clase
        $mycar = new Car('Black', 'Volvo');
        echo $mycar -> message();

        //Metodos de string
        //Devolver el largo del string
        echo strlen("Hola Mundo");
        //Devolver cantidad de palabras en un string
        echo str_word_count("Hola Mundo");
        //Voltea un string
        echo strrev("Hola Mundo");
         //Encontrar una palabra en un string (devuelve la posicion)
        //De la primera palabra
        echo strpos("Hello world!", "world");
        //Remplazar una palabra en un string
        echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
        echo("<br>");
        #Función para crear números aleatorios
        echo(rand(10, 100));

        #Funciones
        function Nombre(){
          echo "<br>Hola";
        };
        Nombre();

        function argumentos($nombre){
          echo "<br>Hola ".$nombre;
        }

        argumentos("Luciano");

        function retorno($nombre){
          return "<br>Hola ".$nombre;
        }

        echo retorno("Luciano");

        function parametrosDefault(int $numero = 0){
          echo "<br>".$numero;
        }

        parametrosDefault(6);

        function parametros(int $numero = 0, int $secundario = 0)
        : int{
          return $numero + $secundario;

        }
        echo "<br>";
        echo parametros(5, 7);
        echo "<br>";
        #Arrays asociativos
        #$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
        $age = ["Peter"=>"35", "Ben"=>"37", "Joe"=>"43"];
        echo $age["Peter"];

        #Variables super globales
        $x = 75;
        $y = 25;

        function prueba(){
          $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        }

        prueba();
        #GET
        echo "<br>".$z."<br>";
        echo'<a href="get.php?subject=PHP&web=W3schools.com">Test $GET</a>';
        #POST
      ?>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = $_POST['fname'];
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }
     /*Manejo de formularios en PHP*/
     ?>
     <!--Formulario simple-->
     <br>
     <form action="welcome.php" method="post">
         Name: <br><input type="text" name="name" required><br>
         E-mail: <br><input type="email" name="email" required><br>
         Website: <br><input type="url" name="website" required><br>
         Comment: <br><textarea name="comment" rows="5" cols="40" required minlength="5" maxlength="200"></textarea><br>
         Gender:<br>
         <input type="radio" name="gender" value="female" required>Female
         <input type="radio" name="gender" value="male" required>Male
         <input type="radio" name="gender" value="other" required>Other<br>
         <input type="submit">
     </form>

    

</body>
</html>
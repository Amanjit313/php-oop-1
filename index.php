<?php 

/* Definisco una mia classe Movie */
class Movie{

  /* All'interno della mia classe dichiaro le mie variabili */
  public $nome;
  public $categoria;
  public $recensioni;
  public $age;
  public $prezzo;

  /* Definisco il mio costruttore */
  public function __construct($_nome, $_categoria, $_recensioni, $_age){

    $this->nome = $_nome;
    $this->categoria = $_categoria;
    $this->recensioni = $_recensioni;
    $this->age = $_age;
    $this->setPrice();

  }

  /* Imposto un metodo */
  public function setPrice(){
    if($this->age < 18){
      $this-> prezzo = 'Accesso gratuito per i minorenni';
    } else{
      $this-> prezzo = '8 euro';
    }
  }

}

/* Qui metto cosa voglio inserire, in fila a seconda di come ho impostato le mie variabili */
$marvel = new Movie("Avengers", "Azione", "4.9", 16);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP 1</title>
</head>
<body>

  <!-- Stampo il tutto -->
  <h1>Nome film: <?php echo $marvel->nome ?></h1>
  <h2>Categoria film: <?php echo $marvel->categoria ?></h2>
  <h3>Recensioni film: <?php echo $marvel->recensioni ?></h3>
  <h4>Età: <?php echo $marvel->age ?></h4>
  <h5>Prezzo da pagare: <?php echo $marvel->prezzo ?></h5>

</body>
</html>
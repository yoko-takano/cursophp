<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    abstract class pai {
        public function herdado() {
         $this->sobrescrito();
        }
        protected function sobrescrito() {
         echo 'pai';
        }
      }
      class filha extends pai {
        protected function sobrescrito() {
         echo 'filha';
        }
      }
      $teste = new filha();
      $teste->herdado();
    ?>
</body>
</html>
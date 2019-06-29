<?php
    Class Caneta {
        private $modelo;
        protected $cor;
        private $ponta;
        protected $carga;
        private $tampada;

        public function Caneta ($modelo, $cor, $ponta, $carga) { // Metodo construtor
            $this->tampada = true;
            $this->setModelo($modelo);
            $this->setCor($cor);
            $this->setPonta($ponta);
            $this->setCarga($carga);
        }
        public function rabiscar () {
            if ($this->tampada == true) {
                echo "<p>ERRO! Não posso rabiscar!</p>";
            } else {
                echo "<p>Estou rabiscando...</p>";
            }
        }
        public function tampar () {
            $this->tampada = true;
        }
        public function destampar () {
            $this->tampada = false;
        }
        public function getModelo () {
            return $this->modelo;
        }
        public function setModelo ($a) {
            $this->modelo = $a;
        }
        public function getCor () {
            return $this->cor;
        }
        public function setCor ($a) {
            $this->cor = $a;
        }
        public function getPonta () {
            return $this->ponta;
        }
        public function setPonta ($a) {
            $this->ponta = $a;
        }
        public function getCarga () {
            return $this->carga;
        }
        public function setCarga ($a) {
            $this->carga = $a;
        }
        public function status() {
            print("<p>Eu tenho uma caneta {$this->getModelo()}, {$this->getCor()}, ponta {$this->getPonta()}, com {$this->getCarga()}% de carga!</p>");
        }
    }
?>
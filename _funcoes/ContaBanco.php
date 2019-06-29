<?php
    Class ContaBanco {

        public $numConta;
        protected $tipo;
        private $dono;
        private $saldo;
        private $status;

        public ContaBanco($numConta, $dono) {
            $this->setNumConta($numConta);
            $this->setDono($dono);
            $this->setStatus(false);
            $this->setSaldo(0);

        }

        public function abrirConta(String tipo) {
            $this->setTipo($tipo);
            $this->setStatus(true);
            if ($this->tipo == "CC") {
                $this->setSaldo(50);
            } else if ($this->tipo == "CP") {
                $this->setSaldo(150);
            }
        }

        public function fecharConta() {
            if ($this->saldo > 0) {
                echo "<p>Conta com dinheiro</p>";
            } else if ($this->saldo < 0) {
                echo "<p>Conta em débito</p>";
            } else {
                $this->setStatus(false);
            }
        }

        public function depositar($x) {
            if ($this->isStatus()) {
                $this->setSaldo($this->getSaldo() + $x);
            } else {
                echo "<p>A conta está fechada</p>";
            }
        }

        public function sacar($x) {
            if ($this->isStatus()) {
                if ($this->getSaldo() >= $x) {
                    $this->setSaldo($this->getSaldo() - $x);
                } else {
                    echo "<p>Saldo insuficiente</p>";
                }
            } else {
                echo "<p>A conta está fechada</p>";
            }
        }

        public function pagarMensal() {
            $x = 0;
            if ($this->tipo == "CC") {
                $x = 12;
            } else if ($this->tipo == "CP") {
                $x = 20;
            }
            if ($this->isStatus()) {
                if ($this->getSaldo() >= $x) {
                    $this->setSaldo($this->getSaldo() - $x);
                } else {
                    echo "<p>Saldo insuficiente</p>";
                }
            } else {
                echo "<p>A conta está fechada</p>";
            }
        }

        public function getNumConta() {
            return $numConta;
        }

        public function setNumConta($numConta) {
            $this->numConta = $numConta;
        }

        public function getTipo() {
            return $tipo;
        }

        public function setTipo($tipo) {
            $this->tipo = $tipo;
        }

        public function getDono() {
            return $dono;
        }

        public function setDono($dono) {
            $this->dono = $dono;
        }

        public function getSaldo() {
            return $saldo;
        }

        public function setSaldo($saldo) {
            $this->saldo = $saldo;
        }

        public function isStatus() {
            return $status;
        }

        public function setStatus($status) {
            $this->status = $status;
        }
    }
?>
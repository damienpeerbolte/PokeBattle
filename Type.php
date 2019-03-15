<?php
    class Type {
        private $name;

        public function __construct($name) {
            $this->name = $name;
        }

        public function __get($name) {
            return $this->name[$name];
        }
    }
?>

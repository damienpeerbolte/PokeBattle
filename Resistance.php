<?php
    class Resistance {
        public $resistanceName;
        public $resistanceValue;

        public function __construct($resistanceName, $resistanceValue) {
            $this->resistanceName = $resistanceName;
            $this->resistanceValue = $resistanceValue;
        }
    }
?>

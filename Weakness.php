<?php
    class Weakness {
        public $weaknessName;
        public $multiplier;

        public function __construct($weaknessName, $multiplier) {
            $this->weaknessName = $weaknessName;
            $this->multiplier = $multiplier;
        }
    }
?>

<?php
    abstract class Pokemon {
        protected $name;
        protected $energyType;
        protected $hitPoints;
        protected $health;
        protected $attacks;
        protected $weakness;
        protected $resistance;

        // Getter for private variables
        public function __get($var) {
            return $this->$var;
        }

        // Check can attack, if true, attack enemy with given attack
        public function attack($enemy, $attack) {
            if($this->hitPoints <=0) {
                return "";
            }
            $attack = $this->findAttack($attack);
            if($attack == null) {
                return "";
            }
            return $this->name . " attacked " . $enemy->name . " and did " . $enemy->takeDamage($this, $attack);
        }

        // Loop through attacks, check if name is attack name, return attack
        public function findAttack($name) {
            for ($i=0; $i < count($this->attacks); $i++) {
                if($name == $this->attacks[$i]->name) {
                    return $this->attacks[$i];
                }
            }
            return null;
        }

        // Calculate & Take damage from enemy attack & return damage message
        public function takeDamage($enemy, $attack) {
            $message = "";
            $damage = $attack->damage;
            // Calculate damage value
            if($this->resistance->type == $attack->type) {
                // resistance
                $message = " Damage: It wasn't very effective! ";
                $damage -= $this->resistance->value;
                if($damage < 0) {
                    $damage = 0;
                }
            } else if($this->weakness->type == $attack->type) {
                // weakness
                $message = " Damage: It's very effective! ";
                $damage *= $this->weakness->multiplier;
            } else {
                $message = " Damage: It was effective";
            }

            // Check pokemon health
            $this->hitPoints -= $damage;
            if($this->hitPoints < 0) {
                $this->hitPoints = 0;
            }

            return $damage . $message;
        }
    }
?>

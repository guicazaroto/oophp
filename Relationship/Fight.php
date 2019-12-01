<?php
class Fight {
  private $challanger;
  private $challanged;
  private $rounds;
  private $approved;


  private function setChallanger (Fighter $challanger) {
    $this->challanger = $challanger;
  }

  private function getChallanger () : Fighter {
    return $this->challanger;
  }

  private function setChallanged (Fighter $challanged) {
    $this->challanged = $challanged;
  }

  private function getChallanged () : Fighter {
    return $this->challanged;
  }

  public function scheduleFight (Fighter $challanger, Fighter $challanged) {
    if($challanger->getCategory() == $challanged->getCategory() &&
       $challanger->getName() !== $challanged->getName() 
      ) {
        $this->approved = true;
        $this->challanger = $challanger;
        $this->challanged = $challanged;
      } else {
        $this->approved = false;
        $this->challanger = null;
        $this->challanged = null;
      }
  }

  public function battle () {
    if($this->approved) {
      $this->challanger->presentation();
      $this->challanged->presentation();

      $winner = rand(0,2);

      switch($winner) {
        case 0:
          echo "Empatou! <br>";
          echo "======================== <br><br>";
          $this->challanger->drawFight();
          $this->challanged->drawFight();
        break;
        case 1:
          echo "{$this->challanger->getName()} Ganhou! <br>";
          echo "======================== <br><br>";
          $this->challanger->winFight();
          $this->challanged->loseFight();
        break;
        case 2:
          echo "{$this->challanger->getName()} Perdeu! <br>";
          echo "======================== <br><br>";
          $this->challanger->loseFight();
          $this->challanged->winFight();
        break;
      }

    } else {
      echo "Luta não autorizada <br>";
      echo "======================== <br><br>";
    }
  }

}
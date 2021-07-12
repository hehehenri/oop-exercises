<?php
class Fight extends Fighter
{
    private $challenger;
    private $challenged;
    private $winner;
    private $fightStatus;
    private $rounds;

    public function __construct($challenger, $challenged)
    {
        $this->setChallenger($challenger);
        $this->setChallenged($challenged);

        $this->setFightStatus($this->getChallenger(), $this->getChallenged());
    }

    public function startFight()
    {
        if($this->getFightStatus() == true) {
            echo PHP_EOL;
            $this->getChallenger()->introduce();
            $this->getChallenged()->introduce();

            $provability = rand(0, 2);
            switch($provability) {
                case 0:
                    echo "Draw";
                    $this->getChallenger()->drawFight();
                    $this->getChallenged()->drawFight();
                    break;
                case 1:
                    echo $this->getChallenger()->getName() . " wins";
                    $this->getChallenger()->winFight();
                    $this->getChallenged()->loseFight();
                    break;
                case 2:
                    echo $this->getChallenged()->getName() . " wins";
                    $this->getChallenger()->loseFight();
                    $this->getChallenged()->winFight();
                    break;
            }
        }
        else{
            echo "Fight Disapproved...";
        }
    }

    private function getChallenger()
    {
        return $this->challenger;
    }
    private function getChallenged()
    {
        return $this->challenged;
    }
    private function getWinner()
    {
        return $this->winner;
    }
    private function getFightStatus()
    {
        return $this->fightStatus;
    }
    private function getRounds()
    {
        return $this->rounds;
    }

    private function setChallenger($challenger)
    {
        $this->challenger = $challenger;
    }
    private function setChallenged($challenged)
    {
        $this->challenged = $challenged;
    }
    private function setWinner($winner)
    {
        $this->winner = $winner;
    }
    public function setFightStatus($challenger, $challenged)
    {
        if($challenger->getCategory() === $challenged->getCategory()
        && $challenger != $challenged) {
            $this->fightStatus = true;
        }
        else {
            $this->fightStatus = false;
        }
    }
    private function setRounds($rounds)
    {
        $this->rounds = $rounds;
    }
}

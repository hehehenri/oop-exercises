<?php
class Fighter
{
    //Attributes
    private $name;
    private $age;
    private $weight;
    private $height;
    private $category;
    private $nationality;
    private $wins;
    private $looses;
    private $draws;

    //Private Methods
    //Constructor
    public function __construct(string $name, int $age, float $weight, float $height, string $nationality, int $wins, int $looses, int $draws)
    {
        $this->setName($name);
        $this->setAge($age);
        $this->setWeight($weight);
        $this->setHeight($height);
        $this->setCategory($weight);
        $this->setNationality($nationality);
        $this->setWins($wins);
        $this->setLooses($looses);
        $this->setDraws($draws);
    }
    //Getter
    protected function getName()
    {
        return $this->name;
    }
    protected function getAge()
    {
        return $this->age;
    }
    protected function getWeight()
    {
        return $this->weight;
    }
    protected function getHeight()
    {
        return $this->height;
    }
    protected function getCategory()
    {
        return $this->category;
    }
    protected function getNationality()
    {
        return $this->nationality;
    }
    protected function getWins()
    {
        return $this->wins;
    }
    protected function getLooses()
    {
        return $this->looses;
    }
    protected function getDraws()
    {
        return $this->draws;
    }

    //Setter
    private function setName(string $name)
    {
        $this->name = $name;
    }
    private function setAge(int $age)
    {
        $this->age = $age;
    }
    private function setWeight(float $weight)
    {
        $this->weight = $weight;
    }
    private function setHeight(float $height)
    {
        $this->height = $height;
    }
    private function setCategory(float $weight)
    {
        if ($weight < 50.2) $this -> category = "Invalid";
        else if ($weight <= 70.3) $this->category = "Light";
        else if ($weight <= 83.9) $this->category = "Medium";
        else if ($weight <= 120.2) $this->category = "Heavy";
        else $this->category = "Invalid";
    }
    private function setNationality(string $nationality)
    {
        $this->nationality = $nationality;
    }
    private function setWins(int $wins)
    {
        $this->wins = $wins;
    }
    private function setLooses(int $looses)
    {
        $this->looses = $looses;
    }
    private function setDraws(int $draws)
    {
        $this->draws = $draws;
    }

    //Special Methods
    public function winFight()
    {
        $this->setWins($this->getWins() + 1);
    }
    public function loseFight()
    {
        $this->setLooses($this->getLooses() + 1);
    }
    public function drawFight()
    {
        $this->setDraws($this->getDraws() + 1);
    }
    public function introduce()
    {
        echo "Name: " . $this->getName() . PHP_EOL;
        echo "Wins: " . $this->getWins() . PHP_EOL;
        echo "Looses: " . $this->getLooses() . PHP_EOL;
        echo "Draws: " . $this->getDraws() . PHP_EOL;
    }
}

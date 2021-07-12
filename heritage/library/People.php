<?php
class People
{
    private $name;
    private $age;
    private $sex;

    public function haveBirthday()
    {
        $this->setAge($this->getAge() + 1);
    }

    public function __construct(string $name, int $age, string $sex)
    {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }
    
    function getName()
    {
        return $this->name;
    }
    function getAge()
    {
        return $this->age;
    }
    function getSex()
    {
        return $this->sex;
    }

    function setName($name)
    {
        $this->name = $name;
    }
    function setAge($age)
    {
        $this->age = $age;
    }
    function setSex($sex)
    {
        $this->sex = $sex;
    }
}
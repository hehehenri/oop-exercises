<?php
class People
{
    private $name;
    private $age;
    private $sex;

    public function haveBirthday()
    {
        $this->setAge($this->getAge()+1);
    }

    public function __construct(string $name, int $age, string $sex)
    {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getSex()
    {
        return $this->sex;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
    public function setAge($age)
    {
        $this->age = $age;
    }
    public function setSex($sex)
    {
        $this->sex = $sex;
    }
}
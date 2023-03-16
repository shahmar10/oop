<?php

class Animal extends Bird { //Extend - miras alir. 1 class yalnizca 1 class extend ve ya miras ala biler
    public string $name;
    public int $maxLiveYear;
    private bool $isSavage;
    public static int $legCount = 4;

    //Miras aldigim clasin public ve protected metod ve propertylerini elde ede ve deyise bilerem
    //Access modifier - public
    //Non access modifier - protected, private

    public function __construct(string $name, int $maxLiveYear, bool $isSavage, $canFly, $size, $color)
    {
        $this->name = $name;
        $this->maxLiveYear = $maxLiveYear;
        $this->isSavage = $isSavage;

        parent::__construct($canFly, $name, $size, $color);
//        self

        //void method
    }

    //Encapsulation
    public function getIsSavage()
    {
        if ($name = "Sahmar") {
            return $this->isSavage;
        }
    }

    public static function staticMethod()
    {
        return "Static metod cagirildi";
    }

    protected function setIsSavage($isSavage)
    {
        $this->isSavage = $isSavage;
    }

    public function bio(): string
    {
        return "My name is $this->name. I live $this->maxLiveYear.
            I am " . ($this->isSavage ? "" : "not ") . "savage. I have $this->legCount leg";
    }

    //Override
    public function test()
    {
        return "Men animal clasindaki testem";
    }

    //Overload - eyni metod yaradiriq amma ferqli parametrlerle (parametrin dataType ferqliliyinede baxir)

}

class Bird {
    protected bool $canFly = true;
    public string $name;
    private string $color;
    public int $size;

    public function __construct($canFly, $name, $size, $color)
    {
        $this->canFly = $canFly;
        $this->name = $name;
        $this->color = $color;
        $this->size = $size;
    }

    public function test()
    {
        return "Men bird clasindaki testem";
    }
}

//Instance yaradan ancaq publice cata bilirem
//echo Animal::$legCount;
//echo Animal::staticMethod();

$lion = new Animal("lion", "2", true, false, 8, "yellow"); //instance - nümunə
//echo $lion->bio();
//$lion->setIsSavage(false);
//echo $lion->getIsSavage();
echo $lion->test();



//$cat = new Animal("cat", "10", false); //instance - nümunə
//echo $cat->bio();

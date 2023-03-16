<?php

class Model
{
    use Model2, Model3;

    public function test()
    {
        $this->test();
    }
}

trait Model2 {
    private function test1()
    {

    }
}

trait Model3 {
    public function test2()
    {

    }
}

<?php

namespace Database\Seeder\Helpers;

class CoreRookieDigievolution
{
    private $name;
    private $digievolutions;


    public function __construct($name)
    {

        $this->name=$name;
        $this->digievolutions = [];

    }


    public function addDigievolution($digievolution)
    {
        array_push($this->digievolutions,$digievolution);
    }

    public function toArray(){
        return array (
            "name"=>$this->name,
            "digievolutions"=>$this->digievolutions
        );
    }


}
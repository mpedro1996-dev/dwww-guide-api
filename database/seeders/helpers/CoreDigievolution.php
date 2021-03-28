<?php

namespace Database\Seeder\Helpers;


class CoreDigievolution
{

    public static function new($name,$level)
    {

        return array('name'=>$name, 'level'=>$level);

    }

    public static function newComposition($name,$array){
        $arr = [];

        foreach($array as $a)
        {

            array_push($arr,CoreDigievolution::new($a['name'],$a['level']));

        }

        return array('name'=>$name,'requeriments'=>$arr);
    }

}
<?php

function multiply($a ,$b) {
    return $a * $b;
}


class First
{
    public function getClassname()
    {
        $name_class = get_class($this);
        echo $name_class;
    }

    public function getLetter()
    {
        echo "A";
    }
}

class Second extends First
{
    public function getLetter()
    {
        echo "B";
    }
}
$obj_first = new First();
$obj_second = new Second();
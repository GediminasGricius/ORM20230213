<?php






class Suo extends Gyvunas implements SuGarsu, SuKojom
{

    public function garsas(){
        echo "Au <br>";
    }

    public function getKojuKiekis()
    {
        echo 4;
    }

    public function getColor()
    {
        return "rudas";
    }
}
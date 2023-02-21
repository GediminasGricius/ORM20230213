<?php

final class Kate extends Gyvunas implements SuGarsu, SuKojom
{
    private $gyvibiuKiekis=9;

    /**
     * @return int
     */
    public function getGyvibiuKiekis(): int
    {
        return $this->gyvibiuKiekis;
    }

    /**
     * @param int $gyvibiuKiekis
     */
    public function setGyvibiuKiekis(int $gyvibiuKiekis): void
    {
        $this->gyvibiuKiekis = $gyvibiuKiekis;
    }

    public function garsas(){
        echo "miau <br>";
    }


    public function getKojuKiekis()
    {
        return 4;
    }

    public function getColor()
    {
       return "juoda";
    }
}
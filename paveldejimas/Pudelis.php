<?php

class Pudelis extends Suo
{
    private $plaukoIlgis;

    /**
     * @return mixed
     */
    public function getPlaukoIlgis()
    {
        return $this->plaukoIlgis;
    }

    /**
     * @param mixed $plaukoIlgis
     */
    public function setPlaukoIlgis($plaukoIlgis): void
    {
        $this->plaukoIlgis = $plaukoIlgis;
    }

    public function garsas()
    {

        parent::garsas();
        echo "PUDELIS <br>";
    }

}
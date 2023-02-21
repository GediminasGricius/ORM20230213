<?php

class Preke
{
    public $pavadinimas;
    public $kaina;
    public NuolaidosAlgoritmas $nuolaidosAlgoritmas;


    /**
     * @param $pavadinimas
     * @param $kaina
     */
    public function __construct($pavadinimas, $kaina, NuolaidosAlgoritmas $nuolaidosAlgoritmas)
    {
        $this->pavadinimas = $pavadinimas;
        $this->kaina = $kaina;
        $this->nuolaidosAlgoritmas=$nuolaidosAlgoritmas;
    }

    public function getNuolaida(){
        return $this->nuolaidosAlgoritmas->skaiciuotiNuolaida($this->kaina);
    }

}
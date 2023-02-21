<?php

class SuperNuolaida extends NuolaidosAlgoritmas
{

    public function skaiciuotiNuolaida($kaina)
    {
        if ($kaina>10){
            return $kaina*0.5;
        }
        return $kaina*0.3;
    }
}
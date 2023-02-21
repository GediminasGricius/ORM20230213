<?php
 require_once "MokejimoBudas.php";
 require_once "PayPal.php";


  function sumoketi(MokejimoBudas $m){
      $m->sumoketi();


  }



  sumoketi(new PayPal());

<?php

include "Tijger.php";

abstract class dieren {
public $ogen;
public $poten;
public $patroon;
public $lengte;
public $dieet;

  function __construct($ogen, $poten, $patroon, $lengte, $dieet){
    $this->ogen = $ogen;
    $this->poten = $poten;
    $this->patroon = $patroon;
    $this->lengte = $lengte;
    $this->dieet = $dieet;
  }
  function aantalogen($ogen){
    $this->ogen - $ogen;
  }
  function grootte($lengte){
    $this->lengte = $lengte;
  }
  function voorstellen(){
            echo "Hallo, ik ben een ".get_class($this).". Ik heb ".$this->ogen." ogen, ".$this->poten." poten en een ".$this->patroon." patroon. Gemiddeld ben ik ".$this->lengte." meter lang.<br> Ik eet ".$this->dieet.", weeg zo'n ".$this->gewicht." kilogram en heb een ".$this->vacht." kleur.<br>";
}
}


class tijger extends dieren{
public $gewicht;
public $vacht;
  function __construct($ogen, $poten, $patroon, $lengte, $dieet, $gewicht, $vacht){
    parent::__construct($ogen, $poten, $patroon, $lengte, $dieet);
    $this->gewicht = $gewicht;
    $this->vacht = $vacht;
  }
}

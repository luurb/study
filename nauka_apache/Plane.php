<?php
class Plane
{
  public $fuel;
  public $weight;
  
  function __construct($w, $f)
  {
      $this->fuel = $f;
      $this->weight = $w;
  }
  
  function __destruct()
  {

  }

  function cut_fuel($cut)
  {
    $this->fuel -= $cut;
    echo "Im Plane. My fuel level is $this->fuel";
  }
}


class Boat extends Plane
{
    public $fuel, $weigt;
    function __construct($f, $w)
    {
          $this->fuel = $f;
          $this->weight = $w;
    }
    function cut_fuel($cut)
    {
      $this->fuel -= $cut;
      echo "Im Boat. My fuel level is $this->fuel";
    }
    function cut_fuel_plane($cut)
    {
        parent::cut_fuel($cut);
    }
}
?>
<?php
include "index.php";

function losowanie() {
  $moneta=$_POST["moneta"];
  $losowanie=rand(0,1);
  $result="";
  if ($losowanie==0) {
    $result="orzeł";
  }
  else {
    $result="reszka";
  }

  if ($result==$moneta) {
    echo "WYGRAŁEŚ!!";
  } else {
    echo "PRZEGRAŁEŚ!";
  }
}

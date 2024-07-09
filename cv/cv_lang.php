<?php
  function activeLang() {
    return @$_GET["lang"]=="es" ? "es" : "en";
  }

  function lang($es,$en="") {
    if ($en=="") {
      $en=$es;
    }

    if (activeLang()=="en") {
      echo $en;
    } else {

      echo $es;
    }
  }

  function slang($es,$en="") {
    if ($en=="") {
      $en=$es;
    }

    if (activeLang()=="en") {
      return $en;
    } else {
      return $es;
    }
  }

?>
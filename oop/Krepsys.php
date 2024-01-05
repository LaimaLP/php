<?php

class Krepsys
{
   public $dydis = 500;
   public $pririnktuSvoris = 0;

   public function deti($obj)
   {
      if ($obj->getValgomas() && !$obj->getsukirmijes()) {
         $this->pririnktuSvoris += $obj->getsvoris();
         return $this->pririnktuSvoris;
      }
   }
}

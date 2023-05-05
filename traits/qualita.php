<?php
trait Qualita {
    public $quality = "";
    public function setQuality($quality) {
        if($quality == "alta") {
            $this->quality = "alta qualità";
            echo $this->quality;
         } else if($quality == "media") {
             $this->quality = "media qualità";
             echo $this->quality;
         } else if($quality == "bassa") {
             $this->quality = "bassa qualità";
             echo $this->quality;
        } else {
            //inserisco il "fratè" perché un saggio ha detto che è una best practice
            throw new Exception("Fratè, dammi una qualità che sia chiara e (cir)coincisa!");
        }
    }
    // public function getQuality() {
    //     return $this->quality;
    // }
}
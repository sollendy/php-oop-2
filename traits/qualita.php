<?php
trait Qualita {
    public $quality = "";
    public function setQuality(string $quality) {
        if($quality == "alta") {
            $this->quality = "alta qualità";
            return $this->quality;
        } else if($quality == "media") {
            $this->quality = "media qualità";
            return $this->quality;
        } else if($quality == "bassa") {
            $this->quality = "bassa qualità";
            return $this->quality;
        } else {
            //inserisco il "fratè" perché un saggio ha detto che è una best practice
            throw new Exception("Fratè, dammi un livello qualitativo ben definito!");
        }
    }
    // public function getQuality() {
    //     return $this->quality;
    // }
}
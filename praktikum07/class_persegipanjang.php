<?php 
    class persegiPanjang
    {
        public $panjang,$lebar;
        
        function __construct($panjang,$lebar){
            $this->panjang = $panjang;
            $this->lebar = $lebar;
        }
        function luasPersegiPanjang(){
            return round($this->panjang * $this->lebar,2);
        }
        function kelilingPersegiPanjang(){
            return round(2 * ($this->panjang + $this->lebar),2);
        }
    }
?>
<?php

class aritmatika{
    public $a;
    private $b;
    protected $c;

    public function setTambah($a, $b, $c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $hasil = $this->a + $this->b + $this->c;
        return $hasil;
    }
    public function setKurang($a, $b, $c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $hasil = $this->a - $this->b - $this->c;
        return $hasil;
    }
    public function setKali($a, $b, $c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $hasil = $this->a * $this->b * $this->c;
        return $hasil;
    }
    public function setBagi($a, $b, $c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $hasil = $this->a / $this->b / $this->c;
        return $hasil;
    }
    public function setModul($a, $b, $c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        $hasil = $this->a % $this->b % $this->c;
        return $hasil;
    }
}
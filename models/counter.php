<?php


class counter {
    private $handler;
    private $fileName;
    private $counter;

    public function setHandler($fileName){
        $this->fileName = $fileName;
        $this->handler=fopen("$fileName" , "r+");
    }

    public function endHandler($handler){
        fclose($this->handler);
    }

    public function getcounter(){
        return $this->counter;
    }

    public function setcounter(){
        $this->counter=file("$this->fileName")[0];

    }
    public function increasecounter(){
        $this->counter +=1;
        fwrite($this->handler,$this->counter);
    }

   
}


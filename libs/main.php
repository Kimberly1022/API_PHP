<?php

class serverResult{
    
    public $status = "";
    public $message = "";
    public $data = "";

    function __toString(){

        return json_encode($this);
        
    }
}

function json_message($str, $status = "error"){

    $final = new serverResult();
    $final->status = $status;
    $final->message = $str;
    return $final;



}

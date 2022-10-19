<?php

class Str {
    public $str; 
    function NumberofCharacters (){
        return strlen($this->str);    
    }
    function RemoveSpecialCharacters (){
        return preg_replace('/[^A-Za-z0-9\-]/','', $this->str);
    }
    function GroupStrInto ($number){
        $string = $this->str;
        return array(chunk_split($string, $number));
    }
    function FindCharOccurence (){
        return array_count_values(str_split($this->str));
    }
    function ReplaceChar ($old, $new){
        return str_replace($old, $new, $this->str);
    }
}

// $str = new str();
// $str->str = "camaraderie";
// echo "String: ".$str->str;
// echo "<br>Number of characters: ".$str->NumberofCharacters();
// echo "<br><br>";
// echo "<br>RemoveSpecialCharacters: ".$str->RemoveSpecialCharacters();
// echo "<pre>";
// print_r($str->GroupStrInto(3));
// print_r($str->FindCharOccurence());
// print_r("<br>ReplaceChar: ".$str->ReplaceChar("a","k"));

?>
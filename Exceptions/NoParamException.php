<?php
class NoParamException extends Exception{
    public function __construct($message,$code){
        parent::__construct($message,$code);
    }
}
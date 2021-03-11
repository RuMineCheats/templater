<?php
namespace rmcj\simply_templater\Exceptions;

use Exception;

class TemplateNotExistsException extends Exception
{
   public function errorMessage(){
       $errorMsg = 'Ошибка на линии '.$this->getLine().' в '.$this->getFile()
           .': <b>'.$this->getMessage().'</b> не является файлом шаблона либо не существует!';
       return $errorMsg;
   }
}
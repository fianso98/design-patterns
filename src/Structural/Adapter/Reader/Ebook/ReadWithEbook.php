<?php 
namespace Patterns\Structural\Adapter\Reader\Ebook ;
use Patterns\Structural\Adapter\Reader\Interfaces\ReaderInterfaceEbook ;

class ReadWithEbook implements ReaderInterfaceEbook{
    

    

    function readEbook(){
        return "book has been read with Ebook method";
    }



}
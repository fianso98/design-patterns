<?php 
namespace Patterns\Adapter\Reader\Ebook ;
use Patterns\Adapter\Reader\Interfaces\ReaderInterfaceEbook ;

class ReadWithEbook implements ReaderInterfaceEbook{
    

    

    function readEbook(){
        return "book has been read with Ebook method";
    }



}
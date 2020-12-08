<?php 
namespace Patterns\Adapter\Reader\Book ; 

use Patterns\Adapter\Reader\Interfaces\ReaderInterfaceBook ;

class ReadWithBook implements ReaderInterfaceBook{

    function readBook(){
        return "book has been read with book method";
    }


}
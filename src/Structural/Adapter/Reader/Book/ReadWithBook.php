<?php 
namespace Patterns\Structural\Adapter\Reader\Book ; 

use Patterns\Structural\Adapter\Reader\Interfaces\ReaderInterfaceBook ;

class ReadWithBook implements ReaderInterfaceBook{

    function readBook(){
        return "book has been read with book method";
    }


}
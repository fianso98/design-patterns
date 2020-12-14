<?php

namespace Patterns\Structural\Adapter\Reader;
use Patterns\Structural\Adapter\Reader\Interfaces\ReaderInterfaceBook ;
use Patterns\Structural\Adapter\Reader\Interfaces\ReaderInterfaceEbook ;

class EbookToBook implements ReaderInterfaceEbook{
    private $book;
    public function __construct(ReaderInterfaceBook $book){
        $this->book=$book;
    }
    public function readEbook(){
        return $this->book->readBook();
    }
}
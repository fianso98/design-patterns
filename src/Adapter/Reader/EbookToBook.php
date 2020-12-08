<?php

namespace Patterns\Adapter\Reader;
use Patterns\Adapter\Reader\Interfaces\ReaderInterfaceBook ;
use Patterns\Adapter\Reader\Interfaces\ReaderInterfaceEbook ;

class EbookToBook implements ReaderInterfaceEbook{
    private $book;
    public function __construct(ReaderInterfaceBook $book){
        $this->book=$book;
    }
    public function readEbook(){
        return $this->book->readBook();
    }
}
<?php 

use PHPUnit\Framework\TestCase;
use  Patterns\Structural\Adapter\Reader\EbookToBook;
use  Patterns\Structural\Adapter\Reader\Book\ReadWithBook;
final class AdapterTest extends TestCase {
	public function testThatAdapterWork()
	{
		$adapter = new EbookToBook(new ReadWithBook());
		
		
		$this->assertEquals($adapter->readEbook("random"), "book has been read with book method");
	}

}
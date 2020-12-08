<?php 


use PHPUnit\Framework\TestCase;
use  Patterns\Adapter\Reader\EbookToBook;
use  Patterns\Adapter\Reader\Book\ReadWithBook;
final class UnitTest extends TestCase {
	public function testThatAdapterWork()
	{
		$adapter = new EbookToBook(new ReadWithBook());
		
		
		$this->assertEquals($adapter->readEbook("random"), "book has been read with book method");
	}
}
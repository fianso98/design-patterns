<?php 

use PHPUnit\Framework\TestCase;
use  Patterns\Structural\Facade\Auth;
use  Patterns\Structural\Facade\Login;
final class FacadeTest extends TestCase {
	public function testThatFacadeWork()
	{
		$facade = new Login(new Auth());
		$this->assertEquals(
			$facade->loginAuth('sofiane@gmail.com','abcd1234')
			, 'logged In');
	}

}
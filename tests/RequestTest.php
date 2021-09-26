<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
use Boyonglab\Theresia\Core\Http\Request;

final class RequestTest extends TestCase
{
    private static $request;

    public static function setUpBeforeClass(): void
    {
        $_SERVER['REQUEST_URI'] = '/';
        $_SERVER['QUERY_STRING'] = 'token=123';
        $_SERVER['PATH_INFO'] = null;
        $_SERVER['REQUEST_METHOD'] = 'GET';
        self::$request = new Request();
    }

    public function testGetUri(): void
    {
        $this->assertEquals($_SERVER['REQUEST_URI'], self::$request->getUri());
    }

    public function testGetPath(): void
    {
        $this->assertNotEquals($_SERVER['PATH_INFO'], self::$request->getPath());
        $this->assertEquals('/', self::$request->getPath());
    }

    public function testGetQuery(): void
    {
        $this->assertEquals($_SERVER['QUERY_STRING'], self::$request->getQuery());
    }

    public function testGetMethod(): void
    {
        $this->assertNotEquals($_SERVER['REQUEST_METHOD'], self::$request->getMethod());
        $this->assertEquals(strtolower($_SERVER['REQUEST_METHOD']), self::$request->getMethod());
    }

    public static function tearDownBAfterClass(): void
    {

         unset(self::$request);
         unset($_SERVER['REQUEST_URI']);
         unset($_SERVER['QUERY_STRING']);
         unset($_SERVER['PATH_INFO']);
         unset($_SERVER['REQUEST_METHOD']);
    }

}

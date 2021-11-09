<?php
require_once "vendor/autoload.php";

use App\Model\Cidade;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertIsArray;

class CidadeTest extends TestCase
{
    private $cidade;

    public static function setUpBeforeClass(): void
    {
        //Aqui o codigo será executado antes de todos os testes.
    }

    public function setUp(): void
    {
        $this->cidade = new Cidade();
    }

    public function testGetNomeCid()
    {
        $this->assertEquals($this->cidade->getNomeCid(), "");
        $this->cidade->setNomeCid("Dourados");
        $this->assertEquals($this->cidade->getNomeCid(), "Dourados");
    }

    public function testGetCodCid()
    {
        $this->assertEquals($this->cidade->getCodCid(), 0);
        $this->cidade->setCodCid(3);
        $this->assertEquals($this->cidade->getCodCid(), 3);
    }

    public function testRead()
    {
        $this->assertIsArray($this->cidade->read());
    }
}

<?php
require dirname(__DIR__).'\src\DocHelper.php';
class DocHelperTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException Exception
     */
    public function testZeroLogic()
    {
        $doc = new DocHelper();
        $doc->RemoveDocument();
    }
    public function testGetEmptyCount()
    {
        $doc = new DocHelper();
        $this->assertAttributeEquals('0', 'documents_count', $doc);
    }
    public function testGetCountAfterAdd()
    {
        $doc = new DocHelper();
        $doc->AddDocument();
        $this->assertAttributeEquals('1', 'documents_count', $doc);
        //$this->assertAttributeEquals('1', $doc->Count());
    }
    public function testCountWorks()
    {
        $doc = new DocHelper();
        $doc->AddDocument();
        $this->assertEquals('1', $doc->Count());
    }
    public function testRemoveDoc()
    {
        $doc = new DocHelper();
        $doc->AddDocument();
        $doc->AddDocument();
        $doc->RemoveDocument();
        $this->assertAttributeEquals('1', 'documents_count', $doc);
    }
}
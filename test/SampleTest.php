<?php
use PHPUnit\Framework\TestCase;
use app\Sample;

//require_once("vendor/autload.php");

class SampleTest extends TestCase
{
    public function test_Hello()
    {
        $sample = new Sample();
        $result = $sample->hello();
        $this->assertEquals("Hello",$result);
    }

}
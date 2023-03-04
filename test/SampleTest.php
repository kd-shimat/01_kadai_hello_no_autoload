<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../src/Sample.php';

class SampleTest extends TestCase
{
    public function test_Hello()
    {
        $sample = new Sample();
        $result = $sample->hello();
        $this->assertEquals('Hello',$result);
    }

}

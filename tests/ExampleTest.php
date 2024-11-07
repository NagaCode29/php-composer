<?php

use PHPUnit\Framework\TestCase;
use Sinagadiory\PhpComposer\Data\Person;

class ExampleTest extends TestCase
{
    public function testExample(){
        $person = new Person('Rudi','Bandung');
        self::assertSame('Rudi',$person->name);
        self::assertSame('Bandung',$person->address);
    }
}

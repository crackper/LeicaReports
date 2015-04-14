<?php
/**
 * Created by PhpStorm.
 * User: Samuel
 * Date: 14/04/15
 * Time: 9:40 AM
 */
class PracticeTest extends TestCase{

    public function testHelloWorld()
    {
        $greeting = 'Hello, World.';
        $this->assertTrue($greeting==='Hello, World.');
    }

    public function testLaravelDevIncludeDayle(){

        $names = ['Tylor','Shawn','Dayle'];

        $this->assertContains('Dayle',$names);
    }
}
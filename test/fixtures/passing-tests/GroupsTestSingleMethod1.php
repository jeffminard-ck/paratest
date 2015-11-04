<?php
// single method, group id on just the class

/**
 * @group groupid1
 */
class GroupsTestSingleMethod1 extends PHPUnit_FrameWork_TestCase
{
    public function testMethod1()
    {
        $this->assertTrue(true);
    }
}

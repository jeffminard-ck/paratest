<?php
// single method, group id on just the method

class GroupsTestSingleMethod2 extends PHPUnit_FrameWork_TestCase
{
    /**
     * @group groupid1
     */
    public function testMethod1()
    {
        $this->assertTrue(true);
    }
}

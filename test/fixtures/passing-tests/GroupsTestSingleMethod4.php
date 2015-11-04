<?php
// single method, different group id on class and method

/**
 * @group groupid1
 */
class GroupsTestSingleMethod4 extends PHPUnit_FrameWork_TestCase
{
    /**
     * @group groupid2
     */
    public function testMethod1()
    {
        $this->assertTrue(true);
    }
}

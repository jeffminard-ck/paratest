<?php
// single method, same group id on both class and method

/**
 * @group groupid1
 */
class GroupsTestSingleMethod3 extends PHPUnit_FrameWork_TestCase
{
    /**
     * @group groupid1
     */
    public function testMethod1()
    {
        $this->assertTrue(true);
    }
}

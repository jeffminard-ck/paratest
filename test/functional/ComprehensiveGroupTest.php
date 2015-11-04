<?php
class ComprehensiveGroupTest extends FunctionalTestBase
{

    public function groupProvider() {
        // effectively:
        //      ./vendor/bin/phpunit --group=XXX --exclude-group=XXX test/fixtures/passing-tests/FILE.php
        return [
             0=>[ 'GroupsTestSingleMethod1', [],                                                                   'OK (1 test, 1 assertion)'   ],
             1=>[ 'GroupsTestSingleMethod1', ['group'=>'fake'],                                                    'No tests executed!'         ],
             2=>[ 'GroupsTestSingleMethod1', ['group'=>'groupid1'],                                                'OK (1 test, 1 assertion)'   ],
             3=>[ 'GroupsTestSingleMethod1', ['group'=>'groupid2'],                                                'No tests executed!'         ],
             4=>[ 'GroupsTestSingleMethod1', ['group'=>'groupid1,groupid2'],                                       'OK (1 test, 1 assertion)'   ],
             5=>[ 'GroupsTestSingleMethod1', [                              'exclude-group'=>'fake'             ], 'OK (1 test, 1 assertion)'   ],
             6=>[ 'GroupsTestSingleMethod1', [                              'exclude-group'=>'groupid1'         ], 'No tests executed!'         ],
             7=>[ 'GroupsTestSingleMethod1', [                              'exclude-group'=>'groupid2'         ], 'OK (1 test, 1 assertion)'   ],
             8=>[ 'GroupsTestSingleMethod1', [                              'exclude-group'=>'groupid1,groupid2'], 'No tests executed!'         ],
             9=>[ 'GroupsTestSingleMethod1', ['group'=>'fake',              'exclude-group'=>'fake'             ], 'No tests executed!'         ],
            10=>[ 'GroupsTestSingleMethod1', ['group'=>'fake',              'exclude-group'=>'groupid1'         ], 'No tests executed!'         ],
            11=>[ 'GroupsTestSingleMethod1', ['group'=>'fake',              'exclude-group'=>'groupid2'         ], 'No tests executed!'         ],
            12=>[ 'GroupsTestSingleMethod1', ['group'=>'fake',              'exclude-group'=>'groupid1,groupid2'], 'No tests executed!'         ],
            13=>[ 'GroupsTestSingleMethod1', ['group'=>'groupid1',          'exclude-group'=>'fake'             ], 'OK (1 test, 1 assertion)'   ],
            14=>[ 'GroupsTestSingleMethod1', ['group'=>'groupid1',          'exclude-group'=>'groupid1'         ], 'No tests executed!'         ],
            15=>[ 'GroupsTestSingleMethod1', ['group'=>'groupid1',          'exclude-group'=>'groupid2'         ], 'OK (1 test, 1 assertion)'   ],
            16=>[ 'GroupsTestSingleMethod1', ['group'=>'groupid1',          'exclude-group'=>'groupid1,groupid2'], 'No tests executed!'         ],
            17=>[ 'GroupsTestSingleMethod1', ['group'=>'groupid2',          'exclude-group'=>'fake'             ], 'No tests executed!'         ],
            18=>[ 'GroupsTestSingleMethod1', ['group'=>'groupid2',          'exclude-group'=>'groupid1'         ], 'No tests executed!'         ],
            19=>[ 'GroupsTestSingleMethod1', ['group'=>'groupid2',          'exclude-group'=>'groupid2'         ], 'No tests executed!'         ],
            20=>[ 'GroupsTestSingleMethod1', ['group'=>'groupid2',          'exclude-group'=>'groupid1,groupid2'], 'No tests executed!'         ],
            21=>[ 'GroupsTestSingleMethod1', ['group'=>'groupid1,groupid2', 'exclude-group'=>'fake'             ], 'OK (1 test, 1 assertion)'   ],
            22=>[ 'GroupsTestSingleMethod1', ['group'=>'groupid1,groupid2', 'exclude-group'=>'groupid1'         ], 'No tests executed!'         ],
            23=>[ 'GroupsTestSingleMethod1', ['group'=>'groupid1,groupid2', 'exclude-group'=>'groupid2'         ], 'OK (1 test, 1 assertion)'   ],
            24=>[ 'GroupsTestSingleMethod1', ['group'=>'groupid1,groupid2', 'exclude-group'=>'groupid1,groupid2'], 'No tests executed!'         ],
            25=>[ 'GroupsTestSingleMethod2', [],                                                                   'OK (1 test, 1 assertion)'   ],
            26=>[ 'GroupsTestSingleMethod2', ['group'=>'fake'],                                                    'No tests executed!'         ],
            27=>[ 'GroupsTestSingleMethod2', ['group'=>'groupid1'],                                                'OK (1 test, 1 assertion)'   ],
            28=>[ 'GroupsTestSingleMethod2', ['group'=>'groupid2'],                                                'No tests executed!'         ],
            29=>[ 'GroupsTestSingleMethod2', ['group'=>'groupid1,groupid2'],                                       'OK (1 test, 1 assertion)'   ],
            30=>[ 'GroupsTestSingleMethod2', [                              'exclude-group'=>'fake'             ], 'OK (1 test, 1 assertion)'   ],
            31=>[ 'GroupsTestSingleMethod2', [                              'exclude-group'=>'groupid1'         ], 'No tests executed!'         ],
            32=>[ 'GroupsTestSingleMethod2', [                              'exclude-group'=>'groupid2'         ], 'OK (1 test, 1 assertion)'   ],
            33=>[ 'GroupsTestSingleMethod2', [                              'exclude-group'=>'groupid1,groupid2'], 'No tests executed!'         ],
            34=>[ 'GroupsTestSingleMethod2', ['group'=>'fake',              'exclude-group'=>'fake'             ], 'No tests executed!'         ],
            35=>[ 'GroupsTestSingleMethod2', ['group'=>'fake',              'exclude-group'=>'groupid1'         ], 'No tests executed!'         ],
            36=>[ 'GroupsTestSingleMethod2', ['group'=>'fake',              'exclude-group'=>'groupid2'         ], 'No tests executed!'         ],
            37=>[ 'GroupsTestSingleMethod2', ['group'=>'fake',              'exclude-group'=>'groupid1,groupid2'], 'No tests executed!'         ],
            38=>[ 'GroupsTestSingleMethod2', ['group'=>'groupid1',          'exclude-group'=>'fake'             ], 'OK (1 test, 1 assertion)'   ],
            39=>[ 'GroupsTestSingleMethod2', ['group'=>'groupid1',          'exclude-group'=>'groupid1'         ], 'No tests executed!'         ],
            40=>[ 'GroupsTestSingleMethod2', ['group'=>'groupid1',          'exclude-group'=>'groupid2'         ], 'OK (1 test, 1 assertion)'   ],
            41=>[ 'GroupsTestSingleMethod2', ['group'=>'groupid1',          'exclude-group'=>'groupid1,groupid2'], 'No tests executed!'         ],
            42=>[ 'GroupsTestSingleMethod2', ['group'=>'groupid2',          'exclude-group'=>'fake'             ], 'No tests executed!'         ],
            43=>[ 'GroupsTestSingleMethod2', ['group'=>'groupid2',          'exclude-group'=>'groupid1'         ], 'No tests executed!'         ],
            44=>[ 'GroupsTestSingleMethod2', ['group'=>'groupid2',          'exclude-group'=>'groupid2'         ], 'No tests executed!'         ],
            45=>[ 'GroupsTestSingleMethod2', ['group'=>'groupid2',          'exclude-group'=>'groupid1,groupid2'], 'No tests executed!'         ],
            46=>[ 'GroupsTestSingleMethod2', ['group'=>'groupid1,groupid2', 'exclude-group'=>'fake'             ], 'OK (1 test, 1 assertion)'   ],
            47=>[ 'GroupsTestSingleMethod2', ['group'=>'groupid1,groupid2', 'exclude-group'=>'groupid1'         ], 'No tests executed!'         ],
            48=>[ 'GroupsTestSingleMethod2', ['group'=>'groupid1,groupid2', 'exclude-group'=>'groupid2'         ], 'OK (1 test, 1 assertion)'   ],
            49=>[ 'GroupsTestSingleMethod2', ['group'=>'groupid1,groupid2', 'exclude-group'=>'groupid1,groupid2'], 'No tests executed!'         ],
            50=>[ 'GroupsTestSingleMethod3', [],                                                                   'OK (1 test, 1 assertion)'   ],
            51=>[ 'GroupsTestSingleMethod3', ['group'=>'fake'],                                                    'No tests executed!'         ],
            52=>[ 'GroupsTestSingleMethod3', ['group'=>'groupid1'],                                                'OK (1 test, 1 assertion)'   ],
            53=>[ 'GroupsTestSingleMethod3', ['group'=>'groupid2'],                                                'No tests executed!'         ],
            54=>[ 'GroupsTestSingleMethod3', ['group'=>'groupid1,groupid2'],                                       'OK (1 test, 1 assertion)'   ],
            55=>[ 'GroupsTestSingleMethod3', [                              'exclude-group'=>'fake'             ], 'OK (1 test, 1 assertion)'   ],
            56=>[ 'GroupsTestSingleMethod3', [                              'exclude-group'=>'groupid1'         ], 'No tests executed!'         ],
            57=>[ 'GroupsTestSingleMethod3', [                              'exclude-group'=>'groupid2'         ], 'OK (1 test, 1 assertion)'   ],
            58=>[ 'GroupsTestSingleMethod3', [                              'exclude-group'=>'groupid1,groupid2'], 'No tests executed!'         ],
            59=>[ 'GroupsTestSingleMethod3', ['group'=>'fake',              'exclude-group'=>'fake'             ], 'No tests executed!'         ],
            60=>[ 'GroupsTestSingleMethod3', ['group'=>'fake',              'exclude-group'=>'groupid1'         ], 'No tests executed!'         ],
            61=>[ 'GroupsTestSingleMethod3', ['group'=>'fake',              'exclude-group'=>'groupid2'         ], 'No tests executed!'         ],
            62=>[ 'GroupsTestSingleMethod3', ['group'=>'fake',              'exclude-group'=>'groupid1,groupid2'], 'No tests executed!'         ],
            63=>[ 'GroupsTestSingleMethod3', ['group'=>'groupid1',          'exclude-group'=>'fake'             ], 'OK (1 test, 1 assertion)'   ],
            64=>[ 'GroupsTestSingleMethod3', ['group'=>'groupid1',          'exclude-group'=>'groupid1'         ], 'No tests executed!'         ],
            65=>[ 'GroupsTestSingleMethod3', ['group'=>'groupid1',          'exclude-group'=>'groupid2'         ], 'OK (1 test, 1 assertion)'   ],
            66=>[ 'GroupsTestSingleMethod3', ['group'=>'groupid1',          'exclude-group'=>'groupid1,groupid2'], 'No tests executed!'         ],
            67=>[ 'GroupsTestSingleMethod3', ['group'=>'groupid2',          'exclude-group'=>'fake'             ], 'No tests executed!'         ],
            68=>[ 'GroupsTestSingleMethod3', ['group'=>'groupid2',          'exclude-group'=>'groupid1'         ], 'No tests executed!'         ],
            69=>[ 'GroupsTestSingleMethod3', ['group'=>'groupid2',          'exclude-group'=>'groupid2'         ], 'No tests executed!'         ],
            70=>[ 'GroupsTestSingleMethod3', ['group'=>'groupid2',          'exclude-group'=>'groupid1,groupid2'], 'No tests executed!'         ],
            71=>[ 'GroupsTestSingleMethod3', ['group'=>'groupid1,groupid2', 'exclude-group'=>'fake'             ], 'OK (1 test, 1 assertion)'   ],
            72=>[ 'GroupsTestSingleMethod3', ['group'=>'groupid1,groupid2', 'exclude-group'=>'groupid1'         ], 'No tests executed!'         ],
            73=>[ 'GroupsTestSingleMethod3', ['group'=>'groupid1,groupid2', 'exclude-group'=>'groupid2'         ], 'OK (1 test, 1 assertion)'   ],
            74=>[ 'GroupsTestSingleMethod3', ['group'=>'groupid1,groupid2', 'exclude-group'=>'groupid1,groupid2'], 'No tests executed!'         ],
            75=>[ 'GroupsTestSingleMethod4', [],                                                                   'OK (1 test, 1 assertion)'   ],
            76=>[ 'GroupsTestSingleMethod4', ['group'=>'fake'],                                                    'No tests executed!'         ],
            77=>[ 'GroupsTestSingleMethod4', ['group'=>'groupid1'],                                                'OK (1 test, 1 assertion)'   ],
            78=>[ 'GroupsTestSingleMethod4', ['group'=>'groupid2'],                                                'OK (1 test, 1 assertion)'   ],
            79=>[ 'GroupsTestSingleMethod4', ['group'=>'groupid1,groupid2'],                                       'OK (1 test, 1 assertion)'   ],
            80=>[ 'GroupsTestSingleMethod4', [                              'exclude-group'=>'fake'             ], 'OK (1 test, 1 assertion)'   ],
            81=>[ 'GroupsTestSingleMethod4', [                              'exclude-group'=>'groupid1'         ], 'No tests executed!'         ],
            82=>[ 'GroupsTestSingleMethod4', [                              'exclude-group'=>'groupid2'         ], 'No tests executed!'         ],
            83=>[ 'GroupsTestSingleMethod4', [                              'exclude-group'=>'groupid1,groupid2'], 'No tests executed!'         ],
            84=>[ 'GroupsTestSingleMethod4', ['group'=>'fake',              'exclude-group'=>'fake'             ], 'No tests executed!'         ],
            85=>[ 'GroupsTestSingleMethod4', ['group'=>'fake',              'exclude-group'=>'groupid1'         ], 'No tests executed!'         ],
            86=>[ 'GroupsTestSingleMethod4', ['group'=>'fake',              'exclude-group'=>'groupid2'         ], 'No tests executed!'         ],
            87=>[ 'GroupsTestSingleMethod4', ['group'=>'fake',              'exclude-group'=>'groupid1,groupid2'], 'No tests executed!'         ],
            88=>[ 'GroupsTestSingleMethod4', ['group'=>'groupid1',          'exclude-group'=>'fake'             ], 'OK (1 test, 1 assertion)'   ],
            89=>[ 'GroupsTestSingleMethod4', ['group'=>'groupid1',          'exclude-group'=>'groupid1'         ], 'No tests executed!'         ],
            90=>[ 'GroupsTestSingleMethod4', ['group'=>'groupid1',          'exclude-group'=>'groupid2'         ], 'No tests executed!'         ],
            91=>[ 'GroupsTestSingleMethod4', ['group'=>'groupid1',          'exclude-group'=>'groupid1,groupid2'], 'No tests executed!'         ],
            92=>[ 'GroupsTestSingleMethod4', ['group'=>'groupid2',          'exclude-group'=>'fake'             ], 'OK (1 test, 1 assertion)'   ],
            93=>[ 'GroupsTestSingleMethod4', ['group'=>'groupid2',          'exclude-group'=>'groupid1'         ], 'No tests executed!'         ],
            94=>[ 'GroupsTestSingleMethod4', ['group'=>'groupid2',          'exclude-group'=>'groupid2'         ], 'No tests executed!'         ],
            95=>[ 'GroupsTestSingleMethod4', ['group'=>'groupid2',          'exclude-group'=>'groupid1,groupid2'], 'No tests executed!'         ],
            96=>[ 'GroupsTestSingleMethod4', ['group'=>'groupid1,groupid2', 'exclude-group'=>'fake'             ], 'OK (1 test, 1 assertion)'   ],
            97=>[ 'GroupsTestSingleMethod4', ['group'=>'groupid1,groupid2', 'exclude-group'=>'groupid1'         ], 'No tests executed!'         ],
            98=>[ 'GroupsTestSingleMethod4', ['group'=>'groupid1,groupid2', 'exclude-group'=>'groupid2'         ], 'No tests executed!'         ],
            99=>[ 'GroupsTestSingleMethod4', ['group'=>'groupid1,groupid2', 'exclude-group'=>'groupid1,groupid2'], 'No tests executed!'         ],
        ];
    }

    /**
     * @param string $fixtureFile
     * @param array  $executorOptions
     * @param string $matchString
     *
     * @dataProvider groupProvider
     */
    public function testIncludeExclude($fixtureFile, $executorOptions, $matchString) {
        $invoker = new ParaTestInvoker($this->fixture("passing-tests/$fixtureFile.php"), BOOTSTRAP);
        $proc = $invoker->execute($executorOptions);
        $this->assertRegExp('/'. preg_quote($matchString) .'/', $proc->getOutput());
        $invoker = $proc = null;
        unset($invoker, $proc);
    }

}

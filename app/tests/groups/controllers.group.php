<?php
class ControllersGroupTest extends GroupTest {
/**
 * label property
 *
 * @var string
 * @access public
 */
    var $label = 'All controller tests';

    function ControllersGroupTest() {
        TestManager::addTestCasesFromDirectory($this, APP_TEST_CASES.DS.'controllers');
    }
}
?>
<?php
namespace Luminance\Test\TestCase\View\Helper;

use Cake\TestSuite\TestCase;
use Cake\View\View;
use Luminance\View\Helper\LuminanceHelper;

/**
 * Luminance\View\Helper\LuminanceHelper Test Case
 */
class LuminanceHelperTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Luminance\View\Helper\LuminanceHelper
     */
    public $Luminance;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $view = new View();
        $this->Luminance = new LuminanceHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Luminance);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testGetContrastColor()
    {
        $this->assertEquals('#FFFFFF', $this->Luminance->getContrastColor("#000000"));
        $this->assertEquals('#000000', $this->Luminance->getContrastColor("#FFFFFF"));
    }
}

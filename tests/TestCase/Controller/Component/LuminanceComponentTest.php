<?php
namespace Luminance\Test\TestCase\Controller\Component;

use Cake\Controller\ComponentRegistry;
use Cake\TestSuite\TestCase;
use Luminance\Controller\Component\LuminanceComponent;

/**
 * Luminance\Controller\Component\LuminanceComponent Test Case
 */
class LuminanceComponentTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \Luminance\Controller\Component\LuminanceComponent
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
        $registry = new ComponentRegistry();
        $this->Luminance = new LuminanceComponent($registry);
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

<?php

namespace Luminance\Controller\Component;

use Cake\Controller\Component;
use Cake\View\View;
use Luminance\View\Helper\LuminanceHelper;

/**
 * Luminance component
 */
class LuminanceComponent extends Component
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    /**
     * Calculates the contrasting color to the specified color based on the luminosity.<br>
     * Ref: <a href="https://stackoverflow.com/a/42921358/12865340">Stackoverflow</a>
     * @param $hexColor
     * @return string
     */
    public function getContrastColor($hexColor)
    {
        return (new LuminanceHelper(new View()))->getContrastColor($hexColor);
    }
}

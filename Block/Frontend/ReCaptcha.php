<?php
/**
 * MageSpecialist
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to info@magespecialist.it so we can send you a copy immediately.
 *
 * @category   MSP
 * @package    MSP_ReCaptcha
 * @copyright  Copyright (c) 2017 Skeeller srl (http://www.magespecialist.it)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */


namespace MSP\ReCaptcha\Block\Frontend;

use Magento\Framework\View\Element\Template;
use MSP\ReCaptcha\Helper\Data;

class ReCaptcha extends Template
{
    /**
     * @var Data
     */
    private $dataHelper;

    public function __construct(
        Template\Context $context,
        Data $dataHelper,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->dataHelper = $dataHelper;
    }

    /**
     * Get public reCaptcha key
     * @return string
     */
    public function getPublicKey()
    {
        return $this->dataHelper->getPublicKey();
    }

    /**
     * Return true if can display reCaptcha
     * @return bool
     */
    public function canDisplayCaptcha()
    {
        return $this->dataHelper->getEnabledFrontend();
    }
}

<?php
declare(strict_types = 1);
namespace TYPO3\CMS\Rsaauth\EventHandler;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Backend\LoginProvider\Event\ModifyPageLayoutOnLoginProviderSelectionEvent;
use TYPO3\CMS\Rsaauth\RsaEncryptionEncoder;

class ModifyPageLayoutOnLoginProviderSelection
{
    /**
     * @var RsaEncryptionEncoder
     */
    private $rsaEncryptionEncoder;

    public function __construct(RsaEncryptionEncoder $rsaEncryptionEncoder)
    {
        $this->rsaEncryptionEncoder = $rsaEncryptionEncoder;
    }

    /**
     * @param PageRenderer $pageRenderer
     */
    public function enableRsaEncryption(ModifyPageLayoutOnLoginProviderSelectionEvent $event)
    {
        $this->rsaEncryptionEncoder->enableRsaEncryption(true, $event->getPageRenderer());
    }
}

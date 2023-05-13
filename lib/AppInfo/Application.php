<?php

/**
 * ownCloud - Epubreader App
 *
 * @author Frank de Lange
 * @copyright 2015 - 2017 Frank de Lange
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later.
 */

namespace OCA\Epubreader\AppInfo;

use OCP\AppFramework\App;
use OCP\Util;
use OCP\AppFramework\Bootstrap\IBootstrap;

class Application extends App implements IBootstrap {

    public function __construct(array $urlParams = array()) {
        parent::__construct('epubreader', $urlParams);
        $container = $this->getContainer();
        $l = $container->getServer()->getL10N('epubreader');
        \OCA\Epubreader\Hooks::register();
        Util::addScript('epubreader', 'plugin');
    }

	  public function register(\OCP\AppFramework\Bootstrap\IRegistrationContext $context): void {
        // Register any additional services or perform other setup tasks
	  }

	  public function boot(\OCP\AppFramework\Bootstrap\IBootContext $context): void {
        // Perform any bootstrapping tasks
	  }
}

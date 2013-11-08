<?php
namespace Sj\Composer\Scripts;

use Composer\Script\Event;
// use Composer\Script\ScriptEvents as SE;

/**
 * Handle pre-installation requirement checks and post-installation actions
 *
 * @author Stephan Jorek <stephan.jorek@gmail.com>
 */
class TYPO3CMSInstallerScript {
	/**
	 *
	 * SE::PRE_AUTOLOAD_DUMP
	 * SE::POST_AUTOLOAD_DUMP
	 * SE::POST_CREATE_PROJECT_CMD
	 * SE::PRE_INSTALL_CMD
	 * SE::POST_INSTALL_CMD
	 * SE::PRE_STATUS_CMD
	 * SE::POST_STATUS_CMD
	 * SE::PRE_UPDATE_CMD
	 * SE::POST_UPDATE_CMD
	 *
	 * @param Event $event
	 */
	public static function dispatchCommand(Event $event) {
		var_dump($event->getName());
// 		$composer = $event->getComposer();
	}

	/**
	 *
	 * SE::PRE_PACKAGE_INSTALL
	 * SE::POST_PACKAGE_INSTALL
	 * SE::PRE_PACKAGE_UNINSTALL
	 * SE::POST_PACKAGE_UNINSTALL
	 * SE::PRE_PACKAGE_UPDATE
	 * SE::POST_PACKAGE_UPDATE
	 * SE::POST_ROOT_PACKAGE_INSTALL
	 *
	 * @param Event $event
	 */
	public static function dispatchPackage(Event $event) {
		var_dump($event->getName());
// 		$installedPackage = $event->getOperation()->getPackage();
	}
}
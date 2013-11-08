<?php
namespace Sj\Composer\Plugins;

use Sj\Composer\Installers\TYPO3CMSCoreInstaller;
use Sj\Composer\Installers\TYPO3CMSExtensionInstaller;
use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;

/**
 * Registers the Extension and Core Installer
 *
 * @author Stephan Jorek <stephan.jorek@gmail.com>
 */
class TYPO3CMSInstallerPlugin implements PluginInterface
{

	public function activate(Composer $composer, IOInterface $io)
	{
		$manager = $composer->getInstallationManager();
		foreach(array('typo3cms-core', 'typo3cms-extension') as $installer) {
			try {
				$manager->removeInstaller($manager->getInstaller($installer));
			} catch (Exception $e) {
				var_dump($e);
			}
		}

		$extensionInstaller = new TYPO3CMSCoreInstaller($io, $composer);
		$manager->addInstaller($extensionInstaller);
		$extensionInstaller = new TYPO3CMSExtensionInstaller($io, $composer);
		$manager->addInstaller($extensionInstaller);
	}
}
?>
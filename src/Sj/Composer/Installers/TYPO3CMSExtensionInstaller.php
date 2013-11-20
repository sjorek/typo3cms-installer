<?php
namespace Sj\Composer\Installers;

use Composer\Composer;
use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;
use Composer\IO\IOInterface;
use Composer\Util\Filesystem;

/**
 * Installer for TYPO3 CMS
 *
 * @author Stephan Jorek <stephan.jorek@gmail.com>
 */
class TYPO3CMSExtensionInstaller extends \Lw\TYPO3CMSInstallers\TYPO3CMSExtensionInstaller {

	public function __construct(IOInterface $io, Composer $composer, $type = 'library', Filesystem $filesystem = null) {
		parent::__construct($io, $composer, $type, $filesystem);
	}

	/**
	 * {@inheritDoc}
	 */
	public function getPackageBasePath(PackageInterface $package) {
		$identifier = 'typo3/ext-';
		$prefix = substr($package->getName(), 0, strlen($identifier));
		if ($identifier === $prefix) {
			$extensionName = substr($package->getName(), strlen($identifier));
			return 'public/typo3conf/ext/' . $extensionName;
		}
		return 'public/' . parent::getPackageBasePath($package);
	}
}
?>
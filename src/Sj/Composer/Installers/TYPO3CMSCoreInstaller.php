<?php
namespace Sj\Composer\Installers;

use Composer\Composer;
use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;
use Composer\IO\IOInterface;
use Composer\Util\Filesystem;
use Dkd\Downloader\T3xDownloader;


/**
 * Installer for TYPO3 CMS
 *
 * @author Stephan Jorek <stephan.jorek@gmail.com>
 */
class TYPO3CMSCoreInstaller extends \Lw\TYPO3CMSInstallers\TYPO3CMSCoreInstaller {

	/**
	 * {@inheritDoc}
	 */
	public function getPackageBasePath(PackageInterface $package) {
		$prefix = substr($package->getPrettyName(), 0, 23);
        if ('typo3/cms' !== $package->getPrettyName()) {
            throw new \InvalidArgumentException(
                'Unable to install typo3 core, as it must'.
            	'always have the package name "typo3/cms"'
            );
        }
//         return 'typo3_src-'.$package->getPrettyVersion();
        return 'typo3_src';
	}

}

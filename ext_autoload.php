<?php
// DO NOT CHANGE THIS FILE! It is automatically generated by extdeveval::buildAutoloadRegistry.
// This file was generated on 2013-01-11 14:53

$extensionPath = t3lib_extMgm::extPath('rs_lock');
$extensionClassesPath = t3lib_extMgm::extPath('rs_lock') . 'Classes/';
return array(
	'tx_rslock_locking_abstractlocker' => $extensionClassesPath . 'Locking/AbstractLocker.php',
	'tx_rslock_locking_lockerinterface' => $extensionClassesPath . 'Locking/LockerInterface.php',
	'tx_rslock_locking_simplelocker' => $extensionClassesPath . 'Locking/SimpleLocker.php',
	'tx_rslock_locking_simplelockerinterface' => $extensionClassesPath . 'Locking/SimpleLockerInterface.php',
	'tx_rslock_locking_adapter_typo3adapter' => $extensionClassesPath . 'Locking/Adapter/Typo3Adapter.php',
	'tx_rslock_locking_adapter_typo3adapterinterface' => $extensionClassesPath . 'Locking/Adapter/Typo3AdapterInterface.php',
	'tx_rslock_locking_driver_abstractdriver' => $extensionClassesPath . 'Locking/Driver/AbstractDriver.php',
	'tx_rslock_locking_driver_abstractfiledriver' => $extensionClassesPath . 'Locking/Driver/AbstractFileDriver.php',
	'tx_rslock_locking_driver_abstracttypo3driver' => $extensionClassesPath . 'Locking/Driver/AbstractTypo3Driver.php',
	'tx_rslock_locking_driver_driverapiinterface' => $extensionClassesPath . 'Locking/Driver/DriverApiInterface.php',
	'tx_rslock_locking_driver_driverinterface' => $extensionClassesPath . 'Locking/Driver/DriverInterface.php',
	'tx_rslock_locking_driver_filedriver' => $extensionClassesPath . 'Locking/Driver/FileDriver.php',
	'tx_rslock_locking_driver_fileflockdriver' => $extensionClassesPath . 'Locking/Driver/FileFlockDriver.php',
	'tx_rslock_locking_driver_mysqldriver' => $extensionClassesPath . 'Locking/Driver/MySQLDriver.php',
	'tx_rslock_locking_driver_semaphoredriver' => $extensionClassesPath . 'Locking/Driver/SemaphoreDriver.php',
);
?>
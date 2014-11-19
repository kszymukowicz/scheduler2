<?php

$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['V\\Scheduler2\\Task\\SampleTask'] = array(
		'extension' => $_EXTKEY,
		'title' => 'The simplest task ever',
		'description' => 'Task description',
		'additionalFields' => 'V\\Scheduler2\\Task\\SampleTaskAdditionalFieldProvider'
);
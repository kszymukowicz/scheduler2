<?php

namespace V\Scheduler2\Task;

class SampleTask extends \TYPO3\CMS\Scheduler\Task\AbstractTask implements \TYPO3\CMS\Scheduler\ProgressProviderInterface{

	/**
	 * Email
	 * @var string
	 */
	public $email = 'dr_who@universe.thr';

	public function execute() {
		return TRUE;
	}

	public function getAdditionalInformation() {
		return 'Time now: ' . strftime('%H:%m:%S', time()) . ', Next exec time: ' . strftime('%x', $this->getNextDueExecution()) . ', Email: ' . $this->email;
	}

	public function getProgress(){
		return rand(0,100);
	}

}
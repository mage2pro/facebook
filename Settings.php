<?php
namespace Df\Facebook;
/** @method static Settings s() */
class Settings extends \Df\Core\Settings {
	/** @return string */
	public function appId() {return $this->v('app_id');}

	/**
	 * @override
	 * @used-by \Df\Core\Settings::v()
	 * @return string
	 */
	protected function prefix() {return 'dfe_facebook/credentials/';}
}
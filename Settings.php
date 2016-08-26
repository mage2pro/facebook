<?php
namespace Df\Facebook;
/** @method static Settings s() */
final class Settings extends \Df\Core\Settings {
	/** @return string */
	public function appId() {return $this->v('app_id');}

	/**
	 * @override
	 * @see \Df\Core\Settings::prefix()
	 * @used-by \Df\Core\Settings::v()
	 * @return string
	 */
	protected function prefix() {return 'dfe_facebook/credentials/';}
}
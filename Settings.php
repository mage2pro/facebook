<?php
namespace Df\Facebook;
/**
 * @method static Settings s()
 * 2016-08-29
 * Этот класс нельзя объявлять как final, потому что от него наследуется класс
 * @see \Dfe\FacebookLogin\Settings\Credentials
 */
class Settings extends \Df\Config\Settings {
	/** @return string */
	public function appId() {return $this->v('app_id');}

	/**
	 * @override
	 * @see \Df\Config\Settings::prefix()
	 * @used-by \Df\Config\Settings::v()
	 * @return string
	 */
	protected function prefix() {return 'df_facebook/credentials';}
}
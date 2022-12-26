<?php
namespace Df\Facebook;
/**
 * @method static Settings s()
 * @see \Dfe\FacebookLogin\Settings\Credentials
 */
class Settings extends \Df\Config\Settings {
	/**
	 * @used-by \Df\Facebook\I::init()
	 * @used-by \Dfe\FacebookLogin\Customer::longLivedAccessToken()
	 */
	function appId():string {return $this->v('app_id');}

	/**
	 * @override
	 * @see \Df\Config\Settings::prefix()
	 * @used-by \Df\Config\Settings::v()
	 */
	protected function prefix():string {return 'df_facebook/credentials';}
}
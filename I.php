<?php
namespace Df\Facebook;
use Df\Facebook\Settings as S;
class I {
	/** @return string */
	public static function init() {return dfcf(function() {
		/** @var string|null $appId */
		$appId = S::s()->appId();
		return !$appId ? '' : df_phtml(__CLASS__, 'init', ['appId' => $appId]);
	});}
}



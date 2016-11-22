<?php
namespace Df\Facebook;
use Df\Facebook\Settings as S;
class I {
	/** @return string */
	public static function init() {return dfcf(function() {return
		!S::s()->appId() ? '' : $r = df_phtml(__CLASS__, 'init')
	;});}
}



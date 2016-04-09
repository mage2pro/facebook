<?php
namespace Df\Facebook;
use Df\Facebook\Settings as S;
class I {
	/** @return string */
	public static function init() {
		static $r; return $r || !S::s()->appId() ? '' : $r = df_block_r(null, [], 'Df_Facebook::init');
	}
}



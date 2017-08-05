<?php
namespace Df\Facebook;
use Df\Facebook\Settings as S;
// 2016-04-09
class I {
	/** 2016-04-09 @return string */
	static function init() {return dfcf(function() {
		/** @var string|null $appId */
		$appId = S::s()->appId();
		return !$appId ? '' : df_block_output(__CLASS__, 'init', ['appId' => $appId]);
	});}
}



<?php
namespace Df\Facebook;
use Df\Facebook\Settings as S;
class I {
	/** @return string */
	static function init() {return dfcf(function() {
		/** @var string|null $appId */
		$appId = S::s()->appId();
		return !$appId ? '' : df_block_output(__CLASS__, 'init', ['appId' => $appId]);
	});}
}



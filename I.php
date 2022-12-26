<?php
namespace Df\Facebook;
use Df\Facebook\Settings as S;
# 2016-04-09
class I {
	/** 2016-04-09 */
	static function init():string {return dfcf(function():string {
		$appId = S::s()->appId(); /** @var string|null $appId */
		return !$appId ? '' : df_block_output(__CLASS__, 'init', ['appId' => $appId]);
	});}
}



<?php

/**
 * Inherit main code from SkinTemplate, set the CSS and template filter.
 *
 * @ingroup Skins
 */
class SkinDeskMessMirrored extends SkinTemplate {
	public $skinname = 'deskmessmirrored', $stylename = 'deskmessmirrored',
		$template = 'DeskMessMirroredTemplate';

	/**
	 * Add some required CSS classes to the <body> element for pages rendered with
	 * this skin.
	 *
	 * @param OutputPage $out
	 * @param Skin $sk
	 * @param array &$bodyAttrs Pre-existing attributes of the <body> tag
	 */
	public static function onOutputPageBodyAttributes( $out, $sk, &$bodyAttrs ) {
		if ( get_class( $sk ) === 'SkinDeskMessMirrored' ) {
			$bodyAttrs['class'] .= ' home blog custom-background';
		}
	}

	/**
	 * @param OutputPage $out
	 */
	public function initPage( OutputPage $out ) {
		global $wgStylePath;

		// Internet Explorer fixes (required for IE11 at least)
		$out->addStyle( "{$wgStylePath}/DeskMessMirrored/css/ie.css", 'screen', 'IE' );
	}
}

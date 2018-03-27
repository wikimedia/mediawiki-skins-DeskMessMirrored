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
	 * Initializes Desk Mess Mirrored
	 * @param OutputPage $out
	 */
	public function initPage( OutputPage $out ) {
		parent::initPage( $out );

		global $wgHooks;
		// Add some required classes to the <body> element
		$wgHooks['OutputPageBodyAttributes'][] = function( $out, $sk, &$bodyAttrs ) {
			$bodyAttrs['class'] .= ' home blog custom-background';
			return true;
		};
	}

	function setupSkinUserCss( OutputPage $out ) {
		global $wgStylePath;

		parent::setupSkinUserCss( $out );

		// Add CSS via ResourceLoader
		$out->addModuleStyles( array(
			'mediawiki.skinning.interface',
			'mediawiki.skinning.content.externallinks',
			'skins.deskmessmirrored'
		) );

		// Internet Explorer fixes (required for IE11 at least)
		$out->addStyle( "{$wgStylePath}/DeskMessMirrored/css/ie.css", 'screen', 'IE' );
	}
}
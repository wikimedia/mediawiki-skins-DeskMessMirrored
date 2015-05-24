<?php
/**
 * Desk Mess Mirrored skin -- marble desktop covered with a mix of old and new
 * items, such as some vintage papers, a stainless steel pen, and, a hot cup of
 * coffee!
 *
 * @file
 * @ingroup Skins
 * @author Edward Caissie <edward.caissie@gmail.com> -- original WordPress theme
 * @author Jack Phoenix <jack@countervandalism.net> -- MediaWiki port
 * @date 30 November 2014
 * @see http://wordpress.org/themes/desk-mess-mirrored
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License version 2
 *
 * To install, place the DeskMessMirrored folder (the folder containing this file!)
 * into skins/ and add this line to your wiki's LocalSettings.php:
 * wfLoadSkin( 'DeskMessMirrored' );
 */

if ( function_exists( 'wfLoadSkin' ) ) {
	wfLoadSkin( 'DeskMessMirrored' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['DeskMessMirrored'] = __DIR__ . '/i18n';
	wfWarn(
		'Deprecated PHP entry point used for DeskMessMirrored skin. Please use wfLoadSkin instead, ' .
		'see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return;
} else {
	die( 'This version of the DeskMessMirrored skin requires MediaWiki 1.25+' );
}

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
 * @date 10 February 2014
 * @see http://wordpress.org/themes/desk-mess-mirrored
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License version 2
 *
 * To install, place the DeskMessMirrored folder (the folder containing this file!)
 * into skins/ and add this line to your wiki's LocalSettings.php:
 * require_once("$IP/skins/DeskMessMirrored/DeskMessMirrored.php");
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'Not a valid entry point.' );
}

// Skin credits that will show up on Special:Version
$wgExtensionCredits['skin'][] = array(
	'path' => __FILE__,
	'name' => 'Desk Mess Mirrored',
	'version' => '2.2.3',
	'author' => array( '[http://edwardcaissie.com/ Edward Caissie]', 'Jack Phoenix' ),
	'descriptionmsg' => 'deskmessmirrored-skin-desc',
	'url' => 'https://www.mediawiki.org/wiki/Skin:DeskMessMirrored',
);

// The first instance must be strtolower()ed so that useskin=deskmessmirrored works and
// so that it does *not* force an initial capital (i.e. we do NOT want
// useskin=Deskmessmirrored) and the second instance is used to determine the name of
// *this* file.
$wgValidSkinNames['deskmessmirrored'] = 'DeskMessMirrored';

// Autoload the skin class, make it a valid skin, set up i18n, set up CSS & JS
// (via ResourceLoader)
$wgAutoloadClasses['SkinDeskMessMirrored'] = __DIR__ . '/DeskMessMirrored.skin.php';
$wgMessagesDirs['SkinDeskMessMirrored'] = __DIR__ . '/i18n';
$wgResourceModules['skins.deskmessmirrored'] = array(
	'styles' => array(
		// MonoBook also loads these
		'skins/common/commonElements.css' => array( 'media' => 'screen' ),
		'skins/common/commonContent.css' => array( 'media' => 'screen' ),
		'skins/common/commonInterface.css' => array( 'media' => 'screen' ),
		// Styles custom to the DeskMessMirrored skin
		'skins/DeskMessMirrored/css/style.css' => array( 'media' => 'screen' )
		// @todo editor-style.css? Probably not needed, I guess...
	),
	'position' => 'top'
);
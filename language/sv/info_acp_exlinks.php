<?php
/**
*
* External Links [English]
* Swedish translation by Holger (http://www.maskinisten.net)
*
* @package info_acp_exlinks.php
* @copyright (c) 2014 Anvar http://bb3.mobi
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_MODED_LINKS_TITLE'			=> 'Externa l�nkar',

	'ACP_MODED_LINKS'				=> 'Hantera l�nkar',
	'ACP_MODED_LINKS_EXPLAIN'		=> 'Anvar (c) <a href="http://bb3.mobi">BB3.Mobi</a>',
	'ACP_MODED_LINKS_DESCRIPTION'	=> 'H�r kan du st�lla in hur externa l�nkar markeras i forumet.',

	'ACP_MODED_LINKS_SETTINGS'		=> 'Grundinst�llningar',
	'ACP_TARGET_ATTRIBUTE'			=> 'Skall «target»-attributet anv�ndas?',
	'ACP_TARGET_ATTRIBUTE_EXPLAIN'	=> 'Om detta deaktiveras s� anv�nds OnClick JavaScript.',
	'ACP_HIDE_LINKS_GUESTS'			=> 'D�lj externa l�nkar f�r g�ster?',
	'ACP_HIDE_LINKS_GUESTS_EXPLAIN'	=> 'Ange den text som ska visas f�r g�ster ist�llet.',
	'ACP_EXTERNAL_LINK_PREFIX'		=> 'Prefix f�re l�nken',
	'ACP_EXTERNAL_LINK_REDIRECT'	=> 'Redirect time',

	'ACP_INTERNAL_LINK_DOMAINS'		=> 'Lista �ver dom�ner som ej ska t�ckas av ovanst�ende, separera med ";"',
	'ACP_FORBIDDEN_DOMAINS'			=> 'Lista �ver dom�ner som ej ska visas, separera med ";"',
	'ACP_FORBIDDEN_DOMAINS_TEXT'	=> 'Text som ska ers�tta blockerade URLer',
	'ACP_FORBIDDEN_NEW_URL'			=> 'URL som ska ers�tta alla externa l�nkar',

	'ACP_MODED_LINKS_ATTRIBUTES'	=> 'L�nk-attribut',
	'ACP_INTERNAL_LINK_REL'			=> 'rel-attributet f�r interna l�nkar',
	'ACP_EXTERNAL_LINK_REL'			=> 'rel-attributet f�r externa l�nkar',
	'ACP_INTERNAL_LINK_TARGET'		=> 'target f�r interna l�nkar',
	'ACP_EXTERNAL_LINK_TARGET'		=> 'target f�r externa l�nkar',
	'ACP_INTERNAL_LINK_CLASS'		=> 'class f�r interna l�nkar',
	'ACP_EXTERNAL_LINK_CLASS'		=> 'class f�r externa l�nkar',
	'ACP_EXTERNAL_LINK_NOINDEX'		=> 'noindex f�r externa l�nkar?',
/* New lang en*/
	'ACP_MODED_LINKS_TYPES'			=> 'L�nktyper',
	'ACP_PDF_LINK_TYPES'			=> 'PDF l�nktyper',
	'ACP_IMG_LINK_TYPES'			=> 'IMG l�nktyper',
	'ACP_ZIP_LINK_TYPES'			=> 'ZIP l�nktyper',
	'ACP_SKIP_LINK_TYPES'			=> 'Till�t ej l�nkar till dessa filtyper',
	'ACP_SKIP_PREFIX_TYPES'			=> 'L�gg ej till extern l�nkprefix f�r dessa filtyper',
	'ACP_LINK_TYPES_EXPLAIN'		=> 'L�nktyper (separera filtyperna med en vertikal balk "|").',
	'ACP_EXTERNAL_LINK_TYPES'		=> 'Externa l�nktyper',
	'ACP_EXTERNAL_LINK_TYPES_EXPLAIN'	=> 'Kommer att behandlas som externa lankar.<br />Exempel: pdf|gif|jpg|jpeg|png|bmp|zip|rar|7z',
	'ACP_INTERNAL_LINK_TYPES'		=> 'Interna l�nktyper',
	'ACP_INTERNAL_LINK_TYPES_EXPLAIN'	=> 'Kommer att behandlas som interna referenser.<br />Exempel: pdf|gif|jpg|jpeg|png|bmp|zip|rar|7z',
	'MESSAGE_TEXT'	=> '<strong>Du f�ljer en extern l�nk: <span class="error">%s</span></strong><p>Kontrollera att l�nken �r s�ker.<br />Informera administrat�ren om l�nken leder till en misst�nkt sida.</p>',
	'URL_LINK'		=> '%sF�lj l�nken%s',
	'CLOSE_PAGE'	=> '%sSt�ng denna sida%s',
));

<?php

/**
 *
 * Modern quotes. An extension for the phpBB Forum Software package.
 * Brazilian Portuguese translation by null2 [2019][ver 1.0.1] (https://github.com/phpBBTraducoes)
 *
 * @copyright (c) 2017, Ger, https://github.com/GerB
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
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
    'MQ_CLEAR'                 => 'Limpar',
    'MQ_MULTI_QUOTE_SELECT'    => 'Selecione para citar vários posts',
    'MQ_MULTI_QUOTE_ACTION'    => 'Responder com as citações selecionadas',
    'MQ_QUOTE_SELECTION'       => 'Seleção de citação',
		));    
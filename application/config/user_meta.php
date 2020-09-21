<?php defined('BASEPATH') || exit('No direct script access allowed');
/**
 * Bonfire
 *
 * An open source project to allow developers to jumpstart their development of
 * CodeIgniter applications.
 *
 * @package   Bonfire
 * @author    Bonfire Dev Team
 * @copyright Copyright (c) 2011 - 2014, Bonfire Dev Team
 * @license   http://opensource.org/licenses/MIT
 * @link      http://cibonfire.com
 * @since     Version 1.0
 * @filesource
 */

//------------------------------------------------------------------------------
// User Meta Fields Config - These are just examples of various options
// The following examples show how to use regular inputs, select boxes,
// state and country select boxes.
//------------------------------------------------------------------------------

$config['user_meta_fields'] =  array(

	array(
		'name'   => 'k_first_name',
		'label'   => 'First name',
        'rules'         => 'trim|max_length[30]',
		'form_detail' => array(
			'type' => 'input',
			'settings' => array(
				'name'		=> 'k_first_name',
				'id'		=> 'k_first_name',
				'maxlength' => '30',
				'class'		=> 'span2'
			),
		),
	),
	array(
		'name'   => 'k_last_name',
		'label'   => 'Last name',
        'rules'         => 'trim|max_length[30]',
		'form_detail' => array(
			'type' => 'input',
			'settings' => array(
				'name'		=> 'k_last_name',
				'id'		=> 'k_last_name',
				'maxlength' => '30',
				'class'		=> 'span2'
			),
		),
	),
/*
	array(
		'name'   => 'state',
		'label'   => lang('user_meta_state'),
        'rules'         => 'trim|max_length[3]',
		'form_detail' => array(
			'type' => 'state_select',
			'settings' => array(
				'name'		=> 'state',
				'id'		=> 'state',
                'maxlength' => '3',
				'class'		=> 'span1'
			),
		),
	),*/
	array(
		'name'   => 'country',
		'label'   => lang('user_meta_country'),
		'rules'   => 'required|trim|max_length[100]',
        'admin_only'    => false,
		'form_detail' => array(
			'type' => 'country_select',
			'settings' => array(
				'name'		=> 'country',
				'id'		=> 'country',
				'maxlength'	=> '100',
				'class'		=> 'span6'
			),
		),
	),
);

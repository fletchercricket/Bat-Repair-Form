<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2018.1.0.386
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Home Form Submission',
	'heading' => 'New Form Submission',
	'success_redirect' => '',
	'resources' => array(
		'checkbox_checked' => 'Checked',
		'checkbox_unchecked' => 'Unchecked',
		'submitted_from' => 'Form submitted from website: %s',
		'submitted_by' => 'Visitor IP address: %s',
		'too_many_submissions' => 'Too many recent submissions from this IP',
		'failed_to_send_email' => 'Failed to send email',
		'invalid_reCAPTCHA_private_key' => 'Invalid reCAPTCHA private key.',
		'invalid_reCAPTCHA2_private_key' => 'Invalid reCAPTCHA 2.0 private key.',
		'invalid_reCAPTCHA2_server_response' => 'Invalid reCAPTCHA 2.0 server response.',
		'invalid_field_type' => 'Unknown field type \'%s\'.',
		'invalid_form_config' => 'Field \'%s\' has an invalid configuration.',
		'unknown_method' => 'Unknown server request method'
	),
	'email' => array(
		'from' => 'fletchercricket@bigpond.com',
		'to' => 'fletchercricket@bigpond.com'
	),
	'fields' => array(
		'custom_U473' => array(
			'order' => 6,
			'type' => 'string',
			'label' => 'First Name',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'First Name\' is required.'
			)
		),
		'Email' => array(
			'order' => 12,
			'type' => 'email',
			'label' => 'Email',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Email\' is required.',
				'format' => 'Field \'Email\' has an invalid email.'
			)
		),
		'custom_U450' => array(
			'order' => 13,
			'type' => 'string',
			'label' => 'Message',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U600' => array(
			'order' => 3,
			'type' => 'checkbox',
			'label' => '$20.00',
			'required' => false,
			'errors' => array(
			)
		),
		'custom_U777' => array(
			'order' => 7,
			'type' => 'string',
			'label' => 'Last Name',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Last Name\' is required.'
			)
		),
		'custom_U834' => array(
			'order' => 4,
			'type' => 'checkbox',
			'label' => 'Checkbox Label',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Checkbox Label\' is required.'
			)
		),
		'custom_U851' => array(
			'order' => 5,
			'type' => 'checkbox',
			'label' => 'Checkbox Label',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Checkbox Label\' is required.'
			)
		),
		'custom_U867' => array(
			'order' => 2,
			'type' => 'checkbox',
			'label' => 'Checkbox Label',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Checkbox Label\' is required.'
			)
		),
		'custom_U883' => array(
			'order' => 1,
			'type' => 'checkbox',
			'label' => 'Checkbox Label',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Checkbox Label\' is required.'
			)
		),
		'custom_U921' => array(
			'order' => 8,
			'type' => 'string',
			'label' => 'Street',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Street\' is required.'
			)
		),
		'custom_U945' => array(
			'order' => 10,
			'type' => 'string',
			'label' => 'State',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'State\' is required.'
			)
		),
		'custom_U957' => array(
			'order' => 11,
			'type' => 'string',
			'label' => 'Postcode',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Postcode\' is required.'
			)
		),
		'custom_U969' => array(
			'order' => 9,
			'type' => 'string',
			'label' => 'Suburb',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Suburb\' is required.'
			)
		)
	)
);

process_form($form);
?>

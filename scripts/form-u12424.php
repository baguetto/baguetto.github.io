<?php 
/* 	
If you see this text in your browser, PHP is not configured correctly on this hosting provider. 
Contact your hosting provider regarding PHP configuration for your site.

PHP file generated by Adobe Muse CC 2017.0.1.363
*/

require_once('form_process.php');

$form = array(
	'subject' => 'Untitled 12 Form Submission',
	'heading' => 'New Form Submission',
	'success_redirect' => 'checkout-2.html',
	'resources' => array(
		'checkbox_checked' => 'Selected',
		'checkbox_unchecked' => 'Unselected',
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
		'from' => '',
		'to' => ''
	),
	'fields' => array(
		'custom_U12433' => array(
			'order' => 1,
			'type' => 'string',
			'label' => 'First name',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'First name\' is required.'
			)
		),
		'Email' => array(
			'order' => 2,
			'type' => 'email',
			'label' => 'Last name',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Last name\' is required.',
				'format' => 'Field \'Last name\' has an invalid email address.'
			)
		),
		'custom_U12441' => array(
			'order' => 3,
			'type' => 'string',
			'label' => 'Email',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Email\' is required.'
			)
		),
		'custom_U12509' => array(
			'order' => 5,
			'type' => 'string',
			'label' => 'Address',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Address\' is required.'
			)
		),
		'custom_U12521' => array(
			'order' => 6,
			'type' => 'string',
			'label' => 'City',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'City\' is required.'
			)
		),
		'custom_U12533' => array(
			'order' => 7,
			'type' => 'string',
			'label' => 'Country',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Country\' is required.'
			)
		),
		'custom_U12545' => array(
			'order' => 4,
			'type' => 'string',
			'label' => 'Phone',
			'required' => true,
			'errors' => array(
				'required' => 'Field \'Phone\' is required.'
			)
		)
	)
);

process_form($form);
?>

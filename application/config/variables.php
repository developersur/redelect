<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

	// Variables Globales
	// ----- Configuracion para SMTP ----- //
	$config['configSMTP'] = array(
		'protocol'    => 'smtp',
		'smtp_host'   => 'ssl://mail.redelect.cl',
		'smtp_port'   => 465,
		'smtp_user'   => 'notificador@redelect.cl',
		'smtp_pass'   => 'notificador',
		'mailtype'    => 'html',
		'charset'     => 'utf-8',
		'newline'     => "\r\n",
		'wordwrap'    => TRUE,
		'validate'    => TRUE
	);

	// Correo Compra
	// Notificar compra a:
	//$config['notificar_redelect'] = "compras@redelect";
	$config['notificar_redelect'] = "alexi_evanescence@hotmail.com";
	
	// Mostrar en correo saliente a:
	//$config['from']     = "compras@redelect";
	$config['from']     = "alexi_evanescence@hotmail.com";

	// Con respuesta a:
	//$config['reply_to'] = "compras@redelect";
	$config['reply_to'] = "alexi_evanescence@hotmail.com";
	
	// Nombre del Sistema
	$config['sistema'] = "Redelect";


	// ----------------------------------- //





	// ----- DATOS BANCO TRANSFERENCIA ----- //
	$config['rut_cuenta']     = "11.111.111-1";
	$config['banco_cuenta']   = "Estado";
	$config['numero_cuenta']  = "123456789";
	$config['titular_cuenta'] = "123456789";
	$config['tipo_cuenta']    = "Corriente";
	
	// Correo al que se deben notificar los pagos
	$config['notificar_pago'] = "pagos@redelect";
?>

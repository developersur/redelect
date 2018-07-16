<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carro extends CI_Controller {

	// Muestra el contenido del carrito
	public function index()
	{
		$this->load->view('/template/head');
		$this->load->view('Carro/index');
		$this->load->view('/template/footer');
	}



	// Validar Paso 1
	function Validar_Paso_1(){

		// Validacion
		$this->form_validation->set_error_delimiters('<i class="fas fa-exclamation-triangle"></i> ', '<br>');
		$this->form_validation->set_rules('tipo', 'Tipo', 'required');
		$this->form_validation->set_rules('rut_con', 'RUT', 'required|min_length[8]|max_length[13]');
		$this->form_validation->set_rules('nombre_con', 'Nombre contacto', 'required|min_length[4]');
		$this->form_validation->set_rules('telefono_con', 'Teléfono/Celular contacto', 'required|min_length[9]|max_length[20]|numeric');
		$this->form_validation->set_rules('correo_con', 'Correo contacto', 'required|valid_email');
		
		if ($this->input->post('tipo')=="Factura") {
			$this->form_validation->set_rules('rut_fac', 'RUT facturación', 'required|min_length[8]|max_length[13]');
			$this->form_validation->set_rules('razon_fac', 'Razón Social facturación', 'required');
			$this->form_validation->set_rules('giro_fac', 'Giro facturación', 'required');
			$this->form_validation->set_rules('telefono_fac', 'Teléfono facturación', 'required');
			$this->form_validation->set_rules('correo_fac', 'Correo facturación', 'required');
			$this->form_validation->set_rules('region_fac', 'Región facturación', 'required');
			$this->form_validation->set_rules('comuna_fac', 'Comuna facturación', 'required');
			$this->form_validation->set_rules('sector_fac', 'Sector facturación', 'required');
			$this->form_validation->set_rules('calle_fac', 'Calle facturación', 'required');
			$this->form_validation->set_rules('nro_calle_fac', 'Nro calle facturación', 'required');
		}

		// Si no se introducen los datos conrrectamente
	    if ($this->form_validation->run() == FALSE){
			echo '<div class="alert alert-danger">';
			echo validation_errors();
			echo '</div>';
	    
	    // Si estan correctos
	    } else {
	    	echo "1";
	    }
	}




	// Validar Paso 2
	function Validar_Paso_2(){

		// Validacion
		$this->form_validation->set_error_delimiters('<i class="fas fa-exclamation-triangle"></i> ', '<br>');

		$this->form_validation->set_rules('region_dir', 'Región', 'required');
		$this->form_validation->set_rules('comuna_dir', 'Comuna', 'required');
		$this->form_validation->set_rules('sector_dir', 'Sector', 'required');
		$this->form_validation->set_rules('calle_dir', 'Calle', 'required');
		$this->form_validation->set_rules('nro_calle_dir', 'Nro calle', 'required');

		// Si no se introducen los datos conrrectamente
	    if ($this->form_validation->run() == FALSE){
			echo '<div class="alert alert-danger">';
			echo validation_errors();
			echo '</div>';
	    
	    // Si estan correctos
	    } else {
	    	echo "1";
	    }
	}

	// Paso 1 para la compra
	public function Paso1()
	{
		// Si no hay productos en el carrito lo devuelve
		$productosC = $this->cart->contents();
		if(count($productosC)<=0) {
			header("Location: ".base_url()."index.php/Carro/");
		}
		if(isset($_SESSION['datos_sesion'])) {
			//echo var_dump($_SESSION['datos_sesion']);
		}

		//unset($_SESSION['datos_sesion']);
		
		// Paso 1 - Inicializa variables 
		$tipo          = "";
		$nombre_con    = "";
		$rut_con       = "";
		$correo_con    = "";
		$telefono_con  = "";
		$rut_fac       = "";
		$razon_fac     = "";
		$giro_fac      = "";
		$telefono_fac  = "";
		$correo_fac    = "";
		$region_fac    = "";
		$comuna_fac    = "";
		$sector_fac    = "";
		$calle_fac     = "";
		$nro_calle_fac = "";

		// Si se reciben datos por POST da valor a las variables
		if(isset($_SESSION['datos_sesion'])) {
			$tipo          = $_SESSION['datos_sesion']['tipo'];
            $nombre_con    = $_SESSION['datos_sesion']['nombre_con'];
            $rut_con       = $_SESSION['datos_sesion']['rut_con'];
            $correo_con    = $_SESSION['datos_sesion']['correo_con'];
            $telefono_con  = $_SESSION['datos_sesion']['telefono_con'];
            $rut_fac       = $_SESSION['datos_sesion']['rut_fac'];
            $razon_fac     = $_SESSION['datos_sesion']['razon_fac'];
            $giro_fac      = $_SESSION['datos_sesion']['giro_fac'];
            $telefono_fac  = $_SESSION['datos_sesion']['telefono_fac'];
            $correo_fac    = $_SESSION['datos_sesion']['correo_fac'];
            $region_fac    = $_SESSION['datos_sesion']['region_fac'];
            $comuna_fac    = $_SESSION['datos_sesion']['comuna_fac'];
            $sector_fac    = $_SESSION['datos_sesion']['sector_fac'];
            $calle_fac     = $_SESSION['datos_sesion']['calle_fac'];
            $nro_calle_fac = $_SESSION['datos_sesion']['nro_calle_fac'];
		}
		// Fin Paso 1 - Inicializa variables 

		// Paso 2 - Inicializa variables 
		$region_dir       ="";
		$comuna_dir       ="";
		$sector_dir       ="";
		$calle_dir        ="";
		$nro_calle_dir    ="";
		$indicaciones_dir ="";
		$fecha_visita     ="";
		$hora_visita      ="";
		$metodo_pago      ="";
		
		// Si existe la sesion da asiga valor a las variables
		if(isset($_SESSION['datos_sesion'])) {
			$region_dir       = $_SESSION['datos_sesion']['region_dir'];
			$comuna_dir       = $_SESSION['datos_sesion']['comuna_dir'];
			$sector_dir       = $_SESSION['datos_sesion']['sector_dir'];
			$calle_dir        = $_SESSION['datos_sesion']['calle_dir'];
			$nro_calle_dir    = $_SESSION['datos_sesion']['nro_calle_dir'];
			$indicaciones_dir = $_SESSION['datos_sesion']['indicaciones_dir'];
			$fecha_visita     = $_SESSION['datos_sesion']['fecha_visita'];
			$hora_visita      = $_SESSION['datos_sesion']['hora_visita'];
			$metodo_pago      = $_SESSION['datos_sesion']['metodo_pago'];
		}
		// Fin Paso 2 - Inicializa variables 

		
		// Datos para la sesion
		$data_sesion = array(
			// Paso 1
			'tipo'             => $tipo,
			'nombre_con'       => $nombre_con,
			'rut_con'          => $rut_con,
			'correo_con'       => $correo_con,
			'telefono_con'     => $telefono_con,
			'rut_fac'          => $rut_fac,
			'razon_fac'        => $razon_fac,
			'giro_fac'         => $giro_fac,
			'telefono_fac'     => $telefono_fac,
			'correo_fac'       => $correo_fac,
			'region_fac'       => $region_fac,
			'comuna_fac'       => $comuna_fac,
			'sector_fac'       => $sector_fac,
			'calle_fac'        => $calle_fac,
			'nro_calle_fac'    => $nro_calle_fac,

			// Paso 2
			'region_dir'       => $region_dir,
			'comuna_dir'       => $comuna_dir,
			'sector_dir'       => $sector_dir,
			'calle_dir'        => $calle_dir,
			'nro_calle_dir'    => $nro_calle_dir,
			'indicaciones_dir' => $indicaciones_dir,
			'fecha_visita'     => $fecha_visita,
			'hora_visita'      => $hora_visita,
			'metodo_pago'      => $metodo_pago
		);
		
		$_SESSION['datos_sesion'] = $data_sesion;

		if(isset($_SESSION['datos_sesion'])) {
			//echo var_dump($_SESSION['datos_sesion']);
		}

		$this->load->view('/template/head');
		$this->load->view('Carro/Paso1');
		$this->load->view('/template/footer');
	}


	// Paso 2 para la compra
	public function Paso2()
	{	
		// Si no hay productos en el carrito lo devuelve
		$productosC = $this->cart->contents();
		if(count($productosC)<=0) {
			header("Location: ".base_url()."index.php/Carro/");
		}

		// Paso 1 - Inicializa variables 
		$tipo          = "";
		$nombre_con    = "";
		$rut_con       = "";
		$correo_con    = "";
		$telefono_con  = "";
		$rut_fac       = "";
		$razon_fac     = "";
		$giro_fac      = "";
		$telefono_fac  = "";
		$correo_fac    = "";
		$region_fac    = "";
		$comuna_fac    = "";
		$sector_fac    = "";
		$calle_fac     = "";
		$nro_calle_fac = "";

		// Si se reciben datos por POST da valor a las variables
		if(isset($_POST['tipo'])) {
			$tipo          = $_POST['tipo'];
			$nombre_con    = $_POST['nombre_con'];
			$rut_con       = $_POST['rut_con'];
			$correo_con    = $_POST['correo_con'];
			$telefono_con  = $_POST['telefono_con'];
			$rut_fac       = $_POST['rut_fac'];
			$razon_fac     = $_POST['razon_fac'];
			$giro_fac      = $_POST['giro_fac'];
			$telefono_fac  = $_POST['telefono_fac'];
			$correo_fac    = $_POST['correo_fac'];
			$region_fac    = $_POST['region_fac'];
			$comuna_fac    = $_POST['comuna_fac'];
			$sector_fac    = $_POST['sector_fac'];
			$calle_fac     = $_POST['calle_fac'];
			$nro_calle_fac = $_POST['nro_calle_fac'];
		}

		// Si no se recibe por POST pero existe la SESION
		if((!isset($_POST['tipo'])) and (isset($_SESSION['datos_sesion']))) {
			$tipo          = $_SESSION['datos_sesion']['tipo'];
			$nombre_con    = $_SESSION['datos_sesion']['nombre_con'];
			$rut_con       = $_SESSION['datos_sesion']['rut_con'];
			$correo_con    = $_SESSION['datos_sesion']['correo_con'];
			$telefono_con  = $_SESSION['datos_sesion']['telefono_con'];
			$rut_fac       = $_SESSION['datos_sesion']['rut_fac'];
			$razon_fac     = $_SESSION['datos_sesion']['razon_fac'];
			$giro_fac      = $_SESSION['datos_sesion']['giro_fac'];
			$telefono_fac  = $_SESSION['datos_sesion']['telefono_fac'];
			$correo_fac    = $_SESSION['datos_sesion']['correo_fac'];
			$region_fac    = $_SESSION['datos_sesion']['region_fac'];
			$comuna_fac    = $_SESSION['datos_sesion']['comuna_fac'];
			$sector_fac    = $_SESSION['datos_sesion']['sector_fac'];
			$calle_fac     = $_SESSION['datos_sesion']['calle_fac'];
			$nro_calle_fac = $_SESSION['datos_sesion']['nro_calle_fac'];
		}
		// Fin Paso 1 - Inicializa variables 

		// Paso 2 - Inicializa variables 
		$region_dir       ="";
		$comuna_dir       ="";
		$sector_dir       ="";
		$calle_dir        ="";
		$nro_calle_dir    ="";
		$indicaciones_dir ="";
		$fecha_visita     ="";
		$hora_visita      ="";
		$metodo_pago      ="";
		
		// Si existe la sesion da asiga valor a las variables
		if(isset($_SESSION['datos_sesion'])) {
			$region_dir       = $_SESSION['datos_sesion']['region_dir'];
			$comuna_dir       = $_SESSION['datos_sesion']['comuna_dir'];
			$sector_dir       = $_SESSION['datos_sesion']['sector_dir'];
			$calle_dir        = $_SESSION['datos_sesion']['calle_dir'];
			$nro_calle_dir    = $_SESSION['datos_sesion']['nro_calle_dir'];
			$indicaciones_dir = $_SESSION['datos_sesion']['indicaciones_dir'];
			$fecha_visita     = $_SESSION['datos_sesion']['fecha_visita'];
			$hora_visita      = $_SESSION['datos_sesion']['hora_visita'];
			$metodo_pago      = $_SESSION['datos_sesion']['metodo_pago'];
		}
		// Fin Paso 2 - Inicializa variables 

		
		// Datos para la sesion
		$data_sesion = array(
			// Paso 1
			'tipo'             => $tipo,
			'nombre_con'       => $nombre_con,
			'rut_con'          => $rut_con,
			'correo_con'       => $correo_con,
			'telefono_con'     => $telefono_con,
			'rut_fac'          => $rut_fac,
			'razon_fac'        => $razon_fac,
			'giro_fac'         => $giro_fac,
			'telefono_fac'     => $telefono_fac,
			'correo_fac'       => $correo_fac,
			'region_fac'       => $region_fac,
			'comuna_fac'       => $comuna_fac,
			'sector_fac'       => $sector_fac,
			'calle_fac'        => $calle_fac,
			'nro_calle_fac'    => $nro_calle_fac,

			// Paso 2
			'region_dir'       => $region_dir,
			'comuna_dir'       => $comuna_dir,
			'sector_dir'       => $sector_dir,
			'calle_dir'        => $calle_dir,
			'nro_calle_dir'    => $nro_calle_dir,
			'indicaciones_dir' => $indicaciones_dir,
			'fecha_visita'     => $fecha_visita,
			'hora_visita'      => $hora_visita,
			'metodo_pago'      => $metodo_pago 
		);	

		$_SESSION['datos_sesion'] = $data_sesion;
		//echo var_dump($_SESSION['datos_sesion']);

		$this->load->view('/template/head');
		$this->load->view('Carro/Paso2');
		$this->load->view('/template/footer');
	}



	// Paso 3 para la compra - Confirmacion
	public function Paso3()
	{
		//echo var_dump($_POST);

		// Si no hay productos en el carrito lo devuelve
		$productosC = $this->cart->contents();
		if(count($productosC)<=0) {
			header("Location: ".base_url()."index.php/Carro/");
		}

		// Si no existe POST del paso 2, lo devuelve al paso 1
		if(!isset($_POST['tipo'])) {
			header("Location: ".base_url()."index.php/Carro/Paso1");
		}
		
		// Si no existe la sesion con los datos de la compra, lo devuelve al paso 1
		if(!isset($_SESSION['datos_sesion'])) {
			header("Location: ".base_url()."index.php/Carro/Paso1");
		}

		// Paso 1 - Asigna valor
		$tipo          = $_POST['tipo'];
		$nombre_con    = $_POST['nombre_con'];
		$rut_con       = $_POST['rut_con'];
		$correo_con    = $_POST['correo_con'];
		$telefono_con  = $_POST['telefono_con'];
		$rut_fac       = $_POST['rut_fac'];
		$razon_fac     = $_POST['razon_fac'];
		$giro_fac      = $_POST['giro_fac'];
		$telefono_fac  = $_POST['telefono_fac'];
		$correo_fac    = $_POST['correo_fac'];
		$region_fac    = $_POST['region_fac'];
		$comuna_fac    = $_POST['comuna_fac'];
		$sector_fac    = $_POST['sector_fac'];
		$calle_fac     = $_POST['calle_fac'];
		$nro_calle_fac = $_POST['nro_calle_fac'];
		// Fin Paso 1 -  Asigna valor

		// Paso 2 - Asigna valor
		$region_dir       = $_POST['region_dir'];
		$comuna_dir       = $_POST['comuna_dir'];
		$sector_dir       = $_POST['sector_dir'];
		$calle_dir        = $_POST['calle_dir'];
		$nro_calle_dir    = $_POST['nro_calle_dir'];
		$indicaciones_dir = $_POST['indicaciones_dir'];
		$fecha_visita     = $_POST['fecha_visita'];
		$hora_visita      = $_POST['hora_visita'];
		$metodo_pago      = $_POST['metodo_pago'];
		// Fin Paso 2 - Asigna valor Inicializa variables 
		
		
		// Datos para la sesion
		$data['data_post'] = array(
			// Paso 1
			'tipo'             => $tipo,
			'nombre_con'       => $nombre_con,
			'rut_con'          => $rut_con,
			'correo_con'       => $correo_con,
			'telefono_con'     => $telefono_con,
			'rut_fac'          => $rut_fac,
			'razon_fac'        => $razon_fac,
			'giro_fac'         => $giro_fac,
			'telefono_fac'     => $telefono_fac,
			'correo_fac'       => $correo_fac,
			'region_fac'       => $region_fac,
			'comuna_fac'       => $comuna_fac,
			'sector_fac'       => $sector_fac,
			'calle_fac'        => $calle_fac,
			'nro_calle_fac'    => $nro_calle_fac,

			// Paso 2
			'region_dir'       => $region_dir,
			'comuna_dir'       => $comuna_dir,
			'sector_dir'       => $sector_dir,
			'calle_dir'        => $calle_dir,
			'nro_calle_dir'    => $nro_calle_dir,
			'indicaciones_dir' => $indicaciones_dir,
			'fecha_visita'     => $fecha_visita,
			'hora_visita'      => $hora_visita,
			'metodo_pago'     => $metodo_pago 
		);
		
		// Incluye los datos en la sesion por si se devuelve a un paso anterior
		$_SESSION['datos_sesion'] = $data['data_post'];
		
		// Datos Compra
		$_SESSION['datos']   = $data['data_post'];
		// Datos Productos
		$_SESSION['carrito'] = $this->cart->contents();
		// Datos Productos
		$_SESSION['total']   = round($this->cart->total());

		// ------- WEBPAY ------- //
		require_once('assets/webpay/libwebpay/webpay.php');
		require_once('assets/webpay/certificates/cert-normal.php');
		require_once('assets/webpay/iniciar.php');

		// -- Inicio Datos para la transaccion --//
		$base_url       = base_url();
		$total          = round($this->cart->total());    // Monto de la transacción
		$NroCompra      = rand();    // Orden de compra de la tienda
		$SesionID       = uniqid();  //ID para la sesion 
		$urlProcesar    = $base_url."index.php/Carro/ProcesarPago/"; // URL de retorno
		$urlComprobante = $base_url."index.php/Carro/ResultadoNormal/?action=end";    // URL Final 
		
		// -- Inicio de la Transaccion para obtener Token -- //
		$data['WebPayResultado'] = $webpay->getNormalTransaction()->initTransaction($total, $NroCompra, $SesionID, $urlProcesar, $urlComprobante);
		
		$this->load->view('/template/head');
		$this->load->view('Carro/Paso3', $data);
		$this->load->view('/template/footer');
	}

	// Procesa el Pago ya sea por Webpay o Transferencia
	public function ProcesarPago()
	{	

		// Si no existe la sesion con los datos de la compra
		if(!isset($_SESSION['datos'])) {
			header("Location: ".base_url()."index.php/Carro/Paso1");
			exit;
		}
		if(isset($_SESSION['datos']) and $_SESSION['datos']==null) {
			header("Location: ".base_url()."index.php/Carro/Paso1");
			exit;
		}
		// Si no existe la sesion con los datos de la compra
		if(!isset($_SESSION['total'])) {
			header("Location: ".base_url()."index.php/Carro/Paso1");
			exit;
		}
		if(isset($_SESSION['total']) and $_SESSION['total']==null) {
			header("Location: ".base_url()."index.php/Carro/Paso1");
			exit;
		}
		// Si no existe la sesion con los datos de los productos
		if(!isset($_SESSION['carrito'])) {
			header("Location: ".base_url()."index.php/Carro/Paso1");
			exit;
		}
		if(isset($_SESSION['carrito']) and $_SESSION['carrito']==null) {
			header("Location: ".base_url()."index.php/Carro/Paso1");
			exit;
		}

		// Carga Modelo
		$this->load->model('WebpayModel');
		$this->load->model('CompraModel');
		$this->load->model('CategoriaModel');
		
		// categorias para la pagina principal
		$data['categorias'] = $this->CategoriaModel->obtenerCategorias();
				
		$data['mensaje'] = "";
		$data['error']   = "";
		
		// Si se recibe token o transferencia la compra va bien
		if(((isset($_POST["token_ws"]) and $_POST["token_ws"]!="")) or ((isset($_POST["transferencia"])) and ($_POST['transferencia']))) {

			// Recibe los datos de las sesiones de la compra
			if($_SESSION['datos']!==null and $_SESSION['carrito']!==null and $_SESSION['total']!==null) {
				$dcompra   = $_SESSION['datos'];
				$dproducto = $_SESSION['carrito'];
				$total     = $_SESSION['total'];
			}

			// -- Inicialmente registra la compra sin los datos del pago -- // 
			$data = array(
				"id_cliente"       => 0,
				"id_webpay"        => 0,
				"token"            => "0",
				"nro_transferencia"=> "",
				"tipo"             => $dcompra['tipo'],
				"rut_con"          => $dcompra['rut_con'],
				"nombre_con"       => $dcompra['nombre_con'],
				"telefono_con"     => $dcompra['telefono_con'],
				"correo_con"       => $dcompra['correo_con'],
				"rut_fac"          => $dcompra['rut_fac'],
				"razon_fac"        => $dcompra['razon_fac'],
				"telefono_fac"     => $dcompra['telefono_fac'],
				"correo_fac"       => $dcompra['correo_fac'],
				"giro_fac"         => $dcompra['giro_fac'],
				"region_fac"       => $dcompra['region_fac'],
				"comuna_fac"       => $dcompra['comuna_fac'],
				"sector_fac"       => $dcompra['sector_fac'],
				"calle_fac"        => $dcompra['calle_fac'],
				"nro_calle_fac"    => $dcompra['nro_calle_fac'],
				'region_dir'       => $dcompra['region_dir'],
				'comuna_dir'       => $dcompra['comuna_dir'],
				'sector_dir'       => $dcompra['sector_dir'],
				'calle_dir'        => $dcompra['calle_dir'],
				'nro_calle_dir'    => $dcompra['nro_calle_dir'],
				'indicaciones_dir' => $dcompra['indicaciones_dir'],
				'fecha_visita'     => $dcompra['fecha_visita'],
				'hora_visita'      => $dcompra['hora_visita'],
				'metodo_pago'     =>  $dcompra['metodo_pago'],
				'status_compra'    => "REGISTRADA",
				'status_pago'      => "SIN PROCESAR",
				'total'      	   => $total
			);

			// Registra el encabezado de la compra
			if($id_compra = $this->CompraModel->RegistrarCompra($data)) {
				//unset($_SESSION['datos']);
				//unset($_SESSION['carrito']);

				// Recorre los productos del carrito para guardarlo en los detalles
				foreach ($dproducto as $item) {

					// Array con los datos del carrito
					$data_productos = array(
						'id_compra'            => $id_compra,
						'id_producto'          => $item['id'],
						'codigo_producto'      => $item['codigo'],
						'nombre_producto'      => $item['name'],
						'descripcion_producto' => $item['descripcion'],
						'cantidad'             => $item['qty'],
						'precio'               => $item['price'],
						'imagen'               => $item['imagen']
					);

					// Registra los detalles de los productos
					if($this->CompraModel->RegistrarDetalles($data_productos)) {
						$error = FALSE; // No hubo error al registrar los detalles
					} else {
						$error = TRUE; // Hubo error al registrar los detalles
					}
				}
			// Si no se registra correctamente
			} else {
				$id_compra = 0;
			}
			// ---------------------- //


			// Si los datos de la compra se registran correctamente se le asigna un numero de compra mayor a a cero
			if($id_compra>0 and $error==FALSE) {
				
				// -- WEBPAY -- //
				// Si se recibe el token es Webpay
				if((isset($_POST["token_ws"]) and $_POST["token_ws"]!="")) {
				
					// ------- WEBPAY ------- //
					require_once('assets/webpay/libwebpay/webpay.php');
					require_once('assets/webpay/certificates/cert-normal.php');
					require_once('assets/webpay/iniciar.php');
					
					$token = filter_input(INPUT_POST, 'token_ws');

					// Rescatamos resultado y datos de la transaccion
					$WebPayResultado = $webpay->getNormalTransaction()->getTransactionResult($token);

					// Se verificamos el resultado de la transacción
					if(isset($WebPayResultado->detailOutput->responseCode))  {
						
						// Este o no aprobado se registran los datos de la transaccion
						$TipoPagoDescripcion  = DescripcionTipoPago($WebPayResultado->detailOutput->paymentTypeCode);
						$RespuestaDescripcion = DescripcionRespuesta($WebPayResultado->detailOutput->responseCode);
						$VCIDescripcion       = DescripcionVCI($WebPayResultado->VCI);
						
						// --- REGISTRA LOS DETALLES DEL PAGO DE WEBPAY --- //
						$data_pago = array(
							'id_compra'           => $id_compra,
							'token'               => $token,
							'accountingDate'      => $WebPayResultado->accountingDate,
							'buyOrder'            => $WebPayResultado->buyOrder,
							'cardNumber'          => $WebPayResultado->cardDetail->cardNumber,
							'cardExpirationDate'  => $WebPayResultado->cardDetail->cardExpirationDate,
							'authorizationCode'   => $WebPayResultado->detailOutput->authorizationCode,
							'paymentTypeCode'     => $WebPayResultado->detailOutput->paymentTypeCode,
							'paymentTypeCodeDes'  => $TipoPagoDescripcion,
							'responseCode'        => $WebPayResultado->detailOutput->responseCode,
							'sharesNumber'        => $WebPayResultado->detailOutput->sharesNumber,
							'amount'              => $WebPayResultado->detailOutput->amount,
							'commerceCode'        => $WebPayResultado->detailOutput->commerceCode,
							'buyOrder'            => $WebPayResultado->detailOutput->buyOrder,
							'responseDescription' => $RespuestaDescripcion,
							'sessionId'           => $WebPayResultado->sessionId,
							'transactionDate'     => $WebPayResultado->transactionDate,
							'urlRedirection'      => $WebPayResultado->urlRedirection,
							'VCI'                 => $WebPayResultado->VCI,
							'VCIDescription'      => $VCIDescripcion,
							'id_cliente'          => 1,
							'rut_contacto'        => 11111111,
							'rut_facturacion'     => 11111111
						);

						$id_pago_webpay = $this->WebpayModel->RegistrarPago($data_pago);


						// PAGO ACEPTADO
						if ($WebPayResultado->detailOutput->responseCode === 0) {
							
							// -- Actualiza compra con la informacion -- //
							$datos_compra = array(
								'id_webpay'             => $id_pago_webpay,
								'token'                 => $token,
								'status_compra'         => "PAGADA",
								'status_pago'           => "PAGO CONFIRMADO",
								'informacion_adicional' => "Se recibio el Token pero ocurrio un error, probablemente la sesion cadudo o se recargo la pagina"
							);
							if($this->CompraModel->ActualizarCompra($datos_compra,$id_compra)) {
								$data['error'] = "Se recibio el Token pero ocurrio un error, probablemente la sesion cadudo o se recargo la pagina";
							}


						// PAGO RECHAZADO
						} else {

							// -- Actualiza compra con la informacion -- //
							$datos_compra = array(
								'id_webpay'             => $id_pago_webpay,
								'token'                 => $token,
								'status_compra'         => "ANULADA",
								'status_pago'           => "PAGO RECHAZADO",
								'informacion_adicional' => $RespuestaDescripcion
							);
							if($this->CompraModel->ActualizarCompra($datos_compra,$id_compra)) {
								$data['error'] = "La compra fue registrada pero el pago fue rechazado por Webpay, motivo: " . $RespuestaDescripcion;
							}
						}

					} else {
						
						// -- Actualiza compra con la informacion -- //
						$datos_compra = array(
							'status_compra'         => "ANULADA",
							'status_pago'           => "ERROR AL PROCESAR EL PAGO",
							'informacion_adicional' => "Se recibio el Token pero ocurrio un error, probablemente la sesion cadudo o se recargo la pagina"
						);
						if($this->CompraModel->ActualizarCompra($datos_compra,$id_compra)) {
							$data['error'] = "Se recibio el Token pero ocurrio un error, probablemente la sesion cadudo o se recargo la pagina";
						}
						// ---------------------------------------- //

					}
				}
				// -- FIN WEBPAY -- //
				


				// -- TRANSFERENCIA -- //
				// Si se transferencia
				if((isset($_POST["transferencia"])) and ($_POST['transferencia'])) {
					
					// Si es por transferencia actualiza el status del pago "Por Verificar"
					$datos_compra = array(
						'status_compra'    => "GENERADA",
						'status_pago'      => "POR VERIFICAR"
					);
					// Termina el proceso por Transferencia
					if($this->CompraModel->ActualizarCompra($datos_compra,$id_compra)) {
						$data['mensaje'] = "Compra por transferencia registrada";
					} else {
						$data['error'] = "Error al actualizar los datos de la compra por Transferencia";
					}
				}
				// -- FIN TRANSFERENCIA -- //



			// Si no se registro la compra o sus detalles iniciales
			} else {

				// No se registro el encabezado
				if($id_compra>0) {
					$data['error'] = "Error al registrar los datos de la compra";
				}
				// No se registraron los detalles de los productos
				if($error==FALSE) {
					$data['error'] = "Error al registrar los detalles de la compra";
				}

			}
			




		} else {
			$data['error'] = "No existe información que procesar";
		}
		
		$this->load->view('/template/head');
		$this->load->view('Carro/ProcesarPago',$data);
		$this->load->view('/template/footer');
	}



	// Muestra contenido del carrito en la cabecera
	public function Mostrar() {
		$this->load->view('/Carro/Carrito_cabecera');
	}


	// Agrega producto al carrito
	public function Agregar() {
		
		// Recibe los datos
		$id_producto         = $this->input->post('id_producto');
		$codigo_producto     = $this->input->post('codigo_producto');
		$nombre_producto     = $this->input->post('nombre_producto');
		$descripcion_producto= $this->input->post('descripcion_producto');
		$cantidad_producto   = $this->input->post('cantidad_producto');
		$precio_producto     = $this->input->post('precio_producto');
		$imagen_producto     = $this->input->post('imagen_producto');

		// Array con los datos
		$insert = array(
			'id'         => $id_producto,
			'codigo'     => $codigo_producto,
			'qty'        => $cantidad_producto,
			'price'      => $precio_producto,
			'name'       => $nombre_producto,
			'descripcion'=> $descripcion_producto,
			'imagen'     => $imagen_producto
		);

		// Guarda los datos en la sesion del carrito
		if($this->cart->insert($insert)) {
			//echo "Holaaaaa";
			$this->load->view('/Carro/Carrito_cabecera');
		} else { 
			echo "mal";
		};
	}



	// Actualiza la cantidad del producto
	public function Actualizar() {
		
		// Recibe los datos
		$rowid             = $this->input->post('rowid');
		$cantidad_producto = $this->input->post('cantidad_producto');

		// Array con los datos
		$data = array(
			'rowid' => $rowid,
			'qty'   => $cantidad_producto
		);

		// Actualiza los datos en la sesion del carrito
		if($this->cart->update($data)) echo "ok"; else echo "mal";
	}
	

	// Elimina el producto 
	public function Quitar() {

		// Recibe los datos
		$rowid = $this->input->post('rowid');

		// Array con los datos, si la cantidad en cero se elimina el producto del carrito
		$data = array(
			'rowid' => $rowid,
			'qty'   =>0
		);

		// Actualiza los datos en la sesion del carrito
		if($this->cart->update($data)) echo "ok"; else echo "mal";
	}


	
	// Elimina el producto desde el carrito de la cabecera
	public function QuitarCabecera() {

		// Recibe los datos
		$rowid = $this->input->post('rowid');

		// Array con los datos, si la cantidad en cero se elimina el producto del carrito
		$data = array(
			'rowid' => $rowid,
			'qty'   =>0
		);

		// Actualiza los datos en la sesion del carrito
		if($this->cart->update($data)) {
			$this->load->view('/Carro/Carrito_cabecera');
		} else { 
			echo "mal";
		}
	}

}
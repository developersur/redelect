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

	// Paso 1 para la compra
	public function Paso1()
	{
		// Si no hay productos en el carrito lo devuelve
		$productosC = $this->cart->contents();
		if(count($productosC)<=0) {
			header("Location: ".base_url()."index.php/Carro/");
		}
		echo var_dump($_SESSION['datos_sesion']);

		//unset($_SESSION['datos_sesion']);
		// Paso 1 - Inicializa variables 
		$tipo          = "";
		$nombre        = "";
		$rut           = "";
		$correo        = "";
		$telefono      = "";
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
            $nombre        = $_SESSION['datos_sesion']['nombre'];
            $rut           = $_SESSION['datos_sesion']['rut'];
            $correo        = $_SESSION['datos_sesion']['correo'];
            $telefono      = $_SESSION['datos_sesion']['telefono'];
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
		$fecha            ="";
		$hora             ="";
		$pago             ="";
		
		// Si existe la sesion da asiga valor a las variables
		if(isset($_SESSION['datos_sesion'])) {
			$region_dir       = $_SESSION['datos_sesion']['region_dir'];
			$comuna_dir       = $_SESSION['datos_sesion']['comuna_dir'];
			$sector_dir       = $_SESSION['datos_sesion']['sector_dir'];
			$calle_dir        = $_SESSION['datos_sesion']['calle_dir'];
			$nro_calle_dir    = $_SESSION['datos_sesion']['nro_calle_dir'];
			$indicaciones_dir = $_SESSION['datos_sesion']['indicaciones_dir'];
			$fecha            = $_SESSION['datos_sesion']['fecha'];
			$hora             = $_SESSION['datos_sesion']['hora'];
			$pago             = $_SESSION['datos_sesion']['pago'];
		}
		// Fin Paso 2 - Inicializa variables 

		
		// Datos para la sesion
		$data_sesion = array(
			// Paso 1
			'tipo'             => $tipo,
			'nombre'           => $nombre,
			'rut'              => $rut,
			'correo'           => $correo,
			'telefono'         => $telefono,
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
			'fecha'            => $fecha,
			'hora'             => $hora,
			'pago'             => $pago
		);

		$_SESSION['datos_sesion'] = $data_sesion;
		echo var_dump($_SESSION['datos_sesion']);

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
		$nombre        = "";
		$rut           = "";
		$correo        = "";
		$telefono      = "";
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
			$nombre        = $_POST['nombre'];
			$rut           = $_POST['rut'];
			$correo        = $_POST['correo'];
			$telefono      = $_POST['telefono'];
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
			$nombre        = $_SESSION['datos_sesion']['nombre'];
			$rut           = $_SESSION['datos_sesion']['rut'];
			$correo        = $_SESSION['datos_sesion']['correo'];
			$telefono      = $_SESSION['datos_sesion']['telefono'];
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
		$fecha            ="";
		$hora             ="";
		$pago             ="";
		
		// Si existe la sesion da asiga valor a las variables
		if(isset($_SESSION['datos_sesion'])) {
			$region_dir       = $_SESSION['datos_sesion']['region_dir'];
			$comuna_dir       = $_SESSION['datos_sesion']['comuna_dir'];
			$sector_dir       = $_SESSION['datos_sesion']['sector_dir'];
			$calle_dir        = $_SESSION['datos_sesion']['calle_dir'];
			$nro_calle_dir    = $_SESSION['datos_sesion']['nro_calle_dir'];
			$indicaciones_dir = $_SESSION['datos_sesion']['indicaciones_dir'];
			$fecha            = $_SESSION['datos_sesion']['fecha'];
			$hora             = $_SESSION['datos_sesion']['hora'];
			$pago             = $_SESSION['datos_sesion']['pago'];
		}
		// Fin Paso 2 - Inicializa variables 

		
		// Datos para la sesion
		$data_sesion = array(
			// Paso 1
			'tipo'             => $tipo,
			'nombre'           => $nombre,
			'rut'              => $rut,
			'correo'           => $correo,
			'telefono'         => $telefono,
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
			'fecha'            => $fecha,
			'hora'             => $hora,
			'pago'             => $pago
		);	

		$_SESSION['datos_sesion'] = $data_sesion;
		echo var_dump($_SESSION['datos_sesion']);

		$this->load->view('/template/head');
		$this->load->view('Carro/Paso2');
		$this->load->view('/template/footer');
	}



	// Paso 3 para la compra - Confirmacion
	public function Paso3()
	{
		echo var_dump($_POST);

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
		$nombre        = $_POST['nombre'];
		$rut           = $_POST['rut'];
		$correo        = $_POST['correo'];
		$telefono      = $_POST['telefono'];
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
		$fecha            = $_POST['fecha'];
		$hora             = $_POST['hora'];
		$pago             = $_POST['pago'];
		// Fin Paso 2 - Asigna valor Inicializa variables 
		
		
		// Datos para la sesion
		$data['data_post'] = array(
			// Paso 1
			'tipo'             => $tipo,
			'nombre'           => $nombre,
			'rut'              => $rut,
			'correo'           => $correo,
			'telefono'         => $telefono,
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
			'fecha'            => $fecha,
			'hora'             => $hora,
			'pago'             => $pago
		);
		
		// Incluye los datos en la sesion por si se devuelve a un paso anterior
		$_SESSION['datos_sesion'] = $data['data_post'];

		// ------- WEBPAY ------- //
		require_once('assets/webpay/libwebpay/webpay.php');
		require_once('assets/webpay/certificates/cert-normal.php');
		require_once('assets/webpay/iniciar.php');

		// -- Inicio Datos para la transaccion --//
		$base_url       = base_url();
		$total          = rand();    // Monto de la transacción
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

	// Paso 3 para la compra - Confirmacion
	public function ProcesarPago()
	{	
		// Carga Modelo
		$this->load->model('WebpayModel');
		
		if(isset($_POST["token_ws"]) and $_POST["token_ws"]!="") {
		
			// ------- WEBPAY ------- //
			require_once('assets/webpay/libwebpay/webpay.php');
			require_once('assets/webpay/certificates/cert-normal.php');
			require_once('assets/webpay/iniciar.php');
			
			$token = filter_input(INPUT_POST, 'token_ws');

			// Rescatamos resultado y datos de la transaccion
			$WebPayResultado = $webpay->getNormalTransaction()->getTransactionResult($token);

			// Se verificamos el resultado de la transacción
			if(isset($WebPayResultado->detailOutput->responseCode))  {
				if ($WebPayResultado->detailOutput->responseCode === 0) {
					echo "Pago Aceptado";
					echo var_dump($WebPayResultado);
					

					$TipoPagoDescripcion  = DescripcionTipoPago($WebPayResultado->detailOutput->paymentTypeCode);
					$RespuestaDescripcion = DescripcionRespuesta($WebPayResultado->detailOutput->responseCode);
					$VCIDescripcion       = DescripcionVCI($WebPayResultado->VCI);

					// --- REGISTRA LOS DETALLES DEL PAGO DE WEBPAY --- //
					$data_pago = array(
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
					echo var_dump($id_pago_webpay);
				} else {
					echo "Pago Rechazado";
					echo var_dump($WebPayResultado);
				}
			} else {
				echo "Se recibio el Token pero ocurrio un error, probablemente la sesion cadudo o se recargo la pagina";
				echo var_dump($WebPayResultado);
			}
				
		} else {
			echo "No se recibio el Token para la transaccion";
		}
		
		$this->load->view('/template/head');
		$this->load->view('Carro/ProcesarPago');
		//$this->load->view('/template/footer');
	}



	// Muestra contenido del carrito en la cabecera
	public function Mostrar() {
		$this->load->view('/Carro/Carrito_cabecera');
	}


	// Agrega producto al carrito
	public function Agregar() {
		
		// Recibe los datos
		$codigo_producto   = $this->input->post('codigo_producto');
		$nombre_producto   = $this->input->post('nombre_producto');
		$cantidad_producto = $this->input->post('cantidad_producto');
		$precio_producto   = $this->input->post('precio_producto');
		$imagen_producto   = $this->input->post('imagen_producto');

		// Array con los datos
		$insert = array(
			'id'     => $codigo_producto,
			'qty'    => $cantidad_producto,
			'price'  => $precio_producto,
			'name'   => $nombre_producto,
			'imagen' => $imagen_producto
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
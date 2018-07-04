<h1>Ejemplos Webpay - Transaccion Anulaci&oacute;n</h1>
<?php

/**
* @category   Plugins/SDK
* @author     Allware Ltda. (http://www.allware.cl)
* @copyright  2018 Transbank S.A. (http://www.transbank.cl)
* @date       May 2018
* @license    GNU LGPL
* @version    2.0.4
* @link       http://transbankdevelopers.cl/
 */

require_once( '../libwebpay/webpay.php' );
require_once( 'certificates/cert-normal.php' );

/* Configuracion parametros de la clase Webpay */
$sample_baseurl = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];

$configuration = new Configuration();
$configuration->setEnvironment($certificate['environment']);
$configuration->setCommerceCode($certificate['commerce_code']);
$configuration->setPrivateKey($certificate['private_key']);
$configuration->setPublicCert($certificate['public_cert']);
$configuration->setWebpayCert($certificate['webpay_cert']);

/* Creacion Objeto Webpay */
$webpay = new Webpay($configuration);

$action = isset($_GET["action"]) ? $_GET["action"] : 'init';

switch ($action) {

    default:

        $tx_step = "Init";
        $next_page = $sample_baseurl . "?action=nullify";

        echo "<h2>Step: " . $tx_step . "</h2>";

        ?>

                <form id="formulario" action="<?php echo $next_page; ?>" method="post">
                    <fieldset>
                        <legend>Formulario de Anulaci&oacute;n</legend><br/><br/>
                            <label>authorizationCode:</label>
                                <input id="authorizationCode" name="authorizationCode" type="text" />&nbsp;&nbsp;&nbsp;
                            <label>authorizedAmount:</label>
                                <input id="authorizedAmount" name="authorizedAmount" type="text" />&nbsp;&nbsp;&nbsp;
                            <label>buyOrder:</label>
                                <input id="buyOrder" name="buyOrder" type="text" />&nbsp;&nbsp;&nbsp;
                            <label>nullifyAmount:</label>
                                <input id="nullifyAmount" name="nullifyAmount" type="text" /><br/><br/><br/>
                            <input id="campo3" name="enviar" type="submit" value="Enviar" />
                    </fieldset>
                </form>
                <a href=".">&laquo; volver a index</a>
        <?php

        die;

    case "nullify":


        $tx_step = "nullify";

        /** Codigo de Comercio */
        $commercecode = null;

        /** Código de autorización de la transacción que se requiere anular */
        $authorizationCode = filter_input(INPUT_POST, 'authorizationCode');

        /** Monto autorizado de la transacción que se requiere anular */
        $authorizedAmount = filter_input(INPUT_POST, 'authorizedAmount');

        /** Orden de compra de la transacción que se requiere anular */
        $buyOrder = filter_input(INPUT_POST, 'buyOrder');

        /** Monto que se desea anular de la transacción */
        $nullifyAmount = filter_input(INPUT_POST, 'nullifyAmount');

        $request = array(
            "authorizationCode" => $authorizationCode, // Código de autorización
            "authorizedAmount" => $authorizedAmount, // Monto autorizado
            "buyOrder" => $buyOrder, // Orden de compra
            "nullifyAmount" => $nullifyAmount, // idsession local
        );

        /** Iniciamos Transaccion */
        $result = $webpay->getNullifyTransaction()->nullify($authorizationCode, $authorizedAmount, $buyOrder, $nullifyAmount, $commercecode);

         if (isset($result->authorizationCode)) {
            $message = "Transacci&oacute;n anulada con exito en Webpay";
            $next_page = "";
          } else {
            $message = "webpay no disponible";
            $next_page = "";

          }

        break;
}
        ?>

<div style="background-color:lightyellow;">
	<h3>request</h3>
	<?php  var_dump($request); ?>
</div>
<div style="background-color:lightgrey;">
	<h3>result</h3>
	<?php  var_dump($result); ?>
</div>
<p><samp><?php  echo $message; ?></samp></p>
<?php if (strlen($next_page)) { ?>
<form action="<?php echo $next_page; ?>" method="post">
	<input type="hidden" name="token_ws" value="<?php echo $token; ?>">
	<input type="submit" value="Continuar &raquo;">
</form>
<?php } ?>
<br>
<a href=".">&laquo; volver a index</a>

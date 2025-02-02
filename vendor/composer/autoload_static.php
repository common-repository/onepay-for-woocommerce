<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit30550707749dee53cbe11931f27c282c
{
    public static $files = array (
        '388b063648b1d10e90c3cef726d966f7' => __DIR__ . '/../..' . '/includes/functions/wc-onepay-admin.php',
        'e7d506a89531c99d5665bb8211be2daf' => __DIR__ . '/../..' . '/includes/functions/wc-onepay-plugin.php',
    );

    public static $classMap = array (
        'Wc_Checkout_Brazilian_Fields' => __DIR__ . '/..' . '/class-wc-checkout-brazilian-fields/class-wc-checkout-brazilian-fields.php',
        'Wc_OnePay' => __DIR__ . '/../..' . '/includes/class-wc-onepay.php',
        'Wc_OnePay_Api' => __DIR__ . '/../..' . '/includes/class-wc-onepay-api.php',
        'Wc_OnePay_Base_Method_Boleto' => __DIR__ . '/../..' . '/includes/abstracts/traits/trait-wc-onepay-base-method-boleto.php',
        'Wc_OnePay_Base_Method_CredtCard' => __DIR__ . '/../..' . '/includes/abstracts/traits/trait-wc-onepay-base-method-credtcard.php',
        'Wc_OnePay_Base_Method_General' => __DIR__ . '/../..' . '/includes/abstracts/traits/trait-wc-onepay-base-method-general.php',
        'Wc_OnePay_Environment' => __DIR__ . '/../..' . '/includes/class-wc-onepay-environment.php',
        'Wc_OnePay_Gateway' => __DIR__ . '/../..' . '/includes/abstracts/abstract-class-wc-onepay.php',
        'Wc_OnePay_Gateway_Method_Boleto' => __DIR__ . '/../..' . '/includes/gateway/methods/boleto/class-wc-onepay-gateway-method-boleto.php',
        'Wc_OnePay_Gateway_Method_CreditCard' => __DIR__ . '/../..' . '/includes/gateway/methods/creditcard/class-wc-onepay-gateway-method-creditcard.php',
        'Wc_OnePay_Helper' => __DIR__ . '/../..' . '/includes/class-wc-onepay-helper.php',
        'Wc_OnePay_Logger' => __DIR__ . '/../..' . '/includes/class-wc-onepay-logger.php',
        'OnePay\\Auth' => __DIR__ . '/..' . '/OnePay/Auth.php',
        'OnePay\\Client' => __DIR__ . '/..' . '/OnePay/Client.php',
        'OnePay\\Configuration' => __DIR__ . '/..' . '/OnePay/Configuration.php',
        'OnePay\\Environment' => __DIR__ . '/..' . '/OnePay/Environment.php',
        'OnePay\\Exception' => __DIR__ . '/..' . '/OnePay/Exception.php',
        'OnePay\\SDK\\Model\\Cartao' => __DIR__ . '/..' . '/OnePay/SDK/Model/Cartao.php',
        'OnePay\\SDK\\Model\\Cliente' => __DIR__ . '/..' . '/OnePay/SDK/Model/Cliente.php',
        'OnePay\\SDK\\Model\\Endereco' => __DIR__ . '/..' . '/OnePay/SDK/Model/Endereco.php',
        'OnePay\\SDK\\Model\\Error' => __DIR__ . '/..' . '/OnePay/SDK/Model/Error.php',
        'OnePay\\SDK\\Model\\Id' => __DIR__ . '/..' . '/OnePay/SDK/Model/Id.php',
        'OnePay\\SDK\\Model\\Pagamento' => __DIR__ . '/..' . '/OnePay/SDK/Model/Pagamento.php',
        'OnePay\\SDK\\Model\\Pedido' => __DIR__ . '/..' . '/OnePay/SDK/Model/Pedido.php',
        'OnePay\\SDK\\Model\\Venda' => __DIR__ . '/..' . '/OnePay/SDK/Model/Venda.php',
        'OnePay\\SDK\\Model\\Webhook' => __DIR__ . '/..' . '/OnePay/SDK/Model/Webhook.php',
        'OnePay\\SDK\\Requests\\AbstractRequest' => __DIR__ . '/..' . '/OnePay/SDK/Requests/AbstractRequest.php',
        'OnePay\\SDK\\Requests\\InterfaceRequest' => __DIR__ . '/..' . '/OnePay/SDK/Requests/InterfaceRequest.php',
        'OnePay\\SDK\\Requests\\Pagamento\\AddWebhookRequest' => __DIR__ . '/..' . '/OnePay/SDK/Requests/Estabelecimento/AddWebhookRequest.php',
        'OnePay\\SDK\\Requests\\Pagamento\\GetWebhookRequest' => __DIR__ . '/..' . '/OnePay/SDK/Requests/Estabelecimento/GetWebhookRequest.php',
        'OnePay\\SDK\\Requests\\Pagamento\\PagamentoRequest' => __DIR__ . '/..' . '/OnePay/SDK/Requests/Pagamento/PagamentoRequest.php',
        'OnePay\\SDK\\Requests\\Pagamento\\RefundRequest' => __DIR__ . '/..' . '/OnePay/SDK/Requests/Pagamento/RefundRequest.php',
        'OnePay\\SDK\\Requests\\Pagamento\\StatusRequest' => __DIR__ . '/..' . '/OnePay/SDK/Requests/Pagamento/StatusRequest.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit30550707749dee53cbe11931f27c282c::$classMap;

        }, null, ClassLoader::class);
    }
}

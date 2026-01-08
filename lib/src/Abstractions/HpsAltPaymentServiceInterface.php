<?php
/**
 * AltPayment Service Interface
 *
 * PHP Version 5.2+
 *
 * @category PHP
 * @package  HPS
 * @author   Global Payments <EntApp_DevPortal@e-hps.com>
 * @license  https://github.com/globalpayments/php-sdk/blob/master/LICENSE.md
 * @link     https://github.com/globalpayments/php-sdk
 */

/**
 * AltPayment Service Interface
 *
 * @category PHP
 * @package  HPS
 * @author   Global Payments <EntApp_DevPortal@e-hps.com>
 * @license  https://github.com/globalpayments/php-sdk/blob/master/LICENSE.md
 * @link     https://github.com/globalpayments/php-sdk
 */
interface HpsAltPaymentServiceInterface
{
    /**
     * Creates an authorization
     *
     * @param string                  $orderId         order id from gateway
     * @param mixed                   $amount          amount to be authorized
     * @param string                  $currency        currency code
     * @param HpsBuyerData            $buyer           buyer information
     * @param HpsPaymentData          $payment         payment information
     * @param HpsShippingInfo         $shippingAddress shipping information
     * @param array<int, HpsLineItem> $lineItems       line items from order
     * @param HpsOrderData            $orderData       gateway/processor specific
     *                                                 data
     *
     * @return object
     */
    public function authorize(
        $orderId,
        $amount,
        $currency,
        HpsBuyerData $buyer = null,
        HpsPaymentData $payment = null,
        HpsShippingInfo $shippingAddress = null,
        $lineItems = null,
        HpsOrderData $orderData = null
    );

    /**
     * Captures an authorization
     *
     * @param string       $orderId   order id from gateway
     * @param mixed        $amount    amount to be authorized
     * @param HpsOrderData $orderData gateway/processor specific data
     *
     * @return object
     */
    public function capture(
        $orderId,
        $amount,
        HpsOrderData $orderData = null
    );

    /**
     * Creates a new AltPayment session
     *
     * @param mixed                   $amount          amount to be authorized
     * @param string                  $currency        currency code
     * @param HpsBuyerData            $buyer           buyer information
     * @param HpsPaymentData          $payment         payment information
     * @param HpsShippingInfo         $shippingAddress shipping information
     * @param array<int, HpsLineItem> $lineItems       line items from order
     * @param HpsOrderData            $orderData       gateway/processor specific
     *                                                 data
     *
     * @return object
     */
    public function createSession(
        $amount,
        $currency,
        HpsBuyerData $buyer = null,
        HpsPaymentData $payment = null,
        HpsShippingInfo $shippingAddress = null,
        $lineItems = null,
        HpsOrderData $orderData = null
    );

    /**
     * Refunds a transaction
     *
     * @param string       $orderId       order id from gateway
     * @param boolean      $isPartial     flag for partial refund
     * @param string       $partialAmount partial amount to be refunded
     * @param HpsOrderData $orderData     gateway/processor specific data
     *
     * @return object
     */
    public function refund(
        $orderId,
        $isPartial = false,
        $partialAmount = null,
        HpsOrderData $orderData = null
    );

    /**
     * Creates an authorization
     *
     * @param string                  $orderId         order id from gateway
     * @param mixed                   $amount          amount to be authorized
     * @param string                  $currency        currency code
     * @param HpsBuyerData            $buyer           buyer information
     * @param HpsPaymentData          $payment         payment information
     * @param HpsShippingInfo         $shippingAddress shipping information
     * @param array<int, HpsLineItem> $lineItems       line items from order
     * @param HpsOrderData            $orderData       gateway/processor specific
     *                                                 data
     *
     * @return object
     */
    public function sale(
        $orderId,
        $amount,
        $currency,
        HpsBuyerData $buyer = null,
        HpsPaymentData $payment = null,
        HpsShippingInfo $shippingAddress = null,
        $lineItems = null,
        HpsOrderData $orderData = null
    );

    /**
     * Voids a transaction
     *
     * @param string       $orderId   order id from gateway
     * @param HpsOrderData $orderData gateway/processor specific data
     *
     * @return object
     */
    public function void(
        $orderId,
        HpsOrderData $orderData = null
    );

    /**
     * Gets information about a session
     *
     * @param string       $orderId   order id from gateway
     * @param HpsOrderData $orderData gateway/processor specific data
     *
     * @return object
     */
    public function sessionInfo(
        $orderId,
        HpsOrderData $orderData = null
    );
}

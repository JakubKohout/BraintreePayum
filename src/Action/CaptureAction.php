<?php
/**
 * Created by PhpStorm.
 * User: jakubkohout
 * Date: 4/3/14
 * Time: 2:18 PM
 */

namespace JakubKohout\BraintreePayum\Action;

use Payum\Core\Action\ActionInterface;
use Payum\Core\Request\CaptureRequest;

class CaptureAction implements ActionInterface
{

    private $credientals = [];

    public function __construct($merchantId, $publicKey, $privateKey){
        $this->credientals = [
            'merchantId' => $merchantId,
            'publicKey' => $publicKey,
            'privateKey' => $privateKey,
        ];
    }


    /**
     * @param mixed $request
     *
     * @throws \Payum\Core\Exception\RequestNotSupportedException if the action dose not support the request.
     */
    function execute($request)
    {
        $entity = $request->getModel();

    }

    /**
     * @param mixed $request
     *
     * @return boolean
     */
    function supports($request)
    {
        // TODO: Implement supports() method.
    }


}
<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Response;

class PaymentException extends Exception
{
    protected $message = "Verifique os dados do pagamento e tente novamente.";
    protected $code = Response::HTTP_BAD_REQUEST;

    public function render(): Response{
        return response()->json([
            'error' => $this->message
        ], $this->code);
    }
}

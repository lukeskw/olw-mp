<?php

namespace App\Enums;

enum PaymentMethodEnum:int {
    case CREDIT_CARD = 1;
    CASE PIX = 2;
    CASE BANK_SLIP = 3;

    public function getName(): string {
        return match($this) {
            self::CREDIT_CARD => 'Cartão de crédito',
            self::PIX => 'PIX',
            self::BANK_SLIP => 'Boleto',
        };
    }

    public static function parse($method_name):PaymentMethodEnum|null{
        switch ($method_name){
            case 'credit_card':
                return self::CREDIT_CARD;
            case 'bank_transfer':
                return self::PIX;
            case 'ticket':
                return self::BANK_SLIP;
            default:
                return null;
        }
    }
}

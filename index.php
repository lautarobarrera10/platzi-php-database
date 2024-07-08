<?php

use App\Controllers\IncomesController;
use App\Controllers\WithdrawalController;
use App\Enums\IncomeTypeEnum;
use App\Enums\PaymentMethodEnum;
use App\Enums\WithdrawalTypeEnum;

require "vendor/autoload.php";

date_default_timezone_set("America/Argentina/San_Luis");

// $incomes_controller = new IncomesController;
// $incomes_controller->store([
//     "payment_method" => PaymentMethodEnum::BankAccount->value,
//     "type" => IncomeTypeEnum::Salary->value,
//     "date" => date("Y-m-d H:i:s"),
//     "amount" => 10000,
//     "description" => "Pago de mi salario como programador."
// ]);

$withdrawal_controller = new WithdrawalController;
$withdrawal_controller->store([
    "payment_method" => PaymentMethodEnum::CreditCard->value,
    "type" => WithdrawalTypeEnum::Purchase->value,
    "date" => date("Y-m-d H:i:s"),
    "amount" => 50,
    "description" => "Compra de accesorio para la PC"
]);
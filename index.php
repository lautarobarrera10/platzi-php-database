<?php

use App\Controllers\IncomesController;
use App\Enums\IncomeTypeEnum;
use App\Enums\PaymentMethodEnum;

require "vendor/autoload.php";

date_default_timezone_set("America/Argentina/San_Luis");

$incomes_controller = new IncomesController;
$incomes_controller->store([
    "payment_method" => PaymentMethodEnum::BankAccount->value,
    "type" => IncomeTypeEnum::Salary->value,
    "date" => date("Y-m-d H:i:s"),
    "amount" => 10000,
    "description" => "Pago de mi salario como programador."
]);
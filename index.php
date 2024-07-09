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

// $withdrawal_controller = new WithdrawalController;
// $withdrawal_controller->store([
//     "payment_method" => PaymentMethodEnum::CreditCard->value,
//     "type" => WithdrawalTypeEnum::Purchase->value,
//     "date" => date("Y-m-d H:i:s"),
//     "amount" => 50,
//     "description" => "Compra de accesorio para la PC"
// ]);

$withdrawal_controller = new WithdrawalController;
// // $withdrawal_controller->index();
// $withdrawal_controller->show(1);

// $incomes_controller = new IncomesController;
// $incomes_controller->store([
//     "payment_method" => PaymentMethodEnum::BankAccount->value,
//     "type" => IncomeTypeEnum::Salary->value,
//     "date" => date("Y-m-d H:i:s"),
//     "amount" => 1000,
//     "description" => "Pago de mi salario como programador."
// ]);
// $incomes_controller->destroy(2);
// $incomes_controller->update([
//     "id" => 5,
//     "payment_method" => PaymentMethodEnum::BankAccount->value,
//     "type" => IncomeTypeEnum::Salary->value,
//     "date" => date("Y-m-d H:i:s"),
//     "amount" => 250,
//     "description" => "Pago de mi salario como programador."
// ]);

// $withdrawal_controller->update([
//     "id" => 1,
//     "payment_method" => PaymentMethodEnum::BankAccount->value,
//     "type" => WithdrawalTypeEnum::Purchase->value,
//     "date" => date("Y-m-d H:i:s"),
//     "amount" => 420,
//     "description" => "Compra IPhone 11"
// ]);

// $withdrawal_controller->destroy(3);
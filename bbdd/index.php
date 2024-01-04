<?php

use App\Controllers\IncomesController;
use App\Controllers\WithdrawalsController;
use App\Enums\IncomeTypeEnum;
use App\Enums\PaymentMethodTypeEnum;
use App\Enums\WithdrawalTypeEnum;

require "vendor/autoload.php";

// $incomes_controller = new IncomesController;
// $incomes_controller->store([
//   "payment_method" => PaymentMethodTypeEnum::BankAccount->value,
//   "type" => IncomeTypeEnum::Salary->value,
//   "datetime" => date("Y-m-d H:i:s"),
//   "amount" => 300000,
//   "description" => "Saldo mensual por prestacion de servicios"
// ]);

// $withdrawals_controller = new WithdrawalsController;
// $withdrawals_controller->store([
//   "payment_method" => PaymentMethodTypeEnum::CreditCard->value,
//   "type" => WithdrawalTypeEnum::Withdrawal->value,
//   "datetime" => date("Y-m-d H:i:s"),
//   "amount" => 240000,
//   "description" => "Retiro del mes"
// ]);

// $withdrawals_controller = new WithdrawalsController();
// $withdrawals_controller->index();

$withdrawals_controller = new WithdrawalsController();
$withdrawals_controller->show();
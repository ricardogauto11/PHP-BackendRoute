<?php

namespace App\Controllers;

use Database\MySQLi\Connection;

class IncomesController
{
  public function index()
  {
    //
  }

  public function create()
  {
    //
  }

  public function store($request)
  {
    $connection = Connection::getInstance()->getDbInstance();
    $stmt = $connection->prepare("INSERT INTO incomes (payment_method, type, amount, description, datetime)
      VALUES (?, ?, ?, ?, ?);");

    $payment_method = $request['payment_method'];
    $type = $request['type'];
    $amount = $request['amount'];
    $description = $request['description'];
    $datetime = $request['datetime'];

    $stmt->bind_param("iidss", $payment_method, $type, $amount, $description, $datetime);
    $stmt->execute();

    echo "Se ha(n) insertado {$stmt->affected_rows} fila(s) en la base de datos";
  }

  public function show()
  {
    //
  }

  public function edit()
  {
    //
  }

  public function update()
  {
    //
  }

  public function destroy()
  {
    //
  }
}
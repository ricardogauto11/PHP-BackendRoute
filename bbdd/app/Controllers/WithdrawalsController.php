<?php

namespace App\Controllers;

use Database\PDO\Connection;

class WithdrawalsController
{
  private $connection;

  public function __construct()
  {
    $this->connection = Connection::getInstance()->getDbInstance();
  }

  public function index()
  {
    $stmt = $this->connection->prepare("SELECT * FROM withdrawals");
    $stmt->execute();

    $results = $stmt->fetchAll();

    foreach ($results as $result)
      echo "Gastaste $ {$result['amount']} pesos en: {$result['description']} \n";

    // $stmt = $this->connection->prepare("SELECT amount, description FROM withdrawals");
    // $stmt->execute();

    // $results = $stmt->fetchAll(\PDO::FETCH_COLUMN, 0);

    // foreach ($results as $result)
    //   echo "Gastante $result pesos! \n";
  }

  public function create()
  {
    //
  }

  public function store($request)
  {
    $stmt = $this->connection->prepare("INSERT INTO withdrawals (payment_method, type, amount, description, datetime)
      VALUES (:payment_method, :type, :amount, :description, :datetime);");

    $stmt->bindValue(":payment_method", $request["payment_method"]);
    $stmt->bindValue(":type", $request["type"]);
    $stmt->bindValue(":amount", $request["amount"]);
    $stmt->bindValue(":description", $request["description"]);
    $stmt->bindValue(":datetime", $request["datetime"]);

    $stmt->execute();
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
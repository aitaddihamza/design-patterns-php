<?php

class QueryBuilder
{
  private string $table;
  private $where = [];
  private int $limit;
  private string $sql;

  public function from(string $table)
  {
    $this->table = $table;
    return $this;
  }


  public function where($condition): self
  {
    $this->where[] = " WHERE "  . $condition;
    return $this;
  }

  public function limit(int $limit): self
  {
    $this->limit = $limit;
    return $this;
  }

  public function getSql()
  {
    $sql = "SELECT * FROM {$this->table}";
    if (!empty($this->where))
      $sql .= implode(" AND ", $this->where);
    $sql .= " limit = " . $this->limit;

    return $sql;
  }
}


$query = (new QueryBuilder())
  ->from("users")
  ->where('name = hamza')
  ->where('age = 22')
  ->limit(5);


$sql = $query->getSql();

echo $sql;

echo PHP_EOL;

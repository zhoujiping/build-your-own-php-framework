<?php 

 class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $className)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, $className);
    }

    public function create($table, $parameters)
    {
       $sql  = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)), 
            ':' . implode(', :',array_keys($parameters))
        );

       try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
       } catch (PDOException $e) {
           die($e->getMessage());        }
    }
}
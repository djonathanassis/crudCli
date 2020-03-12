<?php


namespace Source\Models;

use Source\Core\Connect;

abstract class Model
{
    /** @var object|null */
    protected $data;
    /** @var \PDOException|null */
    protected $fail;
    /** @var string|null */
    protected $message;

    /**
     * @return object|null
     */
    public function getData(): ?object
    {
        return $this->data;
    }

    /**
     * @return \PDOException|null
     */
    public function getFail(): ?\PDOException
    {
        return $this->fail;
    }

    /**
     * @return string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }





    public function read(string $sql, string $params = null): ?\PDOStatement
    {
        try {
            $stmt = Connect::getInstance()->prepare($sql);
            if($params){
                parse_str($params, $params);
                foreach ($params as $key => $value){
                $type = (is_numeric($value) ?\PDO::PARAM_INT : \PDO::PARAM_STR);
                $stmt->bindValue(":{$key}", $value, $type);
                }
            }
            $stmt->execute();
            return $stmt;

        } catch (\PDOException $exception) {
            $this->getFail($exception);
            return null;
        }
    }



}
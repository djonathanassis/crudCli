<?php


namespace Source\Models;


use Source\Core\Connect;

class Client extends Model
{


    protected static $entity = "client";
    protected static $column = "id, dateRegister, name, mail, dateBirth, cpf, rg, telephone, phone, address_zipcode,
     address, address_number, address_neighb, address_complement, address_city, address_state ";
    private $db;


    public function __construct()
    {
        $this->db = Connect::getInstance();
    }

    public function all(): ?array
    {
        try {
            $load = $this->read("SELECT ".self::$column." FROM " . self::$entity);
            if ($load->rowCount() > 0) {
                return $load->fetchAll();
            } else {
                return $stmt = [];
            }
        } catch (\PDOException $exception) {
            echo "ERROR: " . $exception->getMessage();
            exit;
        }

    }

    public function getSave($id, $dateRegister, $name, $mail, $cpf, $rg, $dateBirth, $telephone, $phone, $address_zipcode, $address, $address_number, $address_neighb, $address_complement, $address_city, $address_state)
    {

        try {
            $db = Connect::getInstance();
            $stmt = "INSERT INTO client (id, dateRegister, name, mail, dateBirth, cpf, rg, telephone, phone, address_zipcode, address, 
                    address_number, address_neighb, address_complement, address_city, address_state) VALUES
                    (:id, :dateRegister, :name, :mail, :dateBirth, :cpf, :rg, :telephone, :phone, :address_zipcode, :address, :address_number, :address_neighb,
                     :address_complement, :address_city, :address_state)";
            $stmt = $this->db->prepare($stmt);
            $stmt->bindValue(':id', $id, FILTER_DEFAULT);
            $stmt->bindValue(':dateRegister', $dateRegister, FILTER_DEFAULT);
            $stmt->bindValue(':name', $name, FILTER_DEFAULT);
            $stmt->bindValue(':mail', $mail, FILTER_DEFAULT);
            $stmt->bindValue(':dateBirth', $dateBirth, FILTER_DEFAULT);
            $stmt->bindValue(':cpf', $cpf, FILTER_DEFAULT);
            $stmt->bindValue(':rg', $rg, FILTER_DEFAULT);
            $stmt->bindValue(':telephone', $telephone, FILTER_DEFAULT);
            $stmt->bindValue(':phone', $phone, FILTER_DEFAULT);
            $stmt->bindValue(':address_zipcode', $address_zipcode, FILTER_DEFAULT);
            $stmt->bindValue(':address', $address, FILTER_DEFAULT);
            $stmt->bindValue(':address_number', $address_number, FILTER_DEFAULT);
            $stmt->bindValue(':address_complement', $address_complement, FILTER_DEFAULT);
            $stmt->bindValue(':address_city', $address_city, FILTER_DEFAULT);
            $stmt->bindValue(':address_neighb', $address_neighb, FILTER_DEFAULT);
            $stmt->bindValue(':address_state', $address_state, FILTER_DEFAULT);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }

        } catch (\PDOException $exception) {
            echo "ERROR: " . $exception->getMessage();
            exit;
        }

    }

    public function getClientId($id): ?array
    {
        try {
            $stmt = "SELECT id, dateRegister, name, mail, dateBirth, cpf, rg, telephone, phone, address_zipcode, address, address_number,
                    address_neighb, address_complement, address_city, address_state FROM client WHERE id = :id";
            $stmt = $this->db->prepare($stmt);
            $stmt->bindValue(':id', $id,FILTER_DEFAULT);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                return $stmt->fetchAll();
            }else{
                return false;
            }
        } catch (\PDOException $exception) {
            echo "ERROR: " . $exception->getMessage();
            exit;
        }

    }

    public function getEdit($id, $dateRegister, $name, $mail, $cpf, $rg, $dateBirth, $telephone, $phone, $address_zipcode, $address, $address_number, $address_neighb, $address_complement, $address_city, $address_state): ?bool
    {

        try {
            $stmt = "UPDATE client SET id = :id, dateRegister = :dateRegister, name = :name, mail = :mail,
                    dateBirth = :dateBirth, cpf = :cpf, rg = :rg, telephone = :telephone, phone = :phone, address_zipcode = :address_zipcode,
                    address = :address, address_number = :address_number, address_neighb = :address_neighb,
                     address_complement = :address_complement, address_city = :address_city, address_state = :address_state WHERE id = :id";
            $stmt = $this->db->prepare($stmt);
            $stmt->bindValue(':id', $id, FILTER_DEFAULT);
            $stmt->bindValue(':dateRegister', $dateRegister, FILTER_DEFAULT);
            $stmt->bindValue(':name', $name, FILTER_DEFAULT);
            $stmt->bindValue(':mail', $mail, FILTER_DEFAULT);
            $stmt->bindValue(':dateBirth', $dateBirth, FILTER_DEFAULT);
            $stmt->bindValue(':cpf', $cpf, FILTER_DEFAULT);
            $stmt->bindValue(':rg', $rg, FILTER_DEFAULT);
            $stmt->bindValue(':telephone', $telephone, FILTER_DEFAULT);
            $stmt->bindValue(':phone', $phone, FILTER_DEFAULT);
            $stmt->bindValue(':address_zipcode', $address_zipcode, FILTER_DEFAULT);
            $stmt->bindValue(':address', $address, FILTER_DEFAULT);
            $stmt->bindValue(':address_number', $address_number, FILTER_DEFAULT);
            $stmt->bindValue(':address_complement', $address_complement, FILTER_DEFAULT);
            $stmt->bindValue(':address_city', $address_city, FILTER_DEFAULT);
            $stmt->bindValue(':address_neighb', $address_neighb, FILTER_DEFAULT);
            $stmt->bindValue(':address_state', $address_state, FILTER_DEFAULT);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }

        } catch (\PDOException $exception) {
            echo "ERROR: " . $exception->getMessage();
            exit;
        }

    }

    public function getDelete($id): ?bool
    {
        try {
            $db = Connect::getInstance();
            $stmt = "DELETE FROM client WHERE id = :id";
            $stmt = $this->db->prepare($stmt);
            $stmt->bindValue(':id', $id, FILTER_DEFAULT);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (\PDOException $exception) {
            echo "ERROR: " . $exception->getMessage();
            exit;
        }

    }

}
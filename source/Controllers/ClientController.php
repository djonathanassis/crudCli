<?php


namespace Source\Controllers;


use Source\Core\Controller;
use Source\Models\Client;

class ClientController extends Controller
{

    public function index()
    {
        $data = [];
        $client = new Client();
        $data ["client"] = $client->all();
        $this->loadTemplete('client', $data);

    }

    public function add()
    {
        $data = [];
        $date = new \DateTime("now");
        $client = new Client();
        if (isset($_POST['name']) && !empty($_POST['name'])) {
            $id = filter_input(INPUT_POST, 'id', FILTER_DEFAULT);
            $dateRegister  = filter_input(DATE_W3C, 'dateRegister', FILTER_DEFAULT);
            $name = filter_input(INPUT_POST, 'name', FILTER_DEFAULT);
            $mail = filter_input(INPUT_POST, 'mail', FILTER_DEFAULT);
            $cpf = filter_input(INPUT_POST, 'cpf', FILTER_DEFAULT);
            $rg = filter_input(INPUT_POST, 'rg', FILTER_DEFAULT);
            $dateBirth = filter_input(INPUT_POST, 'dateBirth', FILTER_DEFAULT);
            $telephone = filter_input(INPUT_POST, 'telephone', FILTER_DEFAULT);
            $phone = filter_input(INPUT_POST, 'phone', FILTER_DEFAULT);
            $address_zipcode = filter_input(INPUT_POST, 'address_zipcode', FILTER_DEFAULT);
            $address = filter_input(INPUT_POST, 'address', FILTER_DEFAULT);
            $address_number = filter_input(INPUT_POST, 'address_number', FILTER_DEFAULT);
            $address_neighb = filter_input(INPUT_POST, 'address_neighb', FILTER_DEFAULT);
            $address_complement = filter_input(INPUT_POST, 'address_complement', FILTER_DEFAULT);
            $address_city = filter_input(INPUT_POST, 'address_city', FILTER_DEFAULT);
            $address_state = filter_input(INPUT_POST, 'address_state', FILTER_DEFAULT);

            $client->getSave($id, $dateRegister, $name, $mail, $cpf, $rg, $dateBirth, $telephone, $phone, $address_zipcode, $address, $address_number, $address_neighb, $address_complement, $address_city, $address_state);
            header("Location:" . BASE_URL . "/client");
        }
        $this->loadTemplete('cadClient', $data);


    }

    public function edit($id)
    {
        $data = [];
        $client = new Client();
        if (isset($_POST['name']) && !empty($_POST['name'])) {
            $id = filter_input(INPUT_POST, 'id', FILTER_DEFAULT);
            $dateRegister = filter_input(DATE_W3C, 'dateRegister', FILTER_DEFAULT);
            $name = filter_input(INPUT_POST, 'name', FILTER_DEFAULT);
            $mail = filter_input(INPUT_POST, 'mail', FILTER_DEFAULT);
            $cpf = filter_input(INPUT_POST, 'cpf', FILTER_DEFAULT);
            $rg = filter_input(INPUT_POST, 'rg', FILTER_DEFAULT);
            $dateBirth = filter_input(INPUT_POST, 'dateBirth', FILTER_DEFAULT);
            $telephone = filter_input(INPUT_POST, 'telephone', FILTER_DEFAULT);
            $phone = filter_input(INPUT_POST, 'phone', FILTER_DEFAULT);
            $address_zipcode = filter_input(INPUT_POST, 'address_zipcode', FILTER_DEFAULT);
            $address = filter_input(INPUT_POST, 'address', FILTER_DEFAULT);
            $address_number = filter_input(INPUT_POST, 'address_number', FILTER_DEFAULT);
            $address_neighb = filter_input(INPUT_POST, 'address_neighb', FILTER_DEFAULT);
            $address_complement = filter_input(INPUT_POST, 'address_complement', FILTER_DEFAULT);
            $address_city = filter_input(INPUT_POST, 'address_city', FILTER_DEFAULT);
            $address_state = filter_input(INPUT_POST, 'address_state', FILTER_DEFAULT);

            $client->getEdit($id, $dateRegister, $name, $mail, $cpf, $rg, $dateBirth, $telephone, $phone, $address_zipcode, $address, $address_number, $address_neighb, $address_complement, $address_city, $address_state);
            header("Location:" . BASE_URL . "/client");
        }


        $data['client'] = $client->getClientId($id);

        $this->loadTemplete('editClient', $data);
    }

    public
    function delete($id)
    {
        $data = [];
        $client = new Client();
        $client->getDelete($id);
        header("Location:" . BASE_URL . "/client");

        $this->loadTemplete('client', $data);

    }

}
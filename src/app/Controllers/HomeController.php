<?php

namespace MarigoldBank\Controllers;

use MarigoldBank\App;
use MarigoldBank\Create;

class HomeController
{

    public function index()
    {
        return App::view('home', ['title' => 'MarigoldBank']);
    }

    public function login()
    {
        return App::view('login');
    }

    public function form()
    {
        return App::view('register');
    }

    public function doForm()
    {
        $users = [];      
        $users = [
            'Firstname' => $_POST['firstname'] ?? 0,
            'Lastname' => $_POST['lastname'] ?? 0,
            'Id' => $_POST['id'] ?? 0,
            'AccountNumber' => $_POST['accountNumber'] ?? 0,
            'Address' => $_POST['address'] ?? 0,
            'Phone' => $_POST['phone'] ?? 0,
            'sum' => 0];
            Create::get()->create($users);
            return App::redirect('clients');
    }

    public function clientsList()
    {
        $users = Create::get()->showALL();
        return App::view('clients', ['title' => 'MarigoldBank', 'users' => $users]);
       
    }
    // public function AddMoney() {
    //     return App::view('addMoney');
    // }
    public function Add(string $id){
        $user = Create::get()->show($id);
        return App::view('addMoney', ['title' => 'MarigoldBank', 'users' => $user]); 
    }

    public function CashAdd(string $id) {
        $clientsData = Create::get()->show($id);
        if ($clientsData['id'] == $id && $_POST['add'] > 0) {
            $clientsData['sum'] += $_POST['add'];
            Create::get()->update($id , $clientsData);
            return App::redirect('clients');
        }
    }
}

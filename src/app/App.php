<?php
namespace MarigoldBank;
use MarigoldBank\Controllers\HomeController;
use MarigoldBank\Controllers\ClientsController;


class App {

    const DOMAIN = 'marigoldbank.lt';

    public static function start() {

        $uri = explode('/', $_SERVER['REQUEST_URI']);
        array_shift($uri); 
        self::route($uri);
    }
    public static function view(string $name , array $data = []) {
        extract($data);
        require __DIR__.'/../views/'.$name.'.php';    
    }

    public static function redirect($url = '') {
       header('Location: http://'.self::DOMAIN.'/'.$url);
    }
    public static function url($url = '') {
        return 'http://'.self::DOMAIN.'/'.$url;
    }


    private static function route(array $uri) {

        $metodas = $_SERVER['REQUEST_METHOD'];

        if(count($uri) == 1 && $uri[0] === '') {
            return (new HomeController())->index();
            
        }
        if(count($uri) == 1 && $uri[0] === 'login') {
            return (new HomeController())->login();
        }

        if('GET' == $metodas && count($uri) == 2 && $uri[0] === 'addMoney') {
            return (new HomeController())->Add($uri[1]);

        }
        if('POST' == $metodas && count($uri) == 2 && $uri[0] === 'addMoney') {
            return (new HomeController())->CashAdd($uri[1]);

        }

        if('GET' == $metodas && count($uri) == 1 && $uri[0] === 'clients') {
            return (new HomeController())->clientsList();

        }
        if('POST' == $metodas && count($uri) == 1 && $uri[0] === 'clients') {
            return (new HomeController())->clientsList();

        }

        if('GET' == $metodas && count($uri) == 1 && $uri[0] === 'register') {
            return (new HomeController())->form();

        }
        if('POST' == $metodas && count($uri) == 1 && $uri[0] === 'register') {
            return (new HomeController())->doForm();

        }



    }
    


}
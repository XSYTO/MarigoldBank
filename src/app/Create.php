<?php
namespace MarigoldBank;
use MarigoldBank\DataBase;
 
class Create implements DataBase
{
    private $data, $file;

    public static function get()
    {
        return self::$file ?? new self;
    }

    public function __construct() {
        if (!file_exists(__DIR__ . '/data/acounts.json')) {
            file_put_contents(__DIR__ . '/data/acounts.json', json_encode([]));
            file_put_contents(__DIR__ . '/data/acounts_id.json', 0);
        }
        $this->data = json_decode(file_get_contents(__DIR__ . '/data/acounts.json'), 1);
    }

    public function __destruct() {
        file_put_contents(__DIR__ . '/data/acounts.json', json_encode($this->data));
    }

    private function getId() {
        $id = (int) file_get_contents(__DIR__ . '/data/acounts_id.json');
        $id++;
        file_put_contents(__DIR__ . '/data/acounts_id.json', $id);
        return $id;
    }

    public function create(array $data) : void {
        $data['id'] = $this->getId();
        $this->data[] = $data;
    }

    public function showAll() : array {
        return $this->data;
    }

    public function show(int $id) : array {
        foreach($this->data as $data) {
            if ($data['id'] == $id) {
                return $data;
            }
        }
        return [];
    }

    public function delete(int $id) : void {
        foreach($this->data as $key => $data) {
            if ($data['id'] == $id) {
                unset($this->data[$key]);
                break;
            }
        }
    }

    function update(int $id, array $data) : void {
        foreach($this->data as $key => $clientsData ) {
            if ($clientsData ['id'] == $id) {
                $this->data[$key] = $data;
                break;
            }
        }
    }



}
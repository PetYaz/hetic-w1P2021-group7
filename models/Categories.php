<?php

namespace Model;

class Categories{
    public function list(){
        $select = Database::$pdo->query('SELECT c.id, c.city, c.description, c.image, c.date, c.name_id, u.name
                                FROM categories AS c LEFT JOIN user AS u ON c.name_id = u.id
                                ORDER BY c.id DESC');
        $select = $select->fetchAll(\PDO::FETCH_ASSOC);
        return $select;
    }
}
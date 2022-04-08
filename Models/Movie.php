<?php

require_once('Models/Model.php');

class Movie extends Model
{
    protected $table = 'movies';

    public function insert(array $params) {
        $sql = "INSERT INTO $this->table (title) VALUES (:title)";
        return $this->prepareAndExecute($sql, $params);
    }

    public function update(array $params, int $id) {
        $sql = "UPDATE $this->table SET title = :title WHERE id = :id";
        $params['id'] = $id;
        return $this->prepareAndExecute($sql, $params);
    }
}
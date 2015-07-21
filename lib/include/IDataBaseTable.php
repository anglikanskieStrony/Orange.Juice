<?php

interface IDataBaseTable
{
    public function create();
    public function drop();
    public function addColumn();
    public function dropColumn();
    public function select($match,$what="*", $sortBy,$sortDirection, $trunk, $offset);
    public function getById($id);
    public function insert($object);
    public function delete($match);
    public function count($match);
    public function searchFor($column, $regExp, $sortBy,$sortDirection, $trunk, $offset);

}

?>
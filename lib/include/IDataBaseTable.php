<?php

interface IDataBaseTable
{
    /*
     * usuwa tabelę
     * @return bool
     */
    public function drop();
    /*
     * dodaje kolumne o podanej nazwie i typie wartości (string lub ValueType Enum). Zwraca tabelę z nową kolumną.
     * @return IDataBaseTable
     */
    public function addColumn($name, $valueType,$notNull=false,$autoIncrement=false, $primaryKey=false, $foreignKey=null);
    /*
     * usuwa kolumne o podanej nazwie i zwraca skróconą tabelę
     * @return IDataBaseTable
     */
    public function dropColumn();
    /*
    * Wyciąga rekord z tabeli według podanego kryterium.Zwraca obiekt typu podanego w tabeli lub tablicę asocjacyjną
    * @return IArrayConvertible;
    */
    public function selectAll();
    /*
     * Wyciąga rekord z tabeli według podanego kryterium.Zwraca tablice asocjacyjną
     * @return Array
     */
    public function select($what="*",$where="", $sortBy,$sortDirection, $trunk, $offset);
    /*
     * Wyciąga rekord o podanym Id. zwraca obiekt o typie podanym do tabeli, lub tablicę asocjacyjną
     * @return IArrayConvertible
     */
    public function getById($id);
    /*
     * Tworzy nowy rekord na podstawie podanego obiektu. Przyjmuje IArrayConvertible, lub tablicę asocjacyjną
     * @return bool
     */
    public function insert($object);
    /*
     * usuwa rekord(y) według podanego kryterium (tablica asocjacyjna )
     * @return bool
     */
    public function delete($match);
    /*
     * Zwraca liczbę obiektów spełniających podane kryterium (tablica asocjacyjna)
     * @return int
     */
    public function count($match);
    /*
     * szuka rekordów o w którzych podana kolumna pasuje do podanego wyrażenia regularnego. Zwraca obiekt podany w tabeli lub tablicę asocjacyjną
     * @return IArrayConvertible
     */
    public function searchFor($column, $regExp, $sortBy,$sortDirection, $trunk, $offset);
}

?>
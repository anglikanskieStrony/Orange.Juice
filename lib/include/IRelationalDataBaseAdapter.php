<?php

interface IRelationalDataBaseAdapter extends IDataBaseAdapter
{
    /*
     * zwraca tabelę o podanej nazwie, którą można manipulować
     * @return IDataBaseTable
     */
    public function table($name, $rowType=null);
}

?>
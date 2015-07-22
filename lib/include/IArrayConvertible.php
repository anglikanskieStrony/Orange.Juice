<?php

interface IArrayConvertible
{
    /*
     * Zamienia obiekt na tablicę
     * @return array
     */
    public function toArray();
    /*
     * Generuje nową instancję z tablicy
     * @return IArrayConvertible
     */
    public static function fromArray();
}

?>
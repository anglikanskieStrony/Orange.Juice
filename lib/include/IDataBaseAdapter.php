<?php
    interface IDataBaseAdapter
    {
        /*
         * tworzenie nowej bazy danych
         * @return bool
         */
        public function createDatabase($name);

        /*
         * przełączenie do innej bazy danych
         * @return bool
         */
        public function switchToDatabase($name);

        /*
         * usuwanie bazy danych
         * @return bool
         */
        public function deleteDatabase($name);

        /*
         * zwraca nazwę aktualnie utworzonej bazy
         * @return string
         */
        public function getCurrentDatabaseName();

        /*
         * połączenie z serwerem z użyciem danych z konfiguracji
         * @return bool
         */
        public function connect();

        /*
         * połączenie z bazą z podaniem danych explicite
         * @return bool
         */
        public function connectExplicitly($host, $user, $password);

        /*
         * zamyka połączenie, jeśli serwer bazy tego wymaga
         * @return void
         */
        public function closeConnection();
    }
?>
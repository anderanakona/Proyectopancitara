
<?php
  function conectar()
    {
        try {

            $cn = new PDO("mysql:host=localhost;dbname=bd_proyecto_pancitara", "root", "");

            return $cn;

        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }


<?php
class Db
{
    // Execute the query
    public static function query($query, $parameters = array())
    {
        try {
            $pdo = self::getPDO();
            $stmt = $pdo->prepare($query);
            $stmt->execute($parameters);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (Exception $e) {
            throw new Exception("Error: " . $e->getMessage());
        }
    }

    // Execute the query for insert and update
    public static function execute($query, $parameters = array())
    {
        try {
            $pdo = self::getPDO();
            $stmt = $pdo->prepare($query);
            $stmt->execute($parameters);
        } catch (Exception $e) {
            throw new Exception("Error: " . $e->getMessage());
        }
    }

    // Get the pdo object
    public static function getPDO()
    {
        $pdo = NULL;
        try {
            // Fire up PDO and make it use a persistent connection, emulate the prepare statements and use buffered queries (meaning you can insert larger items)
            $pdo = new PDO("mysql:host=localhost;dbname=test;charset=utf8", "root", "kirkefarm",
                array(
                    PDO::ATTR_PERSISTENT => true,
                    PDO::ATTR_EMULATE_PREPARES => true,
                    PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                )
            );
        } catch (Exception $e) {
            throw new Exception("Unable to connect to the database: " . $e->getMessage());
        }

        return $pdo;
    }
}
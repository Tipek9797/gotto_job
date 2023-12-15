<?php

namespace PO\Lib;

class DB
{
    private $host = "localhost";
    private $port = 3306;
    private $username = "root";
    private $password = "";
    private $dbName = "gottojob";

    private \PDO $connection;

    public function __construct(
        string $host = "",
        int $port = 3306,
        string $username = "",
        string $password = "",
        string $dbName = ""
    ) {
        if (!empty($host)) {
            $this->host = $host;
        }

        if (!empty($port)) {
            $this->port = $port;
        }

        if (!empty($username)) {
            $this->username = $username;
        }

        if (!empty($password)) {
            $this->password = $password;
        }

        if (!empty($dbName)) {
            $this->dbName = $dbName;
        }

        try {
            $this->connection = new \PDO(
                "mysql:host=$this->host;dbname=$this->dbName;charset=utf8mb4",
                $this->username,
                $this->password
            );
            $this->connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function getMenuItems(): array
    {
        $sql = "SELECT meno, url FROM menu";
        $query = $this->connection->query($sql);
        $data = $query->fetchAll(\PDO::FETCH_ASSOC);
        $finalMenu = [];

        foreach ($data as $menuItem) {
            $finalMenu[$menuItem['meno']] = $menuItem['url'];
        }

        return $finalMenu;
    }

    public function getJob(int $id): array
    {
        $sql = "SELECT * FROM jobs WHERE id = " . $id;
        $query = $this->connection->query($sql);
        $data = $query->fetch(\PDO::FETCH_ASSOC);

        return $data;
    }

    public function getJobs(): array
    {
        $sql = "SELECT id, image, urldetails, name, location, posted, pay, jobposition, jobtype, urllistings FROM jobs";
        $query = $this->connection->query($sql);
        $data = $query->fetchAll(\PDO::FETCH_ASSOC);

        return $data;
    }

    public function editJob(
        int $id,
        string $image = "",
        string $urldetails = "",
        string $name,
        string $location = "",
        string $posted,
        string $pay,
        string $jobposition,
        string $jobtype,
        string $urllistings = ""
    ): bool {
        $sql = "UPDATE jobs SET";

        if (!empty($image)) {
            $sql .= " image = '" . $image . "'";
        }

        if (!empty($urldetails)) {
            $sql .= ", urldetails = '" . $urldetails . "'";
        }

        if (!empty($name)) {
            $sql .= ", name = '" . $name . "'";
        }

        if (!empty($location)) {
            $sql .= ", location = '" . $location . "'";
        }

        if (!empty($posted)) {
            $sql .= ", posted = '" . $posted . "'";
        }

        if (!empty($pay)) {
            $sql .= ", pay = '" . $pay . "'";
        }

        if (!empty($jobposition)) {
            $sql .= ", jobposition = '" . $jobposition . "'";
        }

        if (!empty($jobtype)) {
            $sql .= ", jobtype = '" . $jobtype . "'";
        }

        if (!empty($urllistings)) {
            $sql .= ", urllistings = '" . $urllistings . "'";
        }

        $sql .= " WHERE id = " . $id;

        $stmt = $this->connection->prepare($sql);
        return $stmt->execute();
    }

    public function insertJob(
        string $image = "",
        string $urldetails = "",
        string $name,
        string $location = "",
        string $posted,
        string $pay,
        string $jobposition,
        string $jobtype,
        string $urllistings = ""
    ): bool {
        $sql = "INSERT INTO jobs(image, urldetails, name, location, posted, pay, jobposition, jobtype, urllistings) 
        VALUE ('" . $image . "', '" . $urldetails . "', '" . $name . "', '" . $location . "', '" . $posted . "', '" . $pay . "', 
        '" . $jobposition . "', '" . $jobtype . "', '" . $urllistings . "')";
        $stmt = $this->connection->prepare($sql);
        return $stmt->execute();
    }

    public function deleteJob(int $id): bool
    {
        $sql = "DELETE FROM jobs WHERE id = " . $id;
        $stmt = $this->connection->prepare($sql);
        return $stmt->execute();
    }
}

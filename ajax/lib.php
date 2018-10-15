<?php

require __DIR__ . '/db_connection.php';

class CRUD
{

    protected $db;

    function __construct()
    {
        $this->db = DB();
    }

    function __destruct()
    {
        $this->db = null;
    }

    /*
     * Add new Record
     *
     * @param $hostname
     * @param $ip
     * @param $user_so
     * @param $pass
     * @param $so
     * @param $obser
     * @return $mixed
     * */
    public function Create($hostname, $ip, $user_so, $pass, $so, $obser)
    {
        $query = $this->db->prepare("INSERT INTO users(hostname, ip, user_so, pass, so, obser) VALUES (:hostname,:ip,:user_so, :pass, :so, :obser)");
        $query->bindParam("hostname", $hostname, PDO::PARAM_STR);
        $query->bindParam("ip", $ip, PDO::PARAM_STR);
        $query->bindParam("user_so", $user_so, PDO::PARAM_STR);
        $query->bindParam("pass", $pass, PDO::PARAM_STR);
        $query->bindParam("so", $so, PDO::PARAM_STR);
        $query->bindParam("obser", $obser, PDO::PARAM_STR);
        $query->execute();
        return $this->db->lastInsertId();
    }

    /*
     * Read all records
     *
     * @return $mixed
     * */
    public function Read()
    {
        $query = $this->db->prepare("SELECT * FROM users");
        $query->execute();
        $data = array();
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            $data[] = $row;
        }
        return $data;
    }

    /*
     * Delete Record
     *
     * @param $user_id
     * */
    public function Delete($user_id)
    {
        $query = $this->db->prepare("DELETE FROM users WHERE id = :id");
        $query->bindParam("id", $user_id, PDO::PARAM_STR);
        $query->execute();
    }

    /*
     * Update Record
     *
     * @param $hostname
     * @param $ip
     * @param $user_so
     * @param $pass
     * @param $so
     * @param $obser
     * @return $mixed
     * */
    public function Update($hostname, $ip, $user_so, $pass, $so, $obser, $user_id)
    {
        $query = $this->db->prepare("UPDATE users SET hostname = :hostname, ip = :ip, user_so = :user_so, pass = :pass, so = :so, obser = :obser  WHERE id = :id");
        $query->bindParam("hostname", $hostname, PDO::PARAM_STR);
        $query->bindParam("ip", $ip, PDO::PARAM_STR);
        $query->bindParam("user_so", $user_so, PDO::PARAM_STR);
        $query->bindParam("pass", $pass, PDO::PARAM_STR);
        $query->bindParam("so", $so, PDO::PARAM_STR);
        $query->bindParam("obser", $obser, PDO::PARAM_STR);
        $query->bindParam("id", $user_id, PDO::PARAM_STR);
        $query->execute();
    }

    /*
     * Get Details
     *
     * @param $user_id
     * */
    public function Details($user_id)
    {
        $query = $this->db->prepare("SELECT * FROM users WHERE id = :id");
        $query->bindParam("id", $user_id, PDO::PARAM_STR);
        $query->execute();
        return json_encode($query->fetch(PDO::FETCH_ASSOC));
    }
}

?>
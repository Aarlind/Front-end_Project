<?php
require_once('../config/database.php');

class ControllerMenu
{
    public $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    //CRUD


    public function insertData($request)
    {

        $query = $this->db->pdo->prepare('INSERT INTO buytimeuser (Emri, Mbiemri, Password, DataLindjes, Gjinia, Shteti, Qyteti, Foto)
        VALUES(:Emri, :Mbiemri, :Password, :DataLindjes, :Gjinia, :Shteti, :Qyteti, :Foto)');



        $query->bindParam(':Emri', $request['emri']);
        $query->bindParam(':Mbiemri', $request['mbiemri']);
        $query->bindParam(':Password', $request['password']);
        $query->bindParam(':DataLindjes', $request['datalindjes']);
        $query->bindParam(':Gjinia', $request['gjinia']);
        $query->bindParam(':Shteti', $request['shteti']);
        $query->bindParam(':Qyteti', $request['qyteti']);
        $query->bindParam(':Foto', $request['image']);



        $query->execute();


        return header('Location: ../pages/successfully.php');
    }

    // function validateAdmin()
    // {

    //     $allUsers = $this->db->pdo->query("SELECT Emri, Password FROM buytimeuser where '$emri' = Emri and '$password' = Password");
    //     foreach ($allUsers as $user) {
    //         if($user['roli'] == 1){
    //             return true;
    //         }
    //     }
    //     return false;
    // }

    function validateData($emri, $password)
    {


        $allUsers = $this->db->pdo->query("SELECT Emri, Password, Roli FROM buytimeuser where '$emri' = Emri and '$password' = Password");
        foreach ($allUsers as $user) {
            if ($user['Emri'] == $emri && $user['Password'] == $password) {
                $_SESSION['Roli'] = $user['Roli'];
                $_SESSION['emri'] = $user['Emri'];
                return true;
            }
        }
        return false;
    }
    public function readData()
    {
        $query = $this->db->pdo->query('SELECT * FROM produkti');
        return $query->fetchAll();
    }
    public function insert($request)
    {
        $request['image'] = '../img/' . $request['image'];
        $query = $this->db->pdo->prepare('INSERT INTO produkti (Lloji, Emri, Cmimi, Pershkrimi, Fotografia)
    VALUES(:Lloji, :Emri, :Cmimi, :Pershkrimi, :Fotografia)');

        $query->bindParam(':Lloji', $request['lloji']);
        $query->bindParam(':Emri', $request['emri']);
        $query->bindParam(':Cmimi', $request['cmimi']);
        $query->bindParam(':Pershkrimi', $request['pershkrimi']);
        $query->bindParam(':Fotografia', $request['image']);
        $query->execute();

        return header('Location: ../pages/dashboard.php');
    }
    //
    public function editProduct($id)
    {
        $query = $this->db->pdo->prepare('SELECT * from produkti Where id = :id');
        $query->bindParam(':id', $id);
        $query->execute();
        return $query->fetch();
    }
    public function update($request, $id)
    {
        $query = $this->db->pdo->prepare('UPDATE produkti SET Lloji = :Lloji, Emri = :Emri, Cmimi = :Cmimi, Pershkrimi = :Pershkrimi, Fotografia = :Fotografia WHERE ID = :id');
        $query->bindParam(':Lloji', $request['lloji']);
        $query->bindParam(':Emri', $request['emri']);
        $query->bindParam(':Cmimi', $request['cmimi']);
        $query->bindParam(':Pershkrimi', $request['pershkrimi']);
        $query->bindParam(':Fotografia', $request['image']);
        $query->bindParam(':id', $id);
        $query->execute();
        return header('Location: ../pages/dashboard.php');
    }
}

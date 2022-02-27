<?php
require_once('../config/database.php');

class ControllerMenu
{
    public $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function insertData($request)
    {
        $request['image'] = '../img/' . $request['image'];
        $query = $this->db->pdo->prepare('INSERT INTO buytimeuser (Emri, Mbiemri, Email, Password, Telefoni, DataLindjes, Gjinia, Shteti, Qyteti, Foto)
        VALUES(:Emri, :Mbiemri, :Email, :Password, :Telefoni, :DataLindjes, :Gjinia, :Shteti, :Qyteti, :Foto)');

        $query->bindParam(':Emri', $request['emri']);
        $query->bindParam(':Mbiemri', $request['mbiemri']);
        $query->bindParam(':Email', $request['email']);
        $query->bindParam(':Password', $request['password']);
        $query->bindParam(':Telefoni', $request['telefoni']);
        $query->bindParam(':DataLindjes', $request['datalindjes']);
        $query->bindParam(':Gjinia', $request['gjinia']);
        $query->bindParam(':Shteti', $request['shteti']);
        $query->bindParam(':Qyteti', $request['qyteti']);
        $query->bindParam(':Foto', $request['image']);

        $query->execute();

        return header('Location: ../pages/successfully.php');
    }



    function validateData($email, $password)
    {


        $allUsers = $this->db->pdo->query("SELECT Email, Password, Roli FROM buytimeuser where '$email' = Email and '$password' = Password");
        foreach ($allUsers as $user) {
            if ($user['Email'] == $email && $user['Password'] == $password) {
                $_SESSION['Roli'] = $user['Roli'];
                $_SESSION['email'] = $user['Email'];
                return true;
            }
        }
        return false;
    }
    public function readAdmins()
    {
        $admins = $this->db->pdo->query('SELECT * FROM buytimeuser where Roli = 1');
        return $admins->fetchAll();
    }
    public function readData()
    {
        $query = $this->db->pdo->query('SELECT * FROM produkti');
        return $query->fetchAll();
    }
    public function readInbox()
    {
        $inbox = $this->db->pdo->query('SELECT * FROM contact');
        return $inbox->fetchAll();
    }
    public function insert($request, $getEmailIPerdoruesit)
    {
        $request['image'] = '../img/' . $request['image'];
        $query = $this->db->pdo->prepare('INSERT INTO produkti (Lloji, Emri, Cmimi, Pershkrimi, Fotografia, EmailIPerdoruesit)
    VALUES(:Lloji, :Emri, :Cmimi, :Pershkrimi, :Fotografia, :EmailIPerdoruesit)');

        $query->bindParam(':Lloji', $request['lloji']);
        $query->bindParam(':Emri', $request['emri']);
        $query->bindParam(':Cmimi', $request['cmimi']);
        $query->bindParam(':Pershkrimi', $request['pershkrimi']);
        $query->bindParam(':Fotografia', $request['image']);
        $query->bindParam(':EmailIPerdoruesit', $getEmailIPerdoruesit);

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
    public function delete($id)
    {
        $query = $this->db->pdo->prepare('DELETE from produkti where id = :id');
        $query->bindParam(':id', $id);
        $query->execute();
        return header('Location: ../pages/dashboard.php');
    }
    public function getUsers()
    {
        $query = $this->db->pdo->query('SELECT count(email) as nrUsereve FROM buytimeuser');
        $row = $query->fetch();
        $id = (int) $row['nrUsereve'];
        return $id;
    }
    public function getProducts()
    {
        $query = $this->db->pdo->query('SELECT count(id) as nrProdukteve FROM produkti');
        $row = $query->fetch();
        $id = (int) $row['nrProdukteve'];
        return $id;
    }
    public function getAdmins()
    {
        $query = $this->db->pdo->query('SELECT count(email) as nrAdmineve FROM buytimeuser where Roli = 1');
        $row = $query->fetch();
        $id = (int) $row['nrAdmineve'];
        return $id;
    }
    public function getContactMessages($request)
    {

        $query = $this->db->pdo->prepare('INSERT INTO contact (Emri, Mbiemri, Adresa, Email, Telefoni, Subjekti, Mesazhi)
    VALUES(:Emri, :Mbiemri, :Adresa, :Email, :Telefoni, :Subjekti, :Mesazhi)');

        $query->bindParam(':Emri', $request['emri']);
        $query->bindParam(':Mbiemri', $request['mbiemri']);
        $query->bindParam(':Adresa', $request['adresa']);
        $query->bindParam(':Email', $request['email']);
        $query->bindParam(':Telefoni', $request['telefoni']);
        $query->bindParam(':Subjekti', $request['subjekti']);
        $query->bindParam(':Mesazhi', $request['mesazhi']);

        $query->execute();
        return header('Location: ../pages/dashboard.php');
    }
    function validateRegisterEmptyData($request)
    {
        $emri = $request['emri'];
        $mbiemri = $request['mbiemri'];
        $email = $request['email'];
        $password = $request['password'];
        $telefoni = $request['telefoni'];
        $dataLindjes = $request['datalindjes'];
        $gjinia = $request['gjinia'];
        $shteti = $request['shteti'];
        $qyteti = $request['qyteti'];

        if (
            empty($emri) || empty($mbiemri) || empty($email) || empty($password) || empty($telefoni) || empty($dataLindjes)
            || empty($gjinia) || empty($shteti) || empty($qyteti)
        ) {
            return true;
        }
        return false;
    }
}

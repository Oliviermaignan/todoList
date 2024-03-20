<?php

require_once __DIR__ . "/../classes/Db.php";
require_once __DIR__ . "/../classes/Users.php";

class UsersRepository extends Db
{
    public function getAll()
    {
        $data = $this->getDb()->query('SELECT * FROM td_users');

        $users = [];

        foreach ($data as $user) {
            $newStudent = new Users(
                $user['nom'],
                $user['prenom'],
                $user['email'],
                $user['password']
            );

            $users[] = $newStudent;
        }

        return $users;
    }

    public function create($newUsers)
    {
        $request = 'INSERT INTO td_users (nom, prenom, email, password) VALUES (?, ?, ?, ?)';
        $query = $this->getDb()->prepare($request);

        $query->execute([
            $newUsers->getName(),
            $newUsers->getFirstname(),
            $newUsers->getEmail(),
            $newUsers->getPassword()
        ]);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    public function getPasswordByEmail($email)
    {
        try {
            $query = $this->getDb()->prepare("SELECT td_users.password FROM td_users WHERE email = ?");
            $query->execute([$email]);
            $result = $query->fetch();
    
            if ($result) {
                return $result['password'];
            } else {
                // si pas de resultat throw une erreur
                throw new Exception("Adresse e-mail introuvable.");
            }
        } catch (Exception $e) {
            echo "Erreur: " . $e->getMessage();
            return null;
        }
    }

    public function getUserIdByMail($email){
        try {
            $query = $this->getDb()->prepare("SELECT td_users.id FROM td_users WHERE email = ?");
            $query->execute([$email]);
            $result = $query->fetch();
            if ($result) {
                return $result['id'];
            } else {
                // si pas de resultat throw une erreur
                throw new Exception("Adresse e-mail introuvable.");
            }
        } catch (Exception $e) {
            echo "Erreur: " . $e->getMessage();
            return null;
        }
    }

    public function getUserNameByMail($email){
        try {
            $query = $this->getDb()->prepare("SELECT nom FROM td_users WHERE email = ?");
            $query->execute([$email]);
            $query->setFetchMode(PDO::FETCH_ASSOC);
            $result = $query->fetch();
            if ($result) {
                return $result['nom'];
            } else {
                // si pas de resultat throw une erreur
                throw new Exception("Adresse e-mail introuvable.");
            }
        } catch (Exception $e) {
            echo "Erreur: " . $e->getMessage();
            return null;
        }
    }
}
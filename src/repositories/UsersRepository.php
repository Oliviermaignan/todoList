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
            $newStudent = new UsersRepository(
                $user['name'],
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
    }
}

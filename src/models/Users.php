<?php

class Users
{

    private PDO $sql;

    /**
     *
     * @param PDO $sql Database connection object (PDO)
     */
    public function __construct(PDO $sql)
    {
        $this->sql = $sql;
    }

    /**
     * Adds a new url into database
     *
     * @param string $title
     * @param string $url
     * @param string $description
     * @return void
     */

    public function add($username, $surname, $name, $email, $role, $profile_img, $password)
    {
        $query = "INSERT INTO users (username, surname, name, email, role, profile_img, password) VALUES (:username, :surname, :name, :email, :role, :profile_img, :password);";
        $stm = $this->sql->prepare($query);
        $stm->execute([":username" => $username, ":surname" => $surname, ":name" => $name, ":email" => $email, ":role" => $role, ":profile_img" => $profile_img, ":password" => $password]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error. {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
    }

    public function delete($id)
    {

        // Cambiar el nombre del parámetro en la consulta a :id para que coincida
        $query = "DELETE FROM users WHERE user_id = :user_id";  // Asegúrate de usar el nombre correcto para el parámetro
        $stm = $this->sql->prepare($query);
        $stm->execute([":user_id" => $id]);  // El parámetro debe coincidir con el de la consulta

        // Manejo de errores
        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            die("Error al eliminar: {$err[0]} - {$err[1]}\n{$err[2]}");
        }
    }

    public function getById($id)
    {
        $query = "select user_id, username, surname, name, email, role, profile_img from users where user_id = :user_id";
        $stm = $this->sql->prepare($query);
        $stm->execute([":user_id" => $id]);
        $result = $stm->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getAllUsers()
    {
        $query = "select user_id, username, surname, name, email, role from users;";
        $results = [];
        foreach ($this->sql->query($query, PDO::FETCH_ASSOC) as $result) {
            $results[] = $result;
        }
        return $results;
    }

    // Función para hacer un update en el dashboard.
    public function update($id, $user)
    {
        $query = "UPDATE users SET 
            username = :username, 
            surname = :surname, 
            name = :name, 
            email = :email, 
            role = :role,
            profile_img = :profile_img,
            password = :password
            WHERE user_id = :user_id";

        $stmt = $this->sql->prepare($query);

        // Ejecuta la consulta con los valores en el arreglo $data
        $stmt->execute([
            ':user_id' => $id,
            ':username' => $user['username'],
            ':surname' => $user['surname'],
            ':name' => $user['name'],
            ':email' => $user['email'],
            ':role' => $user['role'],
            ':profile_img' => $user['profile_img'],
            ':password' => $user['password']
        ]);

        return $stmt->rowCount(); // Devuelve el número de filas afectadas
    }
    
    public function getRegister($username, $surname, $name, $email, $role, $password){
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO users (username, surname, name, email, role, password) VALUES (:username, :surname, :name, :email, :role, :password)";
        $stm = $this->sql->prepare($query);
        $stm->execute([":username" => $username, ":surname" => $surname, ":name" => $name, ":email" => $email, ":role" => $role, ":password" => $hashedPassword]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error. {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
    }
}

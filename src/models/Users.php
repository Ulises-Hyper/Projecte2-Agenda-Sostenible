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
    public function update($id, $data)
{
    $query = "UPDATE users SET 
                name = :name, 
                surname = :surname, 
                username = :username, 
                email = :email, 
                role = :role";

    // Añade el campo de contraseña solo si está presente
    if (!empty($data['password'])) {
        $query .= ", password = :password";
    }

    // Añade el campo de imagen solo si está presente
    if (!empty($data['profile_img'])) {
        $query .= ", profile_img = :profile_img";
    }

    $query .= " WHERE user_id = :user_id";

    $stm = $this->sql->prepare($query);

    // Asignar valores para los parámetros obligatorios
    $params = [
        ':name' => $data['name'],
        ':surname' => $data['surname'],
        ':username' => $data['username'],
        ':email' => $data['email'],
        ':role' => $data['role'],
        ':user_id' => $id
    ];

    // Agregar `password` e `imgProfile` solo si existen en `$data`
    if (!empty($data['password'])) {
        $params[':password'] = password_hash($data['password'], PASSWORD_DEFAULT);
    }
    if (!empty($data['profile_img'])) {
        $params[':profile_img'] = $data['profile_img'];
    }

    $stm->execute($params);
}
}

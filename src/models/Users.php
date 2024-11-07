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

    /**
     * return the list of urls
     *
     * @return array  ["title", "url", "description"]
     */
    public function list()
    {
        $query = "select Nom, Cognoms,Data_naixement, Adrea_carrer, Adrea_numero, Adrea_ciutat, Adrea_codi_postal, Ruta_resguard, Data_registre from Registre;";
        $urls = [];
        foreach ($this->sql->query($query, \PDO::FETCH_ASSOC) as $url) {
            $urls[$url["Ruta_resguard"]] = $url;
        }

        if ($this->sql->errorCode() !== '00000') {
            $err = $this->sql->errorInfo();
            $code = $this->sql->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
        return $urls;
    }

    public function delete($id){
        $query = "delete from links where id = :id";
        $stm = $this->sql->prepare($query);
        $stm->execute([":id" => $id]);
    }


    public function getById($id){
        $query = "select id, title, url, description from links where id = :id";
        $stm = $this->sql->prepare($query);
        $stm->execute([":id" => $id]);
        $result = $stm->fetch(PDO::FETCH_ASSOC);
        
        return $result;
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

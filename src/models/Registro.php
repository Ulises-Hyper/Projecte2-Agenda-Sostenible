<?php

class Registro
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
    public function add($Nom, $Cognoms, $Data_naixement, $Adrea_carrer, $Adrea_numero, $Adrea_ciutat, $Adrea_codi_postal, $Ruta_resguard)
    {
        $query = "insert into Registre (Nom, Cognoms, Data_naixement, Adrea_carrer, Adrea_numero, Adrea_ciutat, Adrea_codi_postal, Ruta_resguard, Data_registre) values (:Nom, :Cognoms, :Data_naixement, :Adrea_carrer, :Adrea_numero, :Adrea_ciutat, :Adrea_codi_postal, :Ruta_resguard, :Data_registre);";
        $stm = $this->sql->prepare($query);
        $stm->execute([":Nom" => $Nom, ":Cognoms" => $Cognoms, ":Data_naixement" => $Data_naixement, ":Adrea_carrer" => $Adrea_carrer, ":Adrea_numero"=>$Adrea_numero, ":Adrea_ciutat"=>$Adrea_ciutat, ":Adrea_codi_postal"=>$Adrea_codi_postal, ":Ruta_resguard"=>$Ruta_resguard, ":Data_registre"=>date('Y-m-d H:i:s')]);

        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            $code = $stm->errorCode();
            die("Error.   {$err[0]} - {$err[1]}\n{$err[2]} $query");
        }
    }

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
}

<?php

class Events
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

    public function addEvent($event_title, $event_description, $event_location, $event_type, $event_comment, $date_start, $date_end)
    {

        $event_comment_value = ($event_comment === 'on') ? 1 : 0;

        $query = "INSERT INTO events (event_title, event_description, event_location, event_type, event_comment, date_start, date_end) VALUES (:event_title, :event_description, :event_location, :event_type, :event_comment, :date_start, :date_end);";
        $stm = $this->sql->prepare($query);
        //print_r([":event_title" => $event_title, ":event_description" => $event_description, ":event_location" => $event_location, ":event_type" => $event_type, ":event_comment" => $event_comment_value, ":date_start" => $date_start, ":date_end" => $date_end]);
        $stm->execute(params: [":event_title" => $event_title, ":event_description" => $event_description, ":event_location" => $event_location, ":event_type" => $event_type, ":event_comment" => $event_comment_value, ":date_start" => $date_start, ":date_end" => $date_end]);

        $id = $this->sql->lastInsertId();
        return $id;
    }

    public function getAllEvents()
    {

        $query = "SELECT event_id, event_title, event_description, event_location, date_start from events order by date_start desc limit 3;";
        $results = [];
        foreach ($this->sql->query($query, PDO::FETCH_ASSOC) as $result) {
            $results[] = $result;
        }
        return $results;
    }

    public function delete($id)
    {
        $query = "DELETE FROM events WHERE event_id = :event_id"; 
        $stm = $this->sql->prepare($query);
        $stm->execute([":event_id" => $id]);  // El parámetro debe coincidir con el de la consulta

        // Manejo de errores
        if ($stm->errorCode() !== '00000') {
            $err = $stm->errorInfo();
            die("Error al eliminar: {$err[0]} - {$err[1]}\n{$err[2]}");
        }
    }

    public function addTips($title, $brief_description, $explanatory_text, $hashtags)
    {
        $query = "INSERT INTO tips (title, brief_description, explanatory_text, hashtags) VALUES (:title, :brief_description, :explanatory_text, :hashtags);";
        $stm = $this->sql->prepare($query);
        $stm->execute(params: [":title" => $title, ":brief_description" => $brief_description, ":explanatory_text" => $explanatory_text, ":hashtags" => $hashtags]);
    }

    public function getAllTips()
    {
        $query = "select id, title, brief_description, explanatory_text, hashtags from tips;";
        $results = [];
        foreach ($this->sql->query($query, PDO::FETCH_ASSOC) as $result) {
            $results[] = $result;
        }
        return $results;
    }

    public function deleteTips($id)
    {
        $query = "DELETE FROM tips WHERE id = :id";
        $stm = $this->sql->prepare($query);
        $stm->execute(params: [":id" => $id]);
    }

    public function getTips($id){
        $query = "SELECT id, title, brief_description, explanatory_text, hashtags 
                  FROM tips
                  WHERE id = :id";
        $stm = $this->sql->prepare($query);
        $stm->execute([':id' => $id]);

        // Recuperar el resultado como un array asociativo
        $result = $stm->fetch(PDO::FETCH_ASSOC);

        // Devolver el resultado o null si no se encontró ningún registro
        return $result ? $result : null;
    }


    public function updateTip($id, $title, $brief_description, $explanatory_text, $hashtags)
    {
        // Consulta para actualizar los datos del consejo
        $query = "UPDATE tips 
                  SET title = :title, brief_description = :brief_description, explanatory_text = :explanatory_text, hashtags = :hashtags 
                  WHERE id = :id";

        // Preparar la consulta
        $stm = $this->sql->prepare($query);

        // Ejecutar la consulta con los parámetros proporcionados
        $result = $stm->execute([
            ':id' => $id,
            ':title' => $title,
            ':brief_description' => $brief_description,
            ':explanatory_text' => $explanatory_text,
            ':hashtags' => $hashtags
        ]);

        // Retornar el resultado de la ejecución (true si la actualización fue exitosa, false si no lo fue)
        return $result;
    }
}
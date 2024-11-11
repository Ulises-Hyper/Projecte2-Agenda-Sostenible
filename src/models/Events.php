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

    public function addEvent($event_title, $event_description, $event_location, $event_type, $event_comment, $date_start, $date_end){

        $event_comment_value = ($event_comment === 'on') ? 1 : 0;

        $query = "INSERT INTO events (event_title, event_description, event_location, event_type, event_comment, date_start, date_end) VALUES (:event_title, :event_description, :event_location, :event_type, :event_comment, :date_start, :date_end);";
        $stm = $this->sql->prepare($query);
        //print_r([":event_title" => $event_title, ":event_description" => $event_description, ":event_location" => $event_location, ":event_type" => $event_type, ":event_comment" => $event_comment_value, ":date_start" => $date_start, ":date_end" => $date_end]);
        $stm->execute([":event_title" => $event_title, ":event_description" => $event_description, ":event_location" => $event_location, ":event_type" => $event_type, ":event_comment" => $event_comment_value, ":date_start" => $date_start, ":date_end" => $date_end]);

        $id = $this->sql->lastInsertId();
        return $id;
    }

    public function getAllEvents(){

        $query = "SELECT event_title, event_description, event_location, date_start from events;";
        $results = [];
        foreach ($this->sql->query($query, PDO::FETCH_ASSOC) as $result) {
            $results[] = $result;
        }
        return $results;
    }

}
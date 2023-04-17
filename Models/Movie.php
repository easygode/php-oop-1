<?php

class Movies
{
    private $name;
    private $genre;
    private $duration;
    private $staff;
    
    public function __construct($_name, $_genre, $_duration, $_staff)
    {
        $this->name = $_name;
        $this->genre = $_genre;
        $this->duration = $_duration;
        $this->staff = $_staff;
    }

    public function get_movie_info()
    {
        return "name: {$this->name} - duration: {$this->duration} minuti";
    }
}

?>
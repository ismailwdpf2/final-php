<?php
class Student{
    public $id;
    public $name;
    public $batch;
    public $filearr;
    public function __construct()
    {
        $this->filearr = file("student.txt");
    }
    function result($id){
        foreach($this->filearr as $line){
            $parts  = explode(",",$line);
            if($parts[0] == $id){
                echo "Student ID: " . $parts[0] . "<br>";
                echo "Student Name: " . $parts[1] . "<br>";
                echo "Student Batch: " . $parts[2] . "<br>";
                break;
            }
        }
    }
}
$s = new Student();
$s->result("103ss");
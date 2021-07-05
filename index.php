<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        class Student{
            private $_nume;
            public function set_nume($nume){
                $this->_nume=$nume;
            }
            public function get_nume(){
                return $this->_nume;
            }
        }
        $student=new Student();
        $student->set_nume("Popescu");
        echo $student->get_nume();
        ?>
    </body>
</html>

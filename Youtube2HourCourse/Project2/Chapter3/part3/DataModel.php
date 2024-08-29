<?php
abstract Class DataModel{

    Protected string $tableName = 'random-table-name';


    public function save(){
        print_r('saving data to table:' . $this->tableName);
    }
}



?>
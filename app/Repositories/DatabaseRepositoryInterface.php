<?php

namespace App\Repositories;

interface DatabaseRepositoryInterface
{
    public function Add($table_name , $tableMetaData);
    public function getColumnDataByTableName($table_name);
    public function getColumnDataByTableNameHTML($table_name);
}
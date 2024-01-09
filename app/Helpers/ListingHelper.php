<?php

namespace App\Helpers;

use Exception;
use Yajra\DataTables\DataTables;

class ListingHelper
{
      /**
     * Listing for datatable
     */
    public static function list($data,$fields)
    {
        try{
            $dataTable = DataTables::of($data);

            foreach ($fields as $columnName => $columnClosure) {
                $dataTable->addColumn($columnName, $columnClosure);
            }
    
            return $dataTable
                ->rawColumns(array_keys($fields))
                ->make(true);
        }catch(Exception $e){
            logger($e->getMessage());
        }
    }
}
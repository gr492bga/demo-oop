<?php


namespace App\Filters;

class EmployeesFilter extends QueryFilter
{
    public function id_subdivision($id_subdivision){
        return $this->builder->where('id_subdivision',$id_subdivision);
    }
}
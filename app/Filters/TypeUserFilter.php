<?php

namespace App\Filters;

class TypeUserFilter extends QueryFilter
{
    public function type($value = null)
    {
        return $this->builder->where('type', 'like', "%$value%");
    }

    public function sortBy($sortBy)
    {
        list($column, $order)  = explode(',', $sortBy);

        if ($column) {
            return $this->builder->orderBy($column, $order);
        }
    }
}

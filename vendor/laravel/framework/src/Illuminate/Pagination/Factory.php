<?php

namespace Angelov\Eestec\Platform\Paginator;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class Factory
{
    public static function make(array $items, $totalItems, $itemsPerPage)
    {
        $page = Paginator::resolveCurrentPage();

        return new LengthAwarePaginator($items, $totalItems, $itemsPerPage, $page, [
            'path' => Paginator::resolveCurrentPath()
        ]);
    }
}
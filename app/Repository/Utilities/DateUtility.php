<?php

declare(strict_types=1);

namespace App\Repository\Utilities;

use Illuminate\Support\Carbon;

class DateUtility {

    public function newDate(string $data){
       return Carbon::createFromFormat('Y-m-d', $data)->format('Y-m');
    }

}

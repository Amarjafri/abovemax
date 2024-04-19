<?php

namespace App\Imports;

use App\Models\User;
use Kreait\Firebase\Database;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToCollection;

class UserImport implements ToModel
{
    /**
     * @param Collection $collection
     */
    use Importable;

    public function model(array $row)
    {
        dd("model import working");
    }
}

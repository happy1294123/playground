<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\Concerns\HasUuids

class Test extends Model
{
    use HasFactory;
    // use HasUuids;

    // php artisan model:show Test 查看模型資訊

    protected $table = 'tests';  // table name

    protected $primaryKey = 'id'; // primary key name

    public $incrementing = true; // true: autoincrese id

    protected $keyType = 'string'; // data type of the auto-incrementing ID 
}

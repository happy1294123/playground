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

    // table name
    protected $table = 'tests';

    // primary key or autoincrement
    protected $primaryKey = 'id'; // primary key name
    public $incrementing = true; // true: autoincrease id
    protected $keyType = 'string'; // data type of the auto-incrementing ID

    // timestamps
    public $timestamps = true; // true: auto create timestamps(created_at, updated_at)
    protected $dateFormat = 'U'; // customize timestamps format
    const CREATED_AT = 'created_at'; // customize timestamps column name
    const UPDATED_AT = 'updated_at';
    // Test::withoutTimestamps(fn() => $test->increment(['reads']));  // update without change updated_at timestamps

    // database connections
    protected $connection = 'mysql'; // specify db connection diff from default

    // set default value
    protected $attributes = [
        'options' => '[]',
        'delayed' => false
    ];
}
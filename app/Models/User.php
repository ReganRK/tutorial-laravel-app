<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    //* tidak perlu dibuat jika table namanya sama hanya beda s
    protected $table = 'users';

    protected $primaryKey = 'id';

    

    // public $timestamps = false;
    // protected $increamenting = false;
    // protected $keyType = 'string';
}

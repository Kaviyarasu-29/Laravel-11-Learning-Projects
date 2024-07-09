<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Salary;
use Illuminate\Http\Request;

class User extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'age'];

    // protected $primaryKey = 'uid';
    // public $incrementing = false;
    // protected $keyType = 'int';

    public function salary()
    {
        return $this->hasOne(Salary::class);
    }
}

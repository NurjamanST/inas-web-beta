<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;
    protected $primaryKey = 'institution_id';
    protected $fillable = ['institution_name', 'address', 'logo', 'type'];

    public function accounts()
    {
        return $this->hasMany(Account::class, 'institution_id');
    }
}
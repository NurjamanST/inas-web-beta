<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use SoftDeletes;

    protected $table = 'institutions';
    protected $primaryKey = 'institution_id';
    protected $guarded = [];

    public function accounts()
    {
        return $this->hasMany(Account::class, 'institution_id');
    }
}

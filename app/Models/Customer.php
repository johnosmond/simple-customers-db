<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['customer_name', 'customer_phone', 'address', 'website'];

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }
}

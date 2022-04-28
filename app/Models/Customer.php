<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function agents() {
        return $this->belongsTo(Agent::class, 'fk_agent_code', 'agent_code');
    }

    public function oders() {
        return $this->hasMany(Customer::class, 'fk_cust_code', 'cust_code');
    }
}

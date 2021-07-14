<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;
    protected $fillable = ['wallet_id','user_id', 'score', 'status', 'created_at', 'updated_at']; 
    protected $primaryKey = 'wallet_id'; // or null
    public $timestamps = true;
    
}

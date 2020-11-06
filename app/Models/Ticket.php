<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{

    use HasFactory;

    
    protected $primaryKey  = 'id';

    const CREATED_AT       = 'DateCreated';
    const UPDATED_AT       = null; 

}

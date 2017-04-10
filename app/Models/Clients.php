<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $table = 'clients';

    protected $fillable = [
        'description', 'idnum', 'tax_code', 'address', 'email', 'contact_first_name', 'contact_last_name', 'telephone'
    ];

}

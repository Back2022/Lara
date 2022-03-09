<?php

namespace App\Models;
use Te7aHoudini\LaravelTrix\Traits\HasTrixRichText;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    use HasTrixRichText;
    use HasFactory; // Ovo omogućuje korištenje static metode Office::factory()->count(3)->make();
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'officeCode';
     /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;
    //public $incrementing = true;  
    
    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    //protected $keyType = 'int';
    protected $keyType = 'string';    
    
    public function employees()
    {
        return $this->hasMany(Employee::class,'officeCode');
    }
}

<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// php artisan make:model Employee --all
/**
  Model created successfully.
  Factory created successfully.
  Created Migration: 2022_02_24_190924_create_employees_table
  Seeder created successfully.
  Request created successfully.
  Request created successfully.
  Controller created successfully.
  Policy created successfully.
 */
class Employee extends Model {

    use HasFactory;
    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['fullNameAttribute'];  // Ovo mora zbog fullNameAttribute(): Attribute

     /**
     * Get the user's first name. dohvaća atribut firstName (isto polje u bazi firstName)
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function firstName(): Attribute
    {
       // return Attribute::make(  //ovo ne radi
       return new Attribute( 
            get: fn ($value) => "My name is ".ucfirst($value),  //Mutator
        );
    }   

    /**
 * Get the user's full name.
 *
 * @link https://laravel.com/docs/9.x/eloquent-serialization#appending-values-to-json 
 * @example $o=Office::find(7)->employees()->get()->first()->fullNameAttribute description
 * @return string
 */
protected function fullNameAttribute(): Attribute
{
    // mora se definirati protected $appends 
        return new Attribute(
        get: fn () => $this->attributes['firstName']." ".$this->attributes['lastName']
        );
}
/**
 * @example $o=Office::find(7)->employees()->get()->first()->getFullNameAttribute()
 * @return string
 */
public function getFullNameAttribute()
{
    // Stari način
    // $o=Office::find(7)->employees()->get()->first()->getFullNameAttribute()
   return $this->attributes['firstName']." ".$this->attributes['lastName'];
}
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'employeeNumber';

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    //public $incrementing = false;
    public $incrementing = true;

    /**
     * The "type" of the primary key ID.
     *
     * @var string
     */
    protected $keyType = 'int';  //po defaultu je int, pa ovo vjerojatno nije potrebno

    //protected $keyType = 'string';    

    public function office() {
        return $this->belongsTo(Office::class, 'officeCode');
    }

    public function customers() {
        //TODO ne radi DB:seed zbog ovoga, provjeri relacije
        //key iz tablice Customer  // Key iz Employee
        return $this->hasMany(Customer::class, 'salesRepEmployeeNumber', 'employeeNumber');
    }

    public function podanici() { // kome sam ja nadređen?
        return $this->hasMany(Employee::class, 'reportsTo', 'employeeNumber');
    }

    public function tkoJeMojSef() { // Nadji tko je moj sef?
        return $this->belongsTo(Employee::class, 'reportsTo', 'employeeNumber');
    }

}

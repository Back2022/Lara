<?php

namespace Tests\Unit;
//use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
//use PHPUnit\Framework\TestCase;  // javlja ovu gresku: Error: Call to a member function connection() on null
use App\Models\Employee;

class EmployeeTest extends TestCase {
  // use RefreshDatabase;  //nakon testa brise tablice, migrira ih i seeda ispocetka?
    /**
     * A basic unit test example.
     * @covers App\Models\Employee
     * @return void
     */
    public function test_kreiraj_tri_employee() {
    
        // Kreiraj 3 zaposlenika i sačuvaj ih u bazi podataka
        // Na kraju svakog reda pritisnuti ctrl-enter inače će se izvrsiti samo jedan red
 
        $pocetni_broj_zaposlenika = Employee::all()->count();
        Employee::factory()->count(3)->make()->each(function ($r) {
            $r->save();
        });
        $zavrsni_broj_zaposlenika = Employee::all()->count();

        $this->assertEquals($zavrsni_broj_zaposlenika, $pocetni_broj_zaposlenika + 3, 'Nisam uspio sacuvati zaposlenike u bazu');
    }

    /**
     * Ukoliko je prethodni test uspjesan pokusaj obrisati unesena zadnja tri zaposlenika
     * @depends test_kreiraj_tri_employee
     */
    public function test_obrisi_tri_employee() {

        //obrisi zadnja 3 zaposlenika iz baze
        $obrisani_rekordi = Employee::where('employeeNumber', '!=', 0)->orderByDesc('employeeNumber')->limit(3)->delete();
        $this->assertEquals($obrisani_rekordi, 3, 'Nisam uspio obrisati zaposlenike iz baze');
    }

}

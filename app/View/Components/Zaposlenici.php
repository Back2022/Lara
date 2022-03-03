<?php

namespace App\View\Components;
//use App\Models\Employee;
use App\Models\Office;
use Illuminate\View\Component;

class Zaposlenici extends Component
{
    public $zaposlenici;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $officeId)
    {
       $this->zaposlenici= Office::find($officeId)->employees()->get(); //$o=Office::find(7)->employees()->get()
       
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.zaposlenici',['zaposlenici'=>'$this->zaposlenici' ]);
    }
}

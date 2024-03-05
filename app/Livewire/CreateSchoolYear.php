<?php

namespace App\Livewire;

use App\Models\SchoolYear;
use Carbon\Carbon;
use Exception;
use Livewire\Component;
use PhpParser\Node\Stmt\TryCatch;

class CreateSchoolYear extends Component
{
    public $libelle;
    public function store(SchoolYear $schoolYear){
        $this->validate(['libelle' =>'string|required|unique:school_years,school_year']);
     try {
        $currentYear = Carbon::now()->format('Y');
        $check=SchoolYear::where('current_Year',$currentYear)->get();
        $alreadyExist=$check->count();
        if($alreadyExist >=1){
          return redirect()->back()->with('error','annne en cours a été ajouté');
        } else {
            $schoolYear->school_year = $this->libelle;
            $schoolYear->current_Year = $currentYear;
            $schoolYear->save();
            if($schoolYear){
                $this->libelle ='';
            }
            return redirect()->back()->with('succès','Année scolaire ajouté');
        }


     }catch (Exception $e) {

     }
    }
    public function render()
    {
        return view('livewire.create-school-year');
    }
}

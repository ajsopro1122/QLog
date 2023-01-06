<?php

namespace App\Http\Livewire\Admin\Purposes;

use App\Models\Facility;
use App\Models\Purpose;
use Livewire\Component;

class Create extends Component
{
    public $facilities, $facilityIds, $title, $hasDepartment = 0;
    
    public function mount(){
        $this->facilities = Facility::whereHas('user')->get();
    }

    public function submit(){

        $this->validate([
            'title'         => 'required|unique:purposes,title,',
            'facilityIds'   => 'required'
        ]);
        $search = 'College of';
        foreach($this->facilityIds as $fac){
            $fac = Facility::select('id', 'name')->where('id', $fac)->first();
            if(preg_match("/{$search}/i", $fac->name)){
                $this->hasDepartment = 1;
                break;
            }
        }
        $purpose = Purpose::create([
            'title'         => $this->title,
            'hasDepartment' => $this->hasDepartment
        ]);
        $purpose->facilities()->sync($this->facilityIds);
        return redirect('admin/purposes')->with('message', 'Added Successfully');
    }

    public function back(){
        return redirect('/admin/purposes');
    }

    public function render()
    {
        return view('livewire.admin.purposes.create');
    }
}

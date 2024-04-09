<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NewReport extends Component
{
    public $showingModal = false;

    public $listeners = [
        'hideMe' => 'hideModal'
    ];

    public function render()
    {
        return view('livewire.new-report');
    }

    public function showModal(){
        $this->showingModal = true;
    }

    public function hideModal(){
        $this->showingModal = false;
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;

class CustomTable extends Component
{
    public $test;

    public function render()
    {
        return view('livewire.custom-table');
    }
}

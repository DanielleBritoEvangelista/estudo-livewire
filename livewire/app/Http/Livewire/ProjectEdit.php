<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ProjectEdit extends Component
{
    public $price;

    public function render()
    {
        return view('livewire.project-edit');
    }

    public function getPrice()
    {
        $this->price = 123.45;
    }
}

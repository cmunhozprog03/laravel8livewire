<?php

namespace App\Http\Livewire;

use Dotenv\Parser\Value;
use Livewire\Component;

class Product extends Component
{
    public $title;
    public $name;
    public $infos = [];

    public function mount()
    {
        $this->infos[] = 'Applicaiton is mounting...';
    }

    public function hydrate()
    {
        $this->infos[] = 'Applicaiton is hyderating...';
    }

    public function updating($name, $value)
    {
        $this->infos[] = 'Applicaiton is updating...';
    }

    public function updated($name, $value)
    {
        $this->infos[] = 'Applicaiton is updated...';
    }

    public function updatingName()
    {
        $this->infos[] = 'Applicaiton is updating name propriety...';
    }

    public function updatedName()
    {
        $this->infos[] = 'Applicaiton is updated name propriety...';
    }

    public function render()
    {
        return view('livewire.product');
    }
}

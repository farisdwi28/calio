<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Artikel;

class Beranda extends Component
{
    public $id;
    public $photo;
    public $title;
    public $shortdescription;
    public $description;

    public function render()
    {
        return view('livewire.beranda', [
            'articles' => Artikel::orderBy('created_at', 'DESC')->get(),
        ]);
    }
}


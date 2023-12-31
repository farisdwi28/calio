<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Kelas;

class   Workout extends Component
{
    public $id;
    public $kategori;
    public $photo;
    public $title;
    public $description;

    public function render()
    {
        return view('livewire.workout', [
            'Kelas' => Kelas::where('kategori', 'workout')
    ->orderBy('created_at', 'DESC')
    ->get(),
        ]);
    }

    public function ambil($id)
    {
        $kelas = Kelas::find($id);
        if ($kelas) {
            $this->id = $kelas->id;
            $this->kategori = $kelas->kategori;
            $this->photo = $kelas->photo;
            $this->title = $kelas->title;
            $this->description = $kelas->description;
        }
        redirect()->intended('/workout');
    }
}


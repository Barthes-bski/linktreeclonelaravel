<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Bio;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class BioComponent extends Component
{

    use WithFileUploads;

    public $bio;
    public $title;
    public $description;
    public $avatar;
    public $photo;


    public function mount(){
        $this->bio = Bio::first();
        $this->title = $this->bio->title;
        $this->description = $this->bio->description;
        $this->avatar = $this->bio->avatar;

    }


    public function render()
    {
        return view('livewire.bio-component');
    }

    public function update()
    {
        $myBio = Bio::first();
        $myBio->title = $this->title;
        $myBio->description = $this->description;

        $myBio->save();
    }

    public function save()
    {

        $this->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Ajusta según tus necesidades
        ]);
        $name = $this->photo->store('public');
        $myBio = Bio::first();
        $myBio->avatar = '/storage/' . str_replace('public/', '', $name);
        $myBio->save();
        $this->avatar = '/storage/' . str_replace('public/', '', $name);
        $this->photo = null;
    }
}

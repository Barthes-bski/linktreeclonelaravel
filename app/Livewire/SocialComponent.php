<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\SocialMedia;

class SocialComponent extends Component
{

    public $socials;

    protected $rules = [
        'socials.*.url' => 'max:1000'
    ];

    public function mount()
    {
        $this->socials = SocialMedia::all();
    }
    public function render()
    {
        return view('livewire.socialmedia-component');
    }

    public function save()
    {
        foreach ($this->socials as $social)
        {
            $social->save();
        }
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Seo;
class SeoComponent extends Component
{

    public $seo;

    public $title;
    public $description;
    public $author;
    public $url;

    public function mount(){
        $this->seo = Seo::first();
        $this->title = $this->seo->title;
        $this->description = $this->seo->description;
        $this->author = $this->seo->author;
        $this->url = $this->seo->url;

    }

    public function render()
    {
        return view('livewire.seo-component');
    }

    public function update()
    {
        $seo = Seo::first();
        $seo->title = $this->title;
        $seo->description = $this->description;
        $seo->author = $this->author;
        $seo->url = $this->url;
        $seo->save();
    }
}

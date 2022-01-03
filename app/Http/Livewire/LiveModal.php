<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LiveModal extends Component
{
    public $showModal = 'hidden';
    public $name, $alias, $image, $enabled;
    protected $listeners = ['showModal'];

    public function render()
    {
        return view('livewire.live-modal');
    }

    public function showModal($cryptocurrency){
        if (!empty($cryptocurrency)){
            $cryptocurrency->name = $this->name;
            $cryptocurrency->alias = $this->alias;
            $cryptocurrency->image = $this->image;
            $cryptocurrency->enabled = $this->enabled;
            $cryptocurrency->save();
        }

        $this->showModal = '';
    }

    public function closeModal(){
        $this->showModal = 'hidden';
    }
}

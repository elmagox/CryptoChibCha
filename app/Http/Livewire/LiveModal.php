<?php

namespace App\Http\Livewire;

use App\Models\Cryptocurrency;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class LiveModal extends Component
{
    use LivewireAlert;
    public $showModal = 'hidden';
    public $name, $alias, $image, $enabled, $id_crypto;
    protected $listeners = ['showModal'];


    public function render()
    {
        return view('livewire.live-modal');
    }

    public function showModal($cryptocurrency){
        if (!empty($cryptocurrency)){
            $this->id_crypto = $cryptocurrency["id"];
            $this->name = $cryptocurrency["name"];
            $this->alias = $cryptocurrency["alias"];
            $this->image = $cryptocurrency["image"];
            $this->enabled = $cryptocurrency["enabled"];
        }

        $this->showModal = '';
    }

    public function save(){
        if(!empty($this->id_crypto)){
            $cryptocurrency = Cryptocurrency::find($this->id_crypto);
            $cryptocurrency->name = $this->name;
            $cryptocurrency->alias = $this->alias;
            $cryptocurrency->image = $this->image;
            $cryptocurrency->enabled = $this->enabled;
            $cryptocurrency->save();
            $this->alert('info', 'Crypto updated!');
            $this->emit('refreshList');
            $this->reset();
            $this->closeModal();
        }else{
            Cryptocurrency::create([
                "name" => $this->name,
                "alias" => $this->alias,
                "image" => $this->image,
                "enabled" => $this->enabled
            ]);
            $this->alert('success', 'Crypto created!');
            $this->emit('refreshList');
            $this->reset();
            $this->closeModal();
        }
    }

    public function closeModal(){
        $this->showModal = 'hidden';
    }
}

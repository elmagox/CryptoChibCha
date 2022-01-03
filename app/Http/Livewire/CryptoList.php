<?php

namespace App\Http\Livewire;

use App\Models\Cryptocurrency;
use App\Models\PreferredCryptoUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class CryptoList extends Component
{
    public $cryptocurrencies = [];
    public $preferreds = [];
    public $search = '';


    public function mount(){
        $this->cryptocurrencies = Cryptocurrency::all();
        $this->getPreferred();
    }
    public function render()
    {
        if(!empty($this->search)) {
            $this->cryptocurrencies = Cryptocurrency::where('name', 'like', "%{$this->search}%")
                ->orWhere('alias','like',"%{$this->search}%")
                ->get();
        }
        $this->getPreferred();
        return view('livewire.crypto-list');
    }

    public function getPreferred(){
        $this->preferreds = DB::table('preferred_crypto_user AS pcu')
            ->join('cryptocurrencies AS c', 'pcu.cryptocurrency_id', '=', 'c.id')
            ->where('pcu.user_id', Auth::id())
            ->get();
    }

    public function addOrRemovePreferred($crypto_id){
        $crypto = DB::table('preferred_crypto_user')
            ->where('cryptocurrency_id', $crypto_id)
            ->where('user_id', Auth::id())
            ->first();
        if (!empty($crypto)){
            PreferredCryptoUser::destroy($crypto->id);
        }else{
            PreferredCryptoUser::create(
                [
                    'cryptocurrency_id' => $crypto_id,
                    'user_id' =>  Auth::id()
                ]
            );
        }
    }
    public function showModal(Cryptocurrency $cryptocurrency){
        $this->emit('showModal', $cryptocurrency);
    }
}

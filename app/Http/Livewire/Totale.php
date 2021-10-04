<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Totale extends Component
{
    public $listeners = ['itemsChanged'];
    public $totale;

    public function render()
    {
        return view('livewire.totale');
    }

    public function itemsChanged($items){
        $this->totale = 0.00;
        foreach($items as $item){
            // dd($item);
            if(isset($item['price']) && isset($item['qty'])  )
                $this->totale += ($item['price'] * $item['qty']);
        }
    }
}

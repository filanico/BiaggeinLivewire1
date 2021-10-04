<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Componente extends Component
{
    public $nuovo; 
    public $items;


    public function mount(){
        $this->items = [
            [
                'title' => 'Aspirina 100mg gusto parmigiana',
                'descr' => 'Ideale per quando sei in ufficio e hai voglia di frecare a mangiare..',
                'price' => rand(10, 75),
                'qty' => rand(1,5),
            ]
        ];
    }   
    public function elimina($k){
        unset($this->items[$k]);
        $this->emit('itemsChanged',$this->items);
    }
    public function aggiungi(){
        $this->items[] = [
            'title' => $this->nuovo,
            'descr' => 'Non definita',
            'price' => rand(10, 75),
            'qty' => rand(1,5),
        ];
        $this->emit('itemsChanged',$this->items);
    }
    public function render()
    {
        return view('livewire.componente');
    }
}

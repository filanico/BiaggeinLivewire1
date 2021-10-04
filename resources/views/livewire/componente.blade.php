<div>
    <input wire:model="nuovo" /> <a href="javascript:;" wire:click.prevent="aggiungi">Aggiungi</a>

    <ul>
    @foreach($items as $k => $item)
        <li>{{ $item['title'] }}<br>&euro;{{$item['price']}}<br>{{$item['qty']}} pz <small>{{ $item['descr'] }}</small> <a href="javascript:;" wire:click.prevent="elimina({{$k}})">elimina</a> </li>
    @endforeach
    </ul>
</div>

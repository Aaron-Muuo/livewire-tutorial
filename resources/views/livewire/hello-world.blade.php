<div>

    <input type="text" wire:model="name">
    {{-- <input type="text" wire:model.lazy="name"> --}}
    {{-- <input type="text" wire:model.debounce.1000ms="name"> --}}

    <input type="checkbox" wire:model="loud">

    <select wire:model="greeting">
        <option >Hello</option>
        <option >Goodbye</option>
        <option >Adios</option>
        <option >Niaje</option>

    </select>


    {{ $greeting }} there {{ $name }} @if($loud) ! @endif
</div>
 
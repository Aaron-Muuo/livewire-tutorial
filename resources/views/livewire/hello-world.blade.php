<div>

    <input type="text" wire:model="name">
    {{-- <input type="text" wire:model.lazy="name"> --}}
    {{-- <input type="text" wire:model.debounce.1000ms="name"> --}}

    <input type="checkbox" wire:model="loud">


       <select wire:model="greeting">
            <option>Hello</option>
            <option>Goodbye</option>
            <option>Adios</option>
            <option>Niaje</option>
       
        </select>
  


    {{ $greeting }} there {{ $name }} @if($loud) ! @endif

    <button wire:click="resetName('Bingo')">Reset name</button>

    {{-- <button wire:click="refresh">Refresh</button> --}}

    {{-- shortcut helper --}}
    {{-- <button wire:click="$set('name' 'Bingo')">Reset name</button> --}}

     {{-- other attributes --}}
    {{-- <button wire:click="resetName($event.target.innerText)">Reset name again</button> --}}
    {{-- <button wire:mouseenter="resetName()">Reset name again</button> --}}
    {{-- <button wire:keydown="resetName()">Reset name again</button> --}}

    <form action="#" wire:submit.revent="submitForm()">
         <button>Submit form</button>
    </form>

    <hr>

    {{-- you can also nest other livewore components --}}

    {{-- @foreach ($collection as $item)
        @livewire('say-hi', ['item'=> $item], key($ame->id))
    @endforeach --}}

    {{-- the name->id helps livewire to keep track of the loop. make sure the mount method of the say-hi acepts the item ad parameter and initialize its public proprtty with the passed value --}}

    {{-- you can as well pass eloqunt models and their ids, then the mount method will accept data type of the model --}}

</div>
 
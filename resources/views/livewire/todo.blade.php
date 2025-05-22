<div>
    @foreach($items as $item)
        <div class="flex flex-row items-center mb-5">
            <button class="h-full mr-3 bg-white-800 p-1 mt-1 text-white rounded-sm outline-zinc-700 outline-1" wire:click="remove('{{ $item }}')">Done</button>
            <h1 class="h-full text-white">{{ $item }}</h1>
        </div>
    @endforeach

    <div class="flex-col">
        <input class="bg-white-800 p-1 mr-1 text-white rounded-sm outline-zinc-700 outline-1" type="text" wire:model="textContent" placeholder="Task name">
        <button class="text-white rounded-sm outline-zinc-700 outline-1 p-1" wire:click="add">Add</button>
    </div>
</div>

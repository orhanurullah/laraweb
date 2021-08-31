<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

    <button wire:click="state" type="button"
            class="bg-red-600 w-100 px-5">
        {{ $st ? 'Ok' : 'Not'}}
    </button>
</div>

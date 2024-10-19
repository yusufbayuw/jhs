<div class="p-3">
    <div class="pb-2">
        {{ $this->infolist }}
    </div>

    <div class="pt-3">
        <form wire:submit="create">
            {{ $this->form }}

            <div class="pt-3">
                <button type="submit"
                    class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm leading-6 font-bold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Pesan Sekarang</button>
            </div>
        </form>
        <x-filament-actions::modals />  
    </div>
</div>

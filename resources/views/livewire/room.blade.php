<div>
    <div>
        {{ $this->infolist }}
    </div>

    <div>
        <form wire:submit="create">
            {{ $this->form }}

            <button type="submit">
                Submit
            </button>
        </form>
        <x-filament-actions::modals />  
    </div>
</div>

<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div>
    <form wire:submit="create">
        {{ $this->form }}
        
        <button type="submit">
            Submit
        </button>
    </form>

    {{ $this->saveProfile }}
    
    <x-filament-actions::modals />
</div>
</div>

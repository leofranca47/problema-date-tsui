<div class="w-60 flex flex-col space-y-4">
    <x-date format="DD/MM/YYYY" wire:model="form.data"/>
    <x-input wire:model.live.debounce.500ms="form.cep"/>
    <x-input wire:model="form.resultado"/>
</div>

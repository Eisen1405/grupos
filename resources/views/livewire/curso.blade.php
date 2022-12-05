<div class="my-5 d-flex justify-content-center flex-column align-items-center">
    <div class="border border-2 mb-5 p-3">
        <h2 class="text-center">
            {{ $contador }}
        </h2>
    </div>
    <input type="number" class="form-control w-25" wire:model='contador'>
    <button class="btn btn-lg btn-primary mb-3" wire:click="incremento">+</button>
    <button class="btn btn-lg btn-primary mb-3" wire:click="borrar">-</button>
    <button class="btn btn-lg btn-primary" wire:click="en0">Reiniciar cuenta</button>
</div>

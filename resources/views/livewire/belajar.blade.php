<div>

    <div class="mb-3">
        <input type="number" class="form-control" wire:model = "jumlah" value={{ $jumlah }}>
        <div class="mt-3">
            <button class="btn btn-primary" wire:click="plus"> + Plus</button>
            @if ($jumlah > 0)
                <button class="btn btn-danger" wire:click="mines" > - Mines</button>
            @endif
        </div>
    </div>
    
</div>

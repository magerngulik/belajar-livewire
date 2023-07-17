<div>

    <div class="mb-3">
        
        {{-- <div class="mb-2">
            <input type="radio" name="radio" value="laki - laki" wire:model.lazy="name"> laki laki
            <input type="radio" name="radio" value="perempuan" wire:model.debounce.500ms="name"> perempuan
        </div>

        <select class="form-select" name="" id="" wire:model="name">
            <option value="laki - laki">Laki Laki</option>
            <option value="perempuan">Perempuan </option>
        </select> --}}
        {{-- <input  class="form-control mb-3" wire:model.lazy="name" @if ($check == false)
         type="text"
        @else
         type="password"
        @endif>

        <div class="form-check">
            <input type="checkbox" class="form-check-input"  wire:model="check"> 
            <label for="" class="form-label"> show password</label>
        </div> --}}
    </div>
    <h2 class="text-danger">Halo nama saya adalah {{ $name }}</h2>
</div>

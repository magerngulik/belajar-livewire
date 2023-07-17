<div>
    <div class="card">
        <div class="card-header">
            Form
        </div>
          @include('my_component.alert_success')
        <div class="card-body">
            <form class="row" wire:submit.prevent="store">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model = "name">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }} 
                        </div>   
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" wire:model = "email">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }} 
                    </div>   
                @enderror      
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" 
                    class="form-control @error('password') is-invalid @enderror" wire:model = "password">
                    @error('password')
                    <div class="invalid-feedback">
                        {{ $message }} 
                    </div>   
                
                @enderror

                </div>
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
           
        </div>
        
    </div>
</div>

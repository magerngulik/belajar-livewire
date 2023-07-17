<div>
    <div class="card">
        <div class="card-header">
            Form
        </div>
            @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
        <div class="card-body">
            <form class="row" wire:submit.prevent="update">
           
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
                <div class="form-group">
                    <button type="submit" class="btn btn-warning">Update Data</button>
                    <a href="{{ route('user.home') }}" class="btn btn-primary">Kembali</a>
                    
                </div>
                </div>
               
            </div>
           
        </div>
        
    </div>
</div>

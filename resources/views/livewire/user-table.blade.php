<div>
    <div class="mt-3">
      @include('my_component.alert_success')
        <div class="card">
          <div class="card-body">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @empty($users)
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                  <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                  <div>
                    Data Kosong
                  </div>
                </div>
                @endempty

                @foreach ($users as $index => $item)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    
                    <td>
                        <a href="{{ route('user.detail',$item->id) }}" class="badge bg-primary">Lihat</a>
                        <a href="{{ route('user.edit',$item->id) }}" class="badge bg-warning">Edit</a>
                        <button class="btn badge bg-danger" wire:click ="delete({{ $item['id'] }})">Delete </button>
                    </td>
                  </tr>
                @endforeach
            
              </tbody>
            </table>  
          </div>
        </div>
         
    
      
     </div>

  
</div>

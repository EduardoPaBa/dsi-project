<div class="" style="float: center; margin: 5rem; ">
<div class="row">
        <div class="col">
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col mb-2">
                            <input type="text" class="form-control" wire:model="search">
                        </div>
                       
                    </div>
                    <br>
                   
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                
                                <th scope="col">Nombre Usuario</th>
                                <th scope="col">Email </th>
                                <th scope="col">Fecha Registro</th>
                                
                                

                            </tr>
                        </thead>
                        <tbody>
                           
                                 @foreach($usuarios as  $user)
                                    <tr>
                                    
                                        
                                            <td class="border px-4 py-2">{{ $user->name}}</td>
                                            <td class="border px-4 py-2">{{ $user->email}}</td>
                                            <td class="border px-4 py-2">{{($user->created_at)}}</td>
                                     
                                    </tr>
                                @endforeach   
                            
                        </tbody>
                    </table>
                    {{ $usuarios->links() }}
                   
                </div>
            </div>
        </div>
        <div class="col">
        </div>
    </div>
    <br>
    <br>
</div>





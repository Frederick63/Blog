<div class="card">

    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Nombre de un Post">
    </div>

    @if ($users->count())
        
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Email</td>
                        <td></td>
                    </tr>

                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td width="10px">
                            <a class="btn btn-primary btn-sm" href="{{route('admin.users.edit',$user)}}">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{route('admin.users.destroy',$user)}}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>

                            </form>

                        </td>
                    </tr>
                        
                    @endforeach
                    
                </tbody>
            </table>

        </div>

        <div class="card-footer">
            {{$users->links()}}
        </div>
            
    @else
        <div class="card-body">
            <strong cla>No hay ningun registro...</strong>
        </div>

    @endif
</div>

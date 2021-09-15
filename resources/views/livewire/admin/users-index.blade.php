<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 xl-100">
            <div class="card">
                <div class="card-header">
                    <input wire:keydown="cleanPage" wire:model="search" class="form-control" type="text" placeholder="Escriba un nombre">
                </div>
                @if ($users->count())
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Email</th>
                            <th></th>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td width="10px">
                                        <a class="btn btn-primary"
                                            href="{{ route('admin.users.edit', $user) }}">Editar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                <div class="card-footer mx-auto">
                    {{ $users->links() }}
                </div>
                @else
                <div class="card-body">
                    <strong>No se encontraron registros...</strong>
                </div>
                 @endif
            </div>
        </div>
    </div>
</div>

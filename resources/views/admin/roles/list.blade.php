<x-admin-layout>
    @section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Roles List') }}
        </h2>
    </x-slot>


    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <!-- Bordered table -->
                <div class="col-md-124 my-4">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="flex-row mb-3">
                                <h5 class="card-title">Users list</h5>

                                <x-message />

                                {{-- <a href="{{ url()->previous() }}" class="btn btn-info">Back</a> --}}
                                @can('Article Create')
                                    <a href="{{ url('role/create') }}" class="btn btn-info">Role Create</a>
                                @endcan
                            </div>

                            <table class="table table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Id</th>
                                        <th scope="col">Role Name</th>
                                        <th scope="col">Permissions</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($roles->count())
                                        @foreach ($roles as $role)
                                            <tr>
                                                <td>{{ $role->id }}</td>
                                                <td>{{ $role->name }}</td>
                                                <td>{{ implode(',', $role->permissions->pluck('name')->toArray()) }}
                                                </td>
                                                <td>
                                                    <div>
                                                    @can('Roles_Assign Edit')
                                                        <a href="{{ url('role') }}/{{ $role->id }}"><span
                                                                class="fe fe-20 fe-edit p-1"></span></a>
                                                    @endcan


                                                    <form action="{{ url('role') }}/{{ $role->id }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')

                                                        <a type="submit"><span class="fe fe-20 fe-trash-2 p-1"
                                                                style="color: red;"></span> </a>
                                                    </form>
                                                    </div>
                                                </td>

                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- Bordered table -->

            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> <!-- .container-fluid -->
    @endsection
</x-admin-layout>

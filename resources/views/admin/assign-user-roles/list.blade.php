<x-admin-layout>
    @section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Role List') }}
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

                                <x-message/>

                                {{-- <a href="{{ url()->previous() }}" class="btn btn-info">Back</a> --}}
                                @can('Roles_Assign Create')
                                    <a href="{{ url('assign-role-user/create') }}" class="btn btn-info">Assign Role To User</a>
                                @endcan
                            </div>

                            <table class="table table-hover">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">Id</th>
                                      <th scope="col">User Name</th>
                                      <th scope="col">Roles</th>
                                      <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($users->count())
                                    @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @if (count($user->roles->pluck('name')->toArray()) > 0)
                                                {{ implode("," , $user->roles->pluck('name')->toArray()) }}
                                            @else
                                                No Role Assign
                                            @endif
                                        </td>
                                        <td>
                                            @can('Roles_Assign Edit')
                                            <a href="{{  url('assign-role-user') }}/{{ $user->id }}"><span class="fe fe-20 fe-edit p-1"></span></a>
                                            @endcan

                                            @can('Roles_Assign Delete')
                                            <form action="{{ url('assign-role-user') }}/{{ $user->id }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a type="submit"><span class="fe fe-20 fe-trash-2 p-1"
                                                    style="color: red;"></span> </a>
                                            </form>
                                            @endcan
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




<x-admin-layout>
    @section('content')
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">


                    <!-- Bordered table -->
                    <div class="col-md-124 my-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="flex-row mb-3">
                                    <h5 class="card-title">Users list</h5>
                                    @can('User Create')
                                        <a href="{{ url('user/create') }}" class="btn btn-info">Create</a>
                                    @endcan
                                </div>

                                <table class="table table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">Id</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Email Address</th>
                                            <th scope="col">Action</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                        @if ($users->count())
                                            @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    <div>
                                                        @can('User Edit')
                                                        <a href="{{ url('user') }}/{{ $user->id }}"><span class="fe fe-20 fe-edit p-1"></span></a>
                                                        @endcan

                                                        @can('User Delete')
                                                        <form action="{{ url('user') }}/{{ $user->id }}" method="post" onsubmit="return confirm('Are you sure you want to delete this User?');" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" style="background:none; border:none; color:red;">
                                                                <span class="fe fe-20 fe-trash-2 p-1"></span>
                                                            </button>
                                                        </form>
                                                        @endcan
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

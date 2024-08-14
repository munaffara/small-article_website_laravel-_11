<x-admin-layout>
    @section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Role') }}
        </h2>
    </x-slot>

    {{-- CSS Link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- Message componated --}}
                <a href="{{ url('role') }}" class="btn btn-info">Role List</a>
                <x-message/>

                <form class="p-5" action="{{ url('role') }}/{{ $role->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input name="name" value="{{ $role->name }}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    @if ($permissionGroups->count())
                        <div class="row">
                        @foreach ($permissionGroups as $permissionGroup)
                            <div class="col-md-4">
                                <div class="form-check">
                                    <h4>{{ $permissionGroup->name }}</h4>
                                    @if ($permissionGroup->permissions->count())
                                        @foreach ($permissionGroup->permissions as $permission)
                                            <input
                                                @if (in_array($permission->id, $role->permissions->pluck('id')->toArray()))
                                                    checked
                                                @endif
                                            value="{{ $permission->id }}" name="permission_ids[]" class="form-check-input" type="checkbox" value="">
                                            <label class="form-check-label" for="flexCheckDefault">
                                            {{ $permission->name }}
                                            </label> <br>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        @endforeach
                        </div>
                    @endif



                    <button type="submit" class="btn btn-primary">Update Role</button>
                </form>
            </div>
        </div>
    </div>
    @endsection
</x-admin-layout>

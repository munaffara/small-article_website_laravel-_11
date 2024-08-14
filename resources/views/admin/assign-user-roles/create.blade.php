<x-admin-layout>
    @section('content')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Assign Role to  User') }}
        </h2>
    </x-slot>

    {{-- CSS Link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- Message componated --}}
                <x-message/>
                <a href="{{ url('assign-role-user') }}" class="btn btn-info p-2">User Role List</a>
                
                <form class="p-5" action="{{ url('assign-role-user') }}" method="POST">
                    @csrf
                    <select name="user_id" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option value="">Select User</option>
                        @if ($users->count()>0)
                            @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->email }}</option>
                            @endforeach
                        @endif
                    </select>
                    <select name="role_names[]" multiple class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option value="">Select Role</option>
                        @if ($roles->count()>0)
                            @foreach ($roles as $role)
                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                            @endforeach
                        @endif
                    </select>
                    <button type="submit" class="btn btn-primary">Assign Role to User</button>
                </form>
            </div>
        </div>
    </div>
    @endsection
</x-admin-layout>




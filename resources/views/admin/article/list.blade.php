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
                                    <h5 class="card-title">Article list</h5>
                                    @can('Article Create')
                                        <a href="{{ url('article/create') }}" class="btn btn-info">Create</a>

                                    @endcan
                                </div>

                                <table class="table table-hover">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>ID</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($articles->count())
                                            @foreach ($articles as $article)
                                            <tr>
                                                <td>
                                                    <img src="{{ url("$article->image") }}" alt="" width="30" height="50">
                                                </td>
                                                <td>{{ $article->title }}</td>
                                                <td>{{ $article->description }}</td>
                                                <td>
                                                    @if ($article->status == 1)
                                                        <svg class="text-success-500 h-6 w-6 text-success" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" style="width: 30px; height: 30px;">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                        </svg>
                                                    @else
                                                        <svg class="h-6 w-6 text-danger " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true" style="width: 30px; height: 30px;">
                                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                        </svg>
                                                    @endif
                                                </td>

                                                <td>
                                                    <div>
                                                        @can('Article Edit')
                                                        <a href="{{ url('article') }}/{{ $article->id }}"><span class="fe fe-20 fe-edit p-1"></span></a>
                                                        @endcan

                                                        @can('Article Delete')
                                                        <form action="{{ url('article') }}/{{ $article->id }}" method="post" onsubmit="return confirm('Are you sure you want to delete this article?');" style="display:inline;">
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

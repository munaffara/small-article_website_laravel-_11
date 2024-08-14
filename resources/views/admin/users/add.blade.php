<x-admin-layout>
    @section('content')
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="h3 mb-4 page-title">Create User</h2>
                    <div class="my-4">
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <form action="{{ url('user') }}" method="POST" id="article-form" enctype="multipart/form-data">
                                    @csrf


                                    {{-- <div class="row mt-5 align-items-center">
                                        <div class="col-md-3 text-center mb-2">
                                            <!-- This is a placeholder; remove or change if necessary -->
                                            <div class="avatar avatar-xl">
                                                <img src="{{ asset('admin_assets/assets/avatars/placeholder.png') }}" alt="Profile Photo" class="avatar-img rounded-circle">
                                            </div>
                                        </div>
                                    </div> --}}

                                    <!-- Image Preview Section -->
                                    <div class="row mt-5 align-items-center">
                                        <div class="col-md-3 text-center mb-2">
                                            <div class="avatar avatar-xl">
                                                <img id="profile_photo_preview" src="{{ asset('admin_assets/assets/avatars/Poetry-rafiki.png') }}" alt="Profile Photo" class="avatar-img rounded-circle">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- File Upload Input -->
                                    <div class="form-group">
                                        <label for="profile_photo">Profile Photo</label>
                                        <input name="profile_photo" type="file" class="form-control" id="profile_photo" onchange="previewImage(event)">
                                    </div>


                                    <hr class="my-4">

                                    <!-- Form Fields -->
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <label for="name">Name</label>
                                            <input name="name" type="text" id="name" class="form-control">
                                        </div>
                                        {{-- <div class="form-group col-md-12">
                                            <label for="name">Password</label>
                                            <input name="password" type="password" id="name" class="form-control">
                                        </div> --}}
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input name="email" type="email" class="form-control" id="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input name="address" type="text" class="form-control" id="address">
                                    </div>

                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </form>
                            </div>
                        </div>
                    </div> <!-- /.card-body -->
                </div> <!-- /.col-12 -->
            </div> <!-- .row -->
        </div> <!-- .container-fluid -->
    @endsection

    @push('script')
    <script>
        function previewImage(event) {
            const input = event.target;
            const reader = new FileReader();

            reader.onload = function() {
                const image = document.getElementById('profile_photo_preview');
                image.src = reader.result;
            }

            if (input.files && input.files[0]) {
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

    @endpush
</x-admin-layout>

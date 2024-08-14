<x-admin-layout>
    @push('css')
    <style>
        .photo-img {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -10px;
            vertical-align: top;
            margin: 10px;
            position: relative;
            z-index: 1;
            width: 100%;
            height: 240px;
            border: 1px solid #f6f4f3;
            border-top-color: #fff;
            border-radius: 15px;
            background-color: #ffffff;
            padding: 18px;
            box-shadow: 0 0 2px 2px rgba(0, 0, 0, 0.15);
            background-repeat: no-repeat;
            background-size: 100% 240px;
            object-fit: cover;
        }

        .change-photo-lable {
            cursor: pointer;
            font-weight: 400;
            font-family: 'Open Sans', sans-serif;
            font-size: 15px;
            border: none;
            padding: 0 10px;
            color: #7d938e;
            display: flex;
            flex-wrap: wrap;
            text-align: left;
        }
    </style>
    @endpush

    @section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12">
            <h2 class="page-title">Edit Article</h2>

            <form action="{{ url('article') }}/{{ $article->id }}" method="post" id="article-form">
                @csrf
                @method('PUT')

                <!-- Article Image Section -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <div class="form-group mb-3">
                                    <h5 class="card-title">Article Image</h5>
                                </div>
                                <div class="">
                                    <div class="text-center">
                                        <input type="hidden" value="site_banner2" name="banner_name">
                                        <div class="photo-img" id="main_banner" style="background-image:url({{ asset("$article->image") }}); object-fit: cover; repeat: none;">
                                        </div>
                                        <label class="change-photo-lable" for="main_profile_pic2"><span>Choose Image</span></label>
                                        <input onchange="siteBanner2(this)" type="file" style="display:none;" name="article_image" class="main_banner" id="main_profile_pic2" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Title Section -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <h5 class="card-title">Title</h5>
                                    <input type="text" id="simpleinput" class="form-control" name="title" value="{{ $article->title }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Description Section -->
                <div class="row mb-4">
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="card-title">Body</h5>
                                <!-- Quill Editor Container -->
                                <div id="editor" style="min-height:100px;">
                                    {!! old('description', $article->description) !!}
                                </div>
                                <!-- Hidden Input to Store Description -->
                                <textarea name="description" id="description" style="display:none;"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Status Section -->
                <div class="card shadow mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group mb-3">
                                    <h5 class="card-title">Status</h5>
                                    <select class="form-control" name="status" id="example-select">
                                        <option {{ ($article->status == 1) ? 'selected' : ''}} value="1">Public</option>
                                        <option {{ ($article->status == 0) ? 'selected' : ''}} value="0">Private</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

          </div>
        </div>
      </div>
    @endsection

    @push('script')
    <script>
        // Initialize Quill editor with toolbar options
        var editor = document.getElementById('editor');
        if (editor) {
            var toolbarOptions = [
                [{ 'font': [] }],
                [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                ['bold', 'italic', 'underline', 'strike'],
                ['blockquote', 'code-block'],
                [{ 'header': 1 }, { 'header': 2 }],
                [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                [{ 'script': 'sub' }, { 'script': 'super' }],
                [{ 'indent': '-1' }, { 'indent': '+1' }],
                [{ 'direction': 'rtl' }],
                [{ 'color': [] }, { 'background': [] }],
                [{ 'align': [] }],
                ['clean']
            ];

            var quill = new Quill(editor, {
                modules: { toolbar: toolbarOptions },
                theme: 'snow'
            });
        }

        // Handle form submission
        document.getElementById('article-form').addEventListener('submit', function(event) {
            // Populate the hidden textarea with the content of the Quill editor
            document.getElementById('description').value = quill.root.innerHTML;

            // Log the content to console for debugging
            console.log('Description:', document.getElementById('description').value);

            // Prevent form submission if description is empty
            if (!document.getElementById('description').value.trim()) {
                event.preventDefault();
                alert('Description cannot be empty!');
            }
        });

        // Function to handle image preview
        function siteBanner2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('main_banner').style.backgroundImage = 'url(' + e.target.result + ')';
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    @endpush
</x-admin-layout>

<x-admin-layout>
    @section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-12 col-lg-10 col-xl-8">
            <h2 class="h3 mb-4 page-title">Profile Settings</h2>
            <div class="my-4">
              <form>
                <div class="row mt-5 align-items-center">
                  <div class="col-md-3 text-center mb-2">
                    <div class="avatar avatar-xl">
                      <img src="./assets/avatars/Poetry-amico.png" alt="..." class="avatar-img rounded-circle">
                      <h4 class="mb-1" style="font-size: 18px; color: gray;">Brown, Asher</h4>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="firstname">Firstname</label>
                    <input type="text" id="firstname" class="form-control" placeholder="Brown">
                  </div>
                  <div class="form-group col-md-6">
                    <label for="lastname">Lastname</label>
                    <input type="text" id="lastname" class="form-control" placeholder="Asher">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputEmail4">Email</label>
                  <input type="email" class="form-control" id="inputEmail4" placeholder="brown@asher.me">
                </div>
                <div class="form-group">
                  <label for="inputAddress5">Address</label>
                  <input type="text" class="form-control" id="inputAddress5" placeholder="P.O. Box 464, 5975 Eget Avenue">
                </div>
                <hr class="my-4">
                <div class="row mb-4">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label for="inputPassword4">Old Password</label>
                      <input type="password" class="form-control" id="inputPassword5">
                    </div>
                    <div class="form-group">
                      <label for="inputPassword5">New Password</label>
                      <input type="password" class="form-control" id="inputPassword5">
                    </div>
                    <div class="form-group">
                      <label for="inputPassword6">Confirm Password</label>
                      <input type="password" class="form-control" id="inputPassword6">
                    </div>
                  </div>

                </div>
                <button type="submit" class="btn btn-primary">Save Change</button>
              </form>
            </div> <!-- /.card-body -->
          </div> <!-- /.col-12 -->
        </div> <!-- .row -->
      </div> <!-- .container-fluid -->
    @endsection
</x-admin-layout>

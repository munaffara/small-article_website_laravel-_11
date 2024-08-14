<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @section('content')

                    <div class="container-fluid">
                      <div class="row justify-content-center">
                        <div class="col-12">
                          <div class="row align-items-center mb-2">
                            <div class="col">
                              <h2 class="h5 page-title">Welcome!</h2>
                            </div>
                            <div class="col-auto">
                              <form class="form-inline">
                                <div class="form-group d-none d-lg-inline">
                                  <label for="reportrange" class="sr-only">Date Ranges</label>
                                  <div id="reportrange" class="px-2 py-2 text-muted">
                                    <span class="small"></span>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <button type="button" class="btn btn-sm"><span class="fe fe-refresh-ccw fe-16 text-muted"></span></button>
                                  <button type="button" class="btn btn-sm mr-2"><span class="fe fe-filter fe-16 text-muted"></span></button>
                                </div>
                              </form>
                            </div>
                          </div>
                          <!-- widgets -->
                          <div class="row my-4">
                            <div class="col-md-4">
                              <div class="card shadow mb-4">
                                <div class="card-body">
                                  <div class="row align-items-center">
                                    <div class="col">
                                      <small class="text-muted mb-1">Page Views</small>
                                      <h3 class="card-title mb-0">1168</h3>
                                      <p class="small text-muted mb-0"><span class="fe fe-arrow-down fe-12 text-danger"></span><span>-18.9% Last week</span></p>
                                    </div>
                                    <div class="col-4 text-right">
                                      <span class="sparkline inlineline"></span>
                                    </div>
                                  </div> <!-- /. row -->
                                </div> <!-- /. card-body -->
                              </div> <!-- /. card -->
                            </div> <!-- /. col -->
                            <div class="col-md-4">
                              <div class="card shadow mb-4">
                                <div class="card-body">
                                  <div class="row align-items-center">
                                    <div class="col">
                                      <small class="text-muted mb-1">Conversion</small>
                                      <h3 class="card-title mb-0">68</h3>
                                      <p class="small text-muted mb-0"><span class="fe fe-arrow-up fe-12 text-warning"></span><span>+1.9% Last week</span></p>
                                    </div>
                                    <div class="col-4 text-right">
                                      <span class="sparkline inlinepie"></span>
                                    </div>
                                  </div> <!-- /. row -->
                                </div> <!-- /. card-body -->
                              </div> <!-- /. card -->
                            </div> <!-- /. col -->
                            <div class="col-md-4">
                              <div class="card shadow mb-4">
                                <div class="card-body">
                                  <div class="row align-items-center">
                                    <div class="col">
                                      <small class="text-muted mb-1">Visitors</small>
                                      <h3 class="card-title mb-0">108</h3>
                                      <p class="small text-muted mb-0"><span class="fe fe-arrow-up fe-12 text-success"></span><span>37.7% Last week</span></p>
                                    </div>
                                    <div class="col-4 text-right">
                                      <span class="sparkline inlinebar"></span>
                                    </div>
                                  </div> <!-- /. row -->
                                </div> <!-- /. card-body -->
                              </div> <!-- /. card -->
                            </div> <!-- /. col -->
                          </div> <!-- end section -->
                          <!-- linechart -->
                          <div class="my-4">
                            <div id="lineChart"></div>
                          </div>
                          <div class="row">
                            <div class="col-md-6">
                              <div class="card shadow mb-4">
                                <div class="card-header">
                                  <strong>Goal</strong>
                                </div>
                                <div class="card-body px-4">
                                  <div class="row border-bottom">
                                    <div class="col-4 text-center mb-3">
                                      <p class="mb-1 small text-muted">Completions</p>
                                      <span class="h3">26</span><br />
                                      <span class="small text-muted">+20%</span>
                                      <span class="fe fe-arrow-up text-success fe-12"></span>
                                    </div>
                                    <div class="col-4 text-center mb-3">
                                      <p class="mb-1 small text-muted">Goal Value</p>
                                      <span class="h3">$260</span><br />
                                      <span class="small text-muted">+6%</span>
                                      <span class="fe fe-arrow-up text-success fe-12"></span>
                                    </div>
                                    <div class="col-4 text-center mb-3">
                                      <p class="mb-1 small text-muted">Conversion</p>
                                      <span class="h3">6%</span><br />
                                      <span class="small text-muted">-2%</span>
                                      <span class="fe fe-arrow-down text-danger fe-12"></span>
                                    </div>
                                  </div>
                                  <table class="table table-borderless mt-3 mb-1 mx-n1 table-sm">
                                    <thead>
                                      <tr>
                                        <th class="w-50">Goal</th>
                                        <th class="text-right">Conversion</th>
                                        <th class="text-right">Completions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>Checkout</td>
                                        <td class="text-right">5%</td>
                                        <td class="text-right">260</td>
                                      </tr>
                                      <tr>
                                        <td>Add to Cart</td>
                                        <td class="text-right">55%</td>
                                        <td class="text-right">1260</td>
                                      </tr>
                                      <tr>
                                        <td>Contact</td>
                                        <td class="text-right">18%</td>
                                        <td class="text-right">460</td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div> <!-- .card-body -->
                              </div> <!-- .card -->
                            </div> <!-- .col -->
                            <div class="col-md-6">
                              <div class="card shadow mb-4">
                                <div class="card-header">
                                  <strong class="card-title">Top Selling</strong>
                                  <a class="float-right small text-muted" href="#!">View all</a>
                                </div>
                                <div class="card-body">
                                  <div class="list-group list-group-flush my-n3">
                                    <div class="list-group-item">
                                      <div class="row align-items-center">
                                        <div class="col-3 col-md-2">
                                          <img src="./assets/products/p1.jpg" alt="..." class="thumbnail-sm">
                                        </div>
                                        <div class="col">
                                          <strong>Fusion Backpack</strong>
                                          <div class="my-0 text-muted small">Gear, Bags</div>
                                        </div>
                                        <div class="col-auto">
                                          <strong>+85%</strong>
                                          <div class="progress mt-2" style="height: 4px;">
                                            <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="list-group-item">
                                      <div class="row align-items-center">
                                        <div class="col-3 col-md-2">
                                          <img src="./assets/products/p2.jpg" alt="..." class="thumbnail-sm">
                                        </div>
                                        <div class="col">
                                          <strong>Luma hoodies</strong>
                                          <div class="my-0 text-muted small">Jackets, Men</div>
                                        </div>
                                        <div class="col-auto">
                                          <strong>+75%</strong>
                                          <div class="progress mt-2" style="height: 4px;">
                                            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="list-group-item">
                                      <div class="row align-items-center">
                                        <div class="col-3 col-md-2">
                                          <img src="./assets/products/p3.jpg" alt="..." class="thumbnail-sm">
                                        </div>
                                        <div class="col">
                                          <strong>Luma shorts</strong>
                                          <div class="my-0 text-muted small">Shorts, Men</div>
                                        </div>
                                        <div class="col-auto">
                                          <strong>+62%</strong>
                                          <div class="progress mt-2" style="height: 4px;">
                                            <div class="progress-bar" role="progressbar" style="width: 62%" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="list-group-item">
                                      <div class="row align-items-center">
                                        <div class="col-3 col-md-2">
                                          <img src="./assets/products/p4.jpg" alt="..." class="thumbnail-sm">
                                        </div>
                                        <div class="col">
                                          <strong>Brown Trousers</strong>
                                          <div class="my-0 text-muted small">Trousers, Women</div>
                                        </div>
                                        <div class="col-auto">
                                          <strong>+24%</strong>
                                          <div class="progress mt-2" style="height: 4px;">
                                            <div class="progress-bar" role="progressbar" style="width: 24%" aria-valuenow="24" aria-valuemin="0" aria-valuemax="100"></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div> <!-- / .list-group -->
                                </div> <!-- / .card-body -->
                              </div> <!-- .card -->
                            </div> <!-- .col -->
                          </div> <!-- .row -->

                        </div> <!-- /.col -->
                      </div> <!-- .row -->
                    </div> <!-- .container-fluid -->
                  

                @endsection
            </div>
        </div>
    </div>
</x-admin-layout>




<div class="modal fade" id="loginModal" tabindex="-1" role="">
    <div class="modal-dialog modal-login" role="document">
        <div class="modal-content">
            <div class="card card-signup card-plain">
                <form class="form" method="POST" action="{{url('/insert')}}">
                    @csrf
                <div class="modal-header">
                  <div class="card-header card-header-primary text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                      <i class="material-icons">clear</i>
                    </button>

                    <h4 class="card-title">INSERT</h4>
                    <div class="social-line">
                      <a  class="btn btn-just-icon btn-link btn-white">
                        {{-- <i class="fa fa-facebook-square"></i> --}}
                      </a>
                      <a  class="btn btn-just-icon btn-link btn-white">
                        {{-- <i class="fa fa-twitter"></i> --}}
                      <div class="ripple-container"></div></a>
                      <a  class="btn btn-just-icon btn-link btn-white">
                        {{-- <i class="fa fa-google-plus"></i> --}}
                      </a>
                    </div>
                  </div>
                </div>
                <div class="modal-body">

                        <p class="description text-center">Or Be Classical</p>
                        <div class="card-body">

                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><span class="material-icons">
                                        account_circle
                                        </span></div>
                                  </div>
                                  <input type="text" name="fname" class="form-control" placeholder="First Name...">
                                </div>
                            </div>
                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><span class="material-icons">
                                        people_outline
                                        </span></div>
                                  </div>
                                  <input type="text" name="lname" class="form-control" placeholder="Last Name...">
                                </div>
                            </div>

                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">email</i></div>
                                  </div>
                                  <input type="text" name="email" class="form-control" placeholder="Email...">
                                </div>
                            </div>

                        </div>

                </div>
                <div class="modal-footer justify-content-center">
                    <button type="submit" class="btn btn-primary btn-link btn-wd btn-lg">Insert</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editModal" tabindex="-1" role="">
    <div class="modal-dialog modal-login" role="document">
        <form action="{{url('/update')}}" method="post">
            @csrf
            <div class="modal-content">
            <div class="card card-signup card-plain">
                <div class="modal-header">
                  <div class="card-header card-header-primary text-center">
                    <h4 class="card-title">Edit</h4>
                    </div>
                  </div>
                </div>
                <div class="modal-body">

                        <div class="card-body">

                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><span class="material-icons">
                                        account_circle
                                        </span></div>
                                  </div>
                                  <input type="hidden" name="id" id="edit_id" class="form-control" >
                                  <input type="text" name="name" id="edit_fname" class="form-control" >
                                </div>
                            </div>
                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><span class="material-icons">
                                        people_outline
                                        </span></div>
                                  </div>
                                  <input type="text" name="lname" id="edit_lname" class="form-control" >
                                </div>
                            </div>

                            <div class="form-group bmd-form-group">
                                <div class="input-group">
                                  <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="material-icons">email</i></div>
                                  </div>
                                  <input type="text" name="email" id="edit_email" class="form-control" >
                                </div>
                            </div>

                        </div>

                </div>
                <div class="modal-footer justify-content-center">
                    <button type="submit" class="btn btn-primary btn-link btn-wd btn-lg">Edit</button>
                </div>
            </div>

        </div>
        </form>

    </div>
</div>

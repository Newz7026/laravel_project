<div class="modal fade" id="delModal" tabindex="-1" role="">
    <div class="modal-dialog modal-login" role="document">
        <div class="modal-content">
            <form action="{{ url('/delete') }}" method="post">
                @csrf
                <div class="card card-signup card-plain">
                    <div class="modal-header">
                        <div class="card-header card-header-primary text-center">
                            <h4 class="card-title">Delete</h4>
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
                                <input type="text" name="fname" id="del_fname" class="form-control">
                                <input type="hidden" name="id" id="id" class="form-control">
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer justify-content-center">
                    <button type="submit" class="btn btn-primary btn-link btn-wd btn-lg ">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

@extends('\admin\layout1')


@section('content')

<form action="{{ route('galleries.store') }}" enctype="multipart/form-data" method="POST"
    class=" container">
    @csrf
    @method('POST')
    <div class="p-4 bg-dark card-sm text-center rounded shadow-lg">

        <img src="https://res.cloudinary.com/mhmd/image/upload/v1564991372/image_pxlho1.svg" alt="" height="100"
            class="card-img card-img-top img-responsive">


        <div class="row py-4">
            <div class="col-lg-6 mx-auto">
                <div class="form-group col-auto">
                    <div class="input-group mb-2 p-2 rounded-pill bg-white shadow-sm">
                        <div class="input-group-prepend">
                            <label for="upload1" class="btn btn-light rounded-pill text-center ">
                                <i class="fa fa-searchengin font-weight-bolder"></i>
                            </label>
                        </div>
                        <input id="upload1" type="file" name="image" class="form-control border-0">
                    </div>
                    <small class="form-text text-muted"><i><u>
                                Your file should not be larger than 2 mb.</u></i>
                    </small>
                </div>
                <div class="form-group col-auto text-muted ">
                    <div class="input-group mb-2 p-2 shadow border rounded border-info ">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" value="Academic" name="category"
                                id="category1">
                            <label for="category1" class="custom-control-label">Academic</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" value="cocurricular" name="category"
                                id="category2">
                            <label for="category2" class="custom-control-label">Co-Curricular</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" value="sports" name="category"
                                id="category3">
                            <label for="category3" class="custom-control-label">Sports</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" value="awards" name="category"
                                id="category4">
                            <label for="category4" class="custom-control-label">Awards</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="custom-control-input" value="mwday" name="category"
                                id="category5">
                            <label for="category5" class="custom-control-label">Mary Ward Day</label>
                        </div>
                    </div>
                    <small class="form-text text-muted">
                        <i><u>
                                Category</u></i>
                    </small>
                </div>
                <div class="form-group col-auto">
                    <textarea placeholder="Enter Caption" class="form-control" id="mycaption" rows="3"
                        name="caption"></textarea>
                    <small class="form-text text-muted">
                        <i><u>
                                Caption</u></i>
                    </small>
                </div>
            </div>

        </div>

        <button type="submit" class="btn btn-primary">Upload <i class="fa fa-cloud-upload m-2 text-info"></i></button>
    </div>
</form>
@endsection

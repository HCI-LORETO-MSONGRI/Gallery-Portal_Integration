@extends('layouts.app')

@section('content')

<form action="{{ route('galleries.update',$gallery->id) }}" method="POST" class="container">
    @csrf
    @method('PUT')
    <div class="p-4 bg-dark card">
        <header class="text-center">
            <img src="https://res.cloudinary.com/mhmd/image/upload/v1564991372/image_pxlho1.svg" alt="" width="150"
                class="m-3">
        </header>

        <div class="row py-4">
            <div class="col-lg-6 mx-auto">
                <div class="form-group col-auto">
                    <div class="input-group mb-2 px-2 py-2 rounded-pill bg-white shadow-sm">
                        <input id="upload" type="file" name="image" class="form-control border-0">
                        <div class="input-group-append">
                            <label for="upload" class="btn btn-light m-0 rounded-pill px-4">
                                <i class="fa fa-cloud-upload mr-2 text-muted"></i>
                                <small class="text-uppercase font-weight-bold text-muted">Choose file</small>
                            </label>
                        </div>
                    </div>
                    <small class="form-text text-info"><figure class="figure">
                        <img class="figure-img img-fluid img-thumbnail"
                            src="/storage/gallery/{{$gallery->name}}" alt="{{$gallery->caption}}">
                        <figcaption class="figure-caption text-info">{{$gallery->name}}</figcaption>
                    </figure>
                    </small>
                </div>
                <div class="form-group col-auto text-muted">
                    <div class="input-group mb-2 px-2 py-2 shadow-sm">
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
                    <small class="form-text text-info">
                        <b>(
                            {{$gallery->category}})</b>
                    </small>
                </div>
                <div class="form-group col-auto">
                    <textarea placeholder="Enter Caption" class="form-control" id="mycaption" rows="3"
                        name="caption"></textarea>
                    <small class="form-text text-info">
                        <b>(
                            {{$gallery->caption}})</b>
                    </small>
                </div>
            </div>

        </div>
    
    <button type="submit" class="btn btn-primary">Update</button>
</div>
</form>
@endsection

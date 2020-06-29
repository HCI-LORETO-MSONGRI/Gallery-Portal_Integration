@extends('layouts.app')

@section('content')
<div class="w-100 p-2 m-2" role="navigation" id="navchoice">

    <ul class="nav nav-pills w-100  ">
        <li class="w-50   text-center">
            <a class="active w-75 btn btn-light rounded-pill" data-toggle="pill" href="#photos">Photo Gallery</a>
        </li>

        <li class="w-50   text-center">
            <a class="w-75 btn btn-light rounded-pill" data-toggle="pill" href="#vidz">Video Gallery</a>
        </li>
    </ul>

    <div class="tab-content container">

        <div class="tab-pane fade show active" id="photos">
            <div class="w-100 mb-2" role="navigation" id="p_navchoice">
                <ul class="nav nav-tabs nav-fill" id="p_myTab">
                    <li class="nav-item  active">
                        <a href="#p_academic" class="nav-link" data-toggle="tab">Academic</a>
                    </li>
                    <li class="nav-item  ">
                        <a href="#p_cocurricular" class="nav-link" data-toggle="tab">Co-Curricular</a>
                    </li>
                    <li class="nav-item  ">
                        <a href="#p_sports" class="nav-link" data-toggle="tab">Sports</a>
                    </li>

                    <li class="nav-item  ">
                        <a href="#p_awards" class="nav-link" data-toggle="tab">Awards</a>
                    </li>

                    <li class="nav-item  ">
                        <a href="#p_mwday" class="nav-link" data-toggle="tab">Mary Ward Day</a>
                    </li>
                </ul>

                <div class="tab-content container">
                    <div class="tab-pane  show active" id="p_academic">
                        {{-- Academic --}}
                        <div class="container">
                            <div class="row mt-3 mb-3 text-center text-lg-left">
                                @if(count($galleries)>0)
                                @foreach ($ac_galleries as $ac_gallery)
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="figure-img img-fluid img-thumbnail"
                                                src="/storage/gallery/{{$ac_gallery->name}}"
                                                alt="{{$ac_gallery->caption}}">
                                            <figcaption class="figure-caption text-justify">{{$ac_gallery->caption}}
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="p_cocurricular">
                        {{-- Co-Curricular--}}
                        <div class="container">
                            <div class="row mt-3 mb-3 text-center text-lg-left">
                                @if(count($galleries)>0)
                                @foreach ($cc_galleries as $cc_gallery)
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="figure-img img-fluid img-thumbnail"
                                                src="/storage/gallery/{{$cc_gallery->name}}"
                                                alt="{{$cc_gallery->caption}}">
                                            <figcaption class="figure-caption text-justify">{{$cc_gallery->caption}}
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="p_sports">
                        {{-- Sports --}}
                        <div class="container">
                            <div class="row mt-3 mb-3 text-center text-lg-left">
                                @if(count($galleries)>0)
                                @foreach ($sp_galleries as $sp_gallery)
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="figure-img img-fluid img-thumbnail"
                                                src="/storage/gallery/{{$sp_gallery->name}}"
                                                alt="{{$sp_gallery->caption}}">
                                            <figcaption class="figure-caption text-justify">{{$sp_gallery->caption}}
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="p_awards">
                        {{-- Awards --}}
                        <div class="container">
                            <div class="row mt-3 mb-3 text-center text-lg-left">
                                @if(count($galleries)>0)
                                @foreach ($aw_galleries as $aw_gallery)
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="figure-img img-fluid img-thumbnail"
                                                src="/storage/gallery/{{$aw_gallery->name}}"
                                                alt="{{$aw_gallery->caption}}">
                                            <figcaption class="figure-caption text-justify">{{$aw_gallery->caption}}
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="p_mwday">
                        {{-- Mary Ward Day --}}
                        <div class="container">
                            <div class="row mt-3 mb-3 text-center text-lg-left">
                                @if(count($galleries)>0)
                                @foreach ($mw_galleries as $mw_gallery)
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="figure-img img-fluid img-thumbnail"
                                                src="/storage/gallery/{{$mw_gallery->name}}"
                                                alt="{{$mw_gallery->caption}}">
                                            <figcaption class="figure-caption text-justify">{{$mw_gallery->caption}}
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane fade active" id="vidz">
            <div class="w-100 mb-2" role="navigation" id="v_navchoice">
                <ul class="nav nav-tabs nav-fill" id="v_myTab">
                    <li class="nav-item  ">
                        <a href="#v_academic" class="nav-link" data-toggle="tab">Academic</a>
                    </li>
                    <li class="nav-item  ">
                        <a href="#v_cocurricular" class="nav-link" data-toggle="tab">Co-Curricular</a>
                    </li>
                    <li class="nav-item  ">
                        <a href="#v_sports" class="nav-link" data-toggle="tab">Sports</a>
                    </li>

                    <li class="nav-item  ">
                        <a href="#v_awards" class="nav-link" data-toggle="tab">Awards</a>
                    </li>

                    <li class="nav-item  ">
                        <a href="#v_mwday" class="nav-link" data-toggle="tab">Mary Ward Day</a>
                    </li>
                </ul>

                <div class="tab-content container">
                    <div class="tab-pane fade active" id="v_academic">
                        <div class="container">
                            <div class="row mt-3 mb-3 text-center text-lg-left">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="figure-img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso2.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">Mary-Ward</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso3.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">Mary-Ward</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso4.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">Mary-Ward</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso5.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">Mary-Ward</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso6.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">Mary-Ward</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso8.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">Mary-Ward</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso11.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">Mary-Ward</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/msongari.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">Mary-Ward</figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="v_cocurricular">
                        <div class="container">
                            <div class="row mt-3 mb-3 text-center text-lg-left">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="figure-img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso2.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">vidzz</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso3.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">vidzz</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso4.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">vidzz</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso5.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">vidzz</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso6.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">vidzz</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso8.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">vidzz</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso11.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">vidzz</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/msongari.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">vidzz</figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="v_sports">
                        <div class="container">
                            <div class="row mt-3 mb-3 text-center text-lg-left">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="figure-img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso2.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">vidzz</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso3.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">vidzz</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso4.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">vidzz</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso5.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">vidzz</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso6.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">vidzz</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso8.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">vidzz</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso11.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">vidzz</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/msongari.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">vidzz</figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="v_awards">
                        <div class="container">
                            <div class="row mt-3 mb-3 text-center text-lg-left">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="figure-img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso2.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">vidzz</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso3.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">vidzz</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso4.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">vidzz</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso5.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">vidzz</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso6.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">vidzz</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso8.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">vidzz</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso11.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">vidzz</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/msongari.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">vidzz</figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="v_mwday">
                        <div class="container">
                            <div class="row mt-3 mb-3 text-center text-lg-left">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="figure-img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso2.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">vidzz</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso3.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">vidzz</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso4.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">vidzz</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso5.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">vidzz</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso6.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">vidzz</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso8.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">vidzz</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/mso11.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">vidzz</figcaption>
                                        </figure>
                                    </a>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <a href="#" class="d-block m-1 h-100">
                                        <figure class="figure">
                                            <img class="img img-fluid img-thumbnail"
                                                src="{{ asset('msongari/msongari.jpg') }}" alt="">
                                            <figcaption class="figure-caption text-justify">vidzz</figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="d-flex align-items-stretch blackoverlay navbar
        navbar-fixed-bottom
        text-center ">

    <div class="flex-fill d-flex flex-column">
        <div class="flex-fill">
            <img class="img img-rounded" src="{{ asset('msongari/logosmall.jpg') }}" alt="LCM">
        </div>

        <div class="flex-fill">
            <h4><small><i>Social Links</i></small></h4>
        </div>
        <div class="flex-fill d-flex flex-row">
            <div class="flex-fill">
                <a target="_blank" class="btn-floating btn-lg btn-tw" type="button" role="button"><i
                        class="fab fa-facebook"></i></a>
            </div>
            <div class="flex-fill">
                <a target="_blank" class="btn-floating btn-lg btn-tw" type="button" role="button"><i
                        class="fab fa-twitter"></i></a>
            </div>
            <div class="flex-fill">
                <a target="_blank" class="btn-floating btn-lg btn-tw" type="button" role="button">
                    <i class="fab fa-youtube"></i>
                </a>
            </div>
            <div class="flex-fill">
                <a target="_blank" class="btn-floating btn-lg btn-tw" type="button" role="button">
                    <i class="fab fa-google"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="flex-fill">
        <h4>Find us here <i class="fas fa-caret-down"></i></h4>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8459720356195!2d36.77266311445873!3d-1.2649717359593626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f19e74bc8257f%3A0xba1ba1f74cdb6ef!2sLoreto%20Convent%20Msongari!5e0!3m2!1sen!2ske!4v1589518015326!5m2!1sen!2ske"
            width="250" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0">
        </iframe>
        <h4><a target="_blank" href="https://goo.gl/maps/ExfznsHXjRt1ytjH8" class="btn btn-link"><i>view in Google
                    Maps<sup>&copy;</sup></i></a></h4>
    </div>

    <div class="flex-fill">
        <h4><b><i>Quick Links</i> <i class="fas fa-link"></i></b></h4>
    </div>

    <div class="flex-fill">
        <h4 style="text-decoration: underline;">
            <strong>
                <i>Opening hours</i>
            </strong>
        </h4>
        <div class="table-responsive">
            <table class="table table-borderless table-sm text-info">
                <thead class="thead-dark">
                    <th>Day</th>
                    <th>Time(s)</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Monday</td>
                        <td>8.00AM-500PM</td>
                    </tr>
                    <tr>
                        <td>Tuesday</td>
                        <td>8.00AM-500PM</td>
                    </tr>
                    <tr>
                        <td>Wednesday</td>
                        <td>8.00AM-500PM</td>
                    </tr>
                    <tr>
                        <td>Thursday</td>
                        <td>8.00AM-500PM</td>
                    </tr>
                    <tr>
                        <td>Friday</td>
                        <td>8.00AM-500PM</td>
                    </tr>
                    <tr>
                        <td>Saturday</td>
                        <td>Not Open</td>
                    </tr>
                    <tr>
                        <td>Sunday</td>
                        <td>Not Open</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</footer>
@endsection


@extends('store.master')
@push('css')
    <style>

        body{
            background-color: whitesmoke;
        }
        .radius{
            border: 1px solid lightblue;
            border-radius: 15px;
            box-shadow: 2px 3px 3px cyan;
            background-color: floralwhite;
            min-height: 550px;

        }
        .slice-radius{
            border: 1px solid lightblue;
            border-radius: 15px;
            box-shadow: 2px 3px 3px gray;
        }
        .radius-search{
            border: 1px solid lightblue;
            border-radius:15px 15px 12px 12px;
            box-shadow: 2px 3px 3px gray;
            background-color: floralwhite;
        }
        .btn-radius{
            border-radius: 0px 12px 12px 0px !important;
        }
        .input-radius{
            border-radius: 12px 0px 0px 12px !important;
        }
        @media (min-width: 576px) {
            .radius-bottom{
                margin-top: 1rem !important;

            }

         }
         .top-radius{
            border-radius: 12px 12px 0px 0px;
         }
         .bottom{
            position: absolute;
            bottom:0px;
            width:100%;
            margin-right: -15px;
            margin-left: -15px;
            border-radius: 0px 0px 12px 12px;

         }
         .relative{
             position: relative;
         }

    </style>
    @endpush
    @section('content')
    <article class="row">
            <div class="col-sm-5 m-auto">
                    @if(session()->has('Inserted'))
                    <div class="alert alert-success" role="alert">
                        {{session('Inserted')}}
                    </div>
                @endif

                @if(session()->has('errorInserted'))
                    <div class="alert alert-danger" role="alert">
                            {{session('errorInserted')}}
                    </div>
                @endif
            </div>
        </article>

    <section class="radius mt-1 container-fluid relative">
        <article class="row bg-dark top-radius">

            <div class="col-sm-8 col-md-8 col-lg-6 mx-auto p-0 mt-3 mb-0 pb-0 radius-search d-flex h-100">
                    <form class="align-content-center w-100" action="{{route('store')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="input-group ">
                            <input type="text" class="form-control input-radius" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-success btn-radius" type="button">Search</button>
                            </div>
                        </div>
                    </form>
            </div>

            <div class="col-sm-3 col-md-3 col-lg-2 mx-auto p-0 mb-3 radius-bottom d-flex justify-content-center h-100">
                <a href="{{route('insert')}}" class="btn btn-primary align-content-center col-sm-6">New Link</a>
                <button class="btn btn-primary align-content-center col-sm-6">log in</button>
            </div>
        </article>
        <article class="row">
            <div class=" col-sm-12 col-lg-10 col-md-12 m-auto px-1  pt-2">
                @foreach ($all as $item)
                    <div class="bg-dark text-white mx-auto my-2 slice-radius px-3 py-1 row">
                        <h3 class="col-md-8 col-lg-9 col-sm-12">{{$item->header}}</h3>
                        <div class="col-md-4 col-lg-3 col-sm-12 d-flex justify-content-center row p-0 m-0">
                            <a class="col-md-4 col-sm-2 col-3 btn btn-primary" target="_black" href="{{$item->link}}">go link</a>
                            {{--  change post   --}}
                            <form class="col-md-4 col-sm-2 col-3 p-0 m-0" action="{{route('change')}}" method="POST">
                                    {{ csrf_field() }}
                                <input type="hidden" value="{{$item->link}}" name="url" id="url">
                                <button class="col-12 btn btn-danger">change</button>
                            </form>

                            {{--  delete post   --}}
                            <form class="col-md-4 col-sm-2 col-3 p-0 m-0" action="{{route('delete')}}" method="POST">
                                    {{ csrf_field() }}
                                <input type="hidden" value="{{$item->link}}" name="url" id="url">
                                <button class="col-12 btn btn-danger">delete</button>
                            </form>
                        </div>
                    </div>
                @endforeach

            </div>
        </article>
        <article class="d-flex justify-content-center bg-dark bottom">
                <div class=" text-danger row pb-0 ">
                    <span class="col-5 d-flex justify-content-center align-self-center m-auto d-flex ">
                        <sapn class="m-auto"><p>{{ $all->links() }}</p><span>
                    </span>
                </div>
        </article>
    </section>
@endsection

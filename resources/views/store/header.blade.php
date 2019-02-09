@push('css')
<style>

    body{
        background-color: currentColor;
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
    .home-radius{
        border-radius: 12px;
    }


</style>
@endpush



<article class="row bg-dark top-radius">

        <div class="col-sm-6 col-md-6 col-lg-5 mx-auto p-0 mt-3 mb-0 pb-0 radius-search d-flex h-100">
        {{-- <div class="col-sm-8 col-md-8 col-lg-6 mx-auto p-0 mt-3 mb-0 pb-0 radius-search d-flex h-100"> --}}
                <form class="align-content-center w-100" action="{{route('search-post')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="input-group ">
                        <input type="text" class="form-control input-radius" name="search" placeholder="Recipient's username" aria-label="Recipient's username" value="{{Session::get('search_value')}}" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-outline-success btn-radius" type="submit">Search</button>
                        </div>
                    </div>
                </form>
            </div>




        <div class="col-sm-4 col-md-4 col-lg-3 mx-auto p-0 mb-3 radius-bottom d-flex justify-content-center h-100">

            <a href="{{route('insert')}}" class="btn btn-primary align-content-center col-lg-5 col-md-5 col-sm-4">New Link</a>
            <a class="btn btn-light w-50" href="{{route('home')}}">Home</a>

            <div class="input-group align-content-center px-0 col-sm-10">
                    <div class="input-group-append col-12 m-0 p-0">
                        @guest
                            <a class="btn btn-info align-content-center col-sm-8 col-md-6 col-lg-5" href="{{route('mylogin')}}">log in</a>
                        @else
                        <span class="btn btn-info align-content-center col-sm-7 text-truncate" href="">{{ Auth::user()->name }}</span>
                        @endguest

                        <button type="button" class="col-sm-3 col-md-2  btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            @guest
                                <a class="dropdown-item" href="{{route('myregister')}}">sign up</a>
                            @else
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                {{ csrf_field() }}
                                <button type="submit" class="dropdown-item" href="{{ route('logout') }}">logout </button>
                            </form>
                            @endguest
                        </div>
                    </div>
                </div>
        </div>
    </article>

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



</style>
@endpush



<article class="row bg-dark top-radius">

        <div class="col-sm-8 col-md-8 col-lg-6 mx-auto p-0 mt-3 mb-0 pb-0 radius-search d-flex h-100">
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

        <div class="col-sm-3 col-md-3 col-lg-2 mx-auto p-0 mb-3 radius-bottom d-flex justify-content-center h-100">
            <a href="{{route('insert')}}" class="btn btn-primary align-content-center col-sm-6">New Link</a>
            <div class="input-group align-content-center px-0 col-sm-6">
                    <div class="input-group-append col-12 m-0 p-0">
                        <a class="btn btn-info align-content-center col-sm-8" href="login/login">log in</a>

                        <button type="button" class="col-sm-4  btn btn-outline-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="register">sign up</a>
                        </div>
                    </div>
                </div>
        </div>
    </article>

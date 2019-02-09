@if(session()->has('Inserted'))
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header bg-success">
            </div>
            <div class="modal-body ">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                {{session('Inserted')}}
            </div>
            </div>
        </div>
    </div>

@endif

@if(session()->has('errorInserted'))
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header bg-danger">
            </div>
            <div class="modal-body ">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{session('errorInserted')}}
            </div>
            </div>
        </div>
    </div>
@endif



{{-- error validtion form --}}
@if ($errors->any())
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header bg-danger">
        </div>
        <div class="modal-body ">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </div>
        </div>
    </div>
</div>
@endif











@push('js')
    <script>
        $('#exampleModal').modal();
            setTimeout(function() {
                $('#exampleModal').modal('hide');
            }, 4500);

    </script>
@endpush

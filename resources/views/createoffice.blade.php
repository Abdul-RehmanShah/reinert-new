@extends('welcome')

@section('page_title', 'Create Office Data')


@section('content')
<body>
    <div class="card"> 
    <form method="post" action="{{route('stoor')}}">
        @csrf 
        @method('post')

        <h4 class="card-title">Büro Information</h4>
        <div>
            @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
            @endif
            </div>
        <div class="form-group row">
            <label
            for="Floor_id"
            class="col-sm-3 text-end control-label col-form-label"
            >Etage-ID</label
            >
            <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="Floor_id" 
                name="Floor_id"
                placeholder=""
            />
            </div>
        </div>
        </div>
        <div class="form-group row">
            <label
            for="Name"
            class="col-sm-3 text-end control-label col-form-label"
            >Name</label
            >
            <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="Name" 
                name="Name"
                placeholder=""
            />
            </div>
        </div>
        <div class="form-group row">
            <label
            for="size"
            class="col-sm-3 text-end control-label col-form-label"
            >Größe</label
            >
            <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="size" 
                name="size"
                placeholder=""
            />
            </div>
        </div>
        <div class="form-group row">
            <label
            for="NoOfRooms"
            class="col-sm-3 text-end control-label col-form-label"
            >Anzahl der Zimmer</label
            >
            <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="NoOfRooms" 
                name="NoOfRooms"
                placeholder=""
            />
            </div>
        </div>
        
        <div class="border-top">
        <div class="card-body d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">
            Submit
        </button>
        </div>
        </div>


    </form>
</body>
@endsection



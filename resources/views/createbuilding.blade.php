@extends('welcome')

@section('page_title', 'Create Building Data')


@section('content')
<body>
    <div class="card"> 
    <form method="post" action="{{route('stored')}}">
        @csrf 
        @method('post')

        <h4 class="card-title">Gebäude Information</h4>
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
            for="NoOfFloors"
            class="col-sm-3 text-end control-label col-form-label"
            >Anzahl der Etagen</label
            >
            <div class="col-sm-9">
            <input
                type="text"
                class="form-control"
                id="NoOfFloors" 
                name="NoOfFloors"
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



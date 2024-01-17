@extends('welcome')

@section('page_title', 'Building')

@section('content')
<div class="card"> 
    <div class="card-body">
        <h2>Gebäude</h2>
        <div class="d-flex justify-content-end">
            <a href="{{ route('createbuilding')}}" class="btn btn-info btn-lg">
                Create Building
            </a>
        </div>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>ID</strong></th>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Name</strong></th>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Anzahl der Etagen</strong></th>
                </tr>
            </thead>
            <tbody>
                 @foreach($building as $values)
                    <tr>
                        <td style="width: 5%; white-space: nowrap;" class="text-center">{{ $values->id }}</td>
                        <td style="width: 5%; white-space: nowrap;" class="text-center">{{ $values->Name }}</td>
                        <td style="width: 5%; white-space: nowrap;" class="text-center">{{ $values->NoOfFloors }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

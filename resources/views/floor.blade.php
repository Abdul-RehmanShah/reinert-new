@extends('welcome')

@section('page_title', 'Floor')

@section('content')
<div class="card"> 
    <div class="card-body">
        <h2>Etage</h2>
        <div class="d-flex justify-content-end">
            <a href="{{ route('createfloor')}}" class="btn btn-info btn-lg">
                Create Floor
            </a>
        </div>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>ID</strong></th>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Gebäude-ID</strong></th>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Name</strong></th>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Größe</strong></th>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Anzahl der Geschäftsräume</strong></th>
                </tr>
            </thead>
            <tbody>
                 @foreach($floor as $values)
                    <tr>
                        <td style="width: 5%; white-space: nowrap;" class="text-center">{{ $values->id }}</td>
                        <td style="width: 5%; white-space: nowrap;" class="text-center">{{ $values->building_id }}</td>
                        <td style="width: 5%; white-space: nowrap;" class="text-center">{{ $values->Name }}</td>
                        <td style="width: 5%; white-space: nowrap;" class="text-center">{{ $values->size }}</td>
                        <td style="width: 5%; white-space: nowrap;" class="text-center">{{ $values->NoOfOffices }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
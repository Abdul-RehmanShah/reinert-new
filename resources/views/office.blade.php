@extends('welcome')

@section('page_title', 'Office')

@section('content')
<div class="card"> 
    <div class="card-body">
        <h2>Büro</h2>
        <div class="d-flex justify-content-end">
            <a href="{{ route('createoffice')}}" class="btn btn-info btn-lg">
                Create Office
            </a>
        </div>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>ID</strong></th>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Etage-ID</strong></th>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Name</strong></th>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Größe</strong></th>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Anzahl der Zimmer</strong></th>
                </tr>
            </thead>
            <tbody>
                 @foreach($office as $values)
                    <tr>
                        <td style="width: 5%; white-space: nowrap;" class="text-center">{{ $values->id }}</td>
                        <td style="width: 5%; white-space: nowrap;" class="text-center">{{ $values->Floor_id }}</td>
                        <td style="width: 5%; white-space: nowrap;" class="text-center">{{ $values->Name }}</td>
                        <td style="width: 5%; white-space: nowrap;" class="text-center">{{ $values->size }}</td><td style="width: 5%; white-space: nowrap;" class="text-center">{{ $values->NoOfRooms }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
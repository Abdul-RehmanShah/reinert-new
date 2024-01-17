@extends('welcome')

@section('page_title', 'Customers')

@section('content')
<div class="card"> 
    <div class="card-body">
        <h2>Kunden</h2>
        <div class="d-flex justify-content-end">
            <a href="{{ route('createcustomer')}}" class="btn btn-info btn-lg">
                Create Customer
            </a>
        </div>

        <table class="table mt-3">
            <thead>
                <tr>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>ID</strong></th>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Vorname</strong></th>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Nachname</strong></th>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Vollname</strong></th>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Email</strong></th>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Kontakt</strong></th>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Konto Nummer</strong></th>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Steuer ID</strong></th>
                    <th style="width: 5%; white-space: nowrap;" class="text-center"><strong>Steuer Prozent</strong></th>
                </tr>
            </thead>
            <tbody>
                @foreach($customer as $values)
                    <tr>
                    <td style="width: 5%; white-space: nowrap;" class="text-center">{{ $values->id }}</td>
                        <td style="width: 5%; white-space: nowrap;" class="text-center">{{ $values->Vorname }}</td>
                        <td style="width: 5%; white-space: nowrap;" class="text-center">{{ $values->Nachname }}</td>
                        <td style="width: 5%; white-space: nowrap;" class="text-center">{{ $values->Vollname }}</td>
                        <td style="width: 5%; white-space: nowrap;" class="text-center">{{ $values->Email }}</td>
                        <td style="width: 5%; white-space: nowrap;" class="text-center">{{ $values->kontakt }}</td>
                        <td style="width: 5%; white-space: nowrap;" class="text-center">{{ $values->konto_nummer }}</td>
                        <td style="width: 5%; white-space: nowrap;" class="text-center">{{ $values->steuer_id }}</td>
                        <td style="width: 5%; white-space: nowrap;" class="text-center">{{ $values->steuer_Prozent }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

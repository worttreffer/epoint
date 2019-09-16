@extends('layouts.app')

@section('content')

<div class="card mb-2">
	<div class="card-header">
		<span class="d-block p-2 bg-primary text-white">Übersicht Eigene Anschrifen</span>
	</div>
	<div class="card-body">
		<table .table.table bordered.table stribed>
			@foreach($adressen->all() as $adress)
				<a>------------------------------------------------------------- </a>
				<br><h4>{{$adress->typ}}</h4>
				
				<a class="btn btn-warning" href="{{ route('adresse.edit',$adress)}}" role="button">Ändern</a>
				<a> </a>
				<input type="hidden" name="adr_id" value="{{$adress->id}}">

				<a class="btn btn-danger" href="{{ route('adresse.delete',$adress->id)}}" role="button">Löschen</a>

				@if ($adress->Anrede == 'Herr' or $adress->Anrede == 'Frau')
					<br>{{$adress->Anrede}}
				@endif
				<br>{{$adress->Vorname}} {{$adress->Name}} {{$adress->ZusatzName}}
				<br>{{$adress->Strasse}} {{$adress->Hausnummer}}
				<br>{{$adress->Postleitzahl}} {{$adress->Ortsname}}
				<br>{{$adress->Land}}
				<br>{{$adress->Notizen}}
				
				

			@endforeach
		</table>
	</div>
</div>
@endsection

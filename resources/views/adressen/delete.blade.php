@extends('layouts.app')

@section('content')

<div class="card mb-2">
	<div class="card-header">
		<span class="d-block p-2 bg-primary text-white">Löschen Eigene Anschrift</span>
	</div>
	<div class="card-body">
		<form action="{{route('adresse.destroy', $adresse->id )}}" method="post">
			@csrf
			
			@method('DELETE')
			
			<br><h4>{{$adresse->typ}}</h4>
			<br>{{$adresse->Anrede}}
			<br>{{$adresse->Vorname}} {{$adresse->Name}} {{$adresse->ZusatzName}}
			<br>{{$adresse->Strasse}} {{$adresse->Hausnummer}}
			<br>{{$adresse->Postleitzahl}} {{$adresse->Ortsname}}
			<br>{{$adresse->Land}}
			<br>{{$adresse->Notizen}}
			
			<button type="submit" class="btn btn-danger">Ja, Adresse endgültig löschen</button>
			<a href="{{route('adresse.index')}}" class="btn btn-primary" role="button">Nein, Adresse nicht löschen</a>
		</form>
	</div>
</div>
@endsection

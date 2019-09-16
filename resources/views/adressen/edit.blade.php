@extends('layouts.app')

@section('content')

<div class="card mb-2">
	
	<div class="card-header">
		<span class="d-block p-2 bg-primary text-white">Anpassen Eigene Anschrift</span>
	</div>
	<div class="card-body">
	<form action="{{route('adresse.update', $adressen->id )}}" method="post">
		@csrf
		
		@method('PUT')
		
		  
		  <div class="form-group row form-control-sm">
			{{$adressen->typ}}
		  </div>
		  <div class="form-group row form-control-sm">
			<select class="form-control" id="Anrede" name="Anrede" value="{{$adressen->Anrede}}" >
			  <option>{{$adressen->Anrede}}</option>
				@if ($adressen->Anrede != 'Herr')
					<option>Herr</option>
				@endif
				@if ($adressen->Anrede != 'Frau')
					<option>Frau</option>
				@endif
				@if ($adressen->Anrede != 'divers')
					<option>divers</option>
				@endif
				@if ($adressen->Anrede != 'keine')
					<option>keine</option>
				@endif
			</select>
		  </div>
		  <div class="form-group row form-control-sm">
			<input type="string" class="form-control" id="Name" name="Name" value="{{$adressen->Name}}">
		  </div>
		  <div class="form-group row form-control-sm">
			<input type="string" class="form-control" id="Vorname" name="Vorname" value="{{$adressen->Vorname}}" >
		  </div>
		  <div class="form-group row form-control-sm">
			<input type="string" class="form-control" id="ZusatzName" name="ZusatzName" value="{{$adressen->Namenszusatz}}">
		  </div>
		  <div class="form-group row form-control-sm">
			<input type="string" class="form-control" id="Strasse" name="Strasse" value="{{$adressen->Strasse}}">
		  </div>
		  <div class="form-group row form-control-sm">
			<input type="string" class="form-control" id="Hausnummer" name="Hausnummer" value="{{$adressen->Hausnummer}}">
		  </div>
		  <div class="form-group row form-control-sm">
			<input type="integer" class="form-control" id="Postleitzahl" name="Postleitzahl" value="{{$adressen->Postleitzahl}}">
		  </div>
		  <div class="form-group row form-control-sm">
			<input type="string" class="form-control" id="Ortsname" name="Ortsname" value="{{$adressen->Ortsname}}">
		  </div>
		  <div class="form-group row form-control-sm">
			<select class="form-control" id="Land" name="Land" value="{{$adressen->Land}}">
			  <option>{{$adressen->Land}}</option>
				@if ($adressen->land != 'Deutschland')
					<option>Deutschland</option>
		  		@endif
				@if ($adressen->land != 'Österreich')
					<option>Österreich</option>
				@endif
				@if ($adressen->land != 'Schweiz')
					<option>Schweiz</option>
				@endif
				@if ($adressen->land != 'Niederlande')
					<option>Niederlande</option>
				@endif
				@if ($adressen->land != 'Frankreich')
					<option>Frankreich</option>
				@endif
				@if ($adressen->land != 'Luxemburg')
					<option>Luxemburg</option>
				@endif
				@if ($adressen->land != 'Belgien')
					<option>Belgien</option>
				@endif
				@if ($adressen->land != 'Lichtenstein')
					<option>Lichtenstein</option>
				@endif
			</select>
		  </div>
		  <div class="form-group row form-control-sm">
			<textarea type="text" class="form-control" id="Notizen" name="notizen" rows="3" value="{{$adressen->Notizen}}"></textarea>
		  </div>
		<button type="submit" class="btn btn-primary">Adresse speichern</button>
		<a href="{{route('adresse.index')}}" class="btn btn-primary" role="button">Nein, Adresse nicht ändern</a>
	</form>
	</div>
</div>
@endsection

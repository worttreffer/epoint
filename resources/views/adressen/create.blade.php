@extends('layouts.app')

@section('content')

<div class="card mb-2">
	
	<div class="card-header">
		<span class="d-block p-2 bg-primary text-white">Anlegen Eigene Anschrift</span>
	</div>
	<div class="card-body">
	<form action="{{route('adresse.store')}}" method="post">
		@csrf
		  <div class="form-group row form-control-sm">
			<select class="form-control" id="typ" name="typ">
			  <option>Benutzer</option>
			  <option>Veranstalter</option>
			  <option>Veranstaltungsstätte</option>
			  <option>Verwaltung</option>
			  <option>Lieferung</option>
			</select>
		  </div>
		  <div class="form-group row form-control-sm">
			<select class="form-control" id="Anrede" name="Anrede">
			  <option>Herr</option>
			  <option>Frau</option>
			  <option>divers</option>
			  <option>keine</option>
			</select>
		  </div>
		  <div class="form-group row form-control-sm">
			<input type="string" class="form-control" id="Name" name="Name" placeholder="-Nachname-">
		  </div>
		  <div class="form-group row form-control-sm">
			<input type="string" class="form-control" id="Vorname" name="Vorname" placeholder="-Vorname-">
		  </div>
		  <div class="form-group row form-control-sm">
			<input type="string" class="form-control" id="ZusatzName" name="ZusatzName" placeholder="-Namenszusatz-">
		  </div>
		  <div class="form-group row form-control-sm">
			<input type="string" class="form-control" id="Strasse" name="Strasse" placeholder="-Strassenname-">
		  </div>
		  <div class="form-group row form-control-sm">
			<input type="string" class="form-control" id="Hausnummer" name="Hausnummer" placeholder="-Hausnummer und Zusätze-">
		  </div>
		  <div class="form-group row form-control-sm">
			<input type="integer" class="form-control" id="Postleitzahl" name="Postleitzahl" placeholder="-Postleitzahl-">
		  </div>
		  <div class="form-group row form-control-sm">
			<input type="string" class="form-control" id="Ortsname" name="Ortsname" placeholder="-Ortsname-">
		  </div>
		  <div class="form-group row form-control-sm">
			<select class="form-control" id="Land" name="Land">
			  <option>Deutschland</option>
			  <option>Österreich</option>
			  <option>Schweiz</option>
			  <option>Niederlande</option>
			  <option>Frankreich</option>
			  <option>Luxemburg</option>
			  <option>Belgien</option>
			  <option>Lichtenstein</option>
			</select>
		  </div>
		  <div class="form-group row form-control-sm">
			<textarea type="text" class="form-control" id="Notizen" name="notizen" rows="3" placeholder="-Freier Text-"></textarea>
		  </div>
		<button type="submit" class="btn btn-primary">Adresse speichern</button>
	</form>
	</div>
</div>
@endsection

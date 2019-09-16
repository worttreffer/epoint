<?php $__env->startSection('content'); ?>

<div class="card mb-2">
	
	<div class="card-header">
		<span class="d-block p-2 bg-primary text-white">Anpassen Eigene Anschrift</span>
	</div>
	<div class="card-body">
	<form action="<?php echo e(route('adresse.update', $adressen->id )); ?>" method="post">
		<?php echo csrf_field(); ?>
		
		<?php echo method_field('PUT'); ?>
		
		  
		  <div class="form-group row form-control-sm">
			<?php echo e($adressen->typ); ?>

		  </div>
		  <div class="form-group row form-control-sm">
			<select class="form-control" id="Anrede" name="Anrede" value="<?php echo e($adressen->Anrede); ?>" >
			  <option><?php echo e($adressen->Anrede); ?></option>
				<?php if($adressen->Anrede != 'Herr'): ?>
					<option>Herr</option>
				<?php endif; ?>
				<?php if($adressen->Anrede != 'Frau'): ?>
					<option>Frau</option>
				<?php endif; ?>
				<?php if($adressen->Anrede != 'divers'): ?>
					<option>divers</option>
				<?php endif; ?>
				<?php if($adressen->Anrede != 'keine'): ?>
					<option>keine</option>
				<?php endif; ?>
			</select>
		  </div>
		  <div class="form-group row form-control-sm">
			<input type="string" class="form-control" id="Name" name="Name" value="<?php echo e($adressen->Name); ?>">
		  </div>
		  <div class="form-group row form-control-sm">
			<input type="string" class="form-control" id="Vorname" name="Vorname" value="<?php echo e($adressen->Vorname); ?>" >
		  </div>
		  <div class="form-group row form-control-sm">
			<input type="string" class="form-control" id="ZusatzName" name="ZusatzName" value="<?php echo e($adressen->Namenszusatz); ?>">
		  </div>
		  <div class="form-group row form-control-sm">
			<input type="string" class="form-control" id="Strasse" name="Strasse" value="<?php echo e($adressen->Strasse); ?>">
		  </div>
		  <div class="form-group row form-control-sm">
			<input type="string" class="form-control" id="Hausnummer" name="Hausnummer" value="<?php echo e($adressen->Hausnummer); ?>">
		  </div>
		  <div class="form-group row form-control-sm">
			<input type="integer" class="form-control" id="Postleitzahl" name="Postleitzahl" value="<?php echo e($adressen->Postleitzahl); ?>">
		  </div>
		  <div class="form-group row form-control-sm">
			<input type="string" class="form-control" id="Ortsname" name="Ortsname" value="<?php echo e($adressen->Ortsname); ?>">
		  </div>
		  <div class="form-group row form-control-sm">
			<select class="form-control" id="Land" name="Land" value="<?php echo e($adressen->Land); ?>">
			  <option><?php echo e($adressen->Land); ?></option>
				<?php if($adressen->land != 'Deutschland'): ?>
					<option>Deutschland</option>
		  		<?php endif; ?>
				<?php if($adressen->land != 'Österreich'): ?>
					<option>Österreich</option>
				<?php endif; ?>
				<?php if($adressen->land != 'Schweiz'): ?>
					<option>Schweiz</option>
				<?php endif; ?>
				<?php if($adressen->land != 'Niederlande'): ?>
					<option>Niederlande</option>
				<?php endif; ?>
				<?php if($adressen->land != 'Frankreich'): ?>
					<option>Frankreich</option>
				<?php endif; ?>
				<?php if($adressen->land != 'Luxemburg'): ?>
					<option>Luxemburg</option>
				<?php endif; ?>
				<?php if($adressen->land != 'Belgien'): ?>
					<option>Belgien</option>
				<?php endif; ?>
				<?php if($adressen->land != 'Lichtenstein'): ?>
					<option>Lichtenstein</option>
				<?php endif; ?>
			</select>
		  </div>
		  <div class="form-group row form-control-sm">
			<textarea type="text" class="form-control" id="Notizen" name="notizen" rows="3" value="<?php echo e($adressen->Notizen); ?>"></textarea>
		  </div>
		<button type="submit" class="btn btn-primary">Adresse speichern</button>
		<a href="<?php echo e(route('adresse.index')); ?>" class="btn btn-primary" role="button">Nein, Adresse nicht ändern</a>
	</form>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
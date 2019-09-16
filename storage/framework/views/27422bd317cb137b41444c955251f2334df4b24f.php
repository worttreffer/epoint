<?php $__env->startSection('content'); ?>

<div class="card mb-2">
	<div class="card-header">
		<span class="d-block p-2 bg-primary text-white">Übersicht Eigene Anschrifen</span>
	</div>
	<div class="card-body">
		<table .table.table bordered.table stribed>
			<?php $__currentLoopData = $adressen->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adress): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<a>------------------------------------------------------------- </a>
				<br><h4><?php echo e($adress->typ); ?></h4>
				
				<a class="btn btn-warning" href="<?php echo e(route('adresse.edit',$adress)); ?>" role="button">Ändern</a>
				<a> </a>
				<input type="hidden" name="adr_id" value="<?php echo e($adress->id); ?>">

				<a class="btn btn-danger" href="<?php echo e(route('adresse.delete',$adress->id)); ?>" role="button">Löschen</a>

				<?php if($adress->Anrede == 'Herr' or $adress->Anrede == 'Frau'): ?>
					<br><?php echo e($adress->Anrede); ?>

				<?php endif; ?>
				<br><?php echo e($adress->Vorname); ?> <?php echo e($adress->Name); ?> <?php echo e($adress->ZusatzName); ?>

				<br><?php echo e($adress->Strasse); ?> <?php echo e($adress->Hausnummer); ?>

				<br><?php echo e($adress->Postleitzahl); ?> <?php echo e($adress->Ortsname); ?>

				<br><?php echo e($adress->Land); ?>

				<br><?php echo e($adress->Notizen); ?>

				
				

			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</table>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
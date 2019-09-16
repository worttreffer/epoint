<?php $__env->startSection('content'); ?>

<div class="card mb-2">
	<div class="card-header">
		<span class="d-block p-2 bg-primary text-white">Anschrift löschen</span>
	</div>
	<div class="card-body">
		<form action="<?php echo e(route('adresse.destroy', $adresse->id )); ?>" method="post">
			<?php echo csrf_field(); ?>
			
			<?php echo method_field('DELETE'); ?>
			
			<br><h4><?php echo e($adresse->typ); ?></h4>
			<br><?php echo e($adresse->Anrede); ?>

			<br><?php echo e($adresse->Vorname); ?> <?php echo e($adresse->Name); ?> <?php echo e($adresse->ZusatzName); ?>

			<br><?php echo e($adresse->Strasse); ?> <?php echo e($adresse->Hausnummer); ?>

			<br><?php echo e($adresse->Postleitzahl); ?> <?php echo e($adresse->Ortsname); ?>

			<br><?php echo e($adresse->Land); ?>

			<br><?php echo e($adresse->Notizen); ?>

			
			<button type="submit" class="btn btn-danger">Ja, Adresse endgültig löschen</button>
			<a href="<?php echo e(route('adresse.index')); ?>" class="btn btn-primary" role="button">Nein, Adresse nicht löschen</a>
		</form>
	</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php if (session()->has('message')) : ?>
	<small class="text-secondary" style="color: blue;"><b>
		<?= session('message') ?></b>
	</small>
<?php endif ?>

<?php if (session()->has('error')) : ?>
	<small class="text-secondary" style="color: red;"><b>
		<?= session('error') ?></b>
		</small>
<?php endif ?>

<?php if (session()->has('errors')) : ?>
	<small class="text-secondary" style="color: red;">> <b>
	<?php foreach (session('errors') as $error) : ?>
		<li><?= $error ?></li>
	<?php endforeach ?></b>
	</small>
<?php endif ?>

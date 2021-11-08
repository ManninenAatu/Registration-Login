<?php  if (count($virheet) > 0) : ?>
  <div class="error">
  	<?php foreach ($virheet as $virhe) : ?>
  	  <p><?php echo $virhe ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>
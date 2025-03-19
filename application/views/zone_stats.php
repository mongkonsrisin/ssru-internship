
<div class="container">
	<h1 class="text-center kanit mb-3">แบ่งโซน</h1>
	<div class="table-responsive">
	<table class="table table-striped">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">โซน</th>
				<th scope="col">จำนวนบริษัท</th>
				<th scope="col">รายละเอียด</th>
	    </tr>
	  </thead>
	  <tbody>
			<?php
				foreach ($stats as $stat) {
			?>
	    <tr>
	      <th scope="row"><?=$stat->reg_id?><img src="<?php echo base_url(); ?>	img/<?=$stat->reg_id?>.png"></th>
	      <td><?=$stat->total?></td>
				<td><a href="<?=base_url();?>zone/detail/<?=$stat->reg_id?>" class="btn btn-secondary">รายละเอียด</a> <a href="<?=base_url();?>map/zone/<?=$stat->reg_id?>" class="btn btn-primary">แผนที่</a></td>
	    </tr>
			<?php	 } ?>
	  </tbody>
	</table>
</div>
</div>

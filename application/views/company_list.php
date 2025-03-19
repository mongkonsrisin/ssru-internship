
<div class="container">
	<?php
		

	 ?>
	<h1 class="text-center kanit mb-3">รายชื่อบริษัท</h1>
	<div class="table-responsive">
	<table class="table table-striped">
	  <thead class="thead-dark">
	    <tr>
	      <th scope="col">ลำดับ</th>
	      <th scope="col">ชื่อบริษัท</th>
	      <th scope="col">ที่อยู่บริษัท</th>
				<th scope="col">จำนวน นศ. ที่ไป</th>
				<th scope="col">โซน</th>
	    </tr>
	  </thead>
	  <tbody>
			<?php
			$id = 1;
				foreach ($companies as $company) {
			?>
	    <tr>
	      <th scope="row"><?=$id?></th>
	      <td><a class="text-danger" href="<?=base_url();?>company/detail/<?=$company->com_id?>"><strong><?=$company->com_name?></strong></a></td>
	      <td><?=$company->com_addr?></td>
				<td><?=$company->total?></td>
				<td><?=$company->com_region?></td>
	    </tr>
			<?php	$id++; } ?>
	  </tbody>
	</table>
</div>


</div>

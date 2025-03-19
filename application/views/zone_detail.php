
<div class="container">
	<h1 class="text-center kanit"> โซนที่	<?php echo $this->uri->segment(3)?></h1>
	<h4 class="text-center kanit"> <?php echo $advisor[0]->reg_name?></h4>
	<div class="table-responsive">
	<table class="table table-striped">
		<thead class="thead-dark">
			<tr>
				<th scope="col">ลำดับ</th>
				<th scope="col">ชื่อบริษัท</th>
				<th scope="col">ที่อยู่บริษัท</th>
				<th scope="col" width="400">นศ.ที่ไป</th>

			</tr>
		</thead>
		<tbody>
			<?php
			$id = 1;
				foreach ($zone as $company) {
			?>
			<tr>
				<th scope="row"><?=$id?></th>
				<td><a class="text-danger" href="<?=base_url();?>company/detail/<?=$company->com_id?>"><strong><?=$company->com_name?></strong></a></td>
				<td><?=$company->com_addr?></td>
				<td><?php

				$stu = $this->CompanyModel->who($company->com_id);
				foreach ($stu as $s) {
					?>
					<?php echo $s->stu_id ?> <?php echo $s->stu_fname ?> <?php echo $s->stu_lname ?><br>
					<?php
				}
				?></td>
			</tr>
			<?php	$id++; } ?>
		</tbody>
	</table>
	</div>
</div>

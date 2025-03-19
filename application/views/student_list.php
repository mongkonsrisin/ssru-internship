
<div class="container">
	<?php
	switch ($this->uri->segment(3)) {
		case 1:$head = 'รายชื่อนักศึกษา ห้อง 1';break;
		case 2:$head = 'รายชื่อนักศึกษา ห้อง 2';break;
		case 3:$head = 'รายชื่อนักศึกษา ห้อง 3';break;
		default:$head = 'รายชื่อนักศึกษา';break;
	}
	?>
	<h1 class="text-center kanit mb-3"><?=$head?></h1>
	<div class="text-right mb-1">
		<a href="<?=base_url();?>student/" class="btn btn-success" role="button">ทั้งหมด</a>
		<a href="<?=base_url();?>student/room/1" class="btn btn-primary" role="button">ห้อง 1</a>
		<a href="<?=base_url();?>student/room/2" class="btn btn-primary" role="button">ห้อง 2</a>
		<a href="<?=base_url();?>student/room/3" class="btn btn-primary" role="button">ห้อง 3</a>
	</div>
	<div class="table-responsive">
		<table class="table table-striped">
			<thead class="thead-dark">
				<tr>
					<th scope="col">รหัสนักศึกษา</th>
					<th scope="col">ชื่อ - นามสกุล</th>
					<th scope="col">ชื่อบริษัท / ที่อยู่</th>
				</tr>
			</thead>
			<tbody>
				<?php
				foreach ($students as $student) {
					?>
					<tr>
						<th scope="row"><?=$student->stu_id?></th>
						<td><?=$student->stu_prefix?><?=$student->stu_fname?>&nbsp;&nbsp;<?=$student->stu_lname?></td>
						<td><a class="text-danger" href="<?=base_url();?>company/detail/<?=$student->com_id?>"><strong><?=$student->com_name?></strong></a><br><?=$student->com_addr?></td>
					</tr>
				<?php	} ?>
			</tbody>
		</table>
	</div>


</div>

<?php include('db_connect.php');?>

<style>
	.card {
		background: #0F0F0F;
		color: white;
	}

	.btn-primary {
		color: white;
		width: 120px;
		height: 35px;
		text-transform: uppercase;
		border: 2px solid;
		border-radius: 20px;
		background: transparent;
		outline: none;
		cursor: pointer;
		font-size: 12px;
		position: relative;
		transition: 0.2s;
	}

	.btn-primary:hover {
		border: none;
		border-radius: 20px;
		background: #F7B922;
	}


	.btn-default {
		color: white;
		width: 120px;
		height: 35px;
		text-transform: uppercase;
		background: transparent;
		border: none;
		outline: none;
		cursor: pointer;
		font-size: 12px;
		position: relative;
		transition: 0.2s;
	}
	

	.btn-del {
		margin-top: 10px;
		color: white;
		width: 120px;
		height: 35px;
		text-transform: uppercase;
		background: transparent;
		border: none;
		outline: none;
		cursor: pointer;
		font-size: 12px;
		position: relative;
		transition: 0.2s;
	}

	.btn-del:hover,
	.btn-default:hover {
		color: #ba0961;
	}

	.table__color {
		background: #0F0F0F;
		border-radius: 5px;	
		padding: 10px 5px;
	}

	.table {
		width: 100%;
		color: white;
		border-collapse: collapse;
	}

	.main{
		border-top: 1px solid #343A40;
	}

	.str {
		border-top: 1px solid #343A40;
		transition: .5s;

	}

	.str:hover {
		background-color: #343A40;
		color: #0F0F0F;
	}

	th {
		color: white;
		font-weight: 600;
		padding: 5px 35px;
		text-transform: uppercase;
		font-size: 15px;
	}

	td {
		color: white;
		padding: 10px 30px;

	}

	.td:hover {
		color: #0F0F0F;
	}

	.t-center {
		text-align: center;
	}
	
</style>


<div class="container-fluid">
	
	
	<br>
	<div class="row">
		<div class="card col-lg-12">
			<div class="table-color">

			<table>
						<tr class="main t-center">
							<th>#</th>
							<th>Имя</th>
							<th>e-mail (логин)</th>
						</tr>

						<?php
							include 'db_connect.php';
							$users = $conn->query("SELECT * FROM users order by name asc");
							$i = 1;
							while($row= $users->fetch_assoc()):
						?>

						<tr class="str">
							<td class="t-center" ><?php echo $i++ ?></td>
							<td class="t-center" >
								<?php echo $row['name'] ?>
							</td>
							<td>
								<?php echo $row['username'] ?>
							</td>
						</tr>
						<?php endwhile; ?>
					</table>
			</div>
		</div>
	</div>

</div>
<script>
	
$('#new_user').click(function(){
	uni_modal('New User','manage_user.php')
})
$('.edit_user').click(function(){
	uni_modal('Edit User','manage_user.php?id='+$(this).attr('data-id'))
})

</script>
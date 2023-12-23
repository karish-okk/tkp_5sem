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
		background: #0F0F0F;
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
		cursor: pointer;
		font-size: 12px;
		position: relative;
		transition: 0.2s;
	}

	.btn-default:hover {
		color: #ba0961;
	}

	.table__color {
		background: #0F0F0F;
		border-radius: 5px;	
		padding: 10px 5px;
	}

	.table {
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
	
	<div class="col-lg-12">
		<div class="row">
			<!-- FORM Panel -->
			<div class="col-md-4">
			<form action="" id="manage-category">
				<div class="card">
					<div class="card-header">
						    Форма "Категории"
				  	</div>
					<div class="card-body">
							<input type="hidden" name="id">
							<div class="form-group">
								<label class="control-label">Категория</label>
								<input type="text" class="form-control" name="name">
							</div>
							
					</div>
							
					<div class="card-footer">
						<div class="row">
							<div class="col-md-12">
								<button class="btn-primary">Сохранить</button>
								<button class="btn-default" type="button" onclick="$('#manage-category').get(0).reset()">Отмена</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			</div>
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-8">
				<div class="card">

				<table>
						<tr class="main t-center">
							<th>#</th>
							<th>Название</th>
							<th>Действие</th>
						</tr>

						<?php 
							$i = 1;
							$cats = $conn->query("SELECT * FROM category_list order by id asc");
							while($row=$cats->fetch_assoc()):
						?>

						<tr class="str">
							<td class="t-center" ><?php echo $i++ ?></td>
							<td class="t-center" >
								<?php echo $row['name'] ?>
							</td>
							<td class="t-center" >
								<button class="btn-primary edit_cat" type="button" data-id="<?php echo $row['id'] ?>" data-name="<?php echo $row['name'] ?>" >Изменить</button>
								<button class="btn-default delete_cat" type="button" data-id="<?php echo $row['id'] ?>">Удалить</button>
							</td>
						</tr>
						<?php endwhile; ?>
					</table>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>	

</div>
<style>
	
	td{
		vertical-align: middle !important;
	}
</style>
<script>
	
	$('#manage-category').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=save_category',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully added",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
				else if(resp==2){
					alert_toast("Data successfully updated",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	})
	$('.edit_cat').click(function(){
		start_load()
		var cat = $('#manage-category')
		cat.get(0).reset()
		cat.find("[name='id']").val($(this).attr('data-id'))
		cat.find("[name='name']").val($(this).attr('data-name'))
		end_load()
	})
	$('.delete_cat').click(function(){
		_conf("Are you sure to delete this category?","delete_cat",[$(this).attr('data-id')])
	})
	function delete_cat($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_category',
			method:'POST',
			data:{id:$id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
</script>
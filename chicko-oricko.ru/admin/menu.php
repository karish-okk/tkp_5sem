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
			<!-- Панель настройки блюд -->
			<div class="col-md-4">
			<form action="" id="manage-menu">
				<div class="card">
					<div class="card-header">
						    Блюдо - настройки
				  	</div>
					<div class="card-body">
							<input type="hidden" name="id">
							<div class="form-group">
								<label class="control-label">Название блюда</label>
								<input type="text" class="form-control" name="name">
							</div>
							<div class="form-group">
								<label class="control-label">Пояснение</label>
								<textarea cols="30" rows="3" class="form-control" name="description"></textarea>
							</div>
							<div class="form-group">
								<div class="custom-control custom-switch">
								  <input type="checkbox" name="status" class="custom-control-input" id="availability" checked>
								  <label class="custom-control-label" for="availability">Видимость</label>
								</div>
							</div>	
							<div class="form-group">
								<label class="control-label">Категория</label>
								<select name="category_id" id="" class="custom-select browser-default">
									<?php
									$cat = $conn->query("SELECT * FROM category_list order by name asc ");
									while($row=$cat->fetch_assoc()):
									?>
									<option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
									<?php endwhile; ?>
								</select>
								
							</div>
							<div class="form-group">
								<label class="control-label">Цена</label>
								<input type="number" class="form-control text-right" name="price" step="any">
							</div>
							<div class="form-group">
								<label for="" class="control-label">Фотография</label>
								<input type="file" class="form-control" name="img" onchange="displayImg(this,$(this))">
							</div>
							<div class="form-group">
								<img src="<?php echo isset($image_path) ? '../assets/img/'.$cover_img :'' ?>" alt="" id="cimg">
							</div>
					</div>
							
					<div class="card-footer">
						<div class="row">
							<div class="col-md-12">
								<button class="btn-primary" id="manage-menu" >Сохранить</button>
								<button class="btn-default" type="button" onclick="$('#manage-menu').get(0).reset()">Отмена</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			</div>
			<!-- Панель настройки блюд -->

			<!-- Таблица с блюдами -->
			<div class="col-md-8">
				<div class="table__color">
					<table>
						<tr class="main t-center">
							<th>#</th>
							<th>Фото</th>
							<th>Информация</th>
							<th>Действие</th>
						</tr>

						<?php 
							$i = 1;
							$cats = $conn->query("SELECT * FROM product_list order by id asc");
							while($row=$cats->fetch_assoc()):
						?>

						<tr class="str">
							<td class="t-center" ><?php echo $i++ ?></td>
							<td class="t-center" >
								<img src="<?php echo isset($row['img_path']) ? '../assets/img/'.$row['img_path'] :'' ?>" alt="" id="cimg" width="100px" >
							</td>
							<td>
								<p>Название : <b><?php echo $row['name'] ?></b></p>
								<p>Пояснение : <b class="truncate"><?php echo $row['description'] ?></b></p>
								<p>Цена : <b><?php echo "$".number_format($row['price'],2) ?></b></p>
							</td>
							<td class="t-center" >
								<button class="btn-primary edit_menu" type="button" data-id="<?php echo $row['id'] ?>" data-name="<?php echo $row['name'] ?>" data-status="<?php echo $row['status'] ?>" data-description="<?php echo $row['description'] ?>" data-price="<?php echo $row['price'] ?>" data-img_path="<?php echo $row['img_path'] ?>">Изменить</button>
								<button class="btn-del delete_menu" type="button" data-id="<?php echo $row['id'] ?>">Удалить</button>
							</td>
						</tr>
						<?php endwhile; ?>
					</table>
				</div>
				
			</div>
			
			<!-- Таблица с блюдами -->
		</div>
	</div>	

</div>


<script>
	function displayImg(input,_this) {
	    if (input.files && input.files[0]) {
	        var reader = new FileReader();
	        reader.onload = function (e) {
	        	$('#cimg').attr('src', e.target.result);
	        }

	        reader.readAsDataURL(input.files[0]);
	    }
	}
	$('#manage-menu').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=save_menu',
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
	$('.edit_menu').click(function(){
		start_load()
		var cat = $('#manage-menu')
		cat.get(0).reset()
		cat.find("[name='id']").val($(this).attr('data-id'))
		cat.find("[name='description']").val($(this).attr('data-description'))
		cat.find("[name='name']").val($(this).attr('data-name'))
		cat.find("[name='price']").val($(this).attr('data-price'))
		if($(this).attr('data-status') == 1)
			$('#availability').prop('checked',true)
		else
			$('#availability').prop('checked',false)

		cat.find("#cimg").attr('src','../assets/img/'+$(this).attr('data-img_path'))
		end_load()
	})
	$('.delete_menu').click(function(){
		_conf("Are you sure to delete this menu?","delete_menu",[$(this).attr('data-id')])
	})

	function delete_menu($id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_menu',
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
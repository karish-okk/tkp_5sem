<style>
	.containe-fluid {
		display: flex;
		justify-content: center;
	}

	.my-card{
		width: 100%;
		height: 50px;
		background: #0F0F0F;
		border: none;
		border-radius: 20px;
		outline: none;

		padding: 10px;
		margin-top: 10px;

		color: white;
		text-align: center;
	}
</style>

<div class="containe-fluid">

<div class="my-card">
	<?php echo "Здравствуйте, ".$_SESSION['login_name']."!"  ?>
</div>
</div>


<script>
	
</script>
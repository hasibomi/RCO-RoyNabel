<!-- Header -->
<?php include "layout/header.php"; ?>

	<!-- Menu -->
	<?php include "layout/menu.php"; ?>
	
	<br />
	
	<!-- Main container -->
	<div class="container">
		
		<?php
		$path = 'public/trip/images/';
		
		if ($opendir = opendir($path)) :
			if ($file1 = scandir($path)) :
				if ($file1 != "." && $file1 != "..") :
		?>
				<center>
					<?php
					echo '
					<a href="'.base_url().$path.$file1[2].'" rel="fancybox-thumb" title="'.$file1[2].'" class="fancybox-thumb">
						<img src="'.base_url().$path.$file1[2].'" alt="" width="240" height="180" />
					</a>
					';
				endif;
			endif;
			?>
				</center>
		
			<div style="display: none;">
				<?php
					while ($file = readdir($opendir)) :
						if ($file != "." && $file != "..") :
				?>
							<a href="<?php echo base_url().$path.$file; ?>" rel="fancybox-thumb" title="<?php echo $file; ?>" class="fancybox-thumb">
								<img src="<?php echo base_url().$path.$file; ?>" alt="" width="240" height="180" />
							</a>
							<?php
						endif;
					endwhile;
			else:
				echo 'Directory not found';
		endif;
		?>
			</div>
		
	</div>
	<!-- /.container -->
	
	<div class="container">
		<div class="col-md-12">
			
			<div class="row">
				<h2>Title 1</h2>
				<p>
					Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum
				</p>
			</div>
			
			<div class="row">
				<h2>Title 2</h2>
				<p>
					Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum
				</p>
			</div>
			
			<div class="row">
				<h2>Title 3</h2>
				<p>
					Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum
				</p>
			</div>
			
			<div class="row">
				<h2>Title 4</h2>
				<p>
					Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum Lorium ipsum
				</p>
			</div>
			
		</div>
		<!-- /.col-md-12 -->
	</div>
	<!-- /.container -->
	
<!-- Footer -->
<?php include 'layout/footer.php'; ?>
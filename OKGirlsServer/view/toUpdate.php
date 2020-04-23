<?php include 'view/header.php';?>
	<?php
		foreach ($data as $key => $value) { ?>
	
	<form id="newsUpdateForm">
		<center><div class="spinner-border text-primary" role="status" id="loading">
		    <span class="sr-only">Loading...</span>
		</div></center>
		<div class="card">					
			<div class="card-body">
				<div class="innerbody">
					<label for="newsTitle">Title</label>
					<input type="text" class="form-control" id="newsTitle" name="newsTitle" value='<?php echo $value['newsTitle']; ?>'>
					<br>
					<label for="newsPhotos">Photo</label>
					<input type="file" class="form-control" id="newsPhotos" name="newsPhotos[]" accept="" multiple disabled>
				</div>

				<div class="innerbody1">
					<label for="newsParagraph" class="label">Paragraph</label>
					<textarea rows="10" id="newsParagraph" class="form-control" name="newsParagraph">
						<?php echo $value['newsBody']; ?>
					</textarea>
				</div>

			</div>
		</div>
		<br>
		<center>
			<input type="submit" class="btn" value="Update" id="updateBtn">
			<input type='hidden' name="operation" value='newsUpdateData'>
			<input type='hidden' name="dbId" value='<?php echo $value['dbId']; ?>'>
		</center>
	</form>
	<?php
		}
	?>
<?php include 'view/footer.php';?>
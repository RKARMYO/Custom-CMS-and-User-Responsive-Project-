<?php include 'view/header.php';?>
	<form id="newsInsertForm">
		<center><div class="spinner-border text-primary" role="status" id="loading">
		    <span class="sr-only">Loading...</span>
		</div></center>
		<div class="card">					
			<div class="card-body">
				<div class="innerbody">
					<label for="newsTitle">Title</label>
					<input type="text" class="form-control" id="newsTitle" name="newsTitle">
					<br>
					<label for="newsPhotos">Photo</label>
					<input type="file" class="form-control" id="newsPhotos" name="newsPhotos[]" accept="" multiple>
				</div>

				<div class="innerbody1">
					<label for="newsParagraph" class="label">Paragraph</label>
					<textarea rows="10" id="newsParagraph" class="form-control" name="newsParagraph">

					</textarea>
				</div>

			</div>
		</div>
		<br>
		<center>
			<input type="submit" class="btn" value="Insert" id="insertBtn">
			<input type='hidden' name="operation" value='newsinsert'>
		</center>
	</form>
<?php include 'view/footer.php';?>

<!DOCTYPE>
<html>
	<head><title> ICS eLib </title></head>

	<body>
		<div id="content">
			<div id="search"><br>

				<form name="search_form" method="post">

					<a>Search by:</a>
					<select name="search_by">
						<option value="Book_Title"> Book Title </option>
						<option value="Book_No"> Book Number </option>
						<option value="Status"> Status </option>
						<option value="Description"> Description </option>
						<option value="Publisher"> Publisher</option>
					</select>

					<input type="text" name='search'/>
					<input type="submit" name="submit" value="Search" /><br/>


					<a>Order by:</a>
					<select name="order_by">
						<option value="Book_Title"> Book Title </option>
						<option value="Book_No"> Book Number </option>
						<option value="Status"> Status </option>
						<option value="Description"> Description </option>
						<option value="Publisher"> Publisher</option>
					</select>

				</form>
			</div>



			<div id="table">
				<table border="1">

				<?php
					if (isset($all)) echo $all;
				?>

				</table>	
			</div>

		</div>
	</body>
</html>
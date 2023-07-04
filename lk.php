<?php session_start() ?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, shrink-to-fit=no"
		/>
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
			integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn"
			crossorigin="anonymous"
		/>
		<title>личный кабинет</title>
        <style>
            body {
                background-color: rgb(170, 130, 207);
                font-size: 1.5rem;
            }
            p {
                font-weight: bold;
            }
        </style>
	</head>
	<body>
		<div class="container mt-5">
			<div class="row">
				<div class="col-9 mx-auto">
					<p>id: <?php echo $_SESSION["id"]; ?></p>

					<p>имя: 
						<span><?php echo $_SESSION["name"]; ?> </span>
						<span class="edit-btn btn btn-danger">редактировать</span>
						<span class="save-btn btn btn-warning" hidden> сохранить </span>
						<span class="cencel-btn btn btn-success" hidden>отменить </span>
					</p>

					<p>фамилия: 
						<span><?php echo $_SESSION["lastname"]; ?> </span>
						<span class="edit-btn btn btn-danger">редактировать</span>
						<span class="save-btn btn btn-warning" hidden> сохранить </span>
						<span class="cencel-btn btn btn-success" hidden>отменить </span>
					</p>

					<p>email: <?php echo $_SESSION["email"]; ?> 
						<span><?php echo $_SESSION["email"]; ?> </span>

				</div>
			</div>
		</div>

<script>
let edit_buttons = document.querySelectorAll(".edit-btn");
let save_buttons = document.querySelectorAll(".save-btn");
let cancel_buttons = document.querySelectorAll(".cancel-btn");

for(let i = 0; i < edit_buttons.length; i++) {
edit_buttons[i].addEventListener("click", () --> {
	let inputValue = edit_buttons[i].previousElementSibling.innerText;
	edit_buttons[i]previousElementSibling.innerHTML = '<input type'
});
}
</script>


		<script
			src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
			integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
			crossorigin="anonymous"
		></script>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF"
			crossorigin="anonymous"
		></script>
	</body>
</html>

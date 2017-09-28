<?php
function build_form($name = '', $description = '', $genre_id = null)
{
	$form = '<form action="" method="post">
		Movie:<br>
		<input type="text" name="name" value="' . htmlspecialchars($name) . '"><br>
		Description:<br>
		<textarea name="description">' . htmlspecialchars($description) . '</textarea><br>
		<select name="genre">';
	require 'genres.php';
	foreach ($genres as $id => $genre) {
		$form .= "<option value=$id " . ($genre_id == $id ? 'selected' : '') . ">$genre</option>";
	}
	$form .= '</select><input type="submit"></form>';
	return $form;
}

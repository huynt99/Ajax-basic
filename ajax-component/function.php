<?php

function loadView($file)
{
	if (file_exists("./src/Views/" . $file)) {
		return include "./src/Views/" . $file;
	}
}


<?php

// Utilities functions here
function dist_path() {
	return get_template_directory_uri()."/assets/dist";
}

function docs_dir() {
	return get_template_directory_uri()."/assets/docs/";
}

function img_dir() {
	return dist_path()."/img/";
}

function svg_dir() {
	return dist_path()."/svg/";
}

function img_path($file_name) {
	return img_dir().$file_name;
}

function svg_path($file_name) {
	return svg_dir().$file_name;
}

function isHCP() {
	if(isset($_COOKIE['HCP'])) {
		return $_COOKIE['HCP'] == 'HCP';
	} else {
		return False;
	}
}

function isRegistered() {
	if(isset($_COOKIE['registration-status'])) {
		return $_COOKIE['registration-status'] == 'registered';
	} else {
		return False;
	}
}
<?php

require(ROOT . "model/BirthdayModel.php");

function index()
{
	render("birthday/index", array(
		"birthdays" => getAllBirthdays()
		));
}

function create()
{
	render("birthday/create");
}

function createSave()
{
	if (!createBirthday()) {
		header("Location:" . URL . "error/index");
		exit();
	}
}

function edit()
{

}

function editSave()
{

}

function delete()
{

}
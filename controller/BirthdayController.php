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

}

function createSave()
{

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
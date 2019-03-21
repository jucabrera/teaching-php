<?php
declare(strict_types=1);
namespace Aplicacao;
interface UserInterface{
	public function setEmail(string $email);
	public function setSenha(string $senha);
	public function getEmail();
	public function getSenha();
}
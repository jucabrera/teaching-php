<?php
declare(strict_types=1);
namespace Aplicacao;

abstract class AbstractUser implements UserInterface
{
	protected $id;
	protected $email;
	protected $senha;

	public function setId(int $id)
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}

	public function setEmail(string $email)
	{
		$this->email = $email;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function setSenha(string $senha)
	{
		$senha = password_hash($senha, PASSWORD_DEFAULT);
		$this->senha = $senha;
	}

	public function getSenha()
	{
		return $this->senha;
	}
	
	public abstract function __toString();
}





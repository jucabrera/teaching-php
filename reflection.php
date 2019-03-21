<?php

/**
 * @Entity(repositoryClass="MyProject\UserRepository")
 * @teste=123
 */
class User
{
	/**
	 * 
	 * @group{("geral")}
	 */
	private $nome;
	
	/**
	 * 
	 * @group{("privado")}
	 */
	private $email;
}

$repository = $entityManager->getRepositoryClass(User::class);
$repository->find(1);

$reflection = new ReflectionClass(User::class);

$propriedade = $reflection->getProperties();
print_r($reflection->getDocComment());die;


{"nome":"juciellen", "email":"juciellen@4linux.com.br"}
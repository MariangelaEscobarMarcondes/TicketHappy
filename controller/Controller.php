<?php

class Controller{
    
    protected $view;
    //o metodo construct fica somente nessa classe (home e usuario herdam)
    public function __construct(){
        $this->view = new View();
    }
    
    public function estaAutorizado(){
        if(!isset($_SESSION["_ID"]))
            header("Location: /login/formulario");
    }
    
    
    
}//class Controller

class Bcrypt {
/**
 * A classe Bcrypt sera usada no formulario de cadastro para proteger a senha que 
 * sera armazenada no banco de dados e na verificacao da senha quando o usuario 
 * se logar (LoginController)
 */
	protected static $_saltPrefix = '2a';

 // o custo do hash pode variar de 4 a 31
	protected static $_defaultCost = 8;

// o tamanho do salt deve ser igual a 22
	protected static $_saltLength = 22;

	public static function hash($string, $cost = null) {
		if (empty($cost)) {
			$cost = self::$_defaultCost;
		}

		// Salt
		$salt = self::generateRandomSalt();

		// Hash string
		$hashString = self::__generateHashString((int)$cost, $salt);

		return crypt($string, $hashString);
	}

	public static function check($string, $hash) {
		return (crypt($string, $hash) === $hash);
	}

/**
 * Generate a random base64 encoded salt
 * 
 * @return string
 */
	public static function generateRandomSalt() {
		// Salt seed
		$seed = uniqid(mt_rand(), true);

		// Generate salt
		$salt = base64_encode($seed);
		$salt = str_replace('+', '.', $salt);

		return substr($salt, 0, self::$_saltLength);
	}

/**
 * Build a hash string for crypt()
 * @param  integer $cost The hashing cost
 * @param  string $salt  The salt
 * 
 * @return string
 */
	private static function __generateHashString($cost, $salt) {
		return sprintf('$%s$%02d$%s$', self::$_saltPrefix, $cost, $salt);
	}
}


?>
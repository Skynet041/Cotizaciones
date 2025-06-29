<?php  


	define("APP_NAME", "Sistema de Cotizaciones Reseller");
	define("APP_URL", "https://genesisglobal.com.ar/reseller/");

	#Zona Horaria
	define("TIMEZONE", "America/Santiago");

	#Database
	define("DB_CONNECTION", "mysql");
	define("DB_HOST", "localhost");   //[REQUERIDO]
	define("DB_PORT", "3306");
	define("DB_DATABASE", "c1612278_patner");   //[REQUERIDO]
	define("DB_USERNAME", "c1612278_patner");    //[REQUERIDO]
	define("DB_PASSWORD", "54fiNAdudi");        //vo35tomuLI [REQUERIDO]

	#Configuración del servidor SMTP
	define("USER_SMTP", "");
	define("PASSWORD_SMTP", "");
	define("FROM_NAME_SMTP", "GSTARSOFT - CL");
	define("HOST_SMTP", "");
	define("PORT_SMTP", 0);

	#Versión
	define("VERSION", "1.0");

 	/*
 		*CONFIGURACIÓN PARA DESARROLLADORES
	*/
		 	#Quieres utilizar las funciones de desarrollador?
		 	#TRUE = SI
		 	#FALSE = NO
			define("DEVELOPER", false);

			#true si queremos mostrar errores!
			#false si "NO" queremos mostrar errores!
			define("DEBUG", false);
	/*
		*FIN DE LA CONFIGURACIÓN DE DESARROLLADORES
	*/
?>

<?php

define("HOST", "localhost"); 			// The host you want to connect to. 
define("USER", "root"); 			// The database username. 
define("PASSWORD", ""); 	// The database password. 
define("DATABASE", "secure_login");             // The database name.


// define("HOST", "db5007244829.hosting-data.io"); 			// The host you want to connect to. 
// define("USER", "dbu2520469"); 			// The database username. 
// define("PASSWORD", "NFsUi2da@p#J6yL"); 	// The database password. 
// define("DATABASE", "dbs5972150");             // The database name.
/**
 * Who can register and what the default role will be
 * Values for who can register under a standard setup can be:
 *      any  == anybody can register (default)
 *      admin == members must be registered by an administrator
 *      root  == only the root user can register members
 * 
 * Values for default role can be any valid role, but it's hard to see why
 * the default 'member' value should be changed under the standard setup.
 * However, additional roles can be added and so there's nothing stopping
 * anyone from defining a different default.
 */
define("CAN_REGISTER", "any");
define("DEFAULT_ROLE", "member");

/**
 * Is this a secure connection?  The default is FALSE, but the use of an
 * HTTPS connection for logging in is recommended.
 * 
 * If you are using an HTTPS connection, change this to TRUE
 */
define("SECURE", TRUE);    // For development purposes only!!!!


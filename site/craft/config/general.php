<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

return array(

  '*' => array(
    // Environment-specific variables (see https://craftcms.com/docs/multi-environment-configs#environment-specific-variables)
    'environmentVariables' => array(),

    // Default Week Start Day (0 = Sunday, 1 = Monday...)
    'defaultWeekStartDay' => 0,

    // Enable CSRF Protection (recommended, will be enabled by default in Craft 3)
    'enableCsrfProtection' => true,

    // Whether "index.php" should be visible in URLs (true, false, "auto")
    'omitScriptNameInUrls' => 'true',

    // Control Panel trigger word
    'cpTrigger' => 'admin',

    'initSQLs' => array("SET SESSION sql_mode='STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';"),

    'siteUrl' => "'http://thomasjoeisseint.com/",
  ),

  // DEV
  'thomasjoeisseint.dev.com' => array(
    // Base site URL
    'siteUrl' => 'http://thomasjoeisseint.dev.com/',
    'devMode' => true,
    'siteName' => 'Thomas Joeisseint',
  ),

);

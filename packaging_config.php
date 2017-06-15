$configure = array(
    'packagename' => 'lol',
    'arch' => 'all',
    'version' => '1.0',
    'maintainer' => 'shifsh',
    'description' => '',
    'url' => '',
    'packagetype' => 'deb',
    'depends' => array(
        
    ),

    'tmpdir' => '/tmp',
    'templatedir' => 'templates',
    'postinst' => '',
    'preinst' => '',
    'postrm' => '',
    'prerm' => '',
    'debconfconfig' => '', // only for debian: config file for debconf
    'debconftemplate' => '', // only for debian: template file for debconf
    'configfile' => '', // mark a file as configuration file
);

/* here you can define which files or directories should go where in the target system.
 * You can use placeholders defined in your $configure array
 * The syntax is dest => src so you don't have to repeat dest if you have lots
 * of stuff to put in the same directory
 * To prevent some files or directories from ending up in the package you can exclude
 * them by prepending them with '- ' (see also example).
 *
 * Example:
 *
 * $filemapping = array(
 *   'var/www/@PACKAGENAME@' => array(
 *      'app/',
 *   )
 * )
 */
$filemapping = array(
    'var/www/@PACKAGENAME@' => array(
        '*',
        '- /templates',
    ),
);

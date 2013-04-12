<?php

namespace CITools\Template;

use CITools\Template\Adapter\TemplateInterface as TemplateInterface;

final class CodeigniterTemplate implements TemplateInterface {

    public static function getApplicationDirectory(){
        $applicationDirectory = DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR;
        return $applicationDirectory;
    }

    /**
     * Generate a function for template generated
     * @param string $func_name function name
     * @return type
     */
    public static function generatorFunction($func_name)
    {
        $load_view = '$this->load->view(\''.$func_name.'\');';
        return <<<EOT

    /**
     * Description
     * @return type
     */
    public function {$func_name}()
    {
        {$load_view}
    }

EOT;
    }

    /**
     * Generator class with your extended class
     * @param string $name
     * @param string $extends_class
     * @return type
     */
    public static function generatorClass($name, $extends_class = null)
    {
        $content = "
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class $name";
        if ( !empty($extends_class) ) {
            $content .= " extends $extends_class";
        }

        $content .= ' {}';

        return $content;
    }


    /**
     * Generate a view template
     * @param string $meta_title view title
     * @return type
     */
    public static function generatorView($meta_title, $contentTitle = '')
    {
        return <<<EOT
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <title>{$meta_title}</title>
    </head>
    <body>
        <h1>{$contentTitle}</h1>
    </body>
</html>
EOT;
    }
}
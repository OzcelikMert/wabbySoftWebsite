<?php
namespace website;
require "../matrix_library/php/auto_loader.php";

use matrix_library\php\page\creator;

class index extends creator {
    private string $v;

    public function __construct() {
        $this->v = "?v=".date("YmdHis");
        $this->page_title = "Wabbysoft";
        parent::__construct();
    }
    protected function main(): void {

    }
    protected function page_body(): string {
         return static::set_include(array(
             "./views/index/slider.php",
             "./views/index/features.php",
             "./views/index/about.php",
             "./views/index/services.php",
             "./views/index/portfolio.php",
             "./views/index/contact.php"
         ));

    }
    protected  function custom_links(): string {
        return '<link rel="stylesheet" href="./assets/styles/index.css">';
    }
    protected function custom_scripts(): string {
        return '<script src="./assets/scripts/index.js'.$this->v.'"></script>';

    }
}
$index = new index();
?>


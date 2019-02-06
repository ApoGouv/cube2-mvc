<?php
/**
 * App Core Class
 * Creates URL & loads core controller
 * URL FORMAT - /controller/action/params
 */
class Core {
    // set default controller, action and parameters
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct() {
        // print_r($this->getUrl());
        $url = $this->getUrl();

        /* ** Load the controller from the url ** */
        // Look in controllers for first value of the given url
        if(file_exists('../app/controllers/' . ucwords($url[0]).'.php')) {
            // If exists, set as controller
            $this->currentController = ucwords($url[0]);
            // Unset 0 index
            unset($url[0]);
        }

        // Require the Controller
        require_once '../app/controllers/' . $this->currentController . '.php';

        // Instantiate controller class
        $this->currentController = new $this->currentController;

        /* ** Mapping methods from the url ** */
        // Check for second part of url
        if(isset($url[1])) {
            // Check to see if method exists in controller
            if (method_exists($this->currentController, $url[1])) {
                $this->currentMethod = $url[1];
                // Unset 1 index
                unset($url[1]);
            }
        }

        /* ** Mapping parameters from the url ** */
        // get params
        $this->params = $url ? array_values($url) : [];

        // Call a callback with array of params
        call_user_func_array([$this->currentController, $this->currentMethod], $this->params);

    }

    public function getUrl() {
        // we have mapped (through htaccess: RewriteRule ^(.+)$ index.php?url=$1)
        // our urls to have a 'url' parameter, so we can get it's contents with $_GET['url']
        if(isset($_GET['url'])) {
            // strip last '/' character
            $url = rtrim($_GET['url'], '/');

            // sanitize the url
            $url = filter_var($url, FILTER_SANITIZE_URL);

            // check for existing '/' and break each part into an array element
            $url = explode('/', $url);

            return $url;
        }
    }

}
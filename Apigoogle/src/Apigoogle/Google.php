<?php
/**
 * Webino (https://github.com/webino/)
 *
 * @link      https://github.com/webino/WebinoImageThumb/ for the canonical source repository
 * @copyright Copyright (c) 2013 Webino, s. r. o. (http://webino.sk/)
 * @license   New BSD License
 */

namespace Apigoogle;

include_once __DIR__ . '/../../vendor/autoload.php';
use Apigoogle\base;


use Apigoogle\Google_Client as Google_Client;

/**
 * WebinoImageThumb service
 *
 * Image thumbnailer powered by PHPThumb (https://github.com/masterexploder/PHPThumb)
 *
 * @author Peter Bačinský <peter@bacinsky.sk>
 */
class Google
{

    public function create()
    {

        /*************************************************
         * Ensure you've downloaded your oauth credentials
         ************************************************/
        if (!$oauth_credentials = getOAuthCredentialsFile()) {
            echo missingOAuth2CredentialsWarning();
            return;
        }

        try {
            $google = new Google_Client();
        } catch (\Exception $exc) {
          //  throw new Exception\RuntimeException($exc->getMessage(), $exc->getCode(), $exc);
        }
        
        return $google;
    }


}

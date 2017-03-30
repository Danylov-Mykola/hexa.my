<?php
/**
 * This file is a part of starterMvc project.
 * Author: Mykola Danylov (n.danylov@gmail.com)
 * Date: 22.10.2016
 * Time: 17:27
 */

namespace Model;

use \MykolaDanylov\RemotePics\RemotePicException;
use \MykolaDanylov\RemotePics\WebSitePics;

class Example {
    public static function getResult(){
        try {
            return
                WebSitePics::
                    //Initialize remote site
                    getStatic('http://premiumcar.com.ua/', ['.jpg', '.png', '.gif'], '/storage/')
                    // Download pictures from certain pages
                    ->preparePagePictures('')
                    ->preparePagePictures('/issues.html')
                    // Return list of pictures has been stored locally
                    ->getAllLocalPicsFilesList();
        } catch (RemotePicException $e) {
            echo $e->getMessage();
        }
        return [];
    }
}
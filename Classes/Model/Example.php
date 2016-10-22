<?php
/**
 * This file is a part of hexa.my project.
 * Author: Mykola Danylov (n.danylov@gmail.com)
 * Date: 22.10.2016
 * Time: 17:27
 */

namespace Model;

use \MykolaDanylov\RemotePics as RemotePics;

class Example {
    public static function getResult(){
        $premiumcarPics = new RemotePics\WebSitePics('http://premiumcar.com.ua/', ['.jpg', '.png', '.gif'], '/storage/');

        $picturesPathesArr = [];
        try {
            $premiumcarPics->preparePagePictures('');
            $premiumcarPics->preparePagePictures('/issues.html');
            $picturesPathesArr = $premiumcarPics->getAllLocalPicsFilesList();
        } catch (RemotePics\RemotePicException $e) {
            echo $e->getMessage();
        }

        return $picturesPathesArr;
    }
}
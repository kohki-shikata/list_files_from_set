<?php

// Author: Ryan Hewitt - http://www.mesuva.com.au
namespace Concrete\Package\ListFilesFromSet;
use Package;
use BlockType;

class Controller extends Package {

     protected $pkgHandle = 'list_files_from_set';
     protected $appVersionRequired = '5.7.0.1';
     protected $pkgVersion = '1.0.7';

     public function getPackageDescription() {
          return t("A block to display a list of files from a file set.");
     }

     public function getPackageName() {
          return t("List files from set");
     }

     public function install() {
         $pkg = parent::install();

          // install block
          BlockType::installBlockTypeFromPackage('list_files_from_set', $pkg);
     }

}

?>
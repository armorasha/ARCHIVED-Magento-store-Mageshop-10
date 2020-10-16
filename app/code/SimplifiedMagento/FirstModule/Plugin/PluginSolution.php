<?php

namespace SimplifiedMagento\FirstModule\Plugin;


class PluginSolution
{
    // public function beforeExecute(
    //     \SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject
    // ) {

    //     echo "before execute sort order 10" . "</br>";
    // }

    // public function afterExecute(
    //     \SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject
    // ) {
    //     echo "after execute sort order 10" . "</br>";
    // }
    // public function beforeAfterExecute(
    //     \SimplifiedMagento\FirstModule\Controller\Page\HelloWorld $subject
    // ) {
    //     echo "before after execute sort order 10" . "</br>";
    // }




    // a. before-plugin. Tested. Worked.
    // public function beforeSetName(\Magento\Catalog\Model\Product $subject, $name)
    // {
    //     return "Before-Plugin " . $name;
    // }

    //b. after-plugin: Tested. Worked. This will modify all the product names in the store front, thats why this after-plugin is commented out
    // public function afterGetName(\Magento\Catalog\Model\Product $subject, $result)
    // {
    //     return $result . " After Plugin";
    // }

    //c. around-plugin 1: Tested. Worked.
    // public function aroundGetName(
    //     \Magento\Catalog\Model\Product $subject,
    //     callable $proceed
    // ) {

    //     echo "before around-plugin proceed" . "</br>";
    //     $name = $proceed();
    //     echo $name . "</br>";
    //     echo "after around-plugin proceed" . "</br>";
    //     return $name;
    // }

    //d. around-plugin 2: Tested. Worked.
    // around-plugin for method with argument $sku - getIdbySku() in Vendor/Magento/module-catalog/Model/Product.php
    // public function aroundGetIdBySku(
    //     \Magento\Catalog\Model\Product $subject,
    //     callable $proceed,
    //     $sku
    // ) {
    //     echo "before proceed" . "</br>";
    //     $id = $proceed($sku);
    //     echo $id . "</br>";
    //     echo "after proceed" . "</br>";
    //     return $id;
    // }





    //    public function aroundGetName(
    //        \Magento\Catalog\Model\Product $subject, callable $proceed) {
    //
    //        echo "before proceed"."</br>";
    //        $name = $proceed();
    //        echo $name ."</br>";
    //        echo "after proceed"."</br>";
    //        return $name;
    //    }


}

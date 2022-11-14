<?php

namespace Sixincode\HiveDisplay\Traits;

use Sixincode\HiveHelpers\Traits\FieldsTrait;

trait HasImagesTrait
{
    use FieldsTrait;

    public function allImagesArrayRaw()
    {
        $collectedImages =  explode(self::firstLevelExploder(), $this->images );
        return $collectedImages;
        // $collectedImages = [
        //   'render:::myUrl&:&class:::myclass&:&color:::red&&&render:::mySalon&:&class:::myNewwestclass&:&color:::black&&&render:::myShop&:&class:::myOtherclass&:&color:::green',
        // ]
    }

    public function countAllImages()
    {
        return count($this->allImagesArrayRaw());
    }

    public function setImage(array $pairValue, $key=0)
    {
      // if($key > count($this->countAllImages() + 1) || $key < 0)
      // {
      //   $key = ($this->countAllImages() + 1);
      // }
      $imageArray = [];
      $foreach ($pairValue as $key => $pair) {
        $imageArray[] =  $pair_value[0].(self::thirdLevelExploder()).$pair_value[1];
      }
      $imageData = implode($imageArray);
      $this->images = $this->images.(self::firstLevelExploder()).$imageData;
      return $this->imageData;
    }

    public function sanitizeSingleImage($imageToDisplayRaw)
    {
      // $imageToDisplayRaw = [
      //   'render:::myUrl&:&class:::myclass&:&color:::red',
      // ]

      //get one array of raw elements for one image
      $imageToDisplayRawPairsvalue = explode(self::secondLevelExploder(), $imageToDisplayRaw);
      // [
      //   'render:::myUrl',
      //   'class:::myclass',
      //   'color:::red',
      // ]

      // init single image in empty array form
      $singleImageFinalArray = [];
     // each existing keyValue from image operation
      foreach ($imageToDisplayRawPairsvalue as $indexOfElement => $singlePair) {
        $imageToDisplayCleanPairsvalue = explode(self::thirdLevelExploder(), $singlePair);
          // [
          //   'render => myUrl',
          // ]
        $singleImageFinalArray[$imageToDisplayCleanPairsvalue[0]] = $imageToDisplayCleanPairsvalue[1];
          // [
          //   'render' => 'myUrl',
          //   'class' => 'myclass',
          //   'color' => 'red',
          // ]
      }
       return $singleImageFinalArray;
    }

    public function displaySingleImage(int $key = 0)
    {
        //get one array containing all image raw
        $allImagesArrayRaw =  $this->allImagesArrayRaw();
        // $allImagesArrayRaw = [
        //   'render:::myUrl&:&class:::myclass&:&color:::red&&&render:::mySalon&:&class:::myNewwestclass&:&color:::black&&&render:::myShop&:&class:::myOtherclass&:&color:::green',
        // ]

        // if the key of image is > to number of images or key < 0,  set key as first image
        if($key > $this->countAllImages() || $key < 0)
        {
          return $key = 0;
        }
        //retrive raw image to display from key provided
        $imageToDisplayRaw = $allImagesArrayRaw[$key];
        // [
        //   'render:::myUrl&:&class:::myclass&:&color:::red',
        // ]
        $image = $this->sanitizeSingleImage($imageToDisplayRaw);
        return $image;
    }

    public function displayAllImages()
    {
      //get one array containing all image raw
      $allImagesArrayRaw[] =  $this->allImagesArrayRaw();
      // [
      //   'render:::myUrl&:&class:::myclass&:&color:::red',
      //   'render:::mySalon&:&class:::myNewwestclass&:&color:::black',
      //   'render:::myShop&:&class:::myOtherclass&:&color:::green',
      // ]

      // init all images in empty array form
      $allImagesFinalArray = [];

      // each existing image operation
      foreach($allImagesArrayRaw as $key => $singleImageRaw){
          $image = $this->sanitizeSingleImage($singleImageRaw);
          $allImagesFinalArray[$image[self::sortOrderFieldName()]] =  $image;
      }

      return $allImagesFinalArray;
    }


    public function reorderImage($currentKey, $order)
    {
      $array = $this->displayAllImages();
      if(($a = array_search($currentKey, array_keys($array))) === false){
          throw new \Exception("The {$currentKey} element cannot be found in images array.");
      }
      $p1 = array_splice($array, $a, 1);
      $p2 = array_splice($array, 0, $order);
      $array = array_merge($p2, $p1, $array);
    }

}

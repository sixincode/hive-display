<?php

namespace Sixincode\HiveDisplay\Traits;

use Sixincode\HiveHelpers\Traits\FieldsTrait;

trait HasContentsTrait
{
      use FieldsTrait;

      public function allContentsArrayRaw()
      {
          $collectedContents =  explode(self::firstLevelExploder(), $this->contents );
          return $collectedContents;
          // $collectedContents = [
          //   'render:::myUrl&:&class:::myclass&:&color:::red',
          //   'render:::mySalon&:&class:::myNewwestclass&:&color:::black',
          //   'render:::myShop&:&class:::myOtherclass&:&color:::green',
          // ]
      }

      public function countAllContents()
      {
          return count($this->allContentsArrayRaw());
      }

      public function setContent(array $pairValue, $key=0)
      {
        // if($key > count($this->countAllContents() + 1) || $key < 0)
        // {
        //   $key = ($this->countAllContents() + 1);
        // }
        $contentArray = [];
        $foreach ($pairValue as $key => $pair) {
          $contentArray[] =  $pair_value[0].(self::thirdLevelExploder()).$pair_value[1];
        }
        $contentData = implode($contentArray);
        $this->contents = $this->contents.(self::firstLevelExploder()).$contentData;
        return $this->contentData;
      }

      public function sanitizeSingleContent($contentToDisplayRaw)
      {
        // $contentToDisplayRaw = [
        //   'render:::myUrl&:&class:::myclass&:&color:::red',
        // ]

        //get one array of raw elements for one content
        $contentToDisplayRawPairsvalue = explode(self::secondLevelExploder(), $contentToDisplayRaw);
        // [
        //   'render:::myUrl',
        //   'class:::myclass',
        //   'color:::red',
        // ]

        // init single content in empty array form
        $singleContentFinalArray = [];
       // each existing keyValue from content operation
        foreach ($contentToDisplayRawPairsvalue as $indexOfElement => $singlePair) {
          $contentToDisplayCleanPairsvalue = explode(self::thirdLevelExploder(), $singlePair);
            // [
            //   'render => myUrl',
            // ]
          $singleContentFinalArray[$contentToDisplayCleanPairsvalue[0]] = $contentToDisplayCleanPairsvalue[1];
            // [
            //   'render' => 'myUrl',
            //   'class' => 'myclass',
            //   'color' => 'red',
            // ]
        }
         return $singleContentFinalArray;
      }

      public function displaySingleContent(int $key = 0)
      {
          //get one array containing all content raw
          $allContentsArrayRaw =  $this->allContentsArrayRaw();
          // $allContentsArrayRaw = [
          //   'render:::myUrl&:&class:::myclass&:&color:::red&&&render:::mySalon&:&class:::myNewwestclass&:&color:::black&&&render:::myShop&:&class:::myOtherclass&:&color:::green',
          // ]

          // if the key of content is > to number of contents or key < 0,  set key as first content
          if($key > $this->countAllContents() || $key < 0)
          {
            return $key = 0;
          }
          //retrive raw content to display from key provided
          $contentToDisplayRaw = $allContentsArrayRaw[$key];
          // [
          //   'render:::myUrl&:&class:::myclass&:&color:::red',
          // ]
          $content = $this->sanitizeSingleContent($contentToDisplayRaw);
          return $content;
      }

      public function displayAllContents()
      {
        //get one array containing all content raw
        $allContentsArrayRaw[] =  $this->allContentsArrayRaw();
        // [
        //   'render:::myUrl&:&class:::myclass&:&color:::red',
        //   'render:::mySalon&:&class:::myNewwestclass&:&color:::black',
        //   'render:::myShop&:&class:::myOtherclass&:&color:::green',
        // ]

        // init all contents in empty array form
        $allContentsFinalArray = [];

        // each existing content operation
        foreach($allContentsArrayRaw as $key => $singleContentRaw){
            $content = $this->sanitizeSingleContent($singleContentRaw);
            $allContentsFinalArray[[self::sortOrderFieldName()]] =  $content;
        }

        return $allContentsFinalArray;
      }

}

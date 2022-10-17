<?php

namespace Sixincode\HivePosts\Traits;

use Sixincode\HiveHelpers\Traits\FieldsTrait;

trait HasTextsTrait
{


      public function allTextsArrayRaw()
      {
          $collectedTexts =  explode(self::firstLevelExploder(), $this->texts );
          return $collectedTexts;
          // $collectedTexts = [
          //   'render:::myUrl&:&class:::myclass&:&color:::red&&&render:::mySalon&:&class:::myNewwestclass&:&color:::black&&&render:::myShop&:&class:::myOtherclass&:&color:::green',
          // ]
      }

      public function countAllTexts()
      {
          return count($this->allTextsArrayRaw());
      }

      public function setText(array $pairValue = [], $key= null)
      {
        // if($key > count($this->countAllTexts() + 1) || $key < 0)
        // {
        //   $key = ($this->countAllTexts() + 1);
        // }
        $textArray = [];
        $foreach ($pairValue as $key => $pair) {
          $textArray[] =  $pair_value[0].(self::thirdLevelExploder()).$pair_value[1];
        }
        $textData = implode($textArray);
        $this->texts = $this->texts.(self::firstLevelExploder()).$textData;
        return $this->textData;
      }

      public function sanitizeSingleText($textToDisplayRaw)
      {
        // $textToDisplayRaw = [
        //   'render:::myUrl&:&class:::myclass&:&color:::red',
        // ]

        //get one array of raw elements for one text
        $textToDisplayRawPairsvalue = explode(self::secondLevelExploder(), $textToDisplayRaw);
        // [
        //   'render:::myUrl',
        //   'class:::myclass',
        //   'color:::red',
        // ]

        // init single text in empty array form
        $singleTextFinalArray = [];
       // each existing keyValue from text operation
        foreach ($textToDisplayRawPairsvalue as $indexOfElement => $singlePair) {
          $textToDisplayCleanPairsvalue = explode(self::thirdLevelExploder(), $singlePair);
            // [
            //   'render => myUrl',
            // ]
          $singleTextFinalArray[$textToDisplayCleanPairsvalue[0]] = $textToDisplayCleanPairsvalue[1];
            // [
            //   'render' => 'myUrl',
            //   'class' => 'myclass',
            //   'color' => 'red',
            // ]
        }
         return $singleTextFinalArray;
      }

      public function displaySingleText(int $key = 0)
      {
          //get one array containing all text raw
          $allTextsArrayRaw =  $this->allTextsArrayRaw();
          // $allTextsArrayRaw = [
          //   'render:::myUrl&:&class:::myclass&:&color:::red&&&render:::mySalon&:&class:::myNewwestclass&:&color:::black&&&render:::myShop&:&class:::myOtherclass&:&color:::green',
          // ]

          // if the key of text is > to number of texts or key < 0,  set key as first text
          if($key > $this->countAllTexts() || $key < 0)
          {
            return $key = 0;
          }
          //retrive raw text to display from key provided
          $textToDisplayRaw = $allTextsArrayRaw[$key];
          // [
          //   'render:::myUrl&:&class:::myclass&:&color:::red',
          // ]
          $text = $this->sanitizeSingleText($textToDisplayRaw);
          return $text;
      }

      public function displayAllTexts()
      {
        //get one array containing all text raw
        $allTextsArrayRaw[] =  $this->allTextsArrayRaw();
        // [
        //   'render:::myUrl&:&class:::myclass&:&color:::red',
        //   'render:::mySalon&:&class:::myNewwestclass&:&color:::black',
        //   'render:::myShop&:&class:::myOtherclass&:&color:::green',
        // ]

        // init all texts in empty array form
        $allTextsFinalArray = [];

        // each existing text operation
        foreach($allTextsArrayRaw as $key => $singleTextRaw){
            $text = $this->sanitizeSingleText($singleTextRaw);
            $allTextsFinalArray[[self::sortOrderFieldName()]] =  $text;
        }

        return $allTextsFinalArray;
      }

}

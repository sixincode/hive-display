<?php

namespace Sixincode\HivePosts\Traits;

use Sixincode\HiveHelpers\Traits\FieldsTrait;

trait HasButtonsTrait
{
      use FieldsTrait;

      public function allButtonsArrayRaw()
      {
          $collectedButtons =  explode(self::firstLevelExploder(), $this->buttons );
          return $collectedButtons;
          // $collectedButtons = [
          //   'render:::myUrl&:&class:::myclass&:&color:::red',
          //   'render:::mySalon&:&class:::myNewwestclass&:&color:::black',
          //   'render:::myShop&:&class:::myOtherclass&:&color:::green',
          // ]
      }

      public function countAllButtons()
      {
          return count($this->allButtonsArrayRaw());
      }

      public function setButton(array $pairValue, $key=0)
      {
        // if($key > count($this->countAllButtons() + 1) || $key < 0)
        // {
        //   $key = ($this->countAllButtons() + 1);
        // }
        $buttonArray = [];
        $foreach ($pairValue as $key => $pair) {
          $buttonArray[] =  $pair_value[0].(self::thirdLevelExploder()).$pair_value[1];
        }
        $buttonData = implode($buttonArray);
        $this->buttons = $this->buttons.(self::firstLevelExploder()).$buttonData;
        return $this->buttonData;
      }

      public function sanitizeSingleButton($buttonToDisplayRaw)
      {
        // $buttonToDisplayRaw = [
        //   'render:::myUrl&:&class:::myclass&:&color:::red',
        // ]

        //get one array of raw elements for one button
        $buttonToDisplayRawPairsvalue = explode(self::secondLevelExploder(), $buttonToDisplayRaw);
        // [
        //   'render:::myUrl',
        //   'class:::myclass',
        //   'color:::red',
        // ]

        // init single button in empty array form
        $singleButtonFinalArray = [];
       // each existing keyValue from button operation
        foreach ($buttonToDisplayRawPairsvalue as $indexOfElement => $singlePair) {
          $buttonToDisplayCleanPairsvalue = explode(self::thirdLevelExploder(), $singlePair);
            // [
            //   'render => myUrl',
            // ]
          $singleButtonFinalArray[$buttonToDisplayCleanPairsvalue[0]] = $buttonToDisplayCleanPairsvalue[1];
            // [
            //   'render' => 'myUrl',
            //   'class' => 'myclass',
            //   'color' => 'red',
            // ]
        }
         return $singleButtonFinalArray;
      }

      public function displaySingleButton(int $key = 0)
      {
          //get one array containing all button raw
          $allButtonsArrayRaw =  $this->allButtonsArrayRaw();
          // $allButtonsArrayRaw = [
          //   'render:::myUrl&:&class:::myclass&:&color:::red&&&render:::mySalon&:&class:::myNewwestclass&:&color:::black&&&render:::myShop&:&class:::myOtherclass&:&color:::green',
          // ]

          // if the key of button is > to number of buttons or key < 0,  set key as first button
          if($key > $this->countAllButtons() || $key < 0)
          {
            return $key = 0;
          }
          //retrive raw button to display from key provided
          $buttonToDisplayRaw = $allButtonsArrayRaw[$key];
          // [
          //   'render:::myUrl&:&class:::myclass&:&color:::red',
          // ]
          $button = $this->sanitizeSingleButton($buttonToDisplayRaw);
          return $button;
      }

      public function displayAllButtons()
      {
        //get one array containing all button raw
        $allButtonsArrayRaw[] =  $this->allButtonsArrayRaw();
        // [
        //   'render:::myUrl&:&class:::myclass&:&color:::red',
        //   'render:::mySalon&:&class:::myNewwestclass&:&color:::black',
        //   'render:::myShop&:&class:::myOtherclass&:&color:::green',
        // ]

        // init all buttons in empty array form
        $allButtonsFinalArray = [];

        // each existing button operation
        foreach($allButtonsArrayRaw as $key => $singleButtonRaw){
            $button = $this->sanitizeSingleButton($singleButtonRaw);
            $allButtonsFinalArray[[self::sortOrderFieldName()]] =  $button;
        }

        return $allButtonsFinalArray;
      }

}

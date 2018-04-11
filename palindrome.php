<?php
  function palindrome($temp)
  {
      $palindrome = strrev($temp);
              if ($palindrome == $temp)
              {
                  echo "yes, $temp is a palindrome<br>";
              }
              else
              {
                  echo "nope<br>";
              }
  }

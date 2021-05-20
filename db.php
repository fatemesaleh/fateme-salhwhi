<?php
              

              $Name=$_POST["nam"];
              $Email=$_POST["email"];
              $Comment=$_POST["ideas"];
              $saveindb = "نام : ".$Name . " : ایمیل" . $Email . " : نظرات" . $Comment;
              $fp = fopen("dbfile.txt", "w");

              fwrite($fp, "\n" . $saveindb);
              fclose($fp);
              echo":)پیام شما ارسال شد";
              
              ?>
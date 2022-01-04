<?php

require_once(__DIR__ . "/../phpclasses-template/Template.php");

class BootstrapTemplate extends Template {

  private $cssDir = "css/shared/bstemplate";
  private $jsDir = "js/shared/bstemplate";

function finalizeTopSection($bodyElement = null,$topHTML = null, $lang = "en", $charset = "utf-8") {
        $bodyIdTag = "";
        $returnVal = "";
        $returnVal .= "<!doctype html>\n";
        $returnVal .= "<html lang=\"" . $lang . "\">\n";
        $returnVal .= "<head>" . PHP_EOL;
        $returnVal .= "\t<title>";
        $returnVal .= $this->_title;
        $returnVal .= "</title>" . PHP_EOL;
        $returnVal .= "\t<meta charset=\"" . $charset . "\">" . PHP_EOL;
        $returnVal .= "\t<meta name=\"viewport\" " .
            " content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">" . PHP_EOL;
        $returnVal .= "\t<link rel='stylesheet' href='" . 
            $this->cssDir .  "/bootstrap.min.css'" .
            " crossorigin='anonymous'>" . PHP_EOL;
        $returnVal .= "\t<script src='" .
            $this->jsDir . "/jquery-3.5.1.min.js' " .
            " crossorigin='anonymous'>" .
            "</script>" . PHP_EOL;
        foreach ($this->_headElements as $elm) {
          $returnVal .= $elm;
        }
        $returnVal .= "</head>" . PHP_EOL;
        if (is_null($bodyElement)) {
          $bodyTag = "<body>";
        } else {
          $bodyTag = $bodyElement;
        }
        $returnVal .= $bodyTag . PHP_EOL;
        if (is_null($topHTML)) {
          $returnVal .= $topHTML;
        }
        $this->_top = $returnVal;
} //end function finalizeTopSection

function finalizeBottomSection() {
        $returnVal = "";
        $returnVal .= "\t<script src='" . 
            $this->jsDir . "/popper.min.js'" .
            " crossorigin='anonymous'> " .
            " </script>" . PHP_EOL;
        $returnVal .= "\t<script src='" . 
            $this->jsDir . "/bootstrap.min.js'" .
            "  crossorigin='anonymous'>" .
            " </script>" . PHP_EOL;
        foreach ($this->_bottomElements as $elm) {
          $returnVal .= $elm;
        }
        $returnVal .= "</body>" . PHP_EOL;
        $returnVal .= "</html>" . PHP_EOL;
        $this->_bottom = $returnVal;

} //end function finalizeBottomSection


} //end class BootstrapTemplate

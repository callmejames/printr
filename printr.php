<?php
/**
 * Debug-Ausgabe wenn Dev-Version
 *
 * background: url() repeat-y #DBEAF9; *** url() *** verursacht leuladen der
 * Seite
 *
 * @param $obj welche
 *            Variable/Array soll ausgegeben werden
 *            
 * @return false, wenn nicht im Dev-Modus
 */
function printr ($obj = null, $text = "")
{
    // return false; // DELETE !!!
    
    if (!isLocal() ) {
        return false;
    }
    
    if ($text == "") {
        $text = "<strong>[empty]</strong>";
    }
    
    ?>
	<style type="text/css">

	#printrorange {
		float: left;
		background: #EEE; 
		color: #ff9065; 
		text-align            : left; 
		margin                : 9px; 
		margin-top: 7px; 
		margin-bottom: 7px;
		padding               : 10px 10px 10px 9px; 
		
		border           	: 2px solid #FFFFFF; 
		#border-left           : 5px solid #FFFFFF; 
		#border-right           : 5px solid #FFFFFF; 
		border-radius         : 4px 4px 4px 4px;
		-moz-border-radius    : 4px 4px 4px 4px;
		-webkit-border-radius : 4px 4px 4px 4px;
		
		-webkit-box-shadow: 0px 1px 4px 1px rgba(220,220,220,1);
		-moz-box-shadow: 0px 1px 4px 1px rgba(220,220,220,1);
		box-shadow: 0px 1px 4px 1px rgba(220,220,220,1);
	}

	#printrblue {
		float: left;
		color: #88c3fe; 
		background: #EEE; 
		padding: 10px 10px 10px 9px; 
		margin: 9px; 
		margin-top: 7px; 
		margin-bottom: 7px;

        border           	: 2px solid #FFFFFF; 
		#border-left: 5px solid #FFFFFF;
		#border-right: 3px solid #FFFFFF; 
		border-radius         : 4px 4px 4px 4px;
		-moz-border-radius    : 4px 4px 4px 4px;
		-webkit-border-radius : 4px 4px 4px 4px;

		-webkit-box-shadow: 0px 1px 4px 1px rgba(220,220,220,1);
		-moz-box-shadow: 0px 1px 4px 1px rgba(220,220,220,1);
		box-shadow: 0px 1px 4px 1px rgba(220,220,220,1);
	}

	</style>
	<?php
    
    $trace = debug_backtrace();
    
    $line = $trace[0]['line'];
    $file = $trace[0]['file'];
    if ($_SESSION["printr"] == "blue") {
        echo "<div id=\"printrorange\">";
        $_SESSION["printr"] = "orange";
    } else {
        echo "<div id=\"printrblue\">";
        $_SESSION["printr"] = "blue";
    }
    echo "<pre style=\"font-family: Tahoma, Helvetica, Arial, sans-serif; font-size: 10px; 
    text-shadow: 0px 0px 0px #CCCCCC\">";
    if ($obj !== null && $obj !== false) {
        echo "<div style='margin: -10px -10px 10px -9px; padding: 10px 10px 10px 10px; background: #FFFFFF; border-bottom: solid 0px #DDD;'>" .
                "<div style=\"font-size: 9pt; font-family: Tahoma, Helvetica, Arial, sans-serif; padding: 10px 0px 0px 0px; line-height:100%;\"><span style=\"font-size: 12pt; font-weight: bold; \">" .
                $text . "</span>" .
                (is_array($obj) ? " (" . count($obj) . " Array's)" : "") . "</div>" .
                "<p style=\"font-size: 8pt; font-family: Tahoma, Helvetica, Arial, sans-serif; color: #BBBBBB; padding: 10px 0px 0px 0px; line-height:100%;\">.. called from " .
                str_replace("\\", " \ ", $file) . "  -  Line <b>" . $line .
                "</b></p>" . "</div>";
        // echo htmlspecialchars(print_r($obj,true));
        if (is_array($obj)) {
            foreach ($obj as $key => $value) {
                echo "<div style='float: left; margin-right: 30px; color: #AAA; background-color:rgba(255, 255, 255, 0.5); margin-bottom: 10px; padding: 10px; border: 0px solid #FFFFFF; border-radius: 4px 4px 4px 4px;
		-moz-border-radius: 4px 4px 4px 4px;
		-webkit-border-radius: 4px 4px 4px 4px;'><span style='color: #BBB; font-size: 0.8rem; line-height: 1.2rem;'>[ <b>" .
                        $key . "</b> ] </span>" .
                        htmlspecialchars(print_r($value, true)) . "</div>";
            }
            echo "<div style='clear: both;'></div>";
        } else {
            echo "<div style='float: left; margin-right: 30px; padding: 10px; border: 1px solid #FFFFFF; border-radius: 4px 4px 4px 4px;
		-moz-border-radius: 4px 4px 4px 4px;
		-webkit-border-radius: 4px 4px 4px 4px;'>" .
                    htmlspecialchars(print_r($obj, true)) . "</div>";
            echo "<div style='clear: both;'></div>";
        }
    } else
        echo "<p class=\"small\">Empty printr file:$file:$line</p>";
    echo "</pre>";
    echo "<br><div style=\"color: #FFFFFF; padding: 0px; margin-left: -9px; margin-right: -10px; min-height: 0px; margin-bottom: -10px;
				-webkit-box-shadow: inset 0px -18px 0px 0px rgba(90,90,90,0.3);
				-moz-box-shadow: inset 0px -18px 0px 0px rgba(90,90,90,0.3);
				box-shadow: inset 0px -18px 0px 0px rgba(90,90,90,0.2);\"></div>";
    echo "\n<!-- printr called from $file:$line -->\n";
    echo "</div>";
    echo "<div style='clear: both;'></div>";
}
?>
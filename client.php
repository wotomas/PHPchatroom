<?php

if (!isset($_COOKIE["name"])) {
    header("Location: error.html");
    return;
}

// get the name from cookie
$name = $_COOKIE["name"];

print "<?xml version=\"1.0\" encoding=\"utf-8\"?>";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Add Message Page</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script type="text/javascript">
        //<![CDATA[
        function load() {
            var name = "<?php print $name; ?>";
            setTimeout("document.getElementById('msg').focus()",100);
        }
		
		//select color
        function select(color) {
            var fld = document.getElementById("color");
            if (color != fld.value) {
                if (!confirm("Do you want to use the new color?!"))
                    return;
                fld.value=color;
            }
        }
        
        //]]>
        </script>
		<style>
            div {
                position: absolute;
                width: 50px;
                height: 50px;
            }
        
		</style>
    </head>

    <body style="text-align: left" onload="load()">
        <form action="add_message.php" method="post">
            <table border="0" cellspacing="5" cellpadding="0">
                <tr>
                    <td>What is your message?</td>
                </tr>
                <tr>
                    <td><input class="text" type="text" name="message" id="msg" style= "width: 780px" /></td>
                </tr>
                <tr>
                    <td><input class="button" type="submit" value="Send Your Message" style="width: 200px" /></td>
                </tr>
				<tr>
					<td>
						<div style="position:relative">
							<div style="background-color:red;left:0px" onclick="select('red')"></div>
							<div style="background-color:yellow;left:50px" onclick="select('yellow')"></div>
							<div style="background-color:green;left:100px" onclick="select('green')"></div>
							<div style="background-color:cyan;left:150px" onclick="select('cyan')"></div>
							<div style="background-color:blue;left:200px" onclick="select('blue')"></div>
							<div style="background-color:magenta;left:250px" onclick="select('magenta')"></div>
						</div>
					</td>
				</tr>
            </table>
			<input type="hidden" name="color" id="color" value="magenta">
        </form>
        
        <!--logout button-->


    </body>
</html>

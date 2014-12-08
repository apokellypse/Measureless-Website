<!DOCTYPE html>
<html>
	<head>
		<?php include "meta.php";?>
		<title>Get Involved</title>
	</head>

	<body>
		<?php include "nav2.php";?>    
		<div class="content" id="contact">
		<h2>Get Involved</h2>

        <div class="contactdiv" id="contactofficer">
        <h1>For General Questions</h1>
        <ul>
            <li><h5>President</h5>
                <p class="name">Andrew Park</p>
                <p><a href="mailto:akp67@cornell.edu">akp67@cornell.edu></a></p>
            </li>
            <li><h5>Public Relations</h5>
                <p class="name">Charlie Qian</p>
                <p><a href="mailto:cq38@cornell.edu">cq38@cornell.edu</a></p>
            </li>
        </ul>
        

        <div class="contactdiv" id="contactemail">
            <h1>Want to join Measureless?</h1>
            <p id="download"><a href="downloads/application.doc" download>
                Download an application form!</a> </p>
            <p>For questions about auditions:</p>
            <p id="email"><a href="mailto:cornell.measureless@gmail.com"> cornell.measureless@gmail.com </a></p>
        </div>

        <h1>Submit Applications Here</h1>





<?php
    
    $firstName = "";
    $lastName = "";

    //where the .errorbox div is:
    $varMessage = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $varPlscomplete = "";
        if (empty($_POST['first'])) {
            $varPlscomplete = 
            '<div class="incomplete">You need to enter in your first name.</div>';
        }
        if (empty($_POST['last'])) {
            $varPlscomplete = $varPlscomplete 
            . '<div class="incomplete">You need to enter in your last name.</div>';
        }
        $varFirst = $_POST['first'];
        $varLast = $_POST['last'];

        if (!empty($varPlscomplete)) {
            $varMessage = '<div class="incomplete">' 
            . $varPlscomplete . "</div>";
        }

    //begin handling file upload:


        $allowedExts = array("doc", "DOC", "docx", "DOCX", "pdf", "PDF");
        $temp = explode(".", $_FILES["the_file"]["name"]); 

        //separates the name into an array, and grabs the extension name
        $extension = end($temp);

        $firstName = $_POST['first'];
        $lastName = $_POST['last'];


        //GETTING TIME
        date_default_timezone_set("America/New_York");

        //below 4 lines are from php.net
        $nextWeek = time() + (7 * 24 * 60 * 60);
                           // 7 days; 24 hours; 60 mins; 60 secs
        // echo 'Now:       '. date('Y-m-d H:i:s') ."\n";
        $year = date('Y');
        $month = date('m');
        $date = date('d');
        $hour = date('H');
        $min = date('i');
        $sec = date('s');

        // echo 'Next Week: '. date('Y-m-d', $nextWeek) ."\n";

        if ((($_FILES["the_file"]["type"] == "application/pdf")
            || ($_FILES["the_file"]["type"] == "application/msword")
            || ($_FILES["the_file"]["type"] == 
                "application/vnd.openxmlformats-officedocument.wordprocessingml.document"))
            && ($_FILES["the_file"]["size"] < 2000000)
            && in_array($extension, $allowedExts)) {

            if ($_FILES["the_file"]["error"] > 0) {
                if ($varMessage == "") 
                    $varMessage = '<div class="upload_fail">We encountered an error: ' 
                    . $_FILES["the_file"]["error"] . "</div>";
            } else {
                $newname = "" . $firstName . "_" . $lastName . '_' . $year . '_' 
                . $month . '_' . $date . '_' . $hour . '_' . $min . '_' . $sec . '_' 
                . "." . $extension;
                if (file_exists("uploads/" . $newname)) {
                    if ($varMessage == "") 
                        $varMessage = '<div class="upload_warning">' . $_FILES["the_file"]["name"] 
                        . " already exists in our database.</div>";
                } else {
                    if (move_uploaded_file($_FILES['the_file']['tmp_name'], "uploads/" . $newname)) { 
                    //I've renamed the file
                        if ($varMessage == "") 
                            $varMessage = '<div class="upload_success">
                            Your application has been uploaded!</div>';
                    
                        $fs = fopen("applicants.csv", "a");
                        fwrite($fs, $varFirst . ", " . $varLast . "\n");
                        fclose($fs);

                    } else { 
                        print '. Please try again.</div>'; 
                    } 
                }
            }
        } else {
            if ($varMessage == "") 
                $varMessage = '<div class="upload_fail">
                Please attach a pdf of your application. 
                Also, make sure your file size is under 2 MB.</div>';
        }
    }

    ?>

    <section>
        <?=$varMessage;?>
    </section>

    <section>
        <form action="getinvolved.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td class="tweakcell"><label for="text">First Name</label></td>
                    <td><input required type="text" name="first" value="<?=$firstName;?>" 
                        maxlength="7" placeholder="type here"></td>
                </tr>
                <tr>
                    <td class="tweakcell"><label for="text">Last Name</label></td>
                    <td><input required type="text" name="last" value="<?=$lastName;?>" 
                        maxlength="7" placeholder="type here"></td>
                </tr>
                <tr>
                    <td class="tweakcell"><label for="file">Browse:</label></td>
                    <td><input required type="file" name="the_file" id="file"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        </form>
    </section>

    </div>
            
<!-- Club Links (tumblr, g+, facebook, twitter, youtube…) -->
    </div>

		<?php include "footer.php";?>            
	</body>
</html>

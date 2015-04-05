<?PHP
    $sql=" UPDATE `users` SET `first` = 1  WHERE `id` = '$sesid' ";
    if (!mysql_query($sql,$db)) {
        die('Error: ' . mysql_error());
    }

    $sql2=" CREATE TABLE `crawler`.`id$sesid` ( `pk` INT(9) NOT NULL AUTO_INCREMENT , `path` VARCHAR(99999) NOT NULL , `title` VARCHAR(99999) NOT NULL , `date` VARCHAR(999) DEFAULT 'N/A', `feedback` INT(1) DEFAULT '0', `score` INT(2) DEFAULT '0', `down` INT(1) DEFAULT '0', PRIMARY KEY (`pk`) ) ENGINE = InnoDB;";
    if (!mysql_query($sql2,$db)) {
        die('Error: ' . mysql_error());
    }
?>
<div id="first-time">
    <div class="inner-win">
        <div class="inner-title grad-title">
            Research Crawler Message
        </div>
        <br>
        <p style="text-align:center;font-weight:bold;">Welcome, and thank you for signing up!</p>
        <p>To begin, click the Research tab and enter your desired keywords and the URLs of the websites you wish to search. Make sure you hit the SAVE button. Once the crawler finds relevant proposals that match your criteria, you will receive notifications by email. You can view or download your proposals within this web app. Make sure you read over the FAQ's in the Help section.</p>
        </p>
        <button class="btn-save" onclick="location.reload();"> Dismiss</button>
    </div>
</div>
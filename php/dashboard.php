<div class="dash-container">
    <div class="dash-tile thin gradient-dash"><h2 class="caps dash-title"><?PHP echo ('Welcome, '.$fn." ".$ln); ?></h2></div>
    <div class="dash-tile large gradient-dash">
        <div class="ind-cont">
            <div class="ind grad-grey ileft iborder"></div>
            <div class="ind grad-red <?PHP if($io==0)echo'ion';else echo'ioff';?> iborder"></div>
            <div class="ind grad-orange <?PHP if($io==1)echo'ion';else echo'ioff';?> iborder"></div>
            <div class="ind grad-yellow <?PHP if($io==2)echo'ion';else echo'ioff';?> iborder"></div>
            <div class="ind grad-green <?PHP if($io==3)echo'ion';else echo'ioff';?> iborder"></div>
            <div class="ind grad-grey iright iborder"></div>
            <div class="status-text">
                Crawler is <?PHP 
                if ($io==0) echo'offline';
                else if ($io==1) echo'down for maintenance';
                else if ($io==2) echo'processing';
                else if ($io==3) echo'operational';
                ?>
            </div>
        </div>
    </div>
    <div class="dash-tile xlarge gradient-dash">
        <div class="tempdt"><?PHP echo $num_rows = mysql_num_rows($title_result_new); ?> New proposals for review</div>
        <div class="proplist-cont">
            <div class="proplist-inner">
                <div class="inner-shadow"></div>
                <?PHP
                $counter = 0;
                if (empty($test_row= mysql_fetch_array($test_result = mysql_query("SELECT `title` FROM `id$sesid`")))) {
                    ?><div class="empty-tag">No proposals have been downloaded yet</div><?PHP
                }
                else {
                ?><ul class="pl-ul"><?PHP
                    while($title_row = mysql_fetch_array($title_result_new)) {
                    $counter ++;
                    $path = $title_row['path'];
                    ?>
                    <li onClick="download('<?PHP echo $sesid; ?>','<?PHP echo $path; ?>');"><?PHP echo $counter; ?>.&nbsp;&nbsp;&#40;<?PHP echo $title_row['date']; ?>&#41;&nbsp;-&nbsp;<?PHP echo spacebar(mb_strimwidth($title_row['title'], 0, 64, "...")); ?>
                    </li>
                    <?php
                    }
                }
                ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="dash-tile taller gradient-dash">
        <?PHP
        if (empty($kw_string)) {
            echo '<div class="empty-tag">Enter some keywords in the Research<Br>tab to start your word-cloud</div>';
        }
        else {
        ?>
        <div id="wordcloud1" class="wordcloud">
            <?PHP
            $words = explode(',', $kw_string);
            foreach($words as $word) {
                $ran = rand(10, 30);
                ?>
                <span class="wc-text" data-weight="<?PHP echo $ran; ?>"><?PHP echo $word; ?></span>
                <?PHP
            }
            ?>
        </div>
        <?PHP
        }
        ?>
    </div>
</div>
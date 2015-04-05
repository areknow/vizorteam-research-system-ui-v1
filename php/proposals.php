<h2><?PHP echo $num_rows = mysql_num_rows($title_result); ?> Aggregated Proposals</h2>
<hr>
<div class="proposal-cont">
    <div class="proposal-inner">
        <div class="proposal-inner-shadow"></div>
            <ul class="proposal-ul">
                <?PHP
                $counter = 0;
                while ($title_row = mysql_fetch_array($title_result)) {
                $counter ++;
                $path = $title_row['path'];
                ?>
                <li onClick="download('<?PHP echo $sesid; ?>','<?PHP echo $path; ?>');"><?PHP echo $counter; ?>.&nbsp;&nbsp;&#40;<?PHP echo $title_row['date']; ?>&#41;&nbsp;-&nbsp;<?PHP echo spacebar(mb_strimwidth($title_row['title'], 0, 75, "...")); ?>
                </li>
                <?php
                }
                ?>
            </ul>
    </div>
</div>
<form action="zipit.php" method="post">
    <input type="hidden" name="IDX" value="<?PHP echo $sesid; ?>">
    <button class="btn-save prop-dl"><i class="fa fa-cloud-download"></i>Download archive</button>
</form>
<?php 
	$CI =& get_instance();
	$twitter_data=$CI->twittersapi();
?>
 
<b>Twitter Updates:</b>
<div>
    <?php
    foreach($twitter_data AS $single_tweet){
        //http://stackoverflow.com/a/15387732/66767
        $tweet = $single_tweet->text;
        $tweet = preg_replace("/([\w]+\:\/\/[\w-?&;#~=\.\/\@]+[\w\/])/", "<a target=\"_blank\" href=\"$1\">$1</a>", $tweet);
        $tweet = preg_replace("/#([A-Za-z0-9\/\.]*)/", "<a target=\"_new\" href=\"http://twitter.com/search?q=$1\">#$1</a>", $tweet);
        $tweet = preg_replace("/@([A-Za-z0-9\/\.]*)/", "<a href=\"http://www.twitter.com/$1\">@$1</a>", $tweet);
        echo($tweet);
		$cdate=$single_tweet->created_at;
		echo($cdate);
    }
    ?>
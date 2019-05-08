<?php
if($srchh)
{
foreach($srchh as $sr)
{
?>

<?php if($sr->iden=='U'){?>
<a href="<?php echo base_url();?>index.php/portfolio/user?id=<?php echo $sr->id; ?>">
<div class="display_box" align="left">
<img src="<?php echo base_url();?>uploads/users/thumb_small_sr/<?php if($sr->profile_img!=''){echo $sr->profile_img; }else{  echo "avatar_default.jpg"; } ?>" style="width:25px;height:25px; float:left; margin-right:6px"/>
<?php echo $sr->name; ?>&nbsp;
<br/>
<span style="font-size:11px; color:#999999"><?php echo 'Portfolio'; ?></span>
<strong><?php if($sr->industry!=''){ echo $sr->industry.' Industry'; } else { echo "Unknown Industry"; } ?></strong>
</div>
</a>
<?php } else if($sr->iden=='M') {?>
<a href="<?php echo base_url();?>index.php/moviefolio/movie?id=<?php echo $sr->id; ?>&&name=<?php echo $sr->name; ?>">
<div class="display_box" align="left">
<img src="<?php echo base_url();?>uploads/movie_main/thumb_small_sr/<?php if(isset($sr->profile_img) && $sr->profile_img!=''){echo $sr->profile_img; }else{ echo "moviedummy.jpg"; } ?>" title="<?php echo $sr->name; ?>" style="width:25px;height:25px; float:left; margin-right:6px" />
<?php echo $sr->name; ?>&nbsp;
<br/>
<span style="font-size:11px; color:#999999"><?php echo 'Movie'; ?></span>
<strong><?php if($sr->industry!=''){ echo $sr->industry.' Industry'; } else { echo "Unknown Industry"; } ?></strong>
</div>
</a>
<?php } else if($sr->iden=='C') {?>
<a href="<?php echo base_url();?>index.php/celebfolio/celeb?id=<?php echo $sr->id; ?>&&name=<?php echo $sr->name; ?>">
<div class="display_box" align="left">
<img src="<?php echo base_url();?>uploads/celebs/thumb_small/<?php if($sr->profile_img!=''){echo $sr->profile_img; }else{  echo 'avatar_default.jpg'; } ?>" style="width:25px;height:25px; float:left; margin-right:6px"/>
<?php echo $sr->name; ?>&nbsp;
<br/>
<span style="font-size:9px; color:#999999"><?php echo 'Celebrity'; ?></span>
<strong><?php if($sr->industry!=''){ echo $sr->industry.' Industry'; } else { echo "Unknown Industry"; } ?></strong>
</div>
</a>
<?php } ?>

<?php
}
?>
<a href="<?php echo base_url();?>index.php/search?keyword=<?php echo $keyword;?>">
<div class="display_box1" align="left">
<div class="text-center" style="margin-top:10px;">
 <i class="fa fa-search icon">
                            
                           
                    </i>  View all search results.
</div>
</div>
</a>
<?php
}
else
{
?>
<div class="display_box" align="left">
<div class="text-center" style="margin-top:10px;">
<i class="fa fa-search icon">
                            
                           
                    </i>  No search results were found.
</div>
</div>
<?php } ?>
<?php 
$i = 0;
$p_list;
//$listbar["position"] = 'right';
//$listbar['width'] = '200';
//$listbar = array('position' => 'right','width' => 200);
$listbar[0]{'position'} = 'right';
$listbar[0]{'width'} = '240';
$listbar[0]{'layout'} = 'basic';
foreach($links as $link):
	switch ($link->type) {
		case '1': // video file
			$p_list[$i]{'image'} = '/028.jpg';
			$p_list[$i]{'file'} = 'http://novinka.tomsk.ru/' . substr($link->REALWAY, 10);
			$p_list[$i]{'title'} = $link->NAME;
			$i++;
			break;
		case '2': // audio file
			break;
		case '3': // subtitles file
			break;
	};
endforeach;
if ($i > 1) {
	//$listbar['position'] = 'right';
}
?>

<div class="links-block">
	<div class="link" id="c<?php echo $link->id; ?>">
		<?php $this->widget('ext.jwplayer.jwplayer',array(
			'width' => '960',
			'height' => '540',
			'controls' => 'true',
			'playlist' => $p_list,
			'listbar' => $listbar
//			'listbar' => array( 'position'=>'right', 'width'=>'240')
			));
		?>		
	</div><!-- comment -->
</div>
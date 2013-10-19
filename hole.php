<?php
//
// SpamHole 0.1
//
$limit = 500;
$i = 0;

function	generate()
{
	$ext = array('.gov','.be', '.biz', '.ch', '.com', '.co', '.co.uk', '.de', '.es', '.eu', '.fr', '.gr', '.im', '.info', '.io', '.it', '.lu', '.lt', '.me', '.mobi', '.mx', '.net', '.nl', '.org', '.pro', '.pt', '.re', '.ru', '.se', '.tel', '.tv', '.aero', '.biz', '.com', '.coop', '.info', '.mobi', '.name', '.net', '.org', '.pro', '.tel', '.travel', '.xxx', '.ag', '.ar.com', '.br.com', '.bz', '.ca', '.cc', '.co', '.gd', '.gs', '.gy', '.hn', '.ht', '.la', '.lc', '.ms', '.mx', '.pe', '.pm', '.qc.com', '.sx', '.tc', '.us', '.us.com', '.us.org', '.uy.com', '.vc', '.vg', '.at', '.be', '.cat', '.ch', '.co.uk', '.com.de', '.de', '.de.com', '.dk', '.es', '.eu', '.eu.com', '.fi', '.fr', '.gb.com', '.gb.net', '.gg', '.gr', '.gr.com', '.hu.com', '.hu.net', '.im', '.it', '.je', '.li', '.lt', '.lu', '.lv', '.me', '.me.uk', '.nl', '.no', '.no.com', '.nu', '.org.uk', '.pl', '.pt', '.ro', '.ru', '.ru.com', '.se', '.se.com', '.se.net', '.uk.com', '.uk.net', '.ru', '.ae.org', '.af', '.am', '.asia', '.cn', '.cn.com', '.cx', '.fm', '.hk', '.in', '.in.net', '.io', '.jp', '.jp.net', '.jpn.com', '.ki', '.kr.com', '.mn',    '.nf', '.nz', '.ph', '.pw', '.sa.com', '.sb', '.tl', '.tv', '.tw', '.wf', '.ws', '.cm', '.mg', '.mu', '.re', '.sc', '.so', '.tf', '.yt', '.za', '.za.com' );
	$names = array ('tony','lea','mary','bruce','Annabel', 'Asher', 'Atticus', 'August', 'Butch', 'Clementine', 'Daisy', 'Dashiell', 'Delilah', 'Dexter', 'Dixie', 'Duke', 'Edie', 'Elvis', 'Flora', 'Frances', 'Frank', 'Georgia', 'Gus', 'Hazel', 'Homer', 'Hopper', 'Hudson', 'Hugo', 'Ike', 'India', 'Ione', 'Iris', 'Isla', 'Ivy', 'June', 'Kai', 'Kingston', 'Lennon', 'Leonora', 'Leopold', 'Levi', 'Lila', 'Lionel', 'Lola', 'Luca', 'Lulu', 'Magnus', 'Mamie', 'Matilda', 'Millie', 'Milo', 'Minnie', 'Moses', 'Olive', 'Orson', 'Oscar', 'Otis', 'Pearl', 'Piper', 'Poppy', 'Ray', 'Roman', 'Romy', 'Roscoe', 'Ruby', 'Rufus', 'Sadie', 'Scarlett', 'Sebastian', 'Stella', 'Stellan', 'Sullivan', 'Talullah', 'Theo', 'Violet');
	$names2 = array('gordon','wayne','gates','clinton','washington','carlson','wolowitz','stark','simpson','Jacka','Hackett','Buzzigoli','Mossmann','Hamm','Solano','Huntington','Fath','Goncalves','Decristoforo','Ellsworth','Alonsogarcia','Bullough','Bankhead','Swank','Rickels','Book','Dicks','Guo','Margolin','Mcdermott','Ciannavei','Buccianti','Lamb','Rzepka','Lovegreen');
	$domain1 = array('Babble', 'Buzz', 'Blog', 'Blue', 'Brain', 'Bright', 'Browse', 'Bubble', 'Chat', 'Chatter', 'Dab', 'Dazzle', 'Dev', 'Digi', 'Edge', 'Feed', 'Five', 'Flash', 'Flip', 'Gab', 'Giga',  'Inno', 'Jabber', 'Jax', 'Jet', 'Jump', 'Link', 'Live', 'My', 'N', 'Photo', 'Pod', 'Real', 'Riff', 'Shuffle', 'Snap', 'Skip', 'Tag', 'Tek', 'Thought', 'Top', 'Topic', 'Twitter', 'Word', 'You', 'Zoom');
	$domain2 = array('bean', 'beat', 'bird', 'blab', 'box', 'bridge', 'bug', 'buzz', 'cast', 'cat', 'chat', 'club', 'cube', 'dog', 'drive', 'feed', 'fire', 'fish', 'fly', 'ify', 'jam', 'links', 'list', 'lounge', 'mix', 'nation', 'opia', 'pad', 'path', 'pedia', 'point', 'pulse', 'set', 'space', 'span', 'share', 'shots', 'sphere', 'spot', 'storm',  'ster', 'tag', 'tags', 'tube', 'tune', 'type', 'verse', 'vine', 'ware', 'wire', 'works', 'XS', 'Z', 'zone', 'zoom');
	$separators = array('-','_','.','');    
	shuffle($ext);
	shuffle($names);
	shuffle($names2);
	shuffle($separators);
	shuffle($domain1);
	shuffle($domain2);
	$randomExt = $ext[0];
	$randomName = $names[0];
	$randomName2 = $names2[0];
	$randomSeparator = $separators[0];
	$randomDomain1 = $domain1[0];
	$randomDomain2 = $domain2[0];
	$result = $randomName.$randomSeparator.$randomName2.'@'.$randomDomain1.$randomDomain2.$randomExt;
	$email  = '<a href="mailto:' . $result . '">' . $result . "</a>\n";
	return strtolower($email.' ');
}

while ($i < $limit)
	{
		echo generate($limit);
		$i++;
	}
?>
<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
define("MODE", isset($_GET["d"])?$_GET["d"]:"main");

$tidbits = array(
'1990'=>
  'morgan ashlee sennhauser born may 11 1990',
'FOSS'=>
  'i support free and open source software.',
'khodah shomah hasteed'=>
  'allah akbar, khodah shomah hasteed',
'Swiss'=>
  'born Zurich, Switzerland',
'American'=>
  'living Dayton, Ohio',
'C<sub>8</sub>H<sub>10</sub>N<sub>4</sub>0<sub>2</sub>'=>
  'coffee, all day every day',
'pirate'=>
  'avast ye, matey.  i support the free flow of information.',
'<3'=>
  'love everything, everyone, everywhere',
'tuxfag'=>
  'i use Linux.  favorite easy distribution is <a href="http://ubuntu.com">'+
  'Ubuntu</a>; favorite server distro is <a href="http://archlinux.org">Arch'+
  '</a>; favorite live distro is <a href="http://slax.org">Slax</a>.',
'nomad'=>
  'interested in mobility, both digital and practical.  netbooks, smart phones, '+
  'WiFi meshing, and so on and so forth.',
'dock9'=>
  'a mud library written in LPC, featuring multiple innovative features.  '+
  'development is on <a href="https://launchpad.net/dock9">launchpad</a>',
'canland'=>
  'a series of prose pieces set on a planet shaped like a tin can.  not currently '+
  'available',
'play'=>
  'i don\'t play many video games, but you can see what i am into at '+
  '<a href="http://raptr.com/emsenn">raptr</a>',
'work'=>
  'i work in a variety of fields, but basically, if its digital, and not '+
  'working, or not working how you want it to, send me an e-mail',
'pay'=>
  'owe me money?  want to donate?<br/>1PrUYUmDb2Fi3exSiUqHYpefm5JXwK1g65 '+
  'for <a href="http://bitcoin.org">bitcoin</a> donations.<br/><br/>(if paying '+
  'an invoice with bitcoin, e-mail me and i\'ll give you a unique address to '+
  'send to.',
'trees'=>
  '"SO... Catch!" calls the Once-ler. He lets something fall. "It\'s a Truffula '+
  'Seed. It\'s the last one of all! You\'re in charge of the last of the '+
  'Truffula Seeds. And Truffula Trees are what everyone needs. Plant a new '+
  'Truffula.  Treat it with care. Give it clean water. And feed it fresh air. '+
  'Grow a forest. Protect it from axes that hack. Then the Lorax and all of '+
  'his friends may come back."',
'abzde'=>
  'emo, cruel, and smart.  he\'s my friend and sometimes coworker.  '+
  '<a href="http://abzde.com">abzde</a>.',
'dinko'=>
  'current awesome score: 57',
'geekcode'=>
  '-----BEGIN GEEK CODE BLOCK-----<br/>'+
  'Version: 3.12<br/>'+
  'GAT d-- s:- a-- C+++ UL+++ P+ L+++ E--- W+++ N+ o K+ w--<br/>'+
  'O- M-- V PS+ PE++ Y++ PGP++ t-- 5 X- R+++ !tv b+++ DI+ D---<br/>'+
  'G+ e h! r- y+<br/>'+
  '------END GEEK CODE BLOCK------',
'bzr'=>
  'i don\'t really use <a href="https://launchpad.net/~emsenn">launchpad</a>, '+
  'my preference is <a href="https://github.com/emsenn/">github</a>.',
'git'=>
  'most of my code can be found <a href="https://github.com/emsenn">on github</a>.',
'code'=>
  'i don\'t consider myself a software developer, but I do sometimes make '+
  'programs for doing things I want.  To check them out, look on my '+
  '<a href="https://github.com/emsenn">github</a> page.',);

function mixitup($l){
  if (!is_array($l)) return $l;
    $ks = array_keys($l); shuffle($ks); $r = array();
    foreach ($ks as $k) $r[$k] = $l[$k];
    return $r;
}

?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" 
    content="text/html; charset=utf-8" />
<link href="style.css" type="text/css" rel="stylesheet" />
<title>emsenn</title>
</head>
<body id="page_about">
<div class="container">
<div class="main">
<p id="main">
    <?php
      if(MODE == 'main'){
        $cntr = 1; $tidbits = mixitup($tidbits);
        foreach($tidbits as $key=>$value){
          if($cntr >= 4) $cntr = 1;
          echo '<a href="?d='.str_replace(' ','%20',$key).'" class="gray'.$cntr.'">'.$key.'</a></span> ';
          $cntr++;
        }
      }
      else{
        echo $tidbits[MODE];
      }
    ?>
    </p>
  </div>
  <div class="footer">
    <a href="?d=main" class="main">morgan sennhauser</a><span class="help"><a title="click phrases for details.  click name for home">help</a></span>
  </div>
</div>
</body>
</html>
 


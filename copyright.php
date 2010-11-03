<?php

require('../governments.inc.php');



$act = 'deathpenalty';
$versions = array(
  '1989-11-28' => 'http://legislation.govt.nz/act/public/1989/0119/latest/096be8ed8009cc7e.pdf',
);
foreach($versions as $date=>$url) {
  $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
}



$act = 'BillofRights';
$versions = array(
  '2007-09-03' => 'http://legislation.govt.nz/act/imperial/1688/0002/latest/096be8ed8009aff0.pdf',
);
foreach($versions as $date=>$url) {
  $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
}



$act = 'OverSeasInvestments';
$versions = array(
  '2008-10-01' => 'http://legislation.govt.nz/act/public/2005/0082/latest/viewpdf.aspx',
);
foreach($versions as $date=>$url) {
  $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
}



$act = 'copyright';
$versions = array(
  '2007-09-03' => 'http://legislation.govt.nz/act/public/1994/0143/1.0/096be8ed8009d137.pdf',
  '2007-12-03' => 'http://legislation.govt.nz/act/public/1994/0143/4.0/096be8ed8014e699.pdf',
  '2008-04-12' => 'http://legislation.govt.nz/act/public/1994/0143/7.0/096be8ed801c6869.pdf',
  '2008-08-01' => 'http://legislation.govt.nz/act/public/1994/0143/10.0/096be8ed802666b0.pdf',
  '2008-10-31' => 'http://legislation.govt.nz/act/public/1994/0143/13.0/096be8ed802f3618.pdf',
  '2008-12-01' => 'http://legislation.govt.nz/act/public/1994/0143/16.0/096be8ed803164c9.pdf',
  '2010-07-07' => 'http://legislation.govt.nz/act/public/1994/0143/latest/096be8ed806218dd.pdf',
);

$act = 'EpidemicPreparedness';
$versions = array(
  '2008-09-02' => 'http://legislation.govt.nz/act/public/2006/0085/4.0/096be8ed8028fcd1.pdf',
  '2010-07-07' => 'http://legislation.govt.nz/act/public/2006/0085/latest/096be8ed805bb7a0.pdf',
);

foreach($versions as $date=>$url) {
  $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
}


$act = 'WeathertightHomes';
$versions = array(
  '2007-09-03' => 'http://legislation.govt.nz/act/public/2006/0084/1.0/096be8ed8009e4d0.pdf',
  '2007-08-29' => 'http://legislation.govt.nz/act/public/2006/0084/4.0/096be8ed80118120.pdf',
  '2007-12-03' => 'http://legislation.govt.nz/act/public/2006/0084/latest/096be8ed802a7ee6.pdf',
);
foreach($versions as $date=>$url) {
  $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
}


$act = 'PlumbersGasfittersDrainlayers';
$versions = array(
  '2009-09-02' => 'http://legislation.govt.nz/act/public/2006/0074/7.0/096be8ed8052ae2a.pdf',
  '2010-04-01' => 'http://legislation.govt.nz/act/public/2006/0074/latest/096be8ed8059bc78.pdf',
);
foreach($versions as $date=>$url) {
  $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
}


$act = 'Evidence';
$versions = array(
  '2009-12-01' => 'http://legislation.govt.nz/act/public/2006/0069/16.0/096be8ed804bed6f.pdf',
  '2010-06-01' => 'http://legislation.govt.nz/act/public/2006/0069/19.0/096be8ed805947ee.pdf',
  '2010-07-07' => 'http://legislation.govt.nz/act/public/2006/0069/latest/096be8ed805bb915.pdf',
);
foreach($versions as $date=>$url) {
  $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
}

do_command("rm -rf ./.git  ./*");
do_command("git init");


ksort($legislation);
var_dump($legislation);
exit;


do_command('git filter-branch --commit-filter \'
        GIT_COMMITTER_DATE="$GIT_AUTHOR_DATE";
        git commit-tree "$@";
\' HEAD
');


function getNext($date, $url, $act) {
  mkdir($act);
  
  chdir($act);
  print "$data $url\n";

  do_command("wget $url");
  do_command("mv *.pdf $act.pdf");
  do_command("rm *.txt");
  do_command("ls -la");
  do_command("pdftotext *.pdf");
  do_command("rm *.pdf");
  

  do_command("git add $act*.txt");

  $time = strtotime($date);
  $year = date('Y', $time);
  $government = government($year);
  

  chdir('..');
  do_command("git add $act");
  do_command("git commit -a --date=\"". $time .'" -m "Copyright Act at '. $date .'" --author="' . $government .  ' <nzparliamen@devnull.org>"');
  do_command("git status");

}

function do_command($command) {
  echo "\t\$ $command\n";
  passthru($command);
  sleep(3);
}

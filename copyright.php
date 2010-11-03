<?php

require('../governments.inc.php');



passthru("rm -rf ./.git");
passthru("git init");

$act = 'deathpenalty';
$versions = array(
  '1989-11-28' => 'http://legislation.govt.nz/act/public/1989/0119/latest/096be8ed8009cc7e.pdf',
);
foreach($versions as $date=>$url) {
  getNext($date, $url, $act);
}


$act = 'BillofRights';
$versions = array(
  '2007-09-03' => 'http://legislation.govt.nz/act/imperial/1688/0002/latest/096be8ed8009aff0.pdf',
);
foreach($versions as $date=>$url) {
  getNext($date, $url, $act);
}


$act = 'OverSeasInvestments';
$versions = array(
  '2008-10-01' => 'http://legislation.govt.nz/act/public/2005/0082/latest/viewpdf.aspx',
);
foreach($versions as $date=>$url) {
  getNext($date, $url, $act);
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
foreach($versions as $date=>$url) {
  getNext($date, $url, $act);
}






passthru('git filter-branch --commit-filter \'
        GIT_COMMITTER_DATE="$GIT_AUTHOR_DATE";
        git commit-tree "$@";
\' HEAD
');


function getNext($date, $url, $act) {
  
  print "$data $url\n";

  passthru("wget $url");
  passthru("mv *.pdf $act.pdf");
  passthru("rm *.html");
  passthru("pdftohtml *.pdf");
  passthru("rm *.pdf");
  

  passthru("git add $act*.html");

  $time = strtotime($date);
  $year = date('Y', $time);
  $government = government($year);
  
  passthru("git commit -a --date=\"". $time .'" -m "Copyright Act at '. $date .'" --author="' . $government .  ' <nzparliamen@devnull.org>"');
}

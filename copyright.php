<?php

require('../governments.inc.php');
require('../acts.inc.php');

do_command("rm -rf ./.git  ./*");
do_command("git init");

$legislation = get_legislation();
foreach($legislation as $act) {
  getNext($act['date'], $act['url'], $act['act']);
}


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
  do_command("ls -la");
  do_command("rm *.pdf");
  

  do_command("git add $act*.txt");

  $time = strtotime($date);
  $year = date('Y', $time);
  $government = government($year);
  if(!$government) $government = 'Victoria';
  

  chdir('..');
  do_command("git add $act");
  do_command("git commit -a --date=\"". $time .'" -m "'. $act .' Act at '. $date .'" --author="' . $government .  ' <nzparliamen@devnull.org>"');
  do_command("git status");

}

function do_command($command) {
  echo  getcwd()."\$ $command\n";
  passthru($command);
#  sleep(1);
}

<?php
require('./governments.inc.php');

do_command('rm -rf ./repo');
mkdir('repo');
// do_command("git init");

foreach(dirListing() as $doc_type) {
  echo "=== INDEXING  $doc_type \n";
  foreach(dirListing($doc_type) as $doc_area) {
    echo "$doc_type/$doc_area\n";
    foreach(dirListing("$doc_type/$doc_area") as $year) {
      echo "\t$doc_type/$doc_area/$year\n";
      foreach(dirListing("$doc_type/$doc_area/$year") as $did) {
        echo "\t\t$doc_type/$doc_area/$year/$did\n";
        foreach(dirListing("$doc_type/$doc_area/$year/$did") as $version) {
          echo "\t\t\t$doc_type/$doc_area/$year/$did/$version\n";
          commit_document($doc_type, $doc_area, $year, $did, $version);
        }
      }
    }
  } 

}


function commit_document($doc_type, $doc_area, $year, $did, $version) {
  $xml = file_get_contents("www.legislation.govt.nz/subscribe/$doc_type/$doc_area/$year/$did/$version");
  $xml = (array)new SimpleXMLElement($xml);
  $body = (array)$xml['body'];
  $path = $body['h1'];
  
  $ul = (array)$body['ul'];
  $xml_file = (array)$ul['li'][0];
  $pdf = (array)$ul['li'][1];
  $xml_filename = $xml_file['a'] ."\n";
  
  $url = "http://www.legislation.govt.nz$path/$xml_filename";
  echo "$url\n";
  
  $pdf_filename = $pdf['a'];
  $title = preg_replace('!\.pdf$!', '', $pdf_filename);
  echo "title = $title\n";
//   var_dump($body);

  $dir_name = "";
  chdir("repo/");
  //all the bits, except $version and year
  foreach(array($doc_type, $doc_area) as $a) {
    $dir_name .= "$a/";
    if (!is_dir($dir_name)) {
      echo "Making $dir_name\n";
      do_command("mkdir $dir_name");
    }
  }


  $file = str_replace(" ", "_", $title);
  do_command("echo 'Version $version' > $dir_name$file");
  do_command("git add $dir_name$file");

  $govt = government($year);
  do_command("git commit $dir_name$file --author=\"$govt <government of $year>\" -m =\"$title\" --date=\"$year-01-01\"");
  do_command("git status");

  chdir('..');
  echo "\n\n";
}

function dirListing($dir='.') {
  $d = dir("www.legislation.govt.nz/subscribe/$dir");

  while (false !== ($entry = $d->read())) {
    if ('.' != $entry && '..' != $entry) {
      $list[] = $entry;
    }
  }
  $d->close();
  return $list;
}

/*



$legislation = get_legislation();
foreach($legislation as $act) {
  getNext($act['date'], $act['url'], $act['act']);
}


do_command('git filter-branch --commit-filter \'
        GIT_COMMITTER_DATE="$GIT_AUTHOR_DATE";
        git commit-tree "$@";
\' HEAD
');*/

/*
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

}*/

function do_command($command) {
  echo  getcwd()."\$ $command\n";
  passthru($command);
#  sleep(1);
}

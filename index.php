<?php

$d = dir('./www.legislation.govt.nz/subscribe');
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
        }
      }
    }
  } 

}


function dirListing($dir='') {
  $d = dir('./www.legislation.govt.nz/subscribe/'. $dir);

  while (false !== ($entry = $d->read())) {
    if ('.' != $entry && '..' != $entry) {
      $list[] = $entry;
    }
  }
  $d->close();
  return $list;
}
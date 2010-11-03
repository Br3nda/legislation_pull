<?php

function government($year) {
  $govts = array();
  government_add($govts, 'First Liberal Government of New Zealand',  1891, 1912);
  government_add($govts, 'Reform Government of New Zealand', 1912, 1928);
  government_add($govts, 'United Government of New Zealand', 1928, 1931);
  government_add($govts, 'Liberal-Reform coalition Government of New Zealand', 1931, 1935);
  government_add($govts, 'First Labour Government of New Zealand', 1935, 1949);
  government_add($govts, 'First National Government of New Zealand', 1949, 1957);
  government_add($govts, 'Second Labour Government of New Zealand', 1957, 1960);
  government_add($govts, 'Second National Government of New Zealand', 1960, 1972);
  government_add($govts, 'Third Labour Government of New Zealand', 1972, 1975);
  government_add($govts, 'Third National Government of New Zealand', 1975, 1984);
  government_add($govts, 'Fourth Labour Government of New Zealand', 1984, 1990);
  government_add($govts, 'Fourth National Government of New Zealand', 1990, 1999);
  government_add($govts, 'Fifth Labour Government of New Zealand', 1999, 2008);
  government_add($govts, 'Fifth National Government of New Zealand', 2008, 2010);

  return $govts[$year];
}

function government_add(&$govts, $name, $start, $end) {

  for($year = $start; $year<=$end; $year++) {
    $govts[$year] = $name;
  }
  
}

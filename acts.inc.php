<?php
function get_legislation() {
//   $act = 'deathpenalty';
//   $versions = array(
//     '1989-11-28' => 'http://legislation.govt.nz/act/public/1989/0119/latest/096be8ed8009cc7e.pdf',
//   );
//   foreach($versions as $date=>$url) {
//     $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
//   }


  $act = 'CountyCourts';
  $versions = array('1841-01-01' => 'http://www.nzlii.org/nz/legis/hist_act/cca18415v1841n2323.pdf');
  foreach($versions as $date=>$url) {
    $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
  }

  $act = 'CourtsofRequests';
  $versions = array('1841-01-01' => 'http://www.nzlii.org/nz/legis/hist_act/cora18414v1841n6366.pdf');
  foreach($versions as $date=>$url) {
    $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
  }
  
  $act = 'Customs';
  $versions = array('1841-01-01' => 'http://www.nzlii.org/nz/legis/hist_act/ca18414v1841n3244.pdf');
/*
  $act = 'BillofRights';
  $versions = array(
    '2007-09-03' => 'http://legislation.govt.nz/act/imperial/1688/0002/latest/096be8ed8009aff0.pdf',
  );
  foreach($versions as $date=>$url) {
    $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
  }



  $act = 'OverSeasInvestments';
  $versions = array(
    '2008-10-01' => 'http://legislation.govt.nz/act/public/2005/0082/latest/096be8ed803812b8.pdf',
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

  $act = 'NgatiMutungaClaimsSettlement';
  $versions = array(
    '2007-09-03' => 'http://legislation.govt.nz/act/public/2006/0061/1.0/096be8ed8009e447.pdf',
    '2008-05-23' => 'http://legislation.govt.nz/act/public/2006/0061/latest/096be8ed80292b04.pdf',
  );
  foreach($versions as $date=>$url) {
    $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
  }
  
  $act = 'GeographicalIndicationsWineandSpirits';
  $versions = array(
    '2006-11-21' => 'http://legislation.govt.nz/act/public/2006/0060/10.0/096be8ed801955d3.pdf',
    '2008-04-14' => 'http://legislation.govt.nz/act/public/2006/0060/latest/096be8ed8025ee89.pdf',
  );
  foreach($versions as $date=>$url) {
    $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
  }

  $act = 'SportsAnti-Doping';
  $versions = array(
    '2008-07-30' => 'http://legislation.govt.nz/act/public/2006/0058/4.0/096be8ed802505bf.pdf',
    '2008-10-01' => 'http://legislation.govt.nz/act/public/2006/0058/latest/096be8ed802d76be.pdf',
  );
  foreach($versions as $date=>$url) {
    $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
  }

  $act = 'InsolvencyCross-border';
  $versions = array(
    '2008-07-23' => 'http://legislation.govt.nz/act/public/2006/0057/22.0/096be8ed8024704b.pdf',
    '2008-07-24' => 'http://legislation.govt.nz/act/public/2006/0057/22.0/096be8ed8024704b.pdf',
  );
  foreach($versions as $date=>$url) {
    $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
  }
  $act = 'Insolvency';
  $versions = array(
    '2010-01-07' => 'http://legislation.govt.nz/act/public/2006/0055/42.0/096be8ed804ed95b.pdf',
    '2010-04-01' => 'http://legislation.govt.nz/act/public/2006/0055/45.0/096be8ed80559a5b.pdf',
    '2010-07-07' => 'http://legislation.govt.nz/act/public/2006/0055/latest/096be8ed805bfa36.pdf',
  );
  foreach($versions as $date=>$url) {
    $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
  }
  $act = 'AppropriationParliamentaryExpenditureValidation';
  $versions = array(
    '2007-09-03' => 'http://legislation.govt.nz/act/public/2006/0050/1.0/096be8ed8009e407.pdf',
    '2008-01-01' => 'http://legislation.govt.nz/act/public/2006/0050/latest/096be8ed8025d44c.pdf',
  );
  foreach($versions as $date=>$url) {
    $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
  }

  $act = 'TeArawaLakesSettlement';
  $versions = array(
    '2007-09-03' => 'http://legislation.govt.nz/act/public/2006/0043/1.0/096be8ed8009e3ef.pdf',
    '2008-04-01' => 'http://legislation.govt.nz/act/public/2006/0043/4.0/096be8ed801c2087.pdf',
    '2008-05-23' => 'http://legislation.govt.nz/act/public/2006/0043/latest/096be8ed80277847.pdf',
  );
  foreach($versions as $date=>$url) {
    $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
  }
  $act = 'KiwiSaver';
  $versions = array(
    '2009-10-06' => 'http://legislation.govt.nz/act/public/2006/0040/33.0/096be8ed80488b63.pdf',
    '2010-08-16' => 'http://legislation.govt.nz/act/public/2006/0040/36.0/096be8ed805e1d60.pdf',
    '2010-09-07' => 'http://legislation.govt.nz/act/public/2006/0040/latest/096be8ed80600bba.pdf',
  );
  foreach($versions as $date=>$url) {
    $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
  }

  $act = 'Coroners';
  $versions = array(
    '2009-01-24' => 'http://legislation.govt.nz/act/public/2006/0038/19.0/096be8ed80347be5.pdf',
    '2010-03-24' => 'http://legislation.govt.nz/act/public/2006/0038/22.0/096be8ed80549fa7.pdf',
    '2010-07-07' => 'http://legislation.govt.nz/act/public/2006/0038/latest/096be8ed805ba59f.pdf',
  );
  foreach($versions as $date=>$url) {
    $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
  }

  $act = 'NewZealandSignLanguage';
  $versions = array('2008-06-30' => 'http://legislation.govt.nz/act/public/2006/0018/latest/096be8ed802280f3.pdf');
  foreach($versions as $date=>$url) {
    $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
  }

  $act = 'SouthlandAgriculturalandPastoralAssociationEmpowering';
  $versions = array('2008-06-20' => 'http://legislation.govt.nz/act/private/2006/0004/latest/096be8ed8021ccdd.pdf');
  foreach($versions as $date=>$url) {
    $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
  }

  $act = 'WestpacNewZealand';
  $versions = array(
    '2007-09-03' => 'http://legislation.govt.nz/act/private/2006/0003/1.0/096be8ed8009b86b.pdf',
    '2008-04-01' => 'http://legislation.govt.nz/act/private/2006/0003/latest/096be8ed80229337.pdf',
  );
  foreach($versions as $date=>$url) {
    $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
  }

  $act = 'RotoruaLibraryTrustFundVariation';
  $versions = array(
    '2008-06-24' => 'http://legislation.govt.nz/act/local/2006/0002/latest/096be8ed802214db.pdf',
  );
  foreach($versions as $date=>$url) {
    $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
  }
  
  $act = 'ManfeildPark';
  $versions = array(
    '2008-06-20' => 'http://legislation.govt.nz/act/private/2006/0001/latest/096be8ed8021e382.pdf',
  );
  foreach($versions as $date=>$url) {
    $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
  }

  $act = 'GisborneDistrictCouncilAlfredCoxParkValidation';
  $versions = array('2008-06-24' => 'http://legislation.govt.nz/act/local/2006/0001/latest/096be8ed802214b4.pdf');
  foreach($versions as $date=>$url) {
    $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
  }

  $act = 'LawyersandConveyancers';
  $versions = array(
    '2009-07-01' => 'http://legislation.govt.nz/act/public/2006/0001/44.0/096be8ed803fefa3.pdf',
    '2009-11-16' => 'http://legislation.govt.nz/act/public/2006/0001/47.0/096be8ed8057e3b6.pdf',
    '2010-07-07' => 'http://legislation.govt.nz/act/public/2006/0001/latest/096be8ed805c04f3.pdf',
  );
  foreach($versions as $date=>$url) {
    $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
  }

  $act = 'CourtMartial';
  $versions = array(
    '2008-06-13' => 'http://legislation.govt.nz/act/public/2007/0101/11.0/096be8ed802612fe.pdf',
    '2009-07-01' => 'http://legislation.govt.nz/act/public/2007/0101/17.0/096be8ed80572f53.pdf',
    '2010-07-07' => 'http://legislation.govt.nz/act/public/2007/0101/latest/096be8ed805bb78a.pdf',
  );
  foreach($versions as $date=>$url) {
    $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
  }

  $act = 'IncomeTax';
  $versions = array(
    '2010-09-07' => 'http://legislation.govt.nz/act/public/2007/0097/81.0/096be8ed80617c2b.pdf',
    '2010-09-26' => 'http://legislation.govt.nz/act/public/2007/0097/84.0/096be8ed80625b62.pdf',
    '2010-10-01' => 'http://legislation.govt.nz/act/public/2007/0097/latest/096be8ed80635cc5.pdf',
  );
  foreach($versions as $date=>$url) {
    $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
  }
  $act = 'SuccessionHomicide';
  $versions = array('2007-10-18' => 'http://legislation.govt.nz/act/public/2007/0095/latest/096be8ed8059dd0c.pdf');
  foreach($versions as $date=>$url) {
    $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
  }

  $act = 'PropertyLaw';
  $versions = array(
    '2008-09-25' => 'http://legislation.govt.nz/act/public/2007/0091/26.0/096be8ed8059798d.pdf',
    '2010-07-07' => 'http://legislation.govt.nz/act/public/2007/0091/29.0/096be8ed805c204d.pdf',
    '2010-08-06' => 'http://legislation.govt.nz/act/public/2007/0091/latest/096be8ed805dddb0.pdf',
  );
  foreach($versions as $date=>$url) {
    $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
  }
  $act= 'Wills';
  $versions = array('2008-04-24' => 'http://legislation.govt.nz/act/public/2007/0036/latest/096be8ed804efe95.pdf');
  foreach($versions as $date=>$url) {
    $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
  }
  $act = 'MajorEventsManagement';
  $versions = array(
    '2008-05-23' => 'http://legislation.govt.nz/act/public/2007/0035/7.0/096be8ed801ec6e0.pdf',
    '2008-08-01' => 'http://legislation.govt.nz/act/public/2007/0035/latest/096be8ed805848c9.pdf',
  );
  foreach($versions as $date=>$url) {
    $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
  }
  $act = 'SentencingCouncil';
  $versions = array(
    '2007-09-03' => 'http://legislation.govt.nz/act/public/2007/0025/7.0/096be8ed80108379.pdf',
    '2007-11-01' => 'http://legislation.govt.nz/act/public/2007/0025/latest/096be8ed8059bdb5.pdf',
  );
  foreach($versions as $date=>$url) {
    $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
  }
  $act = 'State-OwnedEnterprisesAgriQualityLimitedandAsureNewZealandLimited';
  $versions = array(
    '2007-09-03' => 'http://legislation.govt.nz/act/public/2007/0021/1.0/096be8ed8009e52d.pdf',
    '2008-04-01' => 'http://legislation.govt.nz/act/public/2007/0021/4.0/096be8ed801e988a.pdf',
    '2009-06-27' => 'http://legislation.govt.nz/act/public/2007/0021/latest/096be8ed8059c1ce.pdf',
  );
  foreach($versions as $date=>$url) {
    $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
  }

  $act = 'ImmigrationAdvisersLicensing';
  $versions = array(
    '2008-04-29' => 'http://legislation.govt.nz/act/public/2007/0015/10.0/096be8ed805813b8.pdf',
    '2010-07-07' => 'http://legislation.govt.nz/act/public/2007/0015/latest/096be8ed805c049a.pdf',
  );
  foreach($versions as $date=>$url) {
    $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
  }

  $act = 'UnsolicitedElectronicMessages';
  $versions = array('2007-03-06' => 'http://legislation.govt.nz/act/public/2007/0007/latest/096be8ed8059e272.pdf');
  foreach($versions as $date=>$url) {
    $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
  }
  $act = 'PoriruaCityCouncilPauatahanuiBurialGround';
  $versions = array(
    '2008-03-19' => 'http://legislation.govt.nz/act/local/2007/0001/latest/096be8ed804eff41.pdf'
  );
  foreach($versions as $date=>$url) {
    $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
  }
  $act = 'FarmersMutualGroup';
  $versions = array(
    '2007-09-03' => 'http://legislation.govt.nz/act/private/2007/0001/4.0/096be8ed80178c08.pdf',
    '2008-04-01' => 'http://legislation.govt.nz/act/private/2007/0001/latest/096be8ed80577a50.pdf',
  );
  foreach($versions as $date=>$url) {
    $legislation[$date .'_'. $act] = array('url' => $url, 'act' => $act, 'date' => $date);
  }
  
 */ 
  
  ksort($legislation);
  return $legislation;
}
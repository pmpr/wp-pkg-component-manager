<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66a2f4432a54e             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\REST; use Pmpr\Common\Foundation\ORM\DB\Model; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\ComponentManager\API\IPDetector; use Pmpr\Module\ComponentManager\Model\Component; use Pmpr\Module\ComponentManager\Model\Purchase; use Pmpr\Module\ComponentManager\Model\Report; use Pmpr\Module\ComponentManager\Setting; use Pmpr\Module\DomainManager\Model\Domain; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { public function __construct() { $this->rest_base = self::ocwsuwyiiasigqaa; parent::__construct(); } public function register_routes() { $this->register("\57\x67\145\164\55\153\145\x79", [self::okeuagwgwkmiokac => [self::ocwsuwyiiasigqaa => [self::squoamkioomemiyi => "\163\164\x72\151\156\x67", self::eqkeooqcsscoggia => __("\x43\x6f\155\x70\157\x6e\x65\156\164", PR__MDL__COMPONENT_MANAGER)]], self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\x73\x67\x63\x77\147\155\157\141\171\x69\153\153\x79\163\141\161"]]); $this->register("\x2f\147\145\x74\55\160\x6c\x75\147\x69\156\55\x74\x61\x62", [self::wwgusigoaksqmwsm => [$this, "\x61\155\x65\151\x77\157\145\x6d\165\x6b\x6d\153\x77\x75\x6f\151"]]); $this->register("\x2f\x67\x65\164\55\x69\x74\x65\x6d", [self::okeuagwgwkmiokac => [self::NAME => [self::squoamkioomemiyi => "\x73\164\162\x69\156\147", self::eqkeooqcsscoggia => __("\116\141\155\145\40\157\146\x20\x63\157\x6d\160\x6f\x6e\x65\156\x74", PR__MDL__COMPONENT_MANAGER)]], self::wwgusigoaksqmwsm => [$this, "\x73\x71\x6f\151\x75\x79\153\143\x6f\165\x65\x69\165\x63\x67\143"]]); $this->register("\57\x67\x65\x74\55\x69\164\145\155\163", [self::okeuagwgwkmiokac => [self::squoamkioomemiyi => [self::squoamkioomemiyi => "\163\x74\162\151\x6e\147", self::eqkeooqcsscoggia => __("\124\171\160\145\40\x6f\146\40\143\157\155\160\x6f\x6e\145\156\x74", PR__MDL__COMPONENT_MANAGER)], self::imywcsggckkcywgk => [self::squoamkioomemiyi => "\x69\156\164\145\x67\x65\162"], self::yayciqueeakqwese => [self::squoamkioomemiyi => "\163\x74\x72\x69\x6e\x67"], self::soesaeyoucgacqga => [self::squoamkioomemiyi => "\x62\157\x6f\154\145\141\x6e"], self::ausqeuugegoygouq => [self::squoamkioomemiyi => "\x69\156\164\x65\x67\145\x72"]], self::wwgusigoaksqmwsm => [$this, "\167\x61\163\x67\x77\163\157\x67\155\165\x71\x75\x71\145\x61\141"]]); $this->register("\x2f\143\x68\x65\x63\153\55\x6b\145\x79", [self::okeuagwgwkmiokac => [self::ascagqcquwgmygkm => [self::squoamkioomemiyi => "\x73\164\162\151\156\147", self::eqkeooqcsscoggia => __("\114\x69\143\x65\156\x73\145\40\157\x66\x20\x63\x6f\x6d\x70\x6f\156\x65\x6e\x74", PR__MDL__COMPONENT_MANAGER)], self::ocwsuwyiiasigqaa => [self::squoamkioomemiyi => "\163\x74\x72\151\156\x67", self::eqkeooqcsscoggia => __("\x4e\x61\155\x65\x20\157\146\40\x63\x6f\155\x70\x6f\x6e\145\156\164", PR__MDL__COMPONENT_MANAGER)], self::vsykweaucigiekae => [self::squoamkioomemiyi => "\142\157\x6f\154\x65\141\x6e", self::eqkeooqcsscoggia => __("\x52\x65\x71\x75\145\163\x74\40\x73\145\x6e\144\40\x61\165\x74\157\155\x61\164\x69\143\141\x6c\154\x79\40\142\x79\40\x63\x72\x6f\x6e\x20\x6f\162\40\156\157\x74", PR__MDL__COMPONENT_MANAGER)]], self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\157\153\x69\x63\141\141\x75\x67\x71\x6b\155\x79\167\161\x79\155"]]); } public function sgcwgmoayikkysaq(WP_REST_Request $aqmwamyiwgeeymqa) { if ($wksoawcgagcgoask = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ocwsuwyiiasigqaa)) { goto sockeswygwcskeuq; } $keccaugmemegoimu = $this->gygamsmycwkqqwcc(__("\x43\157\x6d\160\x6f\x6e\145\x6e\x74", PR__MDL__COMPONENT_MANAGER)); goto mkwkkmkgiqiamacc; sockeswygwcskeuq: $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); if ($wksoawcgagcgoask = $gcswwqwyaccgyoee->akkkoiiymmamsauc($wksoawcgagcgoask, is_numeric($wksoawcgagcgoask) ? $gcswwqwyaccgyoee->kumuygiiqswoyasy() : self::NAME)) { goto ugqwuugsweqgmywk; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\145\x71\165\145\163\x74\145\144\40\143\x6f\x6d\160\157\156\145\156\164\40\156\x6f\x74\40\x66\x6f\165\x6e\144\56", PR__MDL__COMPONENT_MANAGER)); goto uaukmuiwskcemcsw; ugqwuugsweqgmywk: if (!($keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc))) { goto gmwykkouysyaqwqm; } $syqougokmmgaoaee = $gcswwqwyaccgyoee->keeuqgyooycqoygw($wksoawcgagcgoask); $gmywaegkmeaueiyo = $yakcyegsoqusmiak->oqomcmyuuakigusk([$yakcyegsoqusmiak::ogqcgemayqiaucag => $syqougokmmgaoaee, $yakcyegsoqusmiak::qkmqmaeuyokqgemg => $keccaugmemegoimu]); $wqykqusigegasqeg = $keccaugmemegoimu; if ($gmywaegkmeaueiyo) { goto eekcoeikaeaaeyii; } $sogksuscggsicmac = $yakcyegsoqusmiak->gscuuyuyauokoyuo([$yakcyegsoqusmiak::qkmqmaeuyokqgemg => $wqykqusigegasqeg, $yakcyegsoqusmiak::ogqcgemayqiaucag => $syqougokmmgaoaee], true, 0); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto csammceowmqwaamq; } $keccaugmemegoimu = $this->oemauiimmycumcsk($this->gcsweumukyckmgik($sogksuscggsicmac[self::iwyueouqaqegmcas]), 500); goto ocaguquugeamqckq; csammceowmqwaamq: $gmywaegkmeaueiyo = $sogksuscggsicmac[self::ckmqoekmugkggeym]; ocaguquugeamqckq: eekcoeikaeaaeyii: if (is_wp_error($keccaugmemegoimu)) { goto cogywoqcqummsyus; } $qmwoykgeiicumeiw = $gcswwqwyaccgyoee->qogaqkcsogcqiaic($wksoawcgagcgoask, self::NAME); $icwicymcioeyeyek = (array) $this->ocksiywmkyaqseou("\x63\x6f\155\160\157\x6e\145\156\x74\x5f\147\x65\164\x5f\154\x69\143\x65\156\x73\145\x5f\x6b\145\x79\137\x72\x65\163\160\x6f\x6e\163\x65\x5f\x64\x61\164\x61", [], $wqykqusigegasqeg, $wksoawcgagcgoask); $icwicymcioeyeyek = (array) $this->ocksiywmkyaqseou("{$syqougokmmgaoaee}\137\x67\145\164\x5f\x6c\x69\143\x65\156\163\145\x5f\153\x65\171\137\x72\x65\163\x70\x6f\156\x73\145\x5f\144\141\x74\x61", $icwicymcioeyeyek, $wqykqusigegasqeg, $wksoawcgagcgoask); $icwicymcioeyeyek = (array) $this->ocksiywmkyaqseou("{$qmwoykgeiicumeiw}\x5f\x67\145\x74\x5f\154\x69\143\x65\x6e\x73\145\137\153\x65\171\137\x72\x65\163\x70\x6f\156\x73\x65\x5f\x64\x61\x74\141", $icwicymcioeyeyek, $wqykqusigegasqeg, $wksoawcgagcgoask); $icwicymcioeyeyek[self::ascagqcquwgmygkm] = $yakcyegsoqusmiak->qogaqkcsogcqiaic($gmywaegkmeaueiyo, $yakcyegsoqusmiak::okkqqmwseqscceye); $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x4c\151\x63\145\x6e\163\x65\x20\x6b\x65\171\40\160\x72\157\166\x69\x64\145\144\x20\163\x75\x63\143\145\163\163\146\165\154\154\171\56", PR__MDL__COMPONENT_MANAGER), $icwicymcioeyeyek); cogywoqcqummsyus: gmwykkouysyaqwqm: uaukmuiwskcemcsw: mkwkkmkgiqiamacc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function okicaaugqkmywqym(WP_REST_Request $aqmwamyiwgeeymqa) { $hsouuwoeemykcceu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ascagqcquwgmygkm, ''); $wksoawcgagcgoask = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ocwsuwyiiasigqaa, ''); if ($hsouuwoeemykcceu && $wksoawcgagcgoask) { goto cgyakcqgugqgkqiw; } $keccaugmemegoimu = $this->gygamsmycwkqqwcc(); goto eeyyskqsmquyquqw; cgyakcqgugqgkqiw: $keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa); if (!($keccaugmemegoimu && !is_wp_error($keccaugmemegoimu))) { goto uegouoiuyoqkcscg; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $wqykqusigegasqeg = $swgwkyqkakceqeia->keeuqgyooycqoygw($keccaugmemegoimu); $gmywaegkmeaueiyo = $yakcyegsoqusmiak->oqomcmyuuakigusk([Purchase::okkqqmwseqscceye => $hsouuwoeemykcceu, Purchase::qkmqmaeuyokqgemg => $wqykqusigegasqeg]); if ($gmywaegkmeaueiyo) { goto isgwkwacoyimiauk; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\x6f\162\x72\171\54\x20\131\x6f\165\40\156\157\x74\40\x62\x75\171\x20\164\150\151\163\40\143\x6f\155\x70\x6f\x6e\x65\156\164\x2e", PR__MDL__COMPONENT_MANAGER)); $this->icyeokqcmiyigkic($wqykqusigegasqeg, $wksoawcgagcgoask, Report::ckumcckgkuuygwkg); goto mggeqkcksyaymcsa; isgwkwacoyimiauk: $syqougokmmgaoaee = $swgwkyqkakceqeia->qogaqkcsogcqiaic($gmywaegkmeaueiyo, Purchase::ogqcgemayqiaucag, 0); $wmqsyyyeksgsmmya = $gcswwqwyaccgyoee->akkkoiiymmamsauc($syqougokmmgaoaee); if ($gcswwqwyaccgyoee->qogaqkcsogcqiaic($wmqsyyyeksgsmmya, $gcswwqwyaccgyoee::NAME) === $wksoawcgagcgoask) { goto uaqackioaiqwcocy; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\x6f\162\x72\171\x2c\x20\x59\x6f\x75\40\x6e\157\164\x20\142\x75\171\40\x74\150\x69\x73\40\143\x6f\155\160\157\x6e\145\156\x74\54\x20\141\x72\145\x20\171\157\x75\40\164\x72\171\151\x6e\x67\x20\150\x61\x63\153\x3f", PR__MDL__COMPONENT_MANAGER)); $this->icyeokqcmiyigkic($wqykqusigegasqeg, $syqougokmmgaoaee, Report::mkgimueycqsggewa); goto cscusseysqygsoiy; uaqackioaiqwcocy: $qmwoykgeiicumeiw = $gcswwqwyaccgyoee->qogaqkcsogcqiaic($wksoawcgagcgoask, self::NAME); $icwicymcioeyeyek = (array) $this->ocksiywmkyaqseou("\x63\x6f\155\x70\157\156\x65\x6e\x74\137\143\150\145\x63\153\137\x6c\x69\x63\145\156\x73\145\137\x6b\x65\x79\x5f\x72\x65\163\x70\157\x6e\x73\145\x5f\x64\141\x74\x61", [], $wqykqusigegasqeg, $wmqsyyyeksgsmmya); $icwicymcioeyeyek = (array) $this->ocksiywmkyaqseou("{$syqougokmmgaoaee}\x5f\x63\x68\x65\x63\153\x5f\x6c\x69\x63\145\x6e\x73\145\x5f\153\145\x79\x5f\162\x65\x73\x70\157\x6e\163\x65\137\x64\x61\x74\x61", $icwicymcioeyeyek, $wqykqusigegasqeg, $wmqsyyyeksgsmmya); $icwicymcioeyeyek = (array) $this->ocksiywmkyaqseou("{$qmwoykgeiicumeiw}\x5f\x63\150\x65\x63\x6b\137\x6c\x69\143\x65\156\163\145\x5f\153\145\x79\137\x72\145\x73\x70\x6f\x6e\x73\145\137\144\141\164\141", $icwicymcioeyeyek, $wqykqusigegasqeg, $wmqsyyyeksgsmmya); $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x4c\151\143\x65\x6e\x73\145\40\113\x65\x79\40\151\x73\x20\166\x61\154\x69\x64\x2e", PR__MDL__COMPONENT_MANAGER), $icwicymcioeyeyek); cscusseysqygsoiy: mggeqkcksyaymcsa: uegouoiuyoqkcscg: eeyyskqsmquyquqw: if (is_wp_error($keccaugmemegoimu)) { goto ewscugeuicukkycc; } $this->uiagwusgwcassqua("\114\x69\x63\x65\156\163\x65\40\153\145\x79\40\151\x73\40\166\141\154\151\x64\40\x61\x6e\144\40\x63\150\145\143\x6b\40\151\x73\x20\163\x75\x63\143\145\x73\163\x66\x75\154\x2e"); goto kqswcsysqawkcgye; ewscugeuicukkycc: $this->saqqeqmcyyoeqici($this->gcsweumukyckmgik($keccaugmemegoimu)); kqswcsysqawkcgye: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ameiwoemukmkwuoi(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa); if (!($keccaugmemegoimu && !is_wp_error($keccaugmemegoimu))) { goto wusciwkkckmqigms; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $keccaugmemegoimu = [self::qescuiwgsyuikume => $ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::agskamgmowaiywus), self::qwumqqyuasyskkkc => $ykquycoiqesuckco->ksgygymiyeiukqoy(), self::eqkeooqcsscoggia => $ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::uckmggyuwgmmskyc, '')]; $keccaugmemegoimu = $this->ocksiywmkyaqseou("\160\154\165\147\151\x6e\137\162\145\155\157\x74\x65\x5f\164\x61\x62\x5f\x72\145\x73\160\x6f\x6e\x73\145", $keccaugmemegoimu, $ykquycoiqesuckco); wusciwkkckmqigms: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } private function icyeokqcmiyigkic($wqykqusigegasqeg, $wksoawcgagcgoask, string $aiamqeawckcsuaou = '') { return Report::symcgieuakksimmu()->icyeokqcmiyigkic($wqykqusigegasqeg, $wksoawcgagcgoask, self::okkqqmwseqscceye, $aiamqeawckcsuaou); } public function sqoiuykcoueiucgc(WP_REST_Request $aqmwamyiwgeeymqa) { $ymqmyyeuycgmigyo = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::NAME, ''); if ($ymqmyyeuycgmigyo) { goto kocqqoyymosmuksu; } $keccaugmemegoimu = $this->gygamsmycwkqqwcc(__("\116\141\x6d\145", PR__MDL__COMPONENT_MANAGER)); goto uqokiksoqcwwqgio; kocqqoyymosmuksu: $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $wksoawcgagcgoask = $gcswwqwyaccgyoee->oqomcmyuuakigusk([self::NAME => $ymqmyyeuycgmigyo], [$gcswwqwyaccgyoee::gouqcwikiiygyasc, $gcswwqwyaccgyoee::NAME, $gcswwqwyaccgyoee::squoamkioomemiyi, $gcswwqwyaccgyoee::mkousmkiawwousws, $gcswwqwyaccgyoee::ciywsqoeiymemsys, $gcswwqwyaccgyoee::oguseymmyyoyaako, $gcswwqwyaccgyoee::auugqowqueaocgsu, $gcswwqwyaccgyoee::wucysakokksokumi, $gcswwqwyaccgyoee::ouwcgiuiymgwouec, $gcswwqwyaccgyoee::CREATED_AT, $gcswwqwyaccgyoee::yegaaaygeimasokq, $gcswwqwyaccgyoee::bsqkociucacssuum, $gcswwqwyaccgyoee::zgcmquuuyyakwqqm, $gcswwqwyaccgyoee::qscgeqoccoiyaeoi, $gcswwqwyaccgyoee::keqoqmmgsiegwskg, $gcswwqwyaccgyoee::ieagekqsqmcsqqeo, $gcswwqwyaccgyoee::caecscgwwciyemog]); if ($wksoawcgagcgoask) { goto uimeeckqksqeekqq; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\162\145\x71\165\x65\163\x74\145\x64\x20\143\157\155\x70\157\156\x65\x6e\164\x20\167\151\164\x68\40\x6e\x61\155\145\40\x25\x73\40\x6e\157\x74\x20\x66\x6f\x75\x6e\144\x2e", PR__MDL__COMPONENT_MANAGER), $ymqmyyeuycgmigyo), 404); goto iuuuususuuuaieem; uimeeckqksqeekqq: $wqykqusigegasqeg = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc); if ($wqykqusigegasqeg && !is_wp_error($wqykqusigegasqeg)) { goto ucqmumuygcywwqma; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\167\x65\x20\x68\x61\x76\x65\x20\163\x6f\x6d\145\40\x70\x72\157\142\x6c\145\155\40\x77\x69\x74\150\x20\x64\145\x74\x65\143\x74\151\156\x67\x20\x79\x6f\x75\x72\40\144\157\x6d\x61\151\x6e\x2e\40\155\x61\171\x62\145\40\x79\157\x75\162\x20\x64\x6f\x6d\141\151\156\40\x6e\x6f\164\40\x72\145\x67\151\163\164\145\162\x65\144\56", PR__MDL__COMPONENT_MANAGER), 404); goto uykousayyomcaeaa; ucqmumuygcywwqma: $myqeggyewswyoowe = true; $wqogggcaamgeiwew = $gcswwqwyaccgyoee->iscemaoqqckmkago($gcswwqwyaccgyoee::qkmqmaeuyokqgemg, $wksoawcgagcgoask); if (!$wqogggcaamgeiwew) { goto gygwewcqsmwqismo; } $myqeggyewswyoowe = false; $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); foreach ($wqogggcaamgeiwew as $mokawwccycoiqeka) { if (!($wqykqusigegasqeg == $swgwkyqkakceqeia->keeuqgyooycqoygw($mokawwccycoiqeka))) { goto amgsueumgaguceaa; } $myqeggyewswyoowe = true; goto ukkcmocamwgiqayu; amgsueumgaguceaa: mwysseaekcsiesmm: } ukkcmocamwgiqayu: goto uougwgeyiokewkkm; gygwewcqsmwqismo: if (!(self::kqeokggqcsesmqco === $gcswwqwyaccgyoee->ogegcqqcukiaqscy(self::squoamkioomemiyi, $wksoawcgagcgoask))) { goto iiiccouaaqsyikae; } $myqeggyewswyoowe = false; iiiccouaaqsyikae: uougwgeyiokewkkm: if ($myqeggyewswyoowe) { goto gommacygsykyussk; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\157\162\x72\171\x20\171\157\165\x20\150\141\166\x65\40\x6e\157\x20\160\145\162\x6d\x69\163\x73\x69\x6f\156\40\164\157\40\x67\145\164\x20\164\150\x69\x73\x20\143\x6f\x6d\x70\x6f\156\x65\x6e\164\40\144\x61\164\x61\x2e", PR__MDL__COMPONENT_MANAGER)); goto ukqocwewouckikso; gommacygsykyussk: $keccaugmemegoimu = $this->ieqymewceekuicei($wksoawcgagcgoask); $keccaugmemegoimu = $this->ocksiywmkyaqseou("\143\x6f\x6d\x70\x6f\x6e\145\x6e\164\x5f\x72\145\x73\164\137\x67\145\x74\137\x69\x74\145\155\137\x72\x65\163\160\157\156\163\x65", $keccaugmemegoimu, $wqykqusigegasqeg, $wksoawcgagcgoask); ukqocwewouckikso: uykousayyomcaeaa: iuuuususuuuaieem: uqokiksoqcwwqgio: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wasgwsogmuquqeaa(WP_REST_Request $aqmwamyiwgeeymqa) { $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); if ($gwgucoaaqcwwciqq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa)) { goto sioekkmekwygemyc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\157\162\162\171\x20\142\165\x74\40\x79\x6f\x75\x72\x20\162\145\x71\165\x65\163\164\40\151\163\x20\156\157\x74\x20\x76\141\x6c\151\x64\x2c\x20\x63\157\156\164\141\x63\164\x20\x75\163\x2e", PR__MDL__COMPONENT_MANAGER)); goto yiowgigkkwsoqcci; sioekkmekwygemyc: $siykeiywomwwuoiw = $gcswwqwyaccgyoee->kosiqqekkquoseki($gwgucoaaqcwwciqq, $kaoqokqgkamekoes, $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::squoamkioomemiyi, self::aqikuweekkucgqoy), $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::soesaeyoucgacqga, false), $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::yayciqueeakqwese, '')); if (!$kaoqokqgkamekoes) { goto qukocuwgakemmyga; } $keccaugmemegoimu = $this->oemauiimmycumcsk($kaoqokqgkamekoes); qukocuwgakemmyga: yiowgigkkwsoqcci: if (isset($keccaugmemegoimu)) { goto mogkoocsoeuyoqqa; } if (isset($siykeiywomwwuoiw) && $siykeiywomwwuoiw) { goto iesekaeqeomeuaui; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\145\162\x76\x69\143\145\40\x69\163\x20\165\x6e\x61\166\x61\x69\x6c\141\142\x6c\145\40\x72\x69\x67\x68\x74\40\156\x6f\x77\x2e", PR__MDL__COMPONENT_MANAGER), 503); goto wsesqmcqoiyyqkqi; iesekaeqeomeuaui: $ywmkwiwkosakssii = $this->ugyeicuiaamcceos($aqmwamyiwgeeymqa); $keccaugmemegoimu = $gcswwqwyaccgyoee->aeggeuqycwawueqy($siykeiywomwwuoiw, array_merge($ywmkwiwkosakssii, [self::wosqwewmqmyweqea => false])); $oammesyieqmwuwyi = $keccaugmemegoimu[self::qwumqqyuasyskkkc]; $qsqwqsymmqeoqwcu = []; if (!is_array($oammesyieqmwuwyi)) { goto oyeyomcgkmgymogq; } foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $iueymcwwscwqkiyq = $gcswwqwyaccgyoee->ogegcqqcukiaqscy(self::ciywsqoeiymemsys, $igqsaukqcqscimok); if (!in_array($iueymcwwscwqkiyq, [$gcswwqwyaccgyoee::wmmucsiyiyusmssm, $gcswwqwyaccgyoee::iuisqwiqesgyqsyg], true)) { goto mscyggqcesgqqksu; } $qsqwqsymmqeoqwcu[$momcykaoccoymeig] = $this->ieqymewceekuicei($igqsaukqcqscimok); mscyggqcesgqqksu: gamqcwuwkikwqoay: } ieqesiiageaauiuw: oyeyomcgkmgymogq: $keccaugmemegoimu["\163\x71\x6c"] = $gcswwqwyaccgyoee->syugmyosqomgwywi($siykeiywomwwuoiw); $keccaugmemegoimu[self::qwumqqyuasyskkkc] = $qsqwqsymmqeoqwcu; wsesqmcqoiyyqkqi: mogkoocsoeuyoqqa: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ieqymewceekuicei($igqsaukqcqscimok) { if (!($jwsqucqyaoaasykk = Component::symcgieuakksimmu())) { goto gswcoeiisamakwii; } if (!$igqsaukqcqscimok instanceof Model) { goto wkwamkgkwykeqkec; } $igqsaukqcqscimok = $jwsqucqyaoaasykk->oskuyokuycaksiou($igqsaukqcqscimok); wkwamkgkwykeqkec: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $igqsaukqcqscimok = (array) $igqsaukqcqscimok; $iueymcwwscwqkiyq = $gkyciwoiiisgywcs->unset($igqsaukqcqscimok, self::ciywsqoeiymemsys); $igqsaukqcqscimok = $gkyciwoiiisgywcs->set($igqsaukqcqscimok, [self::squoamkioomemiyi => $jwsqucqyaoaasykk->ogegcqqcukiaqscy(self::squoamkioomemiyi, $igqsaukqcqscimok, $jwsqucqyaoaasykk::aqikuweekkucgqoy), self::eikgweiqgomeisyo => $jwsqucqyaoaasykk->ogegcqqcukiaqscy(self::ciywsqoeiymemsys, $iueymcwwscwqkiyq, $jwsqucqyaoaasykk::iuisqwiqesgyqsyg)]); $product = $gkyciwoiiisgywcs->unset($igqsaukqcqscimok, self::oguseymmyyoyaako); if (!($product = $usmsssmiougymckk->get($product))) { goto oeocukauoyosicso; } if (!(self::wmmucsiyiyusmssm === $iueymcwwscwqkiyq)) { goto oimkeqocuguqqsqk; } $aumscagymwyyicag = $usmsssmiougymckk->oemowqiewwkuiecu($product); $igqsaukqcqscimok = $gkyciwoiiisgywcs->set($igqsaukqcqscimok, ["\160\x72\151\x63\x65" => $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($aumscagymwyyicag), "\162\x61\164\x69\156\147" => $product->get_average_rating(), "\x72\x61\x74\x69\156\x67\x5f\143\157\165\156\x74" => $product->get_rating_count(), "\146\162\145\x65\137\166\145\x72\163\x69\x6f\156" => $aumscagymwyyicag <= 0]); oimkeqocuguqqsqk: $igqsaukqcqscimok[self::sauwwsocmukoaayu] = $product->get_permalink(); oeocukauoyosicso: if (!($mcqieaigyeeyaksm = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, self::mkousmkiawwousws))) { goto suqceasgacskcmkc; } $igqsaukqcqscimok[self::mkousmkiawwousws] = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->iaykyouimqoikagg($mcqieaigyeeyaksm); $igqsaukqcqscimok["\151\155\x61\147\145\137\x64\141\x74\x65"] = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->squyiyimquqicqke("\x59\55\x6d\x2d\144\x20\x48\72\151\x3a\163", $mcqieaigyeeyaksm, false); suqceasgacskcmkc: if (!($rgswmioeqyomacmc = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Component::wsymueygaeiiwsiw))) { goto yykqaowwsqgqysmq; } $igqsaukqcqscimok[Component::wsymueygaeiiwsiw] = Setting::symcgieuakksimmu()->icioieqkoswsyouk([self::ascagqcquwgmygkm => $rgswmioeqyomacmc, self::aisguagukaewucii => self::ckmqoekmugkggeym]); yykqaowwsqgqysmq: $uoyamuqmwmemuiko = (int) $gkyciwoiiisgywcs->unset($igqsaukqcqscimok, Component::ieagekqsqmcsqqeo); $gyycewisqacsckaw = (int) $gkyciwoiiisgywcs->unset($igqsaukqcqscimok, Component::caecscgwwciyemog); $ocmwaasmoekuweaa = (int) $gkyciwoiiisgywcs->unset($igqsaukqcqscimok, Component::keqoqmmgsiegwskg); if ($iueymcwwscwqkiyq === self::wmmucsiyiyusmssm) { goto ikuuiauwouuqawuw; } $ieqwogkgyywicygk = 0; goto yoqakewookqoqacm; ikuuiauwouuqawuw: $ieqwogkgyywicygk = $uoyamuqmwmemuiko + $ocmwaasmoekuweaa; if (!($gyycewisqacsckaw > 0)) { goto uckewycoogsogwiy; } $keaccasqgkaqawwm = time(); $kwkmegesqkqwyska = strtotime($gkyciwoiiisgywcs->unset($igqsaukqcqscimok, Model::CREATED_AT)); $immmocykksywgkqu = round(($keaccasqgkaqawwm - $kwkmegesqkqwyska) / DAY_IN_SECONDS); if (!($immmocykksywgkqu > 0)) { goto kwiggogcgciwuwqk; } $ieqwogkgyywicygk += $gyycewisqacsckaw * $immmocykksywgkqu; kwiggogcgciwuwqk: uckewycoogsogwiy: yoqakewookqoqacm: $igqsaukqcqscimok = $gkyciwoiiisgywcs->set($igqsaukqcqscimok, [Component::mawokyacsmmqmsoo => $ieqwogkgyywicygk]); $gkyciwoiiisgywcs->unset($igqsaukqcqscimok, [self::gouqcwikiiygyasc, "\x64\x6f\x6d\x61\x69\x6e\137\151\144", "\x63\157\x6d\x70\157\x6e\x65\x6e\164\x5f\151\x64"]); gswcoeiisamakwii: return $igqsaukqcqscimok; } public function wwawisckiqeueoua(WP_REST_Request $aqmwamyiwgeeymqa, string $aqykuigiuwmmcieu = self::ckmqoekmugkggeym) { $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::igswcauwsgmeougs); $mokawwccycoiqeka = $swgwkyqkakceqeia->aqiwcawmimkygoau($esuksqieigiqcaie, $iakkeikwceeomgyq); if (!(self::gouqcwikiiygyasc === $aqykuigiuwmmcieu)) { goto yuimwyoywaiiqacs; } $mokawwccycoiqeka = $swgwkyqkakceqeia->keeuqgyooycqoygw($mokawwccycoiqeka); yuimwyoywaiiqacs: if ($mokawwccycoiqeka) { goto ocywegekakimmwcq; } $mokawwccycoiqeka = $this->oemauiimmycumcsk(__("\116\x6f\40\x64\157\155\x61\x69\x6e\40\x66\x6f\x75\156\x64\x20\x66\x6f\x72\x20\x79\x6f\165\56", PR__MDL__COMPONENT_MANAGER), 401); ocywegekakimmwcq: return $mokawwccycoiqeka; } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { $iqauecoycmqkimak = Domain::symcgieuakksimmu()->aokkqqekiykiikki($aqmwamyiwgeeymqa); return parent::ackuaigiocsgyqwe($aqmwamyiwgeeymqa) && $iqauecoycmqkimak; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66b3f9cf876da             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\REST; use Pmpr\Common\Foundation\ORM\DB\Model; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Module\ComponentManager\API\IPDetector; use Pmpr\Module\ComponentManager\Model\Component; use Pmpr\Module\ComponentManager\Model\Purchase; use Pmpr\Module\ComponentManager\Model\Report; use Pmpr\Module\ComponentManager\Setting; use Pmpr\Module\DomainManager\Model\Domain; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { public function __construct() { $this->rest_base = self::ocwsuwyiiasigqaa; parent::__construct(); } public function register_routes() { $this->register("\57\x67\x65\x74\x2d\153\145\x79", [self::okeuagwgwkmiokac => [self::ocwsuwyiiasigqaa => [self::squoamkioomemiyi => "\x73\x74\x72\151\x6e\x67", self::eqkeooqcsscoggia => __("\x43\x6f\x6d\x70\x6f\156\145\x6e\164", PR__MDL__COMPONENT_MANAGER)]], self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\163\x67\x63\167\147\x6d\x6f\141\171\x69\x6b\153\171\163\141\x71"]]); $this->register("\x2f\x67\x65\x74\55\x70\154\165\x67\151\x6e\55\x74\141\x62", [self::wwgusigoaksqmwsm => [$this, "\141\155\x65\151\x77\x6f\x65\155\165\x6b\x6d\x6b\x77\165\157\x69"]]); $this->register("\x2f\147\145\164\x2d\151\164\145\x6d", [self::okeuagwgwkmiokac => [self::NAME => [self::squoamkioomemiyi => "\163\164\x72\151\x6e\147", self::eqkeooqcsscoggia => __("\x4e\x61\x6d\x65\40\157\146\x20\143\157\155\160\157\x6e\x65\156\164", PR__MDL__COMPONENT_MANAGER)]], self::wwgusigoaksqmwsm => [$this, "\163\x71\x6f\151\x75\171\x6b\143\157\x75\145\x69\165\143\147\x63"]]); $this->register("\57\147\145\x74\55\151\x74\x65\x6d\163", [self::okeuagwgwkmiokac => [self::squoamkioomemiyi => [self::squoamkioomemiyi => "\163\x74\162\151\x6e\x67", self::eqkeooqcsscoggia => __("\x54\x79\160\x65\x20\157\146\40\x63\157\x6d\160\157\x6e\x65\x6e\x74", PR__MDL__COMPONENT_MANAGER)], self::imywcsggckkcywgk => [self::squoamkioomemiyi => "\151\x6e\164\x65\x67\145\x72"], self::yayciqueeakqwese => [self::squoamkioomemiyi => "\163\164\162\151\156\147"], self::soesaeyoucgacqga => [self::squoamkioomemiyi => "\142\157\x6f\154\145\x61\x6e"], self::ausqeuugegoygouq => [self::squoamkioomemiyi => "\151\x6e\x74\145\147\x65\x72"]], self::wwgusigoaksqmwsm => [$this, "\x77\141\163\147\167\163\157\x67\155\x75\x71\165\161\145\x61\x61"]]); $this->register("\57\x63\150\x65\143\x6b\x2d\153\x65\x79", [self::okeuagwgwkmiokac => [self::ascagqcquwgmygkm => [self::squoamkioomemiyi => "\x73\x74\x72\151\x6e\x67", self::eqkeooqcsscoggia => __("\114\x69\x63\145\156\163\x65\x20\157\x66\x20\x63\x6f\x6d\x70\157\x6e\x65\156\164", PR__MDL__COMPONENT_MANAGER)], self::ocwsuwyiiasigqaa => [self::squoamkioomemiyi => "\x73\164\x72\151\156\147", self::eqkeooqcsscoggia => __("\x4e\141\x6d\145\40\157\146\x20\x63\x6f\155\x70\157\x6e\x65\x6e\x74", PR__MDL__COMPONENT_MANAGER)], self::vsykweaucigiekae => [self::squoamkioomemiyi => "\142\157\x6f\x6c\x65\x61\156", self::eqkeooqcsscoggia => __("\x52\x65\x71\165\x65\x73\x74\40\x73\145\156\x64\x20\x61\165\164\x6f\x6d\141\164\151\143\141\154\154\171\x20\x62\x79\x20\x63\x72\x6f\156\40\x6f\x72\x20\156\157\164", PR__MDL__COMPONENT_MANAGER)]], self::oaggieeykyaoiiyw => self::qucyckeykeuuaquw, self::wwgusigoaksqmwsm => [$this, "\157\x6b\151\x63\141\x61\x75\147\x71\153\155\171\x77\161\171\x6d"]]); } public function sgcwgmoayikkysaq(WP_REST_Request $aqmwamyiwgeeymqa) { if ($wksoawcgagcgoask = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ocwsuwyiiasigqaa)) { goto mogkoocsoeuyoqqa; } $keccaugmemegoimu = $this->gygamsmycwkqqwcc(__("\103\x6f\155\x70\x6f\156\x65\x6e\x74", PR__MDL__COMPONENT_MANAGER)); goto wkwamkgkwykeqkec; mogkoocsoeuyoqqa: $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); if ($wksoawcgagcgoask = $gcswwqwyaccgyoee->akkkoiiymmamsauc($wksoawcgagcgoask, is_numeric($wksoawcgagcgoask) ? $gcswwqwyaccgyoee->kumuygiiqswoyasy() : self::NAME)) { goto iesekaeqeomeuaui; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\145\x71\x75\x65\163\x74\x65\x64\x20\143\x6f\x6d\x70\157\x6e\145\x6e\164\40\x6e\157\x74\40\146\157\x75\156\x64\x2e", PR__MDL__COMPONENT_MANAGER)); goto wsesqmcqoiyyqkqi; iesekaeqeomeuaui: if (!($keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc))) { goto oyeyomcgkmgymogq; } $syqougokmmgaoaee = $gcswwqwyaccgyoee->keeuqgyooycqoygw($wksoawcgagcgoask); $gmywaegkmeaueiyo = $yakcyegsoqusmiak->oqomcmyuuakigusk([$yakcyegsoqusmiak::ogqcgemayqiaucag => $syqougokmmgaoaee, $yakcyegsoqusmiak::qkmqmaeuyokqgemg => $keccaugmemegoimu]); $wqykqusigegasqeg = $keccaugmemegoimu; if ($gmywaegkmeaueiyo) { goto gamqcwuwkikwqoay; } $sogksuscggsicmac = $yakcyegsoqusmiak->gscuuyuyauokoyuo([$yakcyegsoqusmiak::qkmqmaeuyokqgemg => $wqykqusigegasqeg, $yakcyegsoqusmiak::ogqcgemayqiaucag => $syqougokmmgaoaee], true, 0); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto yiowgigkkwsoqcci; } $keccaugmemegoimu = $this->oemauiimmycumcsk($this->gcsweumukyckmgik($sogksuscggsicmac[self::iwyueouqaqegmcas]), 500); goto ieqesiiageaauiuw; yiowgigkkwsoqcci: $gmywaegkmeaueiyo = $sogksuscggsicmac[self::ckmqoekmugkggeym]; ieqesiiageaauiuw: gamqcwuwkikwqoay: if (is_wp_error($keccaugmemegoimu)) { goto mscyggqcesgqqksu; } $qmwoykgeiicumeiw = $gcswwqwyaccgyoee->qogaqkcsogcqiaic($wksoawcgagcgoask, self::NAME); $icwicymcioeyeyek = (array) $this->ocksiywmkyaqseou("\x63\157\x6d\160\157\x6e\145\x6e\164\137\x67\x65\x74\x5f\154\151\143\145\156\x73\145\137\153\x65\171\137\x72\145\163\x70\157\x6e\x73\x65\x5f\x64\x61\x74\141", [], $wqykqusigegasqeg, $wksoawcgagcgoask); $icwicymcioeyeyek = (array) $this->ocksiywmkyaqseou("{$syqougokmmgaoaee}\x5f\x67\145\x74\137\154\151\x63\x65\156\163\145\x5f\153\145\171\137\x72\145\x73\160\x6f\156\163\x65\137\x64\141\x74\141", $icwicymcioeyeyek, $wqykqusigegasqeg, $wksoawcgagcgoask); $icwicymcioeyeyek = (array) $this->ocksiywmkyaqseou("{$qmwoykgeiicumeiw}\x5f\147\145\164\x5f\154\151\x63\145\156\x73\x65\137\153\x65\171\x5f\x72\x65\x73\x70\157\x6e\163\145\137\x64\x61\164\x61", $icwicymcioeyeyek, $wqykqusigegasqeg, $wksoawcgagcgoask); $icwicymcioeyeyek[self::ascagqcquwgmygkm] = $yakcyegsoqusmiak->qogaqkcsogcqiaic($gmywaegkmeaueiyo, $yakcyegsoqusmiak::okkqqmwseqscceye); $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\114\151\143\x65\156\163\145\40\x6b\145\171\40\160\x72\157\166\151\x64\145\144\40\x73\x75\x63\143\x65\x73\x73\146\165\154\154\x79\56", PR__MDL__COMPONENT_MANAGER), $icwicymcioeyeyek); mscyggqcesgqqksu: oyeyomcgkmgymogq: wsesqmcqoiyyqkqi: wkwamkgkwykeqkec: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function okicaaugqkmywqym(WP_REST_Request $aqmwamyiwgeeymqa) { $hsouuwoeemykcceu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ascagqcquwgmygkm, ''); $wksoawcgagcgoask = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ocwsuwyiiasigqaa, ''); if ($hsouuwoeemykcceu && $wksoawcgagcgoask) { goto uckewycoogsogwiy; } $keccaugmemegoimu = $this->gygamsmycwkqqwcc(); goto ikuuiauwouuqawuw; uckewycoogsogwiy: $keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa); if (!($keccaugmemegoimu && !is_wp_error($keccaugmemegoimu))) { goto kwiggogcgciwuwqk; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $wqykqusigegasqeg = $swgwkyqkakceqeia->keeuqgyooycqoygw($keccaugmemegoimu); $gmywaegkmeaueiyo = $yakcyegsoqusmiak->oqomcmyuuakigusk([Purchase::okkqqmwseqscceye => $hsouuwoeemykcceu, Purchase::qkmqmaeuyokqgemg => $wqykqusigegasqeg]); if ($gmywaegkmeaueiyo) { goto suqceasgacskcmkc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\x6f\162\x72\x79\54\x20\131\x6f\x75\x20\156\157\x74\x20\142\165\171\40\164\150\151\163\40\143\157\155\x70\157\156\x65\156\x74\x2e", PR__MDL__COMPONENT_MANAGER)); $this->icyeokqcmiyigkic($wqykqusigegasqeg, $wksoawcgagcgoask, Report::ckumcckgkuuygwkg); goto yykqaowwsqgqysmq; suqceasgacskcmkc: $syqougokmmgaoaee = $swgwkyqkakceqeia->qogaqkcsogcqiaic($gmywaegkmeaueiyo, Purchase::ogqcgemayqiaucag, 0); $wmqsyyyeksgsmmya = $gcswwqwyaccgyoee->akkkoiiymmamsauc($syqougokmmgaoaee); if ($gcswwqwyaccgyoee->qogaqkcsogcqiaic($wmqsyyyeksgsmmya, $gcswwqwyaccgyoee::NAME) === $wksoawcgagcgoask) { goto oimkeqocuguqqsqk; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\157\162\x72\x79\x2c\x20\131\157\x75\40\x6e\x6f\x74\x20\x62\x75\x79\x20\x74\x68\151\x73\x20\143\157\155\160\157\x6e\145\156\x74\x2c\40\141\x72\145\40\x79\157\x75\40\x74\x72\171\151\156\147\x20\x68\141\143\x6b\77", PR__MDL__COMPONENT_MANAGER)); $this->icyeokqcmiyigkic($wqykqusigegasqeg, $syqougokmmgaoaee, Report::mkgimueycqsggewa); goto oeocukauoyosicso; oimkeqocuguqqsqk: $qmwoykgeiicumeiw = $gcswwqwyaccgyoee->qogaqkcsogcqiaic($wksoawcgagcgoask, self::NAME); $icwicymcioeyeyek = (array) $this->ocksiywmkyaqseou("\143\x6f\155\x70\157\156\145\156\164\137\x63\x68\x65\x63\x6b\137\x6c\151\143\145\x6e\163\x65\x5f\153\x65\171\x5f\x72\x65\x73\x70\157\156\x73\145\137\144\141\164\x61", [], $wqykqusigegasqeg, $wmqsyyyeksgsmmya); $icwicymcioeyeyek = (array) $this->ocksiywmkyaqseou("{$syqougokmmgaoaee}\137\x63\150\145\x63\x6b\x5f\154\x69\x63\145\x6e\x73\145\x5f\153\145\x79\137\162\145\x73\x70\x6f\x6e\x73\x65\x5f\x64\141\x74\x61", $icwicymcioeyeyek, $wqykqusigegasqeg, $wmqsyyyeksgsmmya); $icwicymcioeyeyek = (array) $this->ocksiywmkyaqseou("{$qmwoykgeiicumeiw}\137\x63\x68\145\x63\153\x5f\x6c\151\143\x65\x6e\163\145\x5f\x6b\x65\x79\x5f\x72\145\163\x70\157\156\163\x65\137\x64\141\x74\141", $icwicymcioeyeyek, $wqykqusigegasqeg, $wmqsyyyeksgsmmya); $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\114\151\143\145\156\x73\145\40\113\145\x79\40\x69\x73\x20\166\x61\154\x69\144\x2e", PR__MDL__COMPONENT_MANAGER), $icwicymcioeyeyek); oeocukauoyosicso: yykqaowwsqgqysmq: kwiggogcgciwuwqk: ikuuiauwouuqawuw: if (is_wp_error($keccaugmemegoimu)) { goto yoqakewookqoqacm; } $this->uiagwusgwcassqua("\x4c\151\x63\x65\x6e\x73\x65\x20\153\x65\x79\40\x69\x73\40\166\141\154\x69\x64\x20\141\x6e\144\40\x63\150\145\x63\x6b\40\x69\x73\x20\x73\165\143\x63\x65\x73\x73\146\165\x6c\56"); goto gswcoeiisamakwii; yoqakewookqoqacm: $this->saqqeqmcyyoeqici($this->gcsweumukyckmgik($keccaugmemegoimu)); gswcoeiisamakwii: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ameiwoemukmkwuoi(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa); if (!($keccaugmemegoimu && !is_wp_error($keccaugmemegoimu))) { goto yuimwyoywaiiqacs; } $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $keccaugmemegoimu = [self::qescuiwgsyuikume => $ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::agskamgmowaiywus), self::qwumqqyuasyskkkc => $ykquycoiqesuckco->ksgygymiyeiukqoy(), self::eqkeooqcsscoggia => $ykquycoiqesuckco->giiuwsmyumqwwiyq($ykquycoiqesuckco::uckmggyuwgmmskyc, '')]; $keccaugmemegoimu = $this->ocksiywmkyaqseou("\160\x6c\x75\147\x69\x6e\x5f\162\145\155\157\164\145\137\x74\141\142\x5f\162\145\x73\160\157\156\163\145", $keccaugmemegoimu, $ykquycoiqesuckco); yuimwyoywaiiqacs: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } private function icyeokqcmiyigkic($wqykqusigegasqeg, $wksoawcgagcgoask, string $aiamqeawckcsuaou = '') { return Report::symcgieuakksimmu()->icyeokqcmiyigkic($wqykqusigegasqeg, $wksoawcgagcgoask, self::okkqqmwseqscceye, $aiamqeawckcsuaou); } public function sqoiuykcoueiucgc(WP_REST_Request $aqmwamyiwgeeymqa) { $ymqmyyeuycgmigyo = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::NAME, ''); if ($ymqmyyeuycgmigyo) { goto qsgqwyqaqiowkmco; } $keccaugmemegoimu = $this->gygamsmycwkqqwcc(__("\116\141\155\145", PR__MDL__COMPONENT_MANAGER)); goto yqagomygmeoecwey; qsgqwyqaqiowkmco: $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $wksoawcgagcgoask = $gcswwqwyaccgyoee->oqomcmyuuakigusk([self::NAME => $ymqmyyeuycgmigyo], [$gcswwqwyaccgyoee::gouqcwikiiygyasc, $gcswwqwyaccgyoee::NAME, $gcswwqwyaccgyoee::squoamkioomemiyi, $gcswwqwyaccgyoee::mkousmkiawwousws, $gcswwqwyaccgyoee::ciywsqoeiymemsys, $gcswwqwyaccgyoee::oguseymmyyoyaako, $gcswwqwyaccgyoee::auugqowqueaocgsu, $gcswwqwyaccgyoee::wucysakokksokumi, $gcswwqwyaccgyoee::ouwcgiuiymgwouec, $gcswwqwyaccgyoee::CREATED_AT, $gcswwqwyaccgyoee::yegaaaygeimasokq, $gcswwqwyaccgyoee::bsqkociucacssuum, $gcswwqwyaccgyoee::zgcmquuuyyakwqqm, $gcswwqwyaccgyoee::qscgeqoccoiyaeoi, $gcswwqwyaccgyoee::keqoqmmgsiegwskg, $gcswwqwyaccgyoee::ieagekqsqmcsqqeo, $gcswwqwyaccgyoee::caecscgwwciyemog]); if ($wksoawcgagcgoask) { goto wwukgaquuyoissgy; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\x72\x65\161\x75\x65\163\x74\145\144\x20\x63\157\x6d\160\x6f\156\x65\156\x74\40\x77\151\164\x68\40\156\141\155\145\x20\x25\x73\40\x6e\x6f\x74\x20\x66\x6f\x75\x6e\144\x2e", PR__MDL__COMPONENT_MANAGER), $ymqmyyeuycgmigyo), 404); goto gsygwgsiawgmqiyi; wwukgaquuyoissgy: $wqykqusigegasqeg = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc); if ($wqykqusigegasqeg && !is_wp_error($wqykqusigegasqeg)) { goto mscgewkcqcoowweg; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\167\x65\x20\x68\141\166\145\x20\x73\x6f\x6d\145\40\160\162\157\x62\154\145\155\x20\167\151\164\150\x20\x64\145\x74\145\143\164\x69\x6e\147\40\x79\x6f\165\x72\x20\x64\157\155\141\151\x6e\56\40\x6d\x61\x79\x62\x65\40\x79\157\x75\x72\40\x64\x6f\155\x61\x69\156\40\156\x6f\164\x20\x72\145\147\151\x73\164\x65\x72\x65\144\56", PR__MDL__COMPONENT_MANAGER), 404); goto suqcsgaosywaauuu; mscgewkcqcoowweg: $myqeggyewswyoowe = true; $wqogggcaamgeiwew = $gcswwqwyaccgyoee->iscemaoqqckmkago($gcswwqwyaccgyoee::qkmqmaeuyokqgemg, $wksoawcgagcgoask); if (!$wqogggcaamgeiwew) { goto okkmcocqokkskasy; } $myqeggyewswyoowe = false; $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); foreach ($wqogggcaamgeiwew as $mokawwccycoiqeka) { if (!($wqykqusigegasqeg == $swgwkyqkakceqeia->keeuqgyooycqoygw($mokawwccycoiqeka))) { goto esikeyqyuikmaiek; } $myqeggyewswyoowe = true; goto emqswoaawgeyosmi; esikeyqyuikmaiek: iwsmmkqaoksmocok: } emqswoaawgeyosmi: goto qiiigwkqeoewsuwm; okkmcocqokkskasy: if (!(self::kqeokggqcsesmqco === $gcswwqwyaccgyoee->ogegcqqcukiaqscy(self::squoamkioomemiyi, $wksoawcgagcgoask))) { goto ocywegekakimmwcq; } $myqeggyewswyoowe = false; ocywegekakimmwcq: qiiigwkqeoewsuwm: if ($myqeggyewswyoowe) { goto esaqcqqwuussiiwo; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\157\x72\x72\x79\x20\171\157\165\40\x68\141\166\x65\x20\x6e\157\x20\x70\145\162\x6d\x69\163\163\x69\157\156\x20\x74\x6f\x20\147\145\x74\x20\164\150\x69\x73\x20\143\x6f\155\x70\157\x6e\145\156\x74\x20\x64\141\164\141\56", PR__MDL__COMPONENT_MANAGER)); goto ikqeeaysmqgcgawq; esaqcqqwuussiiwo: $keccaugmemegoimu = $this->ieqymewceekuicei($wksoawcgagcgoask); $keccaugmemegoimu = $this->ocksiywmkyaqseou("\x63\157\x6d\x70\157\x6e\x65\156\x74\137\162\145\163\164\x5f\147\x65\x74\x5f\x69\x74\145\155\137\162\x65\163\160\x6f\x6e\x73\x65", $keccaugmemegoimu, $wqykqusigegasqeg, $wksoawcgagcgoask); ikqeeaysmqgcgawq: suqcsgaosywaauuu: gsygwgsiawgmqiyi: yqagomygmeoecwey: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wasgwsogmuquqeaa(WP_REST_Request $aqmwamyiwgeeymqa) { $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); if ($gwgucoaaqcwwciqq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa)) { goto eucqomyqykgoiuge; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\157\162\x72\x79\x20\142\165\164\40\x79\x6f\x75\x72\x20\162\x65\x71\165\x65\163\x74\x20\x69\x73\x20\156\157\164\40\x76\x61\x6c\151\x64\54\40\143\157\x6e\x74\x61\143\x74\40\165\163\x2e", PR__MDL__COMPONENT_MANAGER)); goto usymasgsyqgsuocg; eucqomyqykgoiuge: $siykeiywomwwuoiw = $gcswwqwyaccgyoee->kosiqqekkquoseki($gwgucoaaqcwwciqq, $kaoqokqgkamekoes, $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::squoamkioomemiyi, self::aqikuweekkucgqoy), $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::soesaeyoucgacqga, false), $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::yayciqueeakqwese, '')); if (!$kaoqokqgkamekoes) { goto qikaewekoecykeou; } $keccaugmemegoimu = $this->oemauiimmycumcsk($kaoqokqgkamekoes); qikaewekoecykeou: usymasgsyqgsuocg: if (isset($keccaugmemegoimu)) { goto egmayaiikwsskgmy; } if (isset($siykeiywomwwuoiw) && $siykeiywomwwuoiw) { goto aueaceeyommgkicu; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\145\x72\166\x69\x63\x65\x20\151\x73\x20\165\x6e\x61\x76\x61\x69\154\x61\142\x6c\145\40\x72\151\x67\x68\164\40\156\x6f\167\x2e", PR__MDL__COMPONENT_MANAGER), 503); goto mysueeoswqgccmui; aueaceeyommgkicu: $ywmkwiwkosakssii = $this->ugyeicuiaamcceos($aqmwamyiwgeeymqa); $keccaugmemegoimu = $gcswwqwyaccgyoee->aeggeuqycwawueqy($siykeiywomwwuoiw, array_merge($ywmkwiwkosakssii, [self::wosqwewmqmyweqea => false])); $oammesyieqmwuwyi = $keccaugmemegoimu[self::qwumqqyuasyskkkc]; $qsqwqsymmqeoqwcu = []; if (!is_array($oammesyieqmwuwyi)) { goto zayqqeqgcwkekwws; } foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $iueymcwwscwqkiyq = $gcswwqwyaccgyoee->ogegcqqcukiaqscy(self::ciywsqoeiymemsys, $igqsaukqcqscimok); if (!in_array($iueymcwwscwqkiyq, [$gcswwqwyaccgyoee::wmmucsiyiyusmssm, $gcswwqwyaccgyoee::iuisqwiqesgyqsyg], true)) { goto oqousikwiiqagoyw; } $qsqwqsymmqeoqwcu[$momcykaoccoymeig] = $this->ieqymewceekuicei($igqsaukqcqscimok); oqousikwiiqagoyw: sqyokemumceysegy: } aiccyaswigkaycqk: zayqqeqgcwkekwws: $keccaugmemegoimu["\163\x71\154"] = $gcswwqwyaccgyoee->syugmyosqomgwywi($siykeiywomwwuoiw); $keccaugmemegoimu[self::qwumqqyuasyskkkc] = $qsqwqsymmqeoqwcu; mysueeoswqgccmui: egmayaiikwsskgmy: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ieqymewceekuicei($igqsaukqcqscimok) { if (!($jwsqucqyaoaasykk = Component::symcgieuakksimmu())) { goto qiaimmucomukkeka; } if (!$igqsaukqcqscimok instanceof Model) { goto ucuoeymyqeokgsya; } $igqsaukqcqscimok = $jwsqucqyaoaasykk->oskuyokuycaksiou($igqsaukqcqscimok); ucuoeymyqeokgsya: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $usmsssmiougymckk = $this->caokeucsksukesyo()->aqasygcsqysmmyke(); $igqsaukqcqscimok = (array) $igqsaukqcqscimok; $iueymcwwscwqkiyq = $gkyciwoiiisgywcs->unset($igqsaukqcqscimok, self::ciywsqoeiymemsys); $igqsaukqcqscimok = $gkyciwoiiisgywcs->set($igqsaukqcqscimok, [self::squoamkioomemiyi => $jwsqucqyaoaasykk->ogegcqqcukiaqscy(self::squoamkioomemiyi, $igqsaukqcqscimok, $jwsqucqyaoaasykk::aqikuweekkucgqoy), self::eikgweiqgomeisyo => $jwsqucqyaoaasykk->ogegcqqcukiaqscy(self::ciywsqoeiymemsys, $iueymcwwscwqkiyq, $jwsqucqyaoaasykk::iuisqwiqesgyqsyg)]); $product = $gkyciwoiiisgywcs->unset($igqsaukqcqscimok, self::oguseymmyyoyaako); if (!($product = $usmsssmiougymckk->get($product))) { goto sguskaeaaqcagqgc; } if (!(self::wmmucsiyiyusmssm === $iueymcwwscwqkiyq)) { goto yuuyikiacmmueosu; } $aumscagymwyyicag = $usmsssmiougymckk->oemowqiewwkuiecu($product); $igqsaukqcqscimok = $gkyciwoiiisgywcs->set($igqsaukqcqscimok, ["\x70\162\151\x63\145" => $this->uwkmaywceaaaigwo()->wikusamwomuogoau()->aumscagymwyyicag($aumscagymwyyicag), "\162\x61\164\151\156\x67" => $product->get_average_rating(), "\x72\141\164\x69\156\147\x5f\x63\x6f\x75\156\x74" => $product->get_rating_count(), "\146\x72\145\145\x5f\166\x65\x72\x73\x69\x6f\156" => $aumscagymwyyicag <= 0]); yuuyikiacmmueosu: $igqsaukqcqscimok[self::sauwwsocmukoaayu] = $product->get_permalink(); sguskaeaaqcagqgc: if (!($mcqieaigyeeyaksm = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, self::mkousmkiawwousws))) { goto agkmiayuawacakau; } $igqsaukqcqscimok[self::mkousmkiawwousws] = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->iaykyouimqoikagg($mcqieaigyeeyaksm); $igqsaukqcqscimok["\x69\155\x61\147\x65\x5f\144\141\164\145"] = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->squyiyimquqicqke("\131\55\x6d\55\144\x20\110\72\x69\x3a\x73", $mcqieaigyeeyaksm, false); agkmiayuawacakau: if (!($rgswmioeqyomacmc = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Component::wsymueygaeiiwsiw))) { goto syuaummumssgwwee; } $igqsaukqcqscimok[Component::wsymueygaeiiwsiw] = Setting::symcgieuakksimmu()->icioieqkoswsyouk([self::ascagqcquwgmygkm => $rgswmioeqyomacmc, self::aisguagukaewucii => self::ckmqoekmugkggeym]); syuaummumssgwwee: $uoyamuqmwmemuiko = (int) $gkyciwoiiisgywcs->unset($igqsaukqcqscimok, Component::ieagekqsqmcsqqeo); $gyycewisqacsckaw = (int) $gkyciwoiiisgywcs->unset($igqsaukqcqscimok, Component::caecscgwwciyemog); $ocmwaasmoekuweaa = (int) $gkyciwoiiisgywcs->unset($igqsaukqcqscimok, Component::keqoqmmgsiegwskg); if ($iueymcwwscwqkiyq === self::wmmucsiyiyusmssm) { goto uoeasoimegouymka; } $ieqwogkgyywicygk = 0; goto egsycocugqyyswsi; uoeasoimegouymka: $ieqwogkgyywicygk = $uoyamuqmwmemuiko + $ocmwaasmoekuweaa; if (!($gyycewisqacsckaw > 0)) { goto qkcsykuocwuyaice; } $keaccasqgkaqawwm = time(); $kwkmegesqkqwyska = strtotime($gkyciwoiiisgywcs->unset($igqsaukqcqscimok, Model::CREATED_AT)); $immmocykksywgkqu = round(($keaccasqgkaqawwm - $kwkmegesqkqwyska) / DAY_IN_SECONDS); if (!($immmocykksywgkqu > 0)) { goto oocuemosmeeekgas; } $ieqwogkgyywicygk += $gyycewisqacsckaw * $immmocykksywgkqu; oocuemosmeeekgas: qkcsykuocwuyaice: egsycocugqyyswsi: $igqsaukqcqscimok = $gkyciwoiiisgywcs->set($igqsaukqcqscimok, [Component::mawokyacsmmqmsoo => $ieqwogkgyywicygk]); $gkyciwoiiisgywcs->unset($igqsaukqcqscimok, [self::gouqcwikiiygyasc, "\144\x6f\155\x61\151\156\137\151\x64", "\143\x6f\x6d\160\157\156\x65\x6e\164\x5f\x69\x64"]); qiaimmucomukkeka: return $igqsaukqcqscimok; } public function wwawisckiqeueoua(WP_REST_Request $aqmwamyiwgeeymqa, string $aqykuigiuwmmcieu = self::ckmqoekmugkggeym) { $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::igswcauwsgmeougs); $mokawwccycoiqeka = $swgwkyqkakceqeia->aqiwcawmimkygoau($esuksqieigiqcaie, $iakkeikwceeomgyq); if (!(self::gouqcwikiiygyasc === $aqykuigiuwmmcieu)) { goto aoquoewagkseayug; } $mokawwccycoiqeka = $swgwkyqkakceqeia->keeuqgyooycqoygw($mokawwccycoiqeka); aoquoewagkseayug: if ($mokawwccycoiqeka) { goto osuscoaaomwcqkew; } $mokawwccycoiqeka = $this->oemauiimmycumcsk(__("\116\157\x20\x64\x6f\x6d\141\x69\156\40\146\x6f\x75\x6e\x64\x20\x66\x6f\162\x20\171\x6f\165\x2e", PR__MDL__COMPONENT_MANAGER), 401); osuscoaaomwcqkew: return $mokawwccycoiqeka; } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { $iqauecoycmqkimak = Domain::symcgieuakksimmu()->aokkqqekiykiikki($aqmwamyiwgeeymqa); return parent::ackuaigiocsgyqwe($aqmwamyiwgeeymqa) && $iqauecoycmqkimak; } }

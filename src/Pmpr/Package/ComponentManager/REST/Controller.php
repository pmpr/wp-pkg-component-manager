<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             621f3e1e16b76             |
    |_______________________________________|
*/
 namespace Pmpr\Package\ComponentManager\REST; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\ORM\DB\Model; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Package\ComponentManager\API\IPDetector; use Pmpr\Package\ComponentManager\Model\Component; use Pmpr\Package\ComponentManager\Model\Purchase; use Pmpr\Package\DomainManager\Model\Domain; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { use LogTrait; const ocwsuwyiiasigqaa = "\143\157\x6d\160\x6f\x6e\x65\156\164"; public function __construct() { $this->rest_base = "\143\157\155\160\157\x6e\x65\x6e\x74"; parent::__construct(); } public function register_routes() { $this->register("\57\x67\x65\x74\x2d\151\x74\x65\x6d", ["\141\x72\147\x73" => ["\156\141\x6d\x65" => ["\x74\x79\x70\145" => "\163\164\x72\151\156\x67", "\x64\x65\x73\143\162\x69\160\x74\151\x6f\x6e" => __("\x4e\x61\155\145\x20\x6f\146\x20\143\157\155\x70\x6f\x6e\x65\156\164", PR__PKG__COMPONENT_MANAGER)]], "\x63\x61\x6c\x6c\142\141\143\153" => [$this, "\x73\161\x6f\151\x75\x79\x6b\x63\x6f\x75\145\151\165\143\x67\x63"]]); $this->register("\57\147\x65\164\55\x69\164\145\155\163", ["\x61\162\x67\163" => [self::squoamkioomemiyi => ["\x74\x79\x70\x65" => "\163\164\x72\151\156\x67", "\144\145\163\143\162\x69\160\164\151\157\156" => __("\x54\x79\160\145\x20\157\x66\40\x63\157\x6d\x70\157\x6e\145\x6e\x74", PR__PKG__COMPONENT_MANAGER)], self::imywcsggckkcywgk => ["\164\171\160\x65" => "\x69\156\x74\x65\x67\x65\162"], self::yayciqueeakqwese => ["\164\171\160\x65" => "\163\164\x72\151\156\147"], self::kqeokggqcsesmqco => ["\x74\171\160\145" => "\142\x6f\x6f\154\x65\141\156"], self::ausqeuugegoygouq => ["\x74\x79\160\145" => "\151\156\x74\145\x67\x65\x72"]], "\x63\141\x6c\x6c\x62\x61\143\153" => [$this, "\167\141\163\x67\x77\163\x6f\147\155\x75\x71\165\161\145\x61\141"]]); $this->register("\x2f\143\150\145\x63\x6b\55\x6b\145\171", ["\x61\162\147\x73" => [self::ascagqcquwgmygkm => [self::squoamkioomemiyi => "\x73\164\x72\x69\156\147", self::eqkeooqcsscoggia => __("\x4c\x69\143\145\x6e\163\145\x20\153\145\x79\40\157\146\x20\x63\x6f\x6d\x70\157\x6e\x65\156\164", PR__PKG__COMPONENT_MANAGER)], self::ocwsuwyiiasigqaa => [self::squoamkioomemiyi => "\x73\x74\x72\151\x6e\x67", self::eqkeooqcsscoggia => __("\x4e\x61\x6d\145\x20\153\x65\x79\x20\157\146\40\x63\x6f\x6d\x70\157\x6e\145\x6e\x74", PR__PKG__COMPONENT_MANAGER)]], "\155\145\164\x68\157\x64\x73" => self::qucyckeykeuuaquw, "\143\x61\x6c\154\x62\141\x63\x6b" => [$this, "\x6f\153\151\143\141\141\x75\x67\161\153\x6d\x79\167\x71\171\x6d"]]); } public function okicaaugqkmywqym(WP_REST_Request $aqmwamyiwgeeymqa) { $hsouuwoeemykcceu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ascagqcquwgmygkm, ''); $wksoawcgagcgoask = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ocwsuwyiiasigqaa, ''); if ($hsouuwoeemykcceu && $wksoawcgagcgoask) { goto csscmcacoikwsecs; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\x65\161\x75\x69\x72\145\40\x70\x61\x72\x61\x6d\x65\164\145\162\x73\x20\x6e\x6f\164\40\160\141\x73\163\x65\144\56", PR__PKG__COMPONENT_MANAGER), 400); goto cuykwgmswkskqkyi; csscmcacoikwsecs: $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::igswcauwsgmeougs); $keccaugmemegoimu = $swgwkyqkakceqeia->aqiwcawmimkygoau($esuksqieigiqcaie, $iakkeikwceeomgyq); if ($keccaugmemegoimu) { goto myoicgcuugciueis; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4e\x6f\40\144\157\x6d\x61\x69\156\40\x66\157\165\x6e\144\40\146\157\162\x20\x79\157\x75\56", PR__PKG__COMPONENT_MANAGER), 401); goto asmecuqiyyswueqe; myoicgcuugciueis: if (is_wp_error($keccaugmemegoimu)) { goto qwigomakwmyiwkgo; } $akyiigeggqowmqqq = $swgwkyqkakceqeia->keeuqgyooycqoygw($keccaugmemegoimu); $gmywaegkmeaueiyo = Purchase::symcgieuakksimmu()->oqomcmyuuakigusk([Purchase::okkqqmwseqscceye => $hsouuwoeemykcceu, Purchase::qkmqmaeuyokqgemg => $akyiigeggqowmqqq]); if ($gmywaegkmeaueiyo) { goto qogqewiwmwiwskgm; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\x6f\x72\x72\171\54\x20\x59\x6f\165\x20\x6e\x6f\164\x20\x62\x75\171\40\164\150\151\163\x20\x63\157\x6d\x70\x6f\156\x65\156\164\56", PR__PKG__COMPONENT_MANAGER)); goto qgoiooayqmqqsiok; qogqewiwmwiwskgm: $uqigicauqkogsuuc = $swgwkyqkakceqeia->qogaqkcsogcqiaic($gmywaegkmeaueiyo, Purchase::ogqcgemayqiaucag, 0); $wmqsyyyeksgsmmya = $gcswwqwyaccgyoee->akkkoiiymmamsauc($uqigicauqkogsuuc); if ($gcswwqwyaccgyoee->qogaqkcsogcqiaic($wmqsyyyeksgsmmya, $gcswwqwyaccgyoee::NAME) == $wksoawcgagcgoask) { goto cecuyayqoioasumi; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\x6f\162\x72\171\54\x20\131\x6f\x75\40\156\x6f\164\x20\x62\165\171\40\x74\x68\151\163\x20\143\x6f\x6d\x70\157\x6e\145\x6e\x74\54\40\x61\x72\x65\40\x79\x6f\x75\x20\x74\162\x79\x69\x6e\x67\x20\150\141\143\x6b\x3f", PR__PKG__COMPONENT_MANAGER)); goto qiaqsassksqiuyae; cecuyayqoioasumi: $icwicymcioeyeyek = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\154\x69\143\x65\x6e\163\x65\137\143\x68\145\143\153\x5f\x76\x61\x6c\x69\x64\141\164\x69\157\x6e\137\162\145\163\x70\x6f\x6e\163\145\x5f\x64\141\164\x61"), [], $akyiigeggqowmqqq, $uqigicauqkogsuuc, $wmqsyyyeksgsmmya); $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\x4c\x69\x63\x65\156\x73\x65\40\x4b\x65\171\40\151\x73\40\166\141\154\151\x64\x2e", PR__PKG__COMPONENT_MANAGER), $icwicymcioeyeyek); qiaqsassksqiuyae: qgoiooayqmqqsiok: qwigomakwmyiwkgo: asmecuqiyyswueqe: cuykwgmswkskqkyi: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function sqoiuykcoueiucgc(WP_REST_Request $aqmwamyiwgeeymqa) { $ymqmyyeuycgmigyo = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::NAME, ''); if ($ymqmyyeuycgmigyo) { goto sciwggaeogcoesiu; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\145\161\165\151\x72\145\x20\160\141\x72\x61\x6d\x65\164\145\162\163\40\x6e\157\x74\x20\x70\x61\x73\x73\145\x64\56", PR__PKG__COMPONENT_MANAGER), 400); goto eqkauqciwewmgeoi; sciwggaeogcoesiu: $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $wksoawcgagcgoask = $gcswwqwyaccgyoee->oqomcmyuuakigusk([self::NAME => $ymqmyyeuycgmigyo], [$gcswwqwyaccgyoee::NAME, $gcswwqwyaccgyoee::squoamkioomemiyi, $gcswwqwyaccgyoee::mkousmkiawwousws, $gcswwqwyaccgyoee::ciywsqoeiymemsys, $gcswwqwyaccgyoee::oguseymmyyoyaako, $gcswwqwyaccgyoee::auugqowqueaocgsu, $gcswwqwyaccgyoee::wucysakokksokumi, $gcswwqwyaccgyoee::ouwcgiuiymgwouec, $gcswwqwyaccgyoee::CREATED_AT, $gcswwqwyaccgyoee::yegaaaygeimasokq, $gcswwqwyaccgyoee::bsqkociucacssuum, $gcswwqwyaccgyoee::zgcmquuuyyakwqqm, $gcswwqwyaccgyoee::qscgeqoccoiyaeoi, $gcswwqwyaccgyoee::keqoqmmgsiegwskg, $gcswwqwyaccgyoee::ieagekqsqmcsqqeo, $gcswwqwyaccgyoee::caecscgwwciyemog]); if ($wksoawcgagcgoask) { goto kuicqywysciceggs; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\162\145\161\x75\145\x73\x74\145\x64\40\x63\x6f\155\160\x6f\x6e\x65\156\x74\40\x77\x69\x74\150\40\156\141\x6d\145\40\45\x73\40\156\x6f\x74\40\x66\x6f\x75\x6e\x64\x2e", PR__PKG__COMPONENT_MANAGER), $ymqmyyeuycgmigyo), 400); goto mkwskuycuyguqqok; kuicqywysciceggs: $keccaugmemegoimu = $this->ieqymewceekuicei($wksoawcgagcgoask); mkwskuycuyguqqok: eqkauqciwewmgeoi: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wasgwsogmuquqeaa(WP_REST_Request $aqmwamyiwgeeymqa) { $qwcmueausqgiwigy = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::yayciqueeakqwese, ''); $uoomaookgsyciacm = []; $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); if (!$qwcmueausqgiwigy) { goto kwagwqyusyiyoaqs; } $uiewakwqscemywuo = [self::ciyoccqkiamemcmm => "\x25{$qwcmueausqgiwigy}\x25", self::cwsguekoagqkaesm => self::ieiyckasqmcyekim, self::eugyciakiowwcuwm => self::augocsiaqqukkuui]; $uoomaookgsyciacm = [$gcswwqwyaccgyoee::NAME => $uiewakwqscemywuo, $gcswwqwyaccgyoee::wucysakokksokumi => $uiewakwqscemywuo, $gcswwqwyaccgyoee::ouwcgiuiymgwouec => $uiewakwqscemywuo]; kwagwqyusyiyoaqs: $sqeykgyoooqysmca = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::squoamkioomemiyi, "\x70\x61\143\x6b\141\147\x65"); $uoomaookgsyciacm[$gcswwqwyaccgyoee::squoamkioomemiyi] = $sqeykgyoooqysmca; $uoomaookgsyciacm[$gcswwqwyaccgyoee::ciywsqoeiymemsys] = [$gcswwqwyaccgyoee::wmmucsiyiyusmssm, $gcswwqwyaccgyoee::iuisqwiqesgyqsyg]; if ($sqeykgyoooqysmca == $gcswwqwyaccgyoee::kqeokggqcsesmqco) { goto sqiciiuwmykocycc; } $siykeiywomwwuoiw = $gcswwqwyaccgyoee->kqewyqqqiyiouaou($uoomaookgsyciacm); goto eequksumcoogyoem; sqiciiuwmykocycc: $gwgucoaaqcwwciqq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); if (!$gwgucoaaqcwwciqq) { goto iomcaiwewsawiamu; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $mokawwccycoiqeka = $swgwkyqkakceqeia->gwkkkwyoomgsiaou($gwgucoaaqcwwciqq); if ($mokawwccycoiqeka) { goto yowsmsiyimmimemc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\x6f\162\x72\171\40\x62\x75\x74\40\151\164\x27\163\x20\x73\141\x6d\145\x73\40\x79\157\165\x72\40\x64\157\155\141\x69\x6e\x20\156\157\164\x20\162\x65\x67\x69\163\164\145\162\x65\x64\56\x20\160\x6c\145\141\x73\x65\x20\162\x65\x67\151\x73\x74\145\162\40\x64\157\155\141\x69\x6e\x20\x61\x6e\144\40\x74\150\145\156\40\164\162\x79\x20\x61\x67\141\151\x6e", PR__PKG__COMPONENT_MANAGER)); goto kiqogmwcgcamwiig; yowsmsiyimmimemc: $siykeiywomwwuoiw = $swgwkyqkakceqeia->mgacegaoeamymmya($swgwkyqkakceqeia::ogqcgemayqiaucag, $mokawwccycoiqeka); kiqogmwcgcamwiig: iomcaiwewsawiamu: eequksumcoogyoem: if (isset($keccaugmemegoimu)) { goto meawswgwagoqgkye; } if (isset($siykeiywomwwuoiw) && $siykeiywomwwuoiw) { goto yiwiqaqmwiogawym; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\x65\x72\166\x69\143\145\x20\151\x73\x20\x75\x6e\141\x76\x61\151\x6c\141\x62\x6c\145\x20\162\151\147\x68\x74\x20\x6e\x6f\x77\56", PR__PKG__COMPONENT_MANAGER), 503); goto goacqqsgaaigyuaw; yiwiqaqmwiogawym: $ywmkwiwkosakssii = $this->ugyeicuiaamcceos($aqmwamyiwgeeymqa); $keccaugmemegoimu = $gcswwqwyaccgyoee->aeggeuqycwawueqy($siykeiywomwwuoiw, array_merge($ywmkwiwkosakssii, [self::wosqwewmqmyweqea => false])); $oammesyieqmwuwyi = $keccaugmemegoimu[self::qwumqqyuasyskkkc]; $qsqwqsymmqeoqwcu = []; foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $iueymcwwscwqkiyq = ManipulateArray::get($igqsaukqcqscimok, $gcswwqwyaccgyoee::ciywsqoeiymemsys); if (!in_array($iueymcwwscwqkiyq, [$gcswwqwyaccgyoee::wmmucsiyiyusmssm, $gcswwqwyaccgyoee::iuisqwiqesgyqsyg])) { goto ocokwuuquaokmasc; } $qsqwqsymmqeoqwcu[$momcykaoccoymeig] = $this->ieqymewceekuicei($igqsaukqcqscimok); ocokwuuquaokmasc: cggowoquuiwqkyew: } uukumskkeggaowck: $keccaugmemegoimu[self::qwumqqyuasyskkkc] = $qsqwqsymmqeoqwcu; goacqqsgaaigyuaw: meawswgwagoqgkye: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ieqymewceekuicei($igqsaukqcqscimok) { if (!$igqsaukqcqscimok instanceof Model) { goto wcesymwqykqoyuqk; } $igqsaukqcqscimok = $igqsaukqcqscimok->ccekeuwwqqoiwuwy(); wcesymwqykqoyuqk: $igqsaukqcqscimok = (array) $igqsaukqcqscimok; $iueymcwwscwqkiyq = ManipulateArray::unset($igqsaukqcqscimok, Component::ciywsqoeiymemsys); $igqsaukqcqscimok = ManipulateArray::set($igqsaukqcqscimok, ["\x73\x74\141\164\145" => $iueymcwwscwqkiyq ?: Component::iuisqwiqesgyqsyg]); $product = ManipulateArray::unset($igqsaukqcqscimok, self::oguseymmyyoyaako); if (!$product) { goto egasokooagakisiy; } $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); if (!$product) { goto mswsoaimesegiiic; } if (!($iueymcwwscwqkiyq == Component::wmmucsiyiyusmssm)) { goto usqgaogkqgemuima; } $igqsaukqcqscimok = ManipulateArray::set($igqsaukqcqscimok, ["\x72\x61\x74\x69\x6e\147" => $product->get_average_rating(), "\x72\x61\164\151\156\x67\x5f\x63\x6f\165\156\x74" => $product->get_rating_count()]); usqgaogkqgemuima: $igqsaukqcqscimok[self::sauwwsocmukoaayu] = $product->get_permalink(); mswsoaimesegiiic: egasokooagakisiy: $mcqieaigyeeyaksm = ManipulateArray::get($igqsaukqcqscimok, self::mkousmkiawwousws); if (!$mcqieaigyeeyaksm) { goto kecwuwwcwokuksyq; } $igqsaukqcqscimok[self::mkousmkiawwousws] = ManipulateAttachment::iaykyouimqoikagg($mcqieaigyeeyaksm); kecwuwwcwokuksyq: $uoyamuqmwmemuiko = intval(ManipulateArray::unset($igqsaukqcqscimok, Component::ieagekqsqmcsqqeo)); $gyycewisqacsckaw = intval(ManipulateArray::unset($igqsaukqcqscimok, Component::caecscgwwciyemog)); $ocmwaasmoekuweaa = intval(ManipulateArray::unset($igqsaukqcqscimok, Component::keqoqmmgsiegwskg)); if ($iueymcwwscwqkiyq == Component::wmmucsiyiyusmssm) { goto goeoymmqqqeeoime; } $ieqwogkgyywicygk = 0; goto eiawsoasmscmqswa; goeoymmqqqeeoime: $ieqwogkgyywicygk = $uoyamuqmwmemuiko + $ocmwaasmoekuweaa; if (!($gyycewisqacsckaw > 0)) { goto qmiwsequckckoaei; } $keaccasqgkaqawwm = time(); $kwkmegesqkqwyska = strtotime(ManipulateArray::unset($igqsaukqcqscimok, Component::CREATED_AT)); $immmocykksywgkqu = round(($keaccasqgkaqawwm - $kwkmegesqkqwyska) / DAY_IN_SECONDS); if (!($immmocykksywgkqu > 0)) { goto qgegkeomwscwwiuw; } $ieqwogkgyywicygk += $gyycewisqacsckaw * $immmocykksywgkqu; qgegkeomwscwwiuw: qmiwsequckckoaei: eiawsoasmscmqswa: return ManipulateArray::set($igqsaukqcqscimok, [Component::mawokyacsmmqmsoo => $ieqwogkgyywicygk]); } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { $yywgiquyoymymqwk = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x69\x70\x73"); $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::igswcauwsgmeougs); $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $cuakwceieagskoaa = false; $mokawwccycoiqeka = $swgwkyqkakceqeia->aqiwcawmimkygoau($esuksqieigiqcaie, $iakkeikwceeomgyq); if (!($mokawwccycoiqeka && !is_wp_error($mokawwccycoiqeka))) { goto kooskuwkuayiuose; } $qoowakyqgwcscuss = $swgwkyqkakceqeia->qogaqkcsogcqiaic($mokawwccycoiqeka, $swgwkyqkakceqeia::aemeeukyaaokioui, $swgwkyqkakceqeia::NOT_SPECIFIED); if ($qoowakyqgwcscuss == $swgwkyqkakceqeia::wyeieyscswyiskcw) { goto eyiamcekkgkiawqy; } if (!($qoowakyqgwcscuss == $swgwkyqkakceqeia::NOT_SPECIFIED)) { goto mqccmesakuemceqi; } $qoowakyqgwcscuss = $swgwkyqkakceqeia::qyywsyikosmsacgu; if (in_array(strtolower(pathinfo($iakkeikwceeomgyq, PATHINFO_EXTENSION)), ["\151\x72"])) { goto cgewcsueoyaeikgm; } if (!($yywgiquyoymymqwk && is_array($yywgiquyoymymqwk))) { goto cuoqqgaygogsmmic; } $seswwgkqsacoswcc = IPDetector::symcgieuakksimmu(); foreach ($yywgiquyoymymqwk as $kucumcusyyckayas) { if (!($kucumcusyyckayas && in_array(strtolower($seswwgkqsacoswcc->mcyaoicyesuysggi($kucumcusyyckayas)), ["\x69\162"]))) { goto ygkcacsyyckescqs; } $cuakwceieagskoaa = true; goto ickcmqoiosquugwe; ygkcacsyyckescqs: qmeoaqmsuseueqiy: } ickcmqoiosquugwe: cuoqqgaygogsmmic: goto sukskmcwsoysiuqu; cgewcsueoyaeikgm: $cuakwceieagskoaa = true; sukskmcwsoysiuqu: if (!$cuakwceieagskoaa) { goto igymseewwyiocoug; } $qoowakyqgwcscuss = $swgwkyqkakceqeia::wyeieyscswyiskcw; igymseewwyiocoug: $mokawwccycoiqeka = ManipulateArray::set($mokawwccycoiqeka, [$swgwkyqkakceqeia::aemeeukyaaokioui => $qoowakyqgwcscuss]); $swgwkyqkakceqeia->gscuuyuyauokoyuo((array) $mokawwccycoiqeka, true); mqccmesakuemceqi: goto twkmiuomimomscew; eyiamcekkgkiawqy: $cuakwceieagskoaa = true; twkmiuomimomscew: kooskuwkuayiuose: return parent::ackuaigiocsgyqwe($aqmwamyiwgeeymqa) && $cuakwceieagskoaa; } }

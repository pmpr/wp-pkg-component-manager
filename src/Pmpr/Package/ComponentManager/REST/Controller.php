<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             622dbc561aa8b             |
    |_______________________________________|
*/
 namespace Pmpr\Package\ComponentManager\REST; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\ORM\DB\Model; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Package\ComponentManager\API\IPDetector; use Pmpr\Package\ComponentManager\Model\Component; use Pmpr\Package\ComponentManager\Model\Purchase; use Pmpr\Package\DomainManager\Model\Domain; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { use LogTrait; public function __construct() { $this->rest_base = self::ocwsuwyiiasigqaa; parent::__construct(); } public function register_routes() { $this->register("\x2f\147\145\x74\55\x69\164\145\x6d", ["\141\162\147\x73" => ["\156\x61\x6d\145" => ["\x74\171\160\145" => "\163\x74\x72\151\x6e\x67", "\144\145\x73\x63\x72\151\160\x74\151\157\x6e" => __("\116\x61\x6d\x65\40\157\x66\x20\x63\157\155\x70\x6f\x6e\x65\x6e\164", PR__PKG__COMPONENT_MANAGER)]], "\x63\x61\x6c\x6c\x62\141\x63\x6b" => [$this, "\x73\x71\x6f\151\x75\171\153\143\157\x75\145\x69\165\x63\147\x63"]]); $this->register("\x2f\x67\x65\164\55\151\164\145\x6d\163", ["\x61\162\147\163" => [self::squoamkioomemiyi => ["\164\171\160\x65" => "\x73\x74\x72\151\156\147", "\x64\145\163\x63\x72\151\x70\164\x69\157\x6e" => __("\x54\171\x70\x65\40\157\146\40\x63\x6f\155\x70\157\156\x65\x6e\x74", PR__PKG__COMPONENT_MANAGER)], self::imywcsggckkcywgk => ["\164\171\160\145" => "\x69\156\x74\145\147\x65\x72"], self::yayciqueeakqwese => ["\164\171\160\145" => "\163\x74\162\151\x6e\147"], self::kqeokggqcsesmqco => ["\164\171\x70\145" => "\x62\x6f\x6f\154\x65\141\156"], self::ausqeuugegoygouq => ["\164\171\x70\x65" => "\x69\156\x74\x65\x67\x65\162"]], "\x63\141\x6c\x6c\142\x61\x63\x6b" => [$this, "\x77\x61\163\x67\x77\x73\157\x67\x6d\x75\x71\165\x71\145\141\x61"]]); $this->register("\57\x63\150\145\143\x6b\x2d\x6b\145\x79", ["\x61\162\x67\x73" => [self::ascagqcquwgmygkm => [self::squoamkioomemiyi => "\x73\164\x72\x69\156\x67", self::eqkeooqcsscoggia => __("\x4c\x69\x63\x65\x6e\x73\x65\40\x6b\145\171\40\x6f\x66\40\x63\157\x6d\x70\x6f\x6e\x65\156\164", PR__PKG__COMPONENT_MANAGER)], self::ocwsuwyiiasigqaa => [self::squoamkioomemiyi => "\163\x74\162\x69\x6e\147", self::eqkeooqcsscoggia => __("\116\141\x6d\x65\x20\x6b\145\x79\40\157\146\x20\x63\157\x6d\x70\157\x6e\145\156\x74", PR__PKG__COMPONENT_MANAGER)]], "\x6d\x65\164\x68\157\144\x73" => self::qucyckeykeuuaquw, "\143\x61\x6c\x6c\142\141\143\153" => [$this, "\x6f\x6b\151\x63\141\141\165\x67\x71\153\x6d\171\167\161\x79\x6d"]]); } public function okicaaugqkmywqym(WP_REST_Request $aqmwamyiwgeeymqa) { $hsouuwoeemykcceu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ascagqcquwgmygkm, ''); $wksoawcgagcgoask = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ocwsuwyiiasigqaa, ''); if ($hsouuwoeemykcceu && $wksoawcgagcgoask) { goto csscmcacoikwsecs; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\145\x71\165\151\x72\145\x20\160\141\162\x61\x6d\x65\x74\x65\x72\163\x20\156\157\x74\40\160\x61\163\x73\x65\x64\x2e", PR__PKG__COMPONENT_MANAGER), 400); goto cuykwgmswkskqkyi; csscmcacoikwsecs: $keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa); if ($keccaugmemegoimu) { goto myoicgcuugciueis; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4e\x6f\x20\x64\157\x6d\141\x69\x6e\x20\146\x6f\x75\x6e\x64\x20\146\157\162\40\x79\157\x75\56", PR__PKG__COMPONENT_MANAGER), 401); goto asmecuqiyyswueqe; myoicgcuugciueis: if (is_wp_error($keccaugmemegoimu)) { goto qwigomakwmyiwkgo; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $akyiigeggqowmqqq = $swgwkyqkakceqeia->keeuqgyooycqoygw($keccaugmemegoimu); $gmywaegkmeaueiyo = Purchase::symcgieuakksimmu()->oqomcmyuuakigusk([Purchase::okkqqmwseqscceye => $hsouuwoeemykcceu, Purchase::qkmqmaeuyokqgemg => $akyiigeggqowmqqq]); if ($gmywaegkmeaueiyo) { goto qogqewiwmwiwskgm; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\157\x72\x72\x79\x2c\40\131\x6f\165\40\x6e\157\164\40\x62\x75\171\40\x74\150\x69\x73\40\x63\157\155\x70\x6f\156\145\x6e\x74\56", PR__PKG__COMPONENT_MANAGER)); goto qgoiooayqmqqsiok; qogqewiwmwiwskgm: $uqigicauqkogsuuc = $swgwkyqkakceqeia->qogaqkcsogcqiaic($gmywaegkmeaueiyo, Purchase::ogqcgemayqiaucag, 0); $wmqsyyyeksgsmmya = $gcswwqwyaccgyoee->akkkoiiymmamsauc($uqigicauqkogsuuc); if ($gcswwqwyaccgyoee->qogaqkcsogcqiaic($wmqsyyyeksgsmmya, $gcswwqwyaccgyoee::NAME) == $wksoawcgagcgoask) { goto cecuyayqoioasumi; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\x6f\162\162\171\54\40\x59\157\165\x20\156\x6f\164\x20\142\165\171\x20\x74\x68\x69\x73\40\x63\157\155\160\157\x6e\x65\156\x74\x2c\40\141\162\x65\x20\171\157\x75\x20\164\x72\x79\151\x6e\147\x20\x68\x61\x63\x6b\77", PR__PKG__COMPONENT_MANAGER)); goto qiaqsassksqiuyae; cecuyayqoioasumi: $icwicymcioeyeyek = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\154\151\x63\145\x6e\x73\145\137\x63\150\x65\x63\x6b\x5f\x76\x61\154\x69\x64\x61\x74\151\157\x6e\x5f\x72\x65\x73\x70\157\156\x73\x65\x5f\x64\141\x74\141"), [], $akyiigeggqowmqqq, $wmqsyyyeksgsmmya); $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\114\151\143\145\x6e\x73\145\40\113\145\171\40\x69\x73\40\166\141\154\151\x64\56", PR__PKG__COMPONENT_MANAGER), $icwicymcioeyeyek); qiaqsassksqiuyae: qgoiooayqmqqsiok: qwigomakwmyiwkgo: asmecuqiyyswueqe: cuykwgmswkskqkyi: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function sqoiuykcoueiucgc(WP_REST_Request $aqmwamyiwgeeymqa) { $ymqmyyeuycgmigyo = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::NAME, ''); if ($ymqmyyeuycgmigyo) { goto eqkauqciwewmgeoi; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\x65\161\x75\151\162\145\x20\160\141\162\141\155\x65\x74\x65\x72\x73\x20\x6e\157\164\x20\x70\141\163\x73\x65\144\x2e", PR__PKG__COMPONENT_MANAGER), 400); goto kwagwqyusyiyoaqs; eqkauqciwewmgeoi: $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $wksoawcgagcgoask = $gcswwqwyaccgyoee->oqomcmyuuakigusk([self::NAME => $ymqmyyeuycgmigyo], [$gcswwqwyaccgyoee::gouqcwikiiygyasc, $gcswwqwyaccgyoee::NAME, $gcswwqwyaccgyoee::squoamkioomemiyi, $gcswwqwyaccgyoee::mkousmkiawwousws, $gcswwqwyaccgyoee::ciywsqoeiymemsys, $gcswwqwyaccgyoee::oguseymmyyoyaako, $gcswwqwyaccgyoee::auugqowqueaocgsu, $gcswwqwyaccgyoee::wucysakokksokumi, $gcswwqwyaccgyoee::ouwcgiuiymgwouec, $gcswwqwyaccgyoee::CREATED_AT, $gcswwqwyaccgyoee::yegaaaygeimasokq, $gcswwqwyaccgyoee::bsqkociucacssuum, $gcswwqwyaccgyoee::zgcmquuuyyakwqqm, $gcswwqwyaccgyoee::qscgeqoccoiyaeoi, $gcswwqwyaccgyoee::keqoqmmgsiegwskg, $gcswwqwyaccgyoee::ieagekqsqmcsqqeo, $gcswwqwyaccgyoee::caecscgwwciyemog]); if ($wksoawcgagcgoask) { goto mkwskuycuyguqqok; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\x72\145\x71\x75\145\163\x74\x65\x64\x20\x63\x6f\x6d\x70\x6f\156\145\x6e\x74\x20\x77\x69\164\150\x20\x6e\141\155\145\40\x25\x73\40\156\157\164\x20\146\x6f\165\x6e\144\x2e", PR__PKG__COMPONENT_MANAGER), $ymqmyyeuycgmigyo), 400); goto sciwggaeogcoesiu; mkwskuycuyguqqok: $keccaugmemegoimu = $this->ieqymewceekuicei($wksoawcgagcgoask); if (!($akyiigeggqowmqqq = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc))) { goto kuicqywysciceggs; } $keccaugmemegoimu = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x63\x6f\155\x70\x6f\x6e\145\156\164\x5f\162\x65\163\164\x5f\x67\145\164\x5f\x69\x74\145\x6d\137\162\x65\163\160\157\x6e\x73\x65"), $keccaugmemegoimu, $akyiigeggqowmqqq, $wksoawcgagcgoask); kuicqywysciceggs: sciwggaeogcoesiu: kwagwqyusyiyoaqs: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wasgwsogmuquqeaa(WP_REST_Request $aqmwamyiwgeeymqa) { $qwcmueausqgiwigy = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::yayciqueeakqwese, ''); $uoomaookgsyciacm = []; $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); if (!$qwcmueausqgiwigy) { goto yowsmsiyimmimemc; } $uiewakwqscemywuo = [self::ciyoccqkiamemcmm => "\x25{$qwcmueausqgiwigy}\x25", self::cwsguekoagqkaesm => self::ieiyckasqmcyekim, self::eugyciakiowwcuwm => self::augocsiaqqukkuui]; $uoomaookgsyciacm = [$gcswwqwyaccgyoee::NAME => $uiewakwqscemywuo, $gcswwqwyaccgyoee::wucysakokksokumi => $uiewakwqscemywuo, $gcswwqwyaccgyoee::ouwcgiuiymgwouec => $uiewakwqscemywuo]; yowsmsiyimmimemc: $sqeykgyoooqysmca = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::squoamkioomemiyi, "\x70\141\143\x6b\x61\x67\x65"); $uoomaookgsyciacm[$gcswwqwyaccgyoee::squoamkioomemiyi] = $sqeykgyoooqysmca; $uoomaookgsyciacm[$gcswwqwyaccgyoee::ciywsqoeiymemsys] = [$gcswwqwyaccgyoee::wmmucsiyiyusmssm, $gcswwqwyaccgyoee::iuisqwiqesgyqsyg]; if ($sqeykgyoooqysmca == $gcswwqwyaccgyoee::kqeokggqcsesmqco) { goto eequksumcoogyoem; } $siykeiywomwwuoiw = $gcswwqwyaccgyoee->kqewyqqqiyiouaou($uoomaookgsyciacm); goto uukumskkeggaowck; eequksumcoogyoem: $gwgucoaaqcwwciqq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); if (!$gwgucoaaqcwwciqq) { goto sqiciiuwmykocycc; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $mokawwccycoiqeka = $swgwkyqkakceqeia->gwkkkwyoomgsiaou($gwgucoaaqcwwciqq); if ($mokawwccycoiqeka) { goto kiqogmwcgcamwiig; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\157\162\x72\171\40\x62\x75\164\40\151\164\47\163\40\163\141\155\145\163\40\x79\x6f\x75\x72\40\144\157\x6d\x61\151\156\x20\156\x6f\x74\40\162\x65\x67\x69\163\164\x65\x72\x65\x64\x2e\x20\160\154\x65\141\x73\145\40\162\145\x67\x69\163\164\x65\162\40\144\x6f\155\x61\151\156\40\141\156\x64\40\x74\x68\x65\156\40\x74\x72\171\x20\141\x67\141\151\156", PR__PKG__COMPONENT_MANAGER)); goto iomcaiwewsawiamu; kiqogmwcgcamwiig: $siykeiywomwwuoiw = $swgwkyqkakceqeia->mgacegaoeamymmya($swgwkyqkakceqeia::ogqcgemayqiaucag, $mokawwccycoiqeka); iomcaiwewsawiamu: sqiciiuwmykocycc: uukumskkeggaowck: if (isset($keccaugmemegoimu)) { goto wcesymwqykqoyuqk; } if (isset($siykeiywomwwuoiw) && $siykeiywomwwuoiw) { goto goacqqsgaaigyuaw; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\x65\x72\166\151\143\145\40\x69\163\x20\x75\156\x61\166\x61\x69\x6c\x61\142\x6c\x65\x20\x72\151\147\150\x74\40\156\157\x77\56", PR__PKG__COMPONENT_MANAGER), 503); goto meawswgwagoqgkye; goacqqsgaaigyuaw: $ywmkwiwkosakssii = $this->ugyeicuiaamcceos($aqmwamyiwgeeymqa); $keccaugmemegoimu = $gcswwqwyaccgyoee->aeggeuqycwawueqy($siykeiywomwwuoiw, array_merge($ywmkwiwkosakssii, [self::wosqwewmqmyweqea => false])); $oammesyieqmwuwyi = $keccaugmemegoimu[self::qwumqqyuasyskkkc]; $qsqwqsymmqeoqwcu = []; foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $iueymcwwscwqkiyq = ManipulateArray::get($igqsaukqcqscimok, $gcswwqwyaccgyoee::ciywsqoeiymemsys); if (!in_array($iueymcwwscwqkiyq, [$gcswwqwyaccgyoee::wmmucsiyiyusmssm, $gcswwqwyaccgyoee::iuisqwiqesgyqsyg])) { goto yiwiqaqmwiogawym; } $qsqwqsymmqeoqwcu[$momcykaoccoymeig] = $this->ieqymewceekuicei($igqsaukqcqscimok); yiwiqaqmwiogawym: ocokwuuquaokmasc: } cggowoquuiwqkyew: $keccaugmemegoimu[self::qwumqqyuasyskkkc] = $qsqwqsymmqeoqwcu; meawswgwagoqgkye: wcesymwqykqoyuqk: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ieqymewceekuicei($igqsaukqcqscimok) { if (!$igqsaukqcqscimok instanceof Model) { goto usqgaogkqgemuima; } $igqsaukqcqscimok = $igqsaukqcqscimok->ccekeuwwqqoiwuwy(); usqgaogkqgemuima: $igqsaukqcqscimok = (array) $igqsaukqcqscimok; $iueymcwwscwqkiyq = ManipulateArray::unset($igqsaukqcqscimok, Component::ciywsqoeiymemsys); $igqsaukqcqscimok = ManipulateArray::set($igqsaukqcqscimok, ["\x73\x74\141\x74\x65" => $iueymcwwscwqkiyq ?: Component::iuisqwiqesgyqsyg]); $product = ManipulateArray::unset($igqsaukqcqscimok, self::oguseymmyyoyaako); if (!$product) { goto kecwuwwcwokuksyq; } $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); if (!$product) { goto egasokooagakisiy; } if (!($iueymcwwscwqkiyq == Component::wmmucsiyiyusmssm)) { goto mswsoaimesegiiic; } $igqsaukqcqscimok = ManipulateArray::set($igqsaukqcqscimok, ["\162\141\164\x69\156\x67" => $product->get_average_rating(), "\x72\141\x74\x69\156\x67\x5f\143\x6f\x75\x6e\164" => $product->get_rating_count()]); mswsoaimesegiiic: $igqsaukqcqscimok[self::sauwwsocmukoaayu] = $product->get_permalink(); egasokooagakisiy: kecwuwwcwokuksyq: $mcqieaigyeeyaksm = ManipulateArray::get($igqsaukqcqscimok, self::mkousmkiawwousws); if (!$mcqieaigyeeyaksm) { goto qgegkeomwscwwiuw; } $igqsaukqcqscimok[self::mkousmkiawwousws] = ManipulateAttachment::iaykyouimqoikagg($mcqieaigyeeyaksm); qgegkeomwscwwiuw: $uoyamuqmwmemuiko = intval(ManipulateArray::unset($igqsaukqcqscimok, Component::ieagekqsqmcsqqeo)); $gyycewisqacsckaw = intval(ManipulateArray::unset($igqsaukqcqscimok, Component::caecscgwwciyemog)); $ocmwaasmoekuweaa = intval(ManipulateArray::unset($igqsaukqcqscimok, Component::keqoqmmgsiegwskg)); if ($iueymcwwscwqkiyq == Component::wmmucsiyiyusmssm) { goto eiawsoasmscmqswa; } $ieqwogkgyywicygk = 0; goto ickcmqoiosquugwe; eiawsoasmscmqswa: $ieqwogkgyywicygk = $uoyamuqmwmemuiko + $ocmwaasmoekuweaa; if (!($gyycewisqacsckaw > 0)) { goto goeoymmqqqeeoime; } $keaccasqgkaqawwm = time(); $kwkmegesqkqwyska = strtotime(ManipulateArray::unset($igqsaukqcqscimok, Component::CREATED_AT)); $immmocykksywgkqu = round(($keaccasqgkaqawwm - $kwkmegesqkqwyska) / DAY_IN_SECONDS); if (!($immmocykksywgkqu > 0)) { goto qmiwsequckckoaei; } $ieqwogkgyywicygk += $gyycewisqacsckaw * $immmocykksywgkqu; qmiwsequckckoaei: goeoymmqqqeeoime: ickcmqoiosquugwe: return ManipulateArray::set($igqsaukqcqscimok, [Component::mawokyacsmmqmsoo => $ieqwogkgyywicygk]); } public function wwawisckiqeueoua(WP_REST_Request $aqmwamyiwgeeymqa, $aqykuigiuwmmcieu = self::ckmqoekmugkggeym) { $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::igswcauwsgmeougs); $ksaameoqigiaoigg = $swgwkyqkakceqeia->aqiwcawmimkygoau($esuksqieigiqcaie, $iakkeikwceeomgyq); if (!($aqykuigiuwmmcieu === self::gouqcwikiiygyasc)) { goto qmeoaqmsuseueqiy; } $ksaameoqigiaoigg = $swgwkyqkakceqeia->keeuqgyooycqoygw($ksaameoqigiaoigg); qmeoaqmsuseueqiy: return $ksaameoqigiaoigg; } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { $yywgiquyoymymqwk = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x69\x70\163"); $cuakwceieagskoaa = false; $mokawwccycoiqeka = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa); if (!($mokawwccycoiqeka && !is_wp_error($mokawwccycoiqeka))) { goto qcessicwuikwqsis; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $qoowakyqgwcscuss = $swgwkyqkakceqeia->qogaqkcsogcqiaic($mokawwccycoiqeka, $swgwkyqkakceqeia::aemeeukyaaokioui, $swgwkyqkakceqeia::NOT_SPECIFIED); if ($qoowakyqgwcscuss == $swgwkyqkakceqeia::wyeieyscswyiskcw) { goto kooskuwkuayiuose; } if (!($qoowakyqgwcscuss == $swgwkyqkakceqeia::NOT_SPECIFIED)) { goto twkmiuomimomscew; } $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $qoowakyqgwcscuss = $swgwkyqkakceqeia::qyywsyikosmsacgu; if (in_array(strtolower(pathinfo($iakkeikwceeomgyq, PATHINFO_EXTENSION)), ["\151\162"])) { goto igymseewwyiocoug; } if (!($yywgiquyoymymqwk && is_array($yywgiquyoymymqwk))) { goto sukskmcwsoysiuqu; } $seswwgkqsacoswcc = IPDetector::symcgieuakksimmu(); foreach ($yywgiquyoymymqwk as $kucumcusyyckayas) { if (!($kucumcusyyckayas && in_array(strtolower($seswwgkqsacoswcc->mcyaoicyesuysggi($kucumcusyyckayas)), ["\151\162"]))) { goto cgewcsueoyaeikgm; } $cuakwceieagskoaa = true; goto ygkcacsyyckescqs; cgewcsueoyaeikgm: cuoqqgaygogsmmic: } ygkcacsyyckescqs: sukskmcwsoysiuqu: goto mqccmesakuemceqi; igymseewwyiocoug: $cuakwceieagskoaa = true; mqccmesakuemceqi: if (!$cuakwceieagskoaa) { goto eyiamcekkgkiawqy; } $qoowakyqgwcscuss = $swgwkyqkakceqeia::wyeieyscswyiskcw; eyiamcekkgkiawqy: $mokawwccycoiqeka = ManipulateArray::set($mokawwccycoiqeka, [$swgwkyqkakceqeia::aemeeukyaaokioui => $qoowakyqgwcscuss]); $swgwkyqkakceqeia->gscuuyuyauokoyuo((array) $mokawwccycoiqeka, true); twkmiuomimomscew: goto qwcegcuowwgiccos; kooskuwkuayiuose: $cuakwceieagskoaa = true; qwcegcuowwgiccos: qcessicwuikwqsis: return parent::ackuaigiocsgyqwe($aqmwamyiwgeeymqa) && $cuakwceieagskoaa; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6240029f28a26             |
    |_______________________________________|
*/
 namespace Pmpr\Package\ComponentManager\REST; use Pmpr\Common\Foundation\Logger\Traits\LogTrait; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\ORM\DB\Model; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Package\ComponentManager\API\IPDetector; use Pmpr\Package\ComponentManager\Model\Component; use Pmpr\Package\ComponentManager\Model\Purchase; use Pmpr\Package\ComponentManager\Setting; use Pmpr\Package\DomainManager\Model\Domain; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { public function __construct() { $this->rest_base = self::ocwsuwyiiasigqaa; parent::__construct(); } public function register_routes() { $this->register("\x2f\x67\145\x74\x2d\160\x6c\x75\x67\151\x6e\55\164\x61\142", ["\x63\x61\154\154\x62\x61\143\x6b" => [$this, "\x61\x6d\145\151\x77\x6f\145\155\165\x6b\155\153\167\x75\157\x69"]]); $this->register("\57\147\x65\164\x2d\x69\164\145\x6d", ["\x61\162\147\x73" => ["\x6e\141\155\x65" => ["\164\171\x70\145" => "\x73\164\x72\x69\156\147", "\x64\x65\x73\x63\x72\x69\x70\164\151\157\156" => __("\x4e\141\155\145\x20\157\146\40\143\x6f\155\160\x6f\156\x65\x6e\164", PR__PKG__COMPONENT_MANAGER)]], "\143\x61\x6c\154\142\x61\143\x6b" => [$this, "\x73\x71\157\x69\x75\x79\153\143\x6f\x75\145\x69\x75\143\x67\x63"]]); $this->register("\57\x67\145\164\55\151\x74\x65\x6d\163", ["\x61\162\147\163" => [self::squoamkioomemiyi => ["\x74\171\x70\x65" => "\163\x74\162\151\x6e\147", "\x64\x65\x73\143\x72\x69\x70\164\151\157\x6e" => __("\124\171\160\145\40\x6f\x66\x20\x63\157\x6d\x70\157\156\145\x6e\164", PR__PKG__COMPONENT_MANAGER)], self::imywcsggckkcywgk => ["\164\x79\160\x65" => "\151\156\164\145\x67\x65\162"], self::yayciqueeakqwese => ["\164\171\x70\145" => "\x73\x74\x72\151\156\147"], self::kqeokggqcsesmqco => ["\164\x79\x70\x65" => "\x62\157\x6f\154\x65\141\x6e"], self::ausqeuugegoygouq => ["\x74\x79\160\145" => "\151\156\x74\x65\x67\x65\162"]], "\x63\x61\154\154\142\x61\143\153" => [$this, "\x77\x61\163\x67\x77\163\x6f\147\155\165\x71\165\x71\x65\x61\141"]]); $this->register("\x2f\x63\x68\x65\143\x6b\55\x6b\x65\171", ["\x61\162\x67\x73" => [self::ascagqcquwgmygkm => [self::squoamkioomemiyi => "\x73\164\x72\x69\156\147", self::eqkeooqcsscoggia => __("\x4c\x69\x63\145\156\x73\x65\40\153\145\171\x20\157\146\40\143\x6f\155\x70\x6f\156\x65\156\x74", PR__PKG__COMPONENT_MANAGER)], self::ocwsuwyiiasigqaa => [self::squoamkioomemiyi => "\163\x74\162\x69\x6e\147", self::eqkeooqcsscoggia => __("\116\141\155\145\x20\x6b\145\171\40\157\146\40\x63\x6f\155\x70\157\x6e\145\x6e\x74", PR__PKG__COMPONENT_MANAGER)]], "\155\x65\164\x68\x6f\x64\163" => self::qucyckeykeuuaquw, "\x63\141\x6c\x6c\142\x61\143\153" => [$this, "\x6f\x6b\x69\143\141\x61\x75\147\161\153\x6d\x79\167\x71\171\x6d"]]); } public function ameiwoemukmkwuoi(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa); if ($keccaugmemegoimu) { goto qiaqsassksqiuyae; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\116\x6f\40\144\157\x6d\x61\151\156\x20\x66\x6f\x75\x6e\144\x20\146\157\162\x20\171\157\165\x2e", PR__PKG__COMPONENT_MANAGER), 401); goto qogqewiwmwiwskgm; qiaqsassksqiuyae: $ykquycoiqesuckco = Setting::symcgieuakksimmu(); if (!($ykquycoiqesuckco && !is_wp_error($keccaugmemegoimu))) { goto cecuyayqoioasumi; } $keccaugmemegoimu = [self::qescuiwgsyuikume => $ykquycoiqesuckco->eiwcuqigayigimak($ykquycoiqesuckco::agskamgmowaiywus), self::qwumqqyuasyskkkc => $ykquycoiqesuckco->ksgygymiyeiukqoy(), self::eqkeooqcsscoggia => $ykquycoiqesuckco->eiwcuqigayigimak($ykquycoiqesuckco::uckmggyuwgmmskyc, '')]; $keccaugmemegoimu = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x70\154\x75\x67\x69\156\137\x72\x65\155\x6f\x74\145\137\x74\x61\x62\137\162\145\x73\160\157\156\x73\145"), $keccaugmemegoimu, $ykquycoiqesuckco); cecuyayqoioasumi: qogqewiwmwiwskgm: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function okicaaugqkmywqym(WP_REST_Request $aqmwamyiwgeeymqa) { $hsouuwoeemykcceu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ascagqcquwgmygkm, ''); $wksoawcgagcgoask = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::ocwsuwyiiasigqaa, ''); if ($hsouuwoeemykcceu && $wksoawcgagcgoask) { goto sciwggaeogcoesiu; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\x65\x71\x75\x69\x72\x65\40\160\x61\162\141\x6d\x65\x74\145\162\163\x20\156\x6f\164\40\x70\x61\163\163\145\x64\x2e", PR__PKG__COMPONENT_MANAGER), 400); goto eqkauqciwewmgeoi; sciwggaeogcoesiu: $keccaugmemegoimu = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa); if ($keccaugmemegoimu) { goto kuicqywysciceggs; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x4e\157\x20\x64\157\155\x61\151\x6e\x20\x66\157\x75\x6e\144\40\146\157\x72\40\171\x6f\165\56", PR__PKG__COMPONENT_MANAGER), 401); goto mkwskuycuyguqqok; kuicqywysciceggs: if (is_wp_error($keccaugmemegoimu)) { goto cuykwgmswkskqkyi; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $yakcyegsoqusmiak = Purchase::symcgieuakksimmu(); $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); if (!($swgwkyqkakceqeia && $gcswwqwyaccgyoee && $yakcyegsoqusmiak)) { goto csscmcacoikwsecs; } $akyiigeggqowmqqq = $swgwkyqkakceqeia->keeuqgyooycqoygw($keccaugmemegoimu); $gmywaegkmeaueiyo = $yakcyegsoqusmiak->oqomcmyuuakigusk([Purchase::okkqqmwseqscceye => $hsouuwoeemykcceu, Purchase::qkmqmaeuyokqgemg => $akyiigeggqowmqqq]); if ($gmywaegkmeaueiyo) { goto myoicgcuugciueis; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\x6f\162\162\171\x2c\40\131\x6f\165\x20\x6e\x6f\164\40\142\165\171\x20\164\x68\x69\163\40\143\157\155\x70\157\156\x65\x6e\164\x2e", PR__PKG__COMPONENT_MANAGER)); goto asmecuqiyyswueqe; myoicgcuugciueis: $uqigicauqkogsuuc = $swgwkyqkakceqeia->qogaqkcsogcqiaic($gmywaegkmeaueiyo, Purchase::ogqcgemayqiaucag, 0); $wmqsyyyeksgsmmya = $gcswwqwyaccgyoee->akkkoiiymmamsauc($uqigicauqkogsuuc); if ($gcswwqwyaccgyoee->qogaqkcsogcqiaic($wmqsyyyeksgsmmya, $gcswwqwyaccgyoee::NAME) == $wksoawcgagcgoask) { goto qgoiooayqmqqsiok; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\x6f\162\x72\x79\54\x20\131\x6f\x75\x20\156\157\164\40\142\165\x79\40\x74\150\x69\163\40\x63\157\155\160\x6f\x6e\x65\x6e\164\54\40\141\162\145\40\x79\157\x75\x20\x74\x72\171\x69\156\x67\x20\150\141\143\x6b\x3f", PR__PKG__COMPONENT_MANAGER)); goto qwigomakwmyiwkgo; qgoiooayqmqqsiok: $icwicymcioeyeyek = (array) $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x6c\151\143\145\x6e\x73\x65\137\143\150\x65\x63\153\137\x76\141\154\151\x64\141\164\151\x6f\156\x5f\x72\x65\163\160\157\x6e\x73\x65\137\144\x61\x74\x61"), [], $akyiigeggqowmqqq, $wmqsyyyeksgsmmya); $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\114\151\143\x65\156\163\x65\x20\x4b\145\x79\x20\x69\163\40\x76\x61\154\x69\x64\56", PR__PKG__COMPONENT_MANAGER), $icwicymcioeyeyek); qwigomakwmyiwkgo: asmecuqiyyswueqe: csscmcacoikwsecs: cuykwgmswkskqkyi: mkwskuycuyguqqok: eqkauqciwewmgeoi: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function sqoiuykcoueiucgc(WP_REST_Request $aqmwamyiwgeeymqa) { $ymqmyyeuycgmigyo = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::NAME, ''); if ($ymqmyyeuycgmigyo) { goto iomcaiwewsawiamu; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\x65\x71\x75\x69\x72\x65\x20\160\x61\x72\141\x6d\145\164\145\162\x73\40\156\157\164\40\x70\141\x73\163\x65\x64\x2e", PR__PKG__COMPONENT_MANAGER), 400); goto sqiciiuwmykocycc; iomcaiwewsawiamu: $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $wksoawcgagcgoask = $gcswwqwyaccgyoee->oqomcmyuuakigusk([self::NAME => $ymqmyyeuycgmigyo], [$gcswwqwyaccgyoee::gouqcwikiiygyasc, $gcswwqwyaccgyoee::NAME, $gcswwqwyaccgyoee::squoamkioomemiyi, $gcswwqwyaccgyoee::mkousmkiawwousws, $gcswwqwyaccgyoee::ciywsqoeiymemsys, $gcswwqwyaccgyoee::oguseymmyyoyaako, $gcswwqwyaccgyoee::auugqowqueaocgsu, $gcswwqwyaccgyoee::wucysakokksokumi, $gcswwqwyaccgyoee::ouwcgiuiymgwouec, $gcswwqwyaccgyoee::CREATED_AT, $gcswwqwyaccgyoee::yegaaaygeimasokq, $gcswwqwyaccgyoee::bsqkociucacssuum, $gcswwqwyaccgyoee::zgcmquuuyyakwqqm, $gcswwqwyaccgyoee::qscgeqoccoiyaeoi, $gcswwqwyaccgyoee::keqoqmmgsiegwskg, $gcswwqwyaccgyoee::ieagekqsqmcsqqeo, $gcswwqwyaccgyoee::caecscgwwciyemog]); if ($wksoawcgagcgoask) { goto yowsmsiyimmimemc; } $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\162\x65\161\165\145\163\x74\145\144\40\x63\157\155\160\x6f\156\145\x6e\164\x20\x77\x69\164\150\x20\x6e\x61\155\145\x20\x25\x73\x20\x6e\157\164\x20\146\157\x75\x6e\144\56", PR__PKG__COMPONENT_MANAGER), $ymqmyyeuycgmigyo), 400); goto kiqogmwcgcamwiig; yowsmsiyimmimemc: $keccaugmemegoimu = $this->ieqymewceekuicei($wksoawcgagcgoask); if (!($akyiigeggqowmqqq = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa, self::gouqcwikiiygyasc))) { goto kwagwqyusyiyoaqs; } $keccaugmemegoimu = $this->sscegwueamckwmcy($this->ygyygikyocoymgaw("\x63\x6f\x6d\x70\x6f\156\x65\156\164\137\162\x65\163\164\x5f\x67\x65\164\137\x69\x74\x65\155\137\x72\145\x73\160\x6f\156\x73\145"), $keccaugmemegoimu, $akyiigeggqowmqqq, $wksoawcgagcgoask); kwagwqyusyiyoaqs: kiqogmwcgcamwiig: sqiciiuwmykocycc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function wasgwsogmuquqeaa(WP_REST_Request $aqmwamyiwgeeymqa) { $qwcmueausqgiwigy = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::yayciqueeakqwese, ''); $uoomaookgsyciacm = []; $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); if ($gcswwqwyaccgyoee) { goto qmiwsequckckoaei; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\x6f\x72\162\171\x20\x69\x74\x27\163\40\163\x6f\x6d\145\164\150\x69\x6e\x67\40\x77\x72\157\156\147\x20\157\x6e\x20\163\x65\x72\x76\145\162\56\x20\x70\x6c\145\x61\163\145\x20\143\x6f\156\164\x61\x63\x74\40\x75\163\x2e", PR__PKG__COMPONENT_MANAGER)); goto goeoymmqqqeeoime; qmiwsequckckoaei: if (!$qwcmueausqgiwigy) { goto eequksumcoogyoem; } $uiewakwqscemywuo = [self::ciyoccqkiamemcmm => "\x25{$qwcmueausqgiwigy}\45", self::cwsguekoagqkaesm => self::ieiyckasqmcyekim, self::eugyciakiowwcuwm => self::augocsiaqqukkuui]; $uoomaookgsyciacm = [$gcswwqwyaccgyoee::NAME => $uiewakwqscemywuo, $gcswwqwyaccgyoee::wucysakokksokumi => $uiewakwqscemywuo, $gcswwqwyaccgyoee::ouwcgiuiymgwouec => $uiewakwqscemywuo]; eequksumcoogyoem: $sqeykgyoooqysmca = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::squoamkioomemiyi, "\x70\x61\x63\153\141\x67\145"); $uoomaookgsyciacm[$gcswwqwyaccgyoee::squoamkioomemiyi] = $sqeykgyoooqysmca; $uoomaookgsyciacm[$gcswwqwyaccgyoee::ciywsqoeiymemsys] = [$gcswwqwyaccgyoee::wmmucsiyiyusmssm, $gcswwqwyaccgyoee::iuisqwiqesgyqsyg]; $uoomaookgsyciacm[] = [self::euoaaiqkqcqcgeco => self::cqcimoqckgmaacyw, self::meisqwykgaymauka => $gcswwqwyaccgyoee::ciywsqoeiymemsys, self::ciyoccqkiamemcmm => [$gcswwqwyaccgyoee::wmmucsiyiyusmssm, $gcswwqwyaccgyoee::iuisqwiqesgyqsyg]]; if ($sqeykgyoooqysmca == $gcswwqwyaccgyoee::kqeokggqcsesmqco) { goto goacqqsgaaigyuaw; } $siykeiywomwwuoiw = $gcswwqwyaccgyoee->kqewyqqqiyiouaou($uoomaookgsyciacm); goto meawswgwagoqgkye; goacqqsgaaigyuaw: if (!($gwgucoaaqcwwciqq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa))) { goto yiwiqaqmwiogawym; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); if (!$swgwkyqkakceqeia) { goto ocokwuuquaokmasc; } $mokawwccycoiqeka = $swgwkyqkakceqeia->gwkkkwyoomgsiaou($gwgucoaaqcwwciqq); if ($mokawwccycoiqeka) { goto uukumskkeggaowck; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\x6f\x72\162\x79\x20\x62\165\164\40\x69\x74\47\x73\40\163\x61\x6d\x65\163\40\x79\157\165\162\40\x64\x6f\x6d\141\x69\x6e\40\156\x6f\164\x20\x72\145\147\151\x73\x74\145\162\145\144\56\40\160\x6c\145\141\163\145\x20\162\x65\147\151\163\x74\x65\162\x20\x64\157\x6d\141\x69\x6e\40\141\x6e\x64\x20\x74\x68\145\156\40\164\x72\171\40\141\147\x61\x69\156", PR__PKG__COMPONENT_MANAGER)); goto cggowoquuiwqkyew; uukumskkeggaowck: $siykeiywomwwuoiw = $swgwkyqkakceqeia->mgacegaoeamymmya($swgwkyqkakceqeia::ogqcgemayqiaucag, $mokawwccycoiqeka); cggowoquuiwqkyew: ocokwuuquaokmasc: yiwiqaqmwiogawym: meawswgwagoqgkye: if (isset($keccaugmemegoimu)) { goto qgegkeomwscwwiuw; } if (isset($siykeiywomwwuoiw) && $siykeiywomwwuoiw) { goto egasokooagakisiy; } $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\145\x72\166\151\x63\x65\40\151\x73\40\x75\156\x61\166\x61\151\x6c\141\x62\x6c\145\40\162\151\147\150\x74\40\x6e\157\167\x2e", PR__PKG__COMPONENT_MANAGER), 503); goto kecwuwwcwokuksyq; egasokooagakisiy: $ywmkwiwkosakssii = $this->ugyeicuiaamcceos($aqmwamyiwgeeymqa); $keccaugmemegoimu = $gcswwqwyaccgyoee->aeggeuqycwawueqy($siykeiywomwwuoiw, array_merge($ywmkwiwkosakssii, [self::wosqwewmqmyweqea => false])); $oammesyieqmwuwyi = $keccaugmemegoimu[self::qwumqqyuasyskkkc]; $qsqwqsymmqeoqwcu = []; foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $iueymcwwscwqkiyq = ManipulateArray::get($igqsaukqcqscimok, $gcswwqwyaccgyoee::ciywsqoeiymemsys); if (!in_array($iueymcwwscwqkiyq, [$gcswwqwyaccgyoee::wmmucsiyiyusmssm, $gcswwqwyaccgyoee::iuisqwiqesgyqsyg], true)) { goto mswsoaimesegiiic; } $qsqwqsymmqeoqwcu[$momcykaoccoymeig] = $this->ieqymewceekuicei($igqsaukqcqscimok); mswsoaimesegiiic: usqgaogkqgemuima: } wcesymwqykqoyuqk: $keccaugmemegoimu[self::qwumqqyuasyskkkc] = $qsqwqsymmqeoqwcu; kecwuwwcwokuksyq: qgegkeomwscwwiuw: goeoymmqqqeeoime: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } public function ieqymewceekuicei($igqsaukqcqscimok) { if (!$igqsaukqcqscimok instanceof Model) { goto eiawsoasmscmqswa; } $igqsaukqcqscimok = $igqsaukqcqscimok->ccekeuwwqqoiwuwy(); eiawsoasmscmqswa: $igqsaukqcqscimok = (array) $igqsaukqcqscimok; $iueymcwwscwqkiyq = ManipulateArray::unset($igqsaukqcqscimok, Component::ciywsqoeiymemsys); $igqsaukqcqscimok = ManipulateArray::set($igqsaukqcqscimok, ["\x73\x74\x61\x74\x65" => $iueymcwwscwqkiyq ?: Component::iuisqwiqesgyqsyg]); $product = ManipulateArray::unset($igqsaukqcqscimok, self::oguseymmyyoyaako); if (!$product) { goto ygkcacsyyckescqs; } $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); if (!$product) { goto qmeoaqmsuseueqiy; } if (!($iueymcwwscwqkiyq == Component::wmmucsiyiyusmssm)) { goto ickcmqoiosquugwe; } $igqsaukqcqscimok = ManipulateArray::set($igqsaukqcqscimok, ["\162\141\164\151\156\x67" => $product->get_average_rating(), "\162\141\x74\151\156\x67\137\x63\x6f\x75\156\x74" => $product->get_rating_count()]); ickcmqoiosquugwe: $igqsaukqcqscimok[self::sauwwsocmukoaayu] = $product->get_permalink(); qmeoaqmsuseueqiy: ygkcacsyyckescqs: $mcqieaigyeeyaksm = ManipulateArray::get($igqsaukqcqscimok, self::mkousmkiawwousws); if (!$mcqieaigyeeyaksm) { goto cuoqqgaygogsmmic; } $igqsaukqcqscimok[self::mkousmkiawwousws] = ManipulateAttachment::iaykyouimqoikagg($mcqieaigyeeyaksm); $igqsaukqcqscimok["\x69\x6d\141\x67\x65\137\144\x61\164\145"] = ManipulateAttachment::squyiyimquqicqke("\x59\x2d\155\x2d\x64\40\x48\x3a\x69\x3a\163", $mcqieaigyeeyaksm, false); cuoqqgaygogsmmic: $uoyamuqmwmemuiko = (int) ManipulateArray::unset($igqsaukqcqscimok, Component::ieagekqsqmcsqqeo); $gyycewisqacsckaw = (int) ManipulateArray::unset($igqsaukqcqscimok, Component::caecscgwwciyemog); $ocmwaasmoekuweaa = (int) ManipulateArray::unset($igqsaukqcqscimok, Component::keqoqmmgsiegwskg); if ($iueymcwwscwqkiyq == self::wmmucsiyiyusmssm) { goto igymseewwyiocoug; } $ieqwogkgyywicygk = 0; goto mqccmesakuemceqi; igymseewwyiocoug: $ieqwogkgyywicygk = $uoyamuqmwmemuiko + $ocmwaasmoekuweaa; if (!($gyycewisqacsckaw > 0)) { goto sukskmcwsoysiuqu; } $keaccasqgkaqawwm = time(); $kwkmegesqkqwyska = strtotime(ManipulateArray::unset($igqsaukqcqscimok, Model::CREATED_AT)); $immmocykksywgkqu = round(($keaccasqgkaqawwm - $kwkmegesqkqwyska) / DAY_IN_SECONDS); if (!($immmocykksywgkqu > 0)) { goto cgewcsueoyaeikgm; } $ieqwogkgyywicygk += $gyycewisqacsckaw * $immmocykksywgkqu; cgewcsueoyaeikgm: sukskmcwsoysiuqu: mqccmesakuemceqi: return ManipulateArray::set($igqsaukqcqscimok, [Component::mawokyacsmmqmsoo => $ieqwogkgyywicygk]); } public function wwawisckiqeueoua(WP_REST_Request $aqmwamyiwgeeymqa, $aqykuigiuwmmcieu = self::ckmqoekmugkggeym) { $ksaameoqigiaoigg = false; $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); if (!$swgwkyqkakceqeia) { goto twkmiuomimomscew; } $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::igswcauwsgmeougs); $ksaameoqigiaoigg = $swgwkyqkakceqeia->aqiwcawmimkygoau($esuksqieigiqcaie, $iakkeikwceeomgyq); if (!($aqykuigiuwmmcieu === self::gouqcwikiiygyasc)) { goto eyiamcekkgkiawqy; } $ksaameoqigiaoigg = $swgwkyqkakceqeia->keeuqgyooycqoygw($ksaameoqigiaoigg); eyiamcekkgkiawqy: twkmiuomimomscew: return $ksaameoqigiaoigg; } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { $yywgiquyoymymqwk = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\x69\160\163"); $cuakwceieagskoaa = false; $mokawwccycoiqeka = $this->wwawisckiqeueoua($aqmwamyiwgeeymqa); if (!($mokawwccycoiqeka && !is_wp_error($mokawwccycoiqeka))) { goto wwkgkaecgiwggcck; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); if (!$swgwkyqkakceqeia) { goto kciouyuaqkyqomam; } $qoowakyqgwcscuss = $swgwkyqkakceqeia->qogaqkcsogcqiaic($mokawwccycoiqeka, $swgwkyqkakceqeia::aemeeukyaaokioui, $swgwkyqkakceqeia::NOT_SPECIFIED); if ($qoowakyqgwcscuss == $swgwkyqkakceqeia::wyeieyscswyiskcw) { goto sycygoiaiqqageym; } if (!($qoowakyqgwcscuss == $swgwkyqkakceqeia::NOT_SPECIFIED)) { goto oouoqimaaqcmccay; } $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); $qoowakyqgwcscuss = $swgwkyqkakceqeia::qyywsyikosmsacgu; if (strtolower(pathinfo($iakkeikwceeomgyq, PATHINFO_EXTENSION)) === "\151\x72") { goto coywmiyqgsweuiic; } if (!($yywgiquyoymymqwk && is_array($yywgiquyoymymqwk))) { goto ieumumsgyguceusy; } $seswwgkqsacoswcc = IPDetector::symcgieuakksimmu(); if (!$seswwgkqsacoswcc) { goto yssscwioiyygssec; } foreach ($yywgiquyoymymqwk as $kucumcusyyckayas) { if (!($kucumcusyyckayas && strtolower($seswwgkqsacoswcc->mcyaoicyesuysggi($kucumcusyyckayas)) === "\151\x72")) { goto qcessicwuikwqsis; } $cuakwceieagskoaa = true; goto kooskuwkuayiuose; qcessicwuikwqsis: qwcegcuowwgiccos: } kooskuwkuayiuose: yssscwioiyygssec: ieumumsgyguceusy: goto siqagquguiemuoku; coywmiyqgsweuiic: $cuakwceieagskoaa = true; siqagquguiemuoku: if (!$cuakwceieagskoaa) { goto ycakugokkqkuqyiu; } $qoowakyqgwcscuss = $swgwkyqkakceqeia::wyeieyscswyiskcw; ycakugokkqkuqyiu: $mokawwccycoiqeka = ManipulateArray::set($mokawwccycoiqeka, [$swgwkyqkakceqeia::aemeeukyaaokioui => $qoowakyqgwcscuss]); $swgwkyqkakceqeia->gscuuyuyauokoyuo((array) $mokawwccycoiqeka, true); oouoqimaaqcmccay: goto gygawoqywkukmqee; sycygoiaiqqageym: $cuakwceieagskoaa = true; gygawoqywkukmqee: kciouyuaqkyqomam: wwkgkaecgiwggcck: return parent::ackuaigiocsgyqwe($aqmwamyiwgeeymqa) && $cuakwceieagskoaa; } }

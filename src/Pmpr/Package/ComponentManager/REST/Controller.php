<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             614b939f4fdad             |
    |_______________________________________|
*/
 namespace Pmpr\Package\ComponentManager\REST; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\REST\RESTController; use Pmpr\Package\ComponentManager\Model\Component; use Pmpr\Package\ComponentManager\Model\Purchase; use Pmpr\Package\DomainManager\Model\Domain; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Controller extends RESTController { const COMPONENT = "\143\x6f\x6d\x70\x6f\156\x65\x6e\164"; const LICENSE_KEY = "\154\151\x63\x65\156\x73\145\x5f\153\145\171"; public function __construct() { $this->rest_base = "\x63\x6f\155\x70\157\x6e\x65\156\x74"; parent::__construct(); } public function register_routes() { goto mugeiwyysiemwaym; cquikgykuscqmigw: $this->register("\x2f\143\150\x65\x63\153\55\154\x69\x63\x65\156\163\x65\55\x6b\x65\171", ["\141\x72\147\x73" => [self::LICENSE_KEY => [self::TYPE => "\163\164\x72\x69\156\x67", self::DESCRIPTION => __("\114\151\x63\x65\156\163\145\40\x6b\145\x79\40\157\x66\x20\x63\x6f\155\160\157\x6e\145\156\164", PR__PKG__COMPONENT_MANAGER)], self::COMPONENT => [self::TYPE => "\x73\164\162\151\x6e\147", self::DESCRIPTION => __("\x4e\x61\x6d\145\x20\153\x65\x79\x20\157\146\40\143\x6f\x6d\x70\157\x6e\145\x6e\164", PR__PKG__COMPONENT_MANAGER)]], "\155\145\164\x68\157\x64\x73" => self::CREATABLE, "\143\141\x6c\x6c\x62\141\143\153" => [$this, "\157\x6b\151\x63\x61\x61\165\147\x71\x6b\155\x79\x77\x71\x79\x6d"], "\160\x65\162\155\151\163\163\151\x6f\156\x5f\143\x61\154\154\142\x61\x63\153" => [$this, "\141\143\x6b\165\x61\151\147\x69\x6f\143\x73\x67\x79\x71\167\x65"]]); goto cyymeyomuakqakwo; mugeiwyysiemwaym: $this->register("\x2f\147\x65\164\x2d\x69\x74\x65\155", ["\x61\x72\147\163" => ["\156\141\155\x65" => ["\164\171\160\x65" => "\163\164\162\151\156\147", "\144\x65\x73\143\162\x69\160\164\151\x6f\156" => __("\x4e\x61\x6d\x65\x20\x6f\x66\40\143\157\155\x70\157\x6e\x65\x6e\164", PR__PKG__COMPONENT_MANAGER)]], "\155\x65\x74\x68\x6f\144\x73" => self::READABLE, "\143\141\x6c\154\x62\x61\x63\x6b" => [$this, "\163\161\157\151\x75\x79\x6b\x63\157\x75\x65\x69\165\143\147\x63"], "\x70\145\x72\x6d\151\163\x73\151\x6f\156\x5f\143\141\154\x6c\142\x61\x63\153" => [$this, "\x61\x63\x6b\165\x61\x69\x67\151\157\143\x73\147\171\x71\167\x65"]]); goto euymeegkukskiowq; euymeegkukskiowq: $this->register("\57\x67\145\x74\x2d\151\164\x65\x6d\163", ["\141\162\x67\x73" => [self::TYPE => ["\x74\171\x70\x65" => "\x73\x74\x72\151\x6e\x67", "\x64\145\163\143\162\151\x70\164\151\157\x6e" => __("\x54\x79\160\145\40\x6f\146\40\143\157\155\160\x6f\156\145\x6e\164", PR__PKG__COMPONENT_MANAGER)], self::PAGE => ["\x74\x79\x70\145" => "\x69\156\x74\145\x67\x65\x72"], self::SEARCH => ["\x74\171\160\x65" => "\163\164\162\151\x6e\x67"], self::CUSTOM => ["\164\171\x70\145" => "\x62\x6f\157\154\x65\141\x6e"], self::PER_PAGE => ["\164\171\160\x65" => "\151\x6e\x74\x65\147\145\x72"]], "\155\x65\164\150\157\x64\x73" => self::READABLE, "\x63\x61\x6c\154\142\141\143\x6b" => [$this, "\x77\x61\163\x67\x77\163\x6f\147\x6d\165\x71\165\161\x65\141\141"], "\160\145\x72\x6d\x69\163\163\151\x6f\156\137\x63\x61\154\x6c\x62\141\143\153" => [$this, "\141\x63\153\x75\x61\x69\x67\x69\157\143\x73\x67\x79\161\167\x65"]]); goto cquikgykuscqmigw; cyymeyomuakqakwo: } public function okicaaugqkmywqym(WP_REST_Request $aqmwamyiwgeeymqa) { goto simkiasocoimioew; ksoawacwkgasqgmk: auaywaskqooasiuq: goto yqeqouqemksasmqc; wqieuwguumokgyqg: if ($keccaugmemegoimu) { goto wgeueumgacuuuama; } goto aueiggyawkmkamum; aiwygewkmigcwusw: $keccaugmemegoimu = $this->qasywwyamoesisyi(__("\114\x69\143\x65\156\163\145\40\113\145\x79\x20\151\x73\x20\166\x61\x6c\x69\x64\56", PR__PKG__COMPONENT_MANAGER), []); goto ekmogkwmcqsykgsq; wkqwywgikoyqkyeg: $keccaugmemegoimu = $swgwkyqkakceqeia->ogkgcwiskmoiweki($esuksqieigiqcaie, $iakkeikwceeomgyq); goto wqieuwguumokgyqg; eqemoayymokeqaqi: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\123\157\x72\162\x79\54\40\131\157\165\40\156\157\x74\40\x62\165\171\40\164\150\x69\x73\x20\143\x6f\x6d\160\x6f\156\x65\x6e\164\56", PR__PKG__COMPONENT_MANAGER)); goto keewmqmgqegumiwa; kmiqskugkmaiugae: if ($hsouuwoeemykcceu && $wksoawcgagcgoask) { goto qgyaeoqgekocwkmw; } goto cqemkecywkkwaaii; ieoiygycmseqmmgc: $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); goto gkuwmiusoqwesqoo; ekmogkwmcqsykgsq: gkwoqoeaecgkymeu: goto ksoawacwkgasqgmk; wcioaoeiiawwqqqq: goto sieykcqauaygcais; goto qaikeckkiwasykwk; kumuckkicykgwqqm: goto sguyyaygwyikaggk; uogkcsaewswoaosw: $akyiigeggqowmqqq = $swgwkyqkakceqeia->keeuqgyooycqoygw($keccaugmemegoimu); goto miqmoasmioksggkm; giuswooyckooaoms: if (is_wp_error($keccaugmemegoimu)) { goto ewoqyogcaksucksk; } goto uogkcsaewswoaosw; ysggiwiksocomkek: $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\141\160\151\x5f\153\145\x79"); goto wkqwywgikoyqkyeg; qaikeckkiwasykwk: qgyaeoqgekocwkmw: goto ieoiygycmseqmmgc; emioyucskiowqumg: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); goto jkaemsuwyyoamwim; miqmoasmioksggkm: $gmywaegkmeaueiyo = Purchase::symcgieuakksimmu()->oqomcmyuuakigusk([Purchase::LICENSE_KEY => $hsouuwoeemykcceu, Purchase::DOMAIN_ID => $akyiigeggqowmqqq]); goto cykaikwsaskgeemo; iqamwyasyoqsugeu: $uqigicauqkogsuuc = $swgwkyqkakceqeia->qogaqkcsogcqiaic($gmywaegkmeaueiyo, Purchase::COMPONENT_ID, 0); goto uiqycwuommmmuowy; gkuwmiusoqwesqoo: $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); goto wmsiqkyqsiysgcyy; yqeqouqemksasmqc: ewoqyogcaksucksk: goto wgaqkacekoyiwggi; iuaeeeeggkikuiig: $wksoawcgagcgoask = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::COMPONENT, ''); goto kmiqskugkmaiugae; wgaqkacekoyiwggi: yukacyeckkwagusw: goto cscskwugoamcmqyu; moqcomgmwiamuomq: if ($gcswwqwyaccgyoee->qogaqkcsogcqiaic($wmqsyyyeksgsmmya, $gcswwqwyaccgyoee::NAME == $wksoawcgagcgoask)) { goto uwscegkmmumymoaq; } goto omgkuuyoiugcymmy; simkiasocoimioew: $hsouuwoeemykcceu = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::LICENSE_KEY, ''); goto iuaeeeeggkikuiig; qswqmgiwiyyqwioa: goto yukacyeckkwagusw; goto omekuqkuugyocmoc; omekuqkuugyocmoc: wgeueumgacuuuama: goto giuswooyckooaoms; wmsiqkyqsiysgcyy: $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); goto ysggiwiksocomkek; cscskwugoamcmqyu: sieykcqauaygcais: goto emioyucskiowqumg; keewmqmgqegumiwa: goto auaywaskqooasiuq; goto oqsecqsucukywaee; cqemkecywkkwaaii: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x52\145\x71\165\151\162\x65\x20\x70\141\x72\x61\x6d\x65\x74\x65\162\x73\x20\156\x6f\164\x20\160\x61\x73\x73\145\144\56", PR__PKG__COMPONENT_MANAGER), 400); goto wcioaoeiiawwqqqq; cykaikwsaskgeemo: if ($gmywaegkmeaueiyo) { goto ouaoyqugwsagkqaa; } goto eqemoayymokeqaqi; ayyyeiyaosoacoqm: uwscegkmmumymoaq: goto aiwygewkmigcwusw; uiqycwuommmmuowy: $wmqsyyyeksgsmmya = $gcswwqwyaccgyoee->akkkoiiymmamsauc($uqigicauqkogsuuc); goto moqcomgmwiamuomq; sguyyaygwyikaggk: goto gkwoqoeaecgkymeu; goto ayyyeiyaosoacoqm; aueiggyawkmkamum: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\116\x6f\40\144\157\x6d\x61\x69\x6e\40\x66\x6f\x75\156\144\40\x66\x6f\x72\40\171\x6f\165\56", PR__PKG__COMPONENT_MANAGER), 401); goto qswqmgiwiyyqwioa; oqsecqsucukywaee: ouaoyqugwsagkqaa: goto iqamwyasyoqsugeu; omgkuuyoiugcymmy: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\157\x72\162\x79\54\x20\x59\157\165\40\156\x6f\164\x20\142\x75\x79\40\164\x68\151\x73\x20\x63\x6f\x6d\x70\x6f\156\145\x6e\x74\54\40\141\162\x65\x20\x79\157\165\x20\x74\162\171\x69\x6e\x67\x20\150\x61\143\x6b\77", PR__PKG__COMPONENT_MANAGER)); goto kumuckkicykgwqqm; jkaemsuwyyoamwim: } public function sqoiuykcoueiucgc(WP_REST_Request $aqmwamyiwgeeymqa) { goto qiqegseqwywcmwoe; kiewcwsykccgocuc: yoauoocuckogmsuw: goto eysuawiooiswaseq; qiqegseqwywcmwoe: $ymqmyyeuycgmigyo = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::NAME, ''); goto yosyyiksyyscacus; kwcscewawgicomok: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\122\x65\161\165\x69\162\145\40\x70\141\x72\141\x6d\145\x74\145\162\163\x20\156\157\164\40\x70\x61\163\x73\145\x64\56", PR__PKG__COMPONENT_MANAGER), 400); goto kikkkocywiyuyuqw; akoweomooyuwamow: if ($wksoawcgagcgoask) { goto suwsiaeoumiwkiqg; } goto oaociaioauummsey; eysuawiooiswaseq: koiyaaokigmamqyc: goto iecqkqoiqimmisyw; kikkkocywiyuyuqw: goto koiyaaokigmamqyc; goto aqeyqwuywqcmuoce; iecqkqoiqimmisyw: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); goto eogomkswkaqwyycm; gcecamucuogcciig: suwsiaeoumiwkiqg: goto suscosoukqeyyqgs; suscosoukqeyyqgs: $keccaugmemegoimu = $this->ieqymewceekuicei($wksoawcgagcgoask); goto kiewcwsykccgocuc; aymoguycgmuggcik: $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); goto qayiqaykkywcyisq; oaociaioauummsey: $keccaugmemegoimu = $this->oemauiimmycumcsk(sprintf(__("\162\x65\x71\x75\x65\163\164\x65\144\x20\143\x6f\155\160\x6f\x6e\x65\x6e\x74\40\167\151\164\x68\x20\x6e\141\155\145\x20\x25\x73\40\x6e\157\x74\40\146\157\165\156\x64\56", PR__PKG__COMPONENT_MANAGER), $ymqmyyeuycgmigyo), 400); goto cueuscqkicwwicei; cueuscqkicwwicei: goto yoauoocuckogmsuw; goto gcecamucuogcciig; qayiqaykkywcyisq: $wksoawcgagcgoask = $gcswwqwyaccgyoee->oqomcmyuuakigusk([self::NAME => $ymqmyyeuycgmigyo], [$gcswwqwyaccgyoee::NAME, $gcswwqwyaccgyoee::TYPE, $gcswwqwyaccgyoee::IMAGE, $gcswwqwyaccgyoee::PRODUCT, $gcswwqwyaccgyoee::FA_TITLE, $gcswwqwyaccgyoee::EN_TITLE, $gcswwqwyaccgyoee::UPDATED_AT, $gcswwqwyaccgyoee::ACTIVE_INSTALL, $gcswwqwyaccgyoee::FA_DESCRIPTION, $gcswwqwyaccgyoee::EN_DESCRIPTION]); goto akoweomooyuwamow; yosyyiksyyscacus: if ($ymqmyyeuycgmigyo) { goto amyaoueckysgmmas; } goto kwcscewawgicomok; aqeyqwuywqcmuoce: amyaoueckysgmmas: goto aymoguycgmuggcik; eogomkswkaqwyycm: } public function wasgwsogmuquqeaa(WP_REST_Request $aqmwamyiwgeeymqa) { goto msiuqseowuumiwuo; owiguescmqyqukui: egiauwuekseyeaeq: goto guummoewucyeuiek; qoaawmmcqyacokws: assoyoeukmqiucyq: goto uwyeycaywowwiquu; sqiyuasgusgawuoi: $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); goto iayguaeseyaemwkk; ciiyqsiswkcwsocm: $siykeiywomwwuoiw = $gcswwqwyaccgyoee->kqewyqqqiyiouaou($uoomaookgsyciacm); goto ugyawwukegyoqmsq; gqycmyieayoegcsy: $uoomaookgsyciacm = []; goto sqiyuasgusgawuoi; kwowggaooiyqawyq: goto ieoeeyieoskuyiyw; cwmuqmoeauqcewoy: esokkakkumskkmiu: goto eiecgqokmuekaesc; guummoewucyeuiek: $uoomaookgsyciacm[$gcswwqwyaccgyoee::TYPE] = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::TYPE, "\x70\x61\143\x6b\x61\x67\x65"); goto mqacqosyicuiqwia; iayguaeseyaemwkk: if (!$qwcmueausqgiwigy) { goto egiauwuekseyeaeq; } goto akyiiioycmgqyuok; ukigmkeewuqomooc: goto esokkakkumskkmiu; goto wwgikwuigiiqsswq; ykcmomsiayaymysm: foreach ($oammesyieqmwuwyi as $momcykaoccoymeig => $igqsaukqcqscimok) { $oammesyieqmwuwyi[$momcykaoccoymeig] = $this->ieqymewceekuicei($igqsaukqcqscimok); kikkkoqiumqoeiyy: } goto qoaawmmcqyacokws; akyiiioycmgqyuok: $uiewakwqscemywuo = ["\142\x6f\x6f\154\x65\141\x6e" => "\x6f\x72", "\157\160\145\162\x61\164\157\x72" => "\154\151\153\x65", self::VALUE => "\45{$qwcmueausqgiwigy}\45"]; goto ycomeuqeessamows; wwgikwuigiiqsswq: wyqueeskecameuks: goto seyygcwcaogkmaqe; mcuoyseuwoueyaie: $uoomaookgsyciacm[$gcswwqwyaccgyoee::TYPE] = "\143\x75\x73\x74\157\x6d"; goto kwowggaooiyqawyq; ycomeuqeessamows: $uoomaookgsyciacm = [$gcswwqwyaccgyoee::NAME => $uiewakwqscemywuo, $gcswwqwyaccgyoee::FA_TITLE => $uiewakwqscemywuo, $gcswwqwyaccgyoee::EN_TITLE => $uiewakwqscemywuo]; goto owiguescmqyqukui; eiecgqokmuekaesc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); goto ggsugekocmsukuci; msiuqseowuumiwuo: $qwcmueausqgiwigy = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::SEARCH, ''); goto gqycmyieayoegcsy; uugiuqkesegaamqw: $oammesyieqmwuwyi = $keccaugmemegoimu[self::ITEMS]; goto ykcmomsiayaymysm; ieoeeyieoskuyiyw: euuekiyqwkowiees: goto ciiyqsiswkcwsocm; seyygcwcaogkmaqe: $keccaugmemegoimu = $gcswwqwyaccgyoee->aeggeuqycwawueqy($siykeiywomwwuoiw, ["\x66\151\154\x74\145\x72\137\166\x61\x6c\165\x65" => false, self::PAGE => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::PAGE, 1), self::PER_PAGE => $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::PER_PAGE, 10)]); goto uugiuqkesegaamqw; mqacqosyicuiqwia: if (!$this->aemeowyaecqmymas($aqmwamyiwgeeymqa, self::CUSTOM, false)) { goto euuekiyqwkowiees; } goto mcuoyseuwoueyaie; uwyeycaywowwiquu: $keccaugmemegoimu[self::ITEMS] = $oammesyieqmwuwyi; goto cwmuqmoeauqcewoy; ugyawwukegyoqmsq: if ($siykeiywomwwuoiw) { goto wyqueeskecameuks; } goto soqkewsayowwcmco; soqkewsayowwcmco: $keccaugmemegoimu = $this->oemauiimmycumcsk(__("\x53\x65\x72\166\x69\x63\145\40\151\163\x20\x75\156\141\166\141\151\x6c\x61\x62\154\x65\x20\x72\x69\x67\x68\x74\x20\x6e\157\167\56", PR__PKG__COMPONENT_MANAGER), 503); goto ukigmkeewuqomooc; ggsugekocmsukuci: } public function ieqymewceekuicei($igqsaukqcqscimok) { goto wicuauokauykwoeu; msmmiaumiasmsiog: if (!$product) { goto kcwgiwimgqesukqu; } goto oksqsucimimsswcg; wicuauokauykwoeu: $igqsaukqcqscimok = (array) $igqsaukqcqscimok; goto gcecieuocqawmgci; ikukqooiowqywyqo: $igqsaukqcqscimok = ManipulateArray::set($igqsaukqcqscimok, $uwomkgseoiegeume); goto cciakcwuweqmcose; gcecieuocqawmgci: $product = ManipulateArray::unset($igqsaukqcqscimok, self::PRODUCT); goto msmmiaumiasmsiog; oksqsucimimsswcg: $product = ManipulateWoocommerce::aqasygcsqysmmyke($product); goto gqeoaceyoiicoaec; kkckyqmcyussauma: $uwomkgseoiegeume = ["\x72\x61\164\x69\156\x67" => $product->get_average_rating(), "\160\x65\x72\x6d\141\x6c\151\156\x6b" => $product->get_permalink(), "\162\x61\164\x69\156\147\137\x63\157\x75\x6e\x74" => $product->get_rating_count()]; goto ikukqooiowqywyqo; cciakcwuweqmcose: ceosmkqgqgwsowwg: goto uckusgwkoycmkeam; uckusgwkoycmkeam: kcwgiwimgqesukqu: goto gscyiqmmegqmqcoe; gqeoaceyoiicoaec: if (!$product) { goto ceosmkqgqgwsowwg; } goto kkckyqmcyussauma; gscyiqmmegqmqcoe: return $igqsaukqcqscimok; goto mieoguuqiwqioeqa; mieoguuqiwqioeqa: } public function ackuaigiocsgyqwe(WP_REST_Request $aqmwamyiwgeeymqa) : bool { goto qosswumywsaeyqus; maguoggkqamaiuag: $gioggcykgoikcwiy = Domain::symcgieuakksimmu()->mwiwqcqqeoiygwia($esuksqieigiqcaie, $iakkeikwceeomgyq); goto icoiqskygugkgmkm; swicauyqusmgeccu: $esuksqieigiqcaie = $this->aemeowyaecqmymas($aqmwamyiwgeeymqa, "\141\160\x69\x5f\x6b\145\171"); goto maguoggkqamaiuag; qosswumywsaeyqus: $iakkeikwceeomgyq = $this->ogkysoamaegikmcy($aqmwamyiwgeeymqa); goto swicauyqusmgeccu; icoiqskygugkgmkm: return parent::ackuaigiocsgyqwe($aqmwamyiwgeeymqa) && !is_wp_error($gioggcykgoikcwiy); goto kocaieyauyiqmyiy; kocaieyauyiqmyiy: } }

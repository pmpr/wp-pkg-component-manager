<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67abce891b505             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Model; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\ORM\View\View; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\ComponentManager\Setting; use Pmpr\Module\DomainManager\Backlink\Model as Backlink; use Pmpr\Module\DomainManager\Model\Domain; class Component extends Model { const ouwcgiuiymgwouec = "\145\156\137\x74\151\164\x6c\145"; const wucysakokksokumi = "\146\x61\137\164\x69\164\x6c\x65"; const ksakwsycwcqisgiu = Constants::imiuwqeccyaimyaw . Constants::mswocgcucqoaesaa; const qkmqmaeuyokqgemg = Constants::weayyoewessosyko . Constants::mswocgcucqoaesaa; const wygegsqueakqiccy = "\x62\x61\x63\x6b\154\151\x6e\153" . Constants::mswocgcucqoaesaa; const yegaaaygeimasokq = "\154\141\x73\164\x5f\x75\x70\x64\x61\164\x65"; const bsqkociucacssuum = "\x70\x75\x62\154\x69\x73\x68\x5f\x64\x75\x65"; const iamomwwcwayiowye = "\162\145\x71\165\151\x72\x65\x6d\x65\156\164"; const okcgiwmueoyocegm = "\162\x65\x71\165\x69\162\x65\x6d\x65\156\x74\x73"; const wsymueygaeiiwsiw = "\142\x61\x63\153\x6c\x69\156\x6b\137\155\157\144\x61\x6c"; const qscgeqoccoiyaeoi = "\x65\156\x5f\x64\145\x73\143\x72\151\x70\164\x69\x6f\156"; const zgcmquuuyyakwqqm = "\146\141\x5f\x64\145\x73\143\162\x69\160\164\151\x6f\x6e"; const mkamewwosmwuwwqe = "\144\157\167\x6e\x6c\157\141\144\x5f"; const ieagekqsqmcsqqeo = self::mkamewwosmwuwwqe . "\x73\164\x61\x72\x74\x5f\x63\157\x75\x6e\x74"; const caecscgwwciyemog = self::mkamewwosmwuwwqe . "\144\141\x69\154\x79\x5f\x63\x6f\165\156\x74"; const keqoqmmgsiegwskg = self::mkamewwosmwuwwqe . "\x72\145\x61\154\137\143\x6f\x75\156\x74"; const mawokyacsmmqmsoo = "\141\143\164\x69\166\x65\x5f\x69\156\163\x74\141\x6c\x6c"; const iuisqwiqesgyqsyg = "\143\x6f\155\x69\156\x67\x5f\163\x6f\x6f\156"; public function register() { $this->muuwuqssqkaieqge(__("\x43\157\155\160\x6f\156\x65\x6e\164\163", PR__MDL__COMPONENT_MANAGER))->guiaswksukmgageq(__("\x43\157\x6d\x70\157\x6e\x65\x6e\x74", PR__MDL__COMPONENT_MANAGER))->saemoowcasogykak(IconInterface::oweoqccsyyusoqei)->igiywquyccyiaucw(Constants::kaeeyemckaaeykuy, self::wucysakokksokumi)->uaywwyimkgwyqwya([Constants::yiuwgggacagyeqmo => 5]); $this->ecmiqywsauuoccwo(Constants::ukwaycqmyyuekwqg)->ecmiqywsauuoccwo(Constants::ieioeisgwcgysukw)->ecmiqywsauuoccwo(Constants::awysmmukegasimmq)->ecmiqywsauuoccwo(Constants::weiosaewqequuyuq); $this->swsaakqseuaacagq(Constants::xgimwmogukqqcuky, [$this, "\x79\167\147\x71\x67\x61\157\x6d\157\x65\153\145\145\167\x79\147"]); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(Constants::NAME)->eccqsggkcosmqumc()->mscsweokoguamsgc(Constants::ieioeisgwcgysukw)->gswweykyogmsyawy(__("\103\157\x6d\x70\157\x6e\x65\x6e\x74\x20\x4e\141\x6d\145", PR__MDL__COMPONENT_MANAGER)))->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(self::wucysakokksokumi)->gswweykyogmsyawy(__("\120\145\162\163\x69\141\x6e\x20\124\x69\164\x6c\145", PR__MDL__COMPONENT_MANAGER))->iwwmociiuayuwssq([$this, "\x79\x75\x63\x63\151\x73\x79\x67\167\x6d\x6f\147\163\161\151\x61"]))->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(self::ouwcgiuiymgwouec)->gswweykyogmsyawy(__("\105\x6e\147\154\151\x73\x68\x20\124\151\164\154\x65", PR__MDL__COMPONENT_MANAGER))->mscsweokoguamsgc(Constants::ieioeisgwcgysukw)->iwwmociiuayuwssq([$this, "\171\165\x63\x63\x69\x73\171\147\x77\x6d\x6f\147\x73\161\x69\x61"]))->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::squoamkioomemiyi)->gswweykyogmsyawy(__("\124\171\x70\x65", PR__MDL__COMPONENT_MANAGER))->qassieeyqwaysucq()->kesomeowemmyygey(1, Constants::aqikuweekkucgqoy, __("\x4d\157\144\x75\154\145", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(2, Constants::ykywsqyeckcgqyik, __("\103\x6f\x76\x65\162", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(3, Constants::kqeokggqcsesmqco, __("\103\x75\163\164\x6f\x6d", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(4, Constants::cwacquagagwkcisc, __("\103\157\x6d\155\x6f\156", PR__MDL__COMPONENT_MANAGER)))->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::ciywsqoeiymemsys)->gswweykyogmsyawy(__("\x53\x74\x61\x74\165\x73", PR__MDL__COMPONENT_MANAGER))->qassieeyqwaysucq()->kesomeowemmyygey(1, self::iuisqwiqesgyqsyg, __("\103\157\155\151\x6e\147\40\x53\157\x6f\156", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(2, Constants::wmmucsiyiyusmssm, __("\120\165\142\x6c\x69\x73\150", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(3, Constants::yokmsocosssowgke, __("\x52\145\x76\151\145\167", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(4, Constants::ywskismomwmcsqam, __("\104\x72\141\146\x74", PR__MDL__COMPONENT_MANAGER)))->cquokmemekqqywgi($eqwoegegiamegqsm->qoemykoeuecmsmwe(self::ieagekqsqmcsqqeo)->mscsweokoguamsgc(Constants::ieioeisgwcgysukw)->eyygsasuqmommkua(0)->gswweykyogmsyawy(__("\123\x74\x61\x72\x74\40\x43\x6f\165\156\164", PR__MDL__COMPONENT_MANAGER)))->cquokmemekqqywgi($eqwoegegiamegqsm->qoemykoeuecmsmwe(Constants::iuqumwggccmcuyem)->gswweykyogmsyawy(__("\120\162\x69\157\x72\151\x74\171", PR__MDL__COMPONENT_MANAGER))->eyygsasuqmommkua(1)->mscsweokoguamsgc(Constants::ieioeisgwcgysukw))->cquokmemekqqywgi($eqwoegegiamegqsm->qoemykoeuecmsmwe(self::caecscgwwciyemog)->gswweykyogmsyawy(__("\x44\x61\151\154\171\40\x43\157\165\x6e\x74", PR__MDL__COMPONENT_MANAGER))->eyygsasuqmommkua(0)->mscsweokoguamsgc(Constants::ieioeisgwcgysukw))->cquokmemekqqywgi($eqwoegegiamegqsm->qoemykoeuecmsmwe(self::keqoqmmgsiegwskg)->gswweykyogmsyawy(__("\x52\x65\141\154\x20\103\x6f\x75\x6e\x74", PR__MDL__COMPONENT_MANAGER))->eyygsasuqmommkua(0)->qcqeqimisiisswky())->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(self::bsqkociucacssuum)->gswweykyogmsyawy(__("\x50\x75\142\x6c\151\163\150\40\x44\165\x65", PR__MDL__COMPONENT_MANAGER))->mscsweokoguamsgc(Constants::ieioeisgwcgysukw))->cquokmemekqqywgi($eqwoegegiamegqsm->qoemykoeuecmsmwe(Constants::oguseymmyyoyaako)->gswweykyogmsyawy(__("\120\162\157\x64\x75\x63\x74", PR__MDL__COMPONENT_MANAGER))->qcssowoqeqysosca()->eyygsasuqmommkua(0)->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie) { if ($eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywggokoaagwwqyak($eqgoocgaqwqcimie); } return $eqgoocgaqwqcimie; }))->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(self::wsymueygaeiiwsiw)->gswweykyogmsyawy(__("\x42\x61\x63\x6b\154\x69\156\153\x20\115\x6f\x64\x61\x6c", PR__MDL__COMPONENT_MANAGER))->mscsweokoguamsgc(Constants::ieioeisgwcgysukw)->acceqyqygswoecwe(8)->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie) { if ($eqgoocgaqwqcimie) { $omkysikckkcieckq = Setting::symcgieuakksimmu()->icioieqkoswsyouk([Constants::ascagqcquwgmygkm => $eqgoocgaqwqcimie, Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym]); if ($this->qcaekwgmiswccowk(Constants::ieioeisgwcgysukw)) { $eqgoocgaqwqcimie = $omkysikckkcieckq[Constants::qescuiwgsyuikume] ?? $eqgoocgaqwqcimie; } else { $eqgoocgaqwqcimie = $omkysikckkcieckq[Constants::TEXT] ?? ''; } } return $eqgoocgaqwqcimie; }))->cquokmemekqqywgi($eqwoegegiamegqsm->ksiucgwggkwuimue(Constants::mkousmkiawwousws)->gswweykyogmsyawy(__("\x49\x6d\141\147\145", PR__MDL__COMPONENT_MANAGER))->jyumyyugiwwiqomk(0)->mscsweokoguamsgc(Constants::ieioeisgwcgysukw)->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie) { if ($eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->iaykyouimqoikagg($eqgoocgaqwqcimie); } return $eqgoocgaqwqcimie; }))->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(self::zgcmquuuyyakwqqm)->gswweykyogmsyawy(__("\120\x65\162\x73\x69\141\x6e\x20\104\x65\x73\143\x72\151\160\164\151\x6f\156", PR__MDL__COMPONENT_MANAGER))->mscsweokoguamsgc(Constants::ieioeisgwcgysukw))->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(self::qscgeqoccoiyaeoi)->gswweykyogmsyawy(__("\105\x6e\147\154\x69\x73\x68\40\x44\145\163\143\162\151\160\164\151\157\156", PR__MDL__COMPONENT_MANAGER))->mscsweokoguamsgc(Constants::ieioeisgwcgysukw))->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(Constants::ucoiewcoucauqwko)->gswweykyogmsyawy(__("\x54\x65\162\x6d\163\40\x6f\x66\x20\x55\163\x65", PR__MDL__COMPONENT_MANAGER))->mscsweokoguamsgc(Constants::ieioeisgwcgysukw))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::qkmqmaeuyokqgemg)->ckmqkgwcusyaegmm(Domain::class)->wakqsiacyacmumuw()->gswweykyogmsyawy(__("\101\x73\x73\151\x67\156\x65\x64\40\x44\x6f\155\141\x69\x6e\163", PR__MDL__COMPONENT_MANAGER)))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::wygegsqueakqiccy)->ckgquisaimmgwuyu(Backlink::class)->gswweykyogmsyawy(__("\x42\141\x63\153\154\151\x6e\153\163", PR__MDL__COMPONENT_MANAGER)))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::ksakwsycwcqisgiu)->ckgquisaimmgwuyu(Report::class)->gswweykyogmsyawy(__("\x52\145\x70\157\162\164\163", PR__MDL__COMPONENT_MANAGER)))->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(Constants::auugqowqueaocgsu)->gswweykyogmsyawy(__("\x56\145\x72\x73\x69\157\156", PR__MDL__COMPONENT_MANAGER))->acceqyqygswoecwe(8))->cquokmemekqqywgi($eqwoegegiamegqsm->qwwuoqeeiyuoyogs(self::yegaaaygeimasokq)->gswweykyogmsyawy(__("\x4c\141\x73\164\x20\x55\160\x64\141\164\145", PR__MDL__COMPONENT_MANAGER))->qcqeqimisiisswky())->cquokmemekqqywgi($eqwoegegiamegqsm->syamikqcigqukkeo(self::okcgiwmueoyocegm)->gswweykyogmsyawy(__("\122\145\x71\x75\151\x72\x65\155\x65\x6e\x74\x73", PR__MDL__COMPONENT_MANAGER))->mscsweokoguamsgc(Constants::ieioeisgwcgysukw))->cquokmemekqqywgi($eqwoegegiamegqsm->qwwuoqeeiyuoyogs(Constants::CREATED_AT)->gswweykyogmsyawy(__("\x43\162\145\141\x74\145\x64\40\x41\164", PR__MDL__COMPONENT_MANAGER))->qcqeqimisiisswky()); parent::uwmqacgewuauagai(); } public function aoqwywcqmoqaukkq() { $ykquycoiqesuckco = Setting::symcgieuakksimmu(); $qewoscueycoskooi = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Constants::miucsckaeckegceq, [], [Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]); $eaisooecemuyqgii = $ykquycoiqesuckco->giiuwsmyumqwwiyq(Setting::okcgiwmueoyocegm, [], [Constants::uissasisiuymwsmu => Constants::NAME, Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->yyoqecggyacaseko()->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::NAME)->kqqqugemmqagucuq())->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::wucysakokksokumi))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::ouwcgiuiymgwouec)->kqqqugemmqagucuq())->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(Constants::squoamkioomemiyi)->mkmssscwmeekwgqo()->qyucewwiggkyeaso([Constants::kqeokggqcsesmqco, Constants::aqikuweekkucgqoy, Constants::ykywsqyeckcgqyik], self::qkmqmaeuyokqgemg)->qyucewwiggkyeaso([Constants::aqikuweekkucgqoy, Constants::ykywsqyeckcgqyik], [Constants::oguseymmyyoyaako, self::ieagekqsqmcsqqeo, self::caecscgwwciyemog]))->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(Constants::ciywsqoeiymemsys)->mkmssscwmeekwgqo()->qyucewwiggkyeaso(self::iuisqwiqesgyqsyg, self::bsqkociucacssuum))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::ieagekqsqmcsqqeo)->escqqisecooswqgo()->eyygsasuqmommkua(0))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::caecscgwwciyemog)->escqqisecooswqgo()->eyygsasuqmommkua(0))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::bsqkociucacssuum)->iccqusgqmsqaiqow())->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::oguseymmyyoyaako)->ukqywcsoogkyoaoa(Constants::oguseymmyyoyaako))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::wsymueygaeiiwsiw)->acauweqyyugwisqc($ykquycoiqesuckco->icioieqkoswsyouk([Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs])))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::qkmqmaeuyokqgemg)->ugquamoakekwyiqg(Domain::class))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::iuqumwggccmcuyem)->escqqisecooswqgo()->eyygsasuqmommkua(0))->mkksewyosgeumwsa($uuyucgkyusckoaeq->sciaycsmsiekqueg(self::zgcmquuuyyakwqqm)->gsomueooycksswcy()->qsecygiycssgacqs(3))->mkksewyosgeumwsa($uuyucgkyusckoaeq->sciaycsmsiekqueg(self::qscgeqoccoiyaeoi)->gsomueooycksswcy()->qsecygiycssgacqs(3))->mkksewyosgeumwsa($uuyucgkyusckoaeq->sciaycsmsiekqueg(Constants::ucoiewcoucauqwko)->gsomueooycksswcy()->qsecygiycssgacqs(3))->mkksewyosgeumwsa($uuyucgkyusckoaeq->quaegkgkucwyeiqg(Constants::mkousmkiawwousws)->mkmssscwmeekwgqo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->qqmgmgasauucoago(self::okcgiwmueoyocegm)->omsoosuoikgueyke()->mkksewyosgeumwsa($uuyucgkyusckoaeq->yyuwuqsiucweeoue(Constants::squoamkioomemiyi)->mkmssscwmeekwgqo()->eumecwmqmukqgyea()->gswweykyogmsyawy(__("\124\x79\160\145", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(Constants::wksqmcukwwqwyuuc, __("\123\x65\x74\x74\x69\156\147", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(Constants::ocayisqocqoekqiq, __("\x4e\145\x77", PR__MDL__COMPONENT_MANAGER))->qyucewwiggkyeaso(Constants::wksqmcukwwqwyuuc, self::iamomwwcwayiowye)->qyucewwiggkyeaso(Constants::ocayisqocqoekqiq, [Constants::NAME, Constants::qgqyauaqwqmqseim, Constants::miucsckaeckegceq]))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::iamomwwcwayiowye)->gswweykyogmsyawy(__("\122\x65\161\x75\x69\162\145\155\145\156\x74", PR__MDL__COMPONENT_MANAGER))->acauweqyyugwisqc($eaisooecemuyqgii)->mkmssscwmeekwgqo())->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::NAME)->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\x4e\141\155\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->gosycecgwuesyysq(Constants::qgqyauaqwqmqseim)->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\111\x63\x6f\x6e", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::miucsckaeckegceq)->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\x47\165\151\144\145\163", PR__MDL__COMPONENT_MANAGER))->acauweqyyugwisqc($qewoscueycoskooi)->oikgogcweiiaocka())->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::ciyoccqkiamemcmm)->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\126\141\154\165\145", PR__MDL__COMPONENT_MANAGER)))); parent::aoqwywcqmoqaukkq(); } public function yuccisygwmogsqia($eqgoocgaqwqcimie, $mksyucucyswaukig) { return sprintf("\x25\x73\74\57\142\162\76\50\45\x73\x29", $eqgoocgaqwqcimie, $this->waecsyqmwascmqoa($mksyucucyswaukig, Constants::NAME)); } public function kosiqqekkquoseki($gwgucoaaqcwwciqq, ?string &$uamcoiueqaamsqma = null, ?string $sqeykgyoooqysmca = Constants::aqikuweekkucgqoy, bool $ogkqsyskamkuscqc = false, ?string $qwcmueausqgiwigy = null) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $gkioossaaiumqqsq = $this->iekyeyicoyyawomk(); $gqgemcmoicmgaqie = $eqwoegegiamegqsm->kyckwuuiqwmyoqma(); if ($qwcmueausqgiwigy) { $gqgemcmoicmgaqie->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->megqywqeuquawkim()->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim(Constants::NAME, "\45{$qwcmueausqgiwigy}\45")->maqiysyuqmwcqoig(Constants::augocsiaqqukkuui)->iygikqkegwkaaess())->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim(self::wucysakokksokumi, "\x25{$qwcmueausqgiwigy}\x25")->maqiysyuqmwcqoig(Constants::augocsiaqqukkuui)->iygikqkegwkaaess())->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim(self::ouwcgiuiymgwouec, "\x25{$qwcmueausqgiwigy}\x25")->maqiysyuqmwcqoig(Constants::augocsiaqqukkuui)->iygikqkegwkaaess())); } $gqgemcmoicmgaqie->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->megqywqeuquawkim(Constants::ciywsqoeiymemsys, [Constants::wmmucsiyiyusmssm, self::iuisqwiqesgyqsyg]))->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->owogyemaccuymycq(Constants::ciywsqoeiymemsys, [Constants::wmmucsiyiyusmssm, self::iuisqwiqesgyqsyg]))->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->owogyemaccuymycq(Constants::iuqumwggccmcuyem)->mcgisgoaksmyemyq()); $gqgemcmoicmgaqie->qisiksoemmiiyeyk($gkioossaaiumqqsq->suyqucmmoumouiua()); $siykeiywomwwuoiw = null; $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); if ($mokawwccycoiqeka = $swgwkyqkakceqeia->gwkkkwyoomgsiaou($gwgucoaaqcwwciqq)) { $gqgemcmoicmgaqie->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->megqywqeuquawkim(Constants::squoamkioomemiyi, $sqeykgyoooqysmca)); if (Constants::kqeokggqcsesmqco === $sqeykgyoooqysmca || $ogkqsyskamkuscqc) { $siykeiywomwwuoiw = $swgwkyqkakceqeia->iekyeyicoyyawomk()->oyqumwgacamysiga($swgwkyqkakceqeia::ogqcgemayqiaucag, $mokawwccycoiqeka); } else { [$syeseoiyagmgumcy] = $gkioossaaiumqqsq->acamgaegcsioysiw(self::qkmqmaeuyokqgemg); $gqgemcmoicmgaqie->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->owackeyiuiikegqg()->sokmmiiuyqiuoqia(self::qkmqmaeuyokqgemg)->ggmcoioqwgyccyus()->aqkyoweegqwuwsgw($syeseoiyagmgumcy)); $gqgemcmoicmgaqie->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->megqywqeuquawkim()->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim(self::qkmqmaeuyokqgemg)->wegeyaguowmkqiac()->aqkyoweegqwuwsgw($syeseoiyagmgumcy)->iygikqkegwkaaess())->pmouaioykaoceyag($eqwoegegiamegqsm->megqywqeuquawkim(self::qkmqmaeuyokqgemg, 0)->aqkyoweegqwuwsgw($syeseoiyagmgumcy)->iygikqkegwkaaess())); } $siykeiywomwwuoiw = $gkioossaaiumqqsq->kqewyqqqiyiouaou($gqgemcmoicmgaqie, $siykeiywomwwuoiw); } else { $uamcoiueqaamsqma = __("\x53\157\162\x72\x79\40\142\x75\164\40\151\x74\x27\163\x20\163\141\x6d\x65\163\40\171\x6f\165\x72\x20\x64\157\x6d\141\151\x6e\40\156\x6f\x74\x20\x72\x65\x67\151\x73\x74\x65\x72\145\144\56\x20\x70\x6c\145\141\x73\x65\40\x72\x65\147\x69\x73\x74\145\x72\40\144\157\x6d\141\151\x6e\40\x61\x6e\144\x20\x74\x68\145\156\x20\164\x72\171\x20\141\x67\x61\x69\x6e", PR__MDL__COMPONENT_MANAGER); } return $siykeiywomwwuoiw; } public function ywgqgaomoekeewyg($qqomumygoacsmsie, View $mksyucucyswaukig) { if ($qqomumygoacsmsie === Constants::weiosaewqequuyuq) { $mksyucucyswaukig->rsaiaimkmskoiysk(Constants::mqkiiimeocmcyecq, "\165\x70\x64\x61\164\145\x5f\x64\141\164\x65", function ($aokagokqyuysuksm) { return [Constants::qescuiwgsyuikume => __("\125\x70\144\x61\164\x65\40\x44\141\164\141", PR__MDL__COMPONENT_MANAGER), Constants::ysskgssgwuwmqwym => ["\x63\154\x61\x73\163" => "\x75\160\x64\141\x74\x65\55\143\157\x6d\160\x6f\156\x65\x6e\164\55\x61\143\164\151\157\x6e", "\144\141\164\x61\x2d\x69\144" => $aokagokqyuysuksm]]; }); } } public function wmcgcaaucqayoiia($wksoawcgagcgoask) { if (is_numeric($wksoawcgagcgoask)) { $wksoawcgagcgoask = $this->iekyeyicoyyawomk()->akkkoiiymmamsauc($wksoawcgagcgoask); } $acceyusyikkmawea = ''; if ($wksoawcgagcgoask) { $acceyusyikkmawea = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Constants::ucoiewcoucauqwko, ''); $acceyusyikkmawea .= $this->waecsyqmwascmqoa($wksoawcgagcgoask, Constants::ucoiewcoucauqwko, ''); } return $acceyusyikkmawea; } public function usesgqgqsgskkesi($wksoawcgagcgoask) : array { if (is_numeric($wksoawcgagcgoask)) { $wksoawcgagcgoask = $this->iekyeyicoyyawomk()->akkkoiiymmamsauc($wksoawcgagcgoask); } $qsqwqsymmqeoqwcu = []; if ($wksoawcgagcgoask) { $eaisooecemuyqgii = $this->waecsyqmwascmqoa($wksoawcgagcgoask, self::okcgiwmueoyocegm, []); if ($eaisooecemuyqgii) { $oiogciomoogcocak = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::okcgiwmueoyocegm, [], [Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym]); $geuaoiagwicygkww = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Constants::miucsckaeckegceq, [], [Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym]); foreach ($eaisooecemuyqgii as $momcykaoccoymeig => $msywmauqismcyeae) { $gmcgeogogyqsgawk = []; switch ($msywmauqismcyeae[Constants::squoamkioomemiyi] ?? false) { case Constants::wksqmcukwwqwyuuc: $aiewygoosksemiwu = $oiogciomoogcocak[$msywmauqismcyeae[self::iamomwwcwayiowye] ?? ''] ?? ''; if ($aiewygoosksemiwu) { $gmcgeogogyqsgawk = $aiewygoosksemiwu; $gmcgeogogyqsgawk[Constants::ciyoccqkiamemcmm] = !isset($msywmauqismcyeae[Constants::ciyoccqkiamemcmm]) || empty($msywmauqismcyeae[Constants::ciyoccqkiamemcmm]) ? $aiewygoosksemiwu[Constants::wikgqsqysyuoykse] : $aiewygoosksemiwu[Constants::ciyoccqkiamemcmm]; } break; case Constants::ocayisqocqoekqiq: $gmcgeogogyqsgawk = $msywmauqismcyeae; break; } if (isset($gmcgeogogyqsgawk[Constants::miucsckaeckegceq]) && !empty($gmcgeogogyqsgawk[Constants::miucsckaeckegceq]) && is_array($gmcgeogogyqsgawk[Constants::miucsckaeckegceq])) { $gmcgeogogyqsgawk["\147\165\x69\x64\145\137\x74\151\164\154\145"] = sprintf(__("\x43\150\x65\143\x6b\40\x25\x73", PR__MDL__COMPONENT_MANAGER), $gmcgeogogyqsgawk[Constants::NAME]); foreach ($gmcgeogogyqsgawk[Constants::miucsckaeckegceq] as $ciyackuwsqkoqese => $iwamiguusayooguq) { if (isset($geuaoiagwicygkww[$iwamiguusayooguq])) { $gmcgeogogyqsgawk[Constants::miucsckaeckegceq][$ciyackuwsqkoqese] = [Constants::qescuiwgsyuikume => $geuaoiagwicygkww[$iwamiguusayooguq][Constants::qoawsacmmgmimqaw], Constants::eqkeooqcsscoggia => $geuaoiagwicygkww[$iwamiguusayooguq][Constants::eqkeooqcsscoggia]]; } } } $qsqwqsymmqeoqwcu[$momcykaoccoymeig] = $gmcgeogogyqsgawk; } } } return $qsqwqsymmqeoqwcu; } }

<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ce117a11525             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting as BaseClass; use Pmpr\Common\Foundation\FormGenerator\Frontend\Component\Multistep; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\ComponentManager\Data\Compare; use Pmpr\Module\ComponentManager\Model\Component; class Setting extends BaseClass { const qwqkccuwkqeoucqu = "\x67\x6f\x74\157\x5f\x61\x66\x74\145\x72\137\x61\144\x64\x5f\164\x6f\x5f\143\x61\x72\x74"; const okcgiwmueoyocegm = "\162\145\x71\x75\x69\162\x65\155\145\x6e\x74\x73"; const msuwykmiggyawwok = "\143\157\156\164\x61\x63\x74\137\x75\x73\x5f\x70\x61\x67\145"; const mamyakyiqcsmiyae = "\x63\x6f\155\x70\x6f\156\x65\x6e\164\x5f\x69\x6e\x73\164\141\x6c\154\141\x74\x69\x6f\156\x5f\147\x75\151\144\145\x73"; const yicqiccsyqwigaqa = "\142\x61\143\153\154\151\x6e\153\x5f"; const oycqkmeykiouqcqo = self::yicqiccsyqwigaqa . Constants::qescuiwgsyuikume; const aaasmysammcocwcu = self::yicqiccsyqwigaqa . Constants::mkousmkiawwousws; const awqewimmscsokykc = self::yicqiccsyqwigaqa . Constants::muocgwgqigscmqow; const aakugisgkoscaeys = self::yicqiccsyqwigaqa . Constants::eqkeooqcsscoggia; const kqykggkcgquswkea = "\160\x6c\165\147\x69\x6e\137\147\165\151\144\145\137"; const iwseqweooieakqwk = self::kqykggkcgquswkea . "\146\151\154\x65"; const aqusgmmakasqamgq = self::kqykggkcgquswkea . Constants::qescuiwgsyuikume; const wumiomcykccwmgei = self::kqykggkcgquswkea . Constants::gqmuoaykeqeuoukm; const ggswmwomsiccuqwg = self::kqykggkcgquswkea . Constants::eqkeooqcsscoggia; const eyiukesukwwsmyya = "\160\154\165\x67\x69\156\x5f\x74\141\142\137"; const agskamgmowaiywus = self::eyiukesukwwsmyya . Constants::qescuiwgsyuikume; const ywgmisckaekgmagi = self::eyiukesukwwsmyya . "\x63\157\155\x70\141\162\145\163"; const uckmggyuwgmmskyc = self::eyiukesukwwsmyya . Constants::eqkeooqcsscoggia; const umoycqkiaiqoqaau = "\160\x6c\165\147\151\156\137\x62\x61\143\x6b\x6c\x69\x6e\x6b\137\x6d\x6f\144\x61\154"; const ayygmosqcwyeaagw = "\x70\155\x70\x72\x5f\x76\x61\154\x75\x65"; const eisiyawomcsouiwe = "\167\x6f\162\144\160\162\x65\163\163\x5f\x76\141\x6c\x75\145"; const gmquuqmomuaqueyi = "\143\141\162\164"; const cwswygwykwgsqiwu = "\x73\x69\156\x67\154\145"; const qseekcawwuumgacy = "\143\150\145\x63\x6b\x6f\x75\x74"; public function qiccuiwooiquycsg() { $this->id = $this->akuociswqmoigkas(); $this->igiywquyccyiaucw(Constants::qoquaeuooeycomks, $this->mwikyscisascoeea()); $this->hasLicense = false; parent::qiccuiwooiquycsg(); } public function wyyuauosmqoeucmg() { $this->title = __("\x43\x6f\x6d\160\157\156\x65\156\x74\40\115\x61\156\141\147\145\x72\40\x53\x65\x74\164\151\x6e\147", PR__MDL__COMPONENT_MANAGER); $this->igiywquyccyiaucw(Constants::qsegwakiwaiyimyy, __("\x53\145\x74\164\151\x6e\x67", PR__MDL__COMPONENT_MANAGER)); } public function ykwqaukkycogooii() { $this->ogimmkwaymekmoky($this->mkcwgaeaaweamyyg("\143\x6f\x6d\x70\157\x6e\x65\x6e\x74\163")->saemoowcasogykak(IconInterface::oweoqccsyyusoqei)->gswweykyogmsyawy(__("\103\157\x6d\160\x6f\156\145\x6e\x74\x73", PR__MDL__COMPONENT_MANAGER))->gucwmccyimoagwcm(__("\x52\145\161\165\x69\162\x65\155\145\156\x74\x73\x2c\40\125\160\144\x61\x74\x65\163\x2c\x20\x2e\56\56", PR__MDL__COMPONENT_MANAGER))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam(Constants::ioomakeyqiqowgmk)->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->gswweykyogmsyawy(__("\x47\x65\x6e\x65\162\141\x6c", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->qqmgmgasauucoago(self::mamyakyiqcsmiyae)->gswweykyogmsyawy(__("\x49\156\163\164\141\x6c\154\x61\x74\x69\x6f\x6e\x20\x47\x75\151\x64\145\40\123\164\x65\160\163", PR__MDL__COMPONENT_MANAGER))->omsoosuoikgueyke()->yoouesigykyekkag()->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->gswweykyogmsyawy(__("\x54\x69\x74\x6c\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->gosycecgwuesyysq(Constants::qgqyauaqwqmqseim)->gswweykyogmsyawy(__("\111\143\157\156", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(Constants::eqkeooqcsscoggia)->gsomueooycksswcy()->qsecygiycssgacqs(4)->gswweykyogmsyawy(__("\x44\145\163\x63\162\151\160\x74\x69\x6f\x6e", PR__MDL__COMPONENT_MANAGER))->uokyeqicycwwikwi(Constants::ocwsuwyiiasigqaa, __("\103\157\155\160\x6f\x6e\145\x6e\x74\x20\116\141\x6d\x65", PR__MDL__COMPONENT_MANAGER))))->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::msuwykmiggyawwok)->gswweykyogmsyawy(__("\103\157\156\164\141\143\x74\x20\x55\123\40\120\141\x67\x65", PR__MDL__COMPONENT_MANAGER))->ukqywcsoogkyoaoa(Constants::imywcsggckkcywgk))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(Constants::ucoiewcoucauqwko)->gsomueooycksswcy()->gswweykyogmsyawy(__("\124\x65\x72\155\x73\x20\x6f\146\x20\125\163\145", PR__MDL__COMPONENT_MANAGER))))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam("\x72\x65\x71\165\x69\x72\x65\155\145\156\164\x73")->saemoowcasogykak(IconInterface::imoykkmkkkaqgouo)->gswweykyogmsyawy(__("\x52\x65\x71\x75\x69\x72\145\x6d\x65\x6e\x74\x73", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->qqmgmgasauucoago(Constants::miucsckaeckegceq)->omsoosuoikgueyke()->yoouesigykyekkag()->gswweykyogmsyawy(__("\x52\145\161\x75\151\x72\x65\155\145\156\164\40\107\165\x69\x64\x65\x73", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->gswweykyogmsyawy(__("\101\144\x6d\151\156\40\x41\x72\x65\141\x20\x54\x69\x74\154\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::qoawsacmmgmimqaw)->gswweykyogmsyawy(__("\106\162\157\156\164\x20\x41\x72\145\141\x20\x54\x69\x74\x6c\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(Constants::eqkeooqcsscoggia)->gsomueooycksswcy()->gswweykyogmsyawy(__("\x44\x65\163\143\162\151\160\x74\151\157\156", PR__MDL__COMPONENT_MANAGER))))->mkksewyosgeumwsa($this->qqmgmgasauucoago(self::okcgiwmueoyocegm)->omsoosuoikgueyke()->yoouesigykyekkag()->gswweykyogmsyawy(__("\122\x65\161\165\151\x72\145\155\x65\x6e\x74\40\111\164\x65\155\x73", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::NAME)->gswweykyogmsyawy(__("\x4e\141\x6d\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->gosycecgwuesyysq(Constants::qgqyauaqwqmqseim)->gswweykyogmsyawy(__("\111\x63\157\156", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::wikgqsqysyuoykse)->gswweykyogmsyawy(__("\104\145\146\141\x75\154\164\40\x56\141\154\165\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->mccagaqeagiikkec(Constants::miucsckaeckegceq)->oikgogcweiiaocka()->gswweykyogmsyawy(__("\107\x75\x69\x64\x65\163", PR__MDL__COMPONENT_MANAGER))->acauweqyyugwisqc($this->giiuwsmyumqwwiyq(Constants::miucsckaeckegceq, [], [Constants::aisguagukaewucii => Constants::eoaiagsgqsmskugs]))))))->ogimmkwaymekmoky($this->mkcwgaeaaweamyyg("\x70\x6d\160\162\137\x70\x6c\x75\x67\151\x6e")->saemoowcasogykak(IconInterface::csoyqymugwqiggki)->gswweykyogmsyawy(__("\120\115\x50\x52\x20\120\154\x75\x67\151\156", PR__MDL__COMPONENT_MANAGER))->gucwmccyimoagwcm(__("\x50\154\x75\147\x69\x6e\40\103\x6f\156\146\151\x67\165\162\141\164\x69\x6f\156", PR__MDL__COMPONENT_MANAGER))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam("\160\x6c\x75\147\x69\156" . Constants::iusoecsswgekecks)->gswweykyogmsyawy(__("\x47\145\x6e\x65\x72\141\154", PR__MDL__COMPONENT_MANAGER))->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->mkksewyosgeumwsa($this->qqmgmgasauucoago(self::umoycqkiaiqoqaau)->omsoosuoikgueyke()->gswweykyogmsyawy(__("\x42\141\x63\x6b\x6c\151\156\x6b\40\x4d\157\x64\141\154", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->gswweykyogmsyawy(__("\124\x69\164\154\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(Constants::TEXT)->gswweykyogmsyawy(__("\124\x65\170\x74", PR__MDL__COMPONENT_MANAGER))->qsecygiycssgacqs(3)->gsomueooycksswcy())))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam("\x70\x6c\165\x67\x69\x6e\137\164\141\x62\x5f\x6d\x61\x69\x6e")->gswweykyogmsyawy(__("\124\x61\142\47\163\40\115\x61\151\156\40\x43\x6f\x6e\x74\145\x6e\x74", PR__MDL__COMPONENT_MANAGER))->saemoowcasogykak(IconInterface::moyqoqmkkkaoeses)->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::agskamgmowaiywus)->gswweykyogmsyawy(__("\x54\141\x62\x20\124\x69\164\x6c\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::uckmggyuwgmmskyc)->gswweykyogmsyawy(__("\115\x61\x69\x6e\40\x44\145\x73\x63\x72\151\160\x74\151\x6f\156", PR__MDL__COMPONENT_MANAGER))->qsecygiycssgacqs(4)->gsomueooycksswcy())->mkksewyosgeumwsa($this->qqmgmgasauucoago(self::ywgmisckaekgmagi)->omsoosuoikgueyke()->gswweykyogmsyawy(__("\103\157\155\x70\141\x72\x65\163", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->gswweykyogmsyawy(__("\124\151\164\154\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->yyuwuqsiucweeoue(Constants::squoamkioomemiyi)->eumecwmqmukqgyea()->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\124\171\160\145", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(Constants::aqikuweekkucgqoy, __("\x4d\157\x64\x75\x6c\x65", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(Constants::ykywsqyeckcgqyik, __("\103\157\166\145\162", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->wcwmusaouiqaqeww(self::eisiyawomcsouiwe)->gswweykyogmsyawy(__("\x57\x6f\162\144\x70\162\145\x73\163", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->wcwmusaouiqaqeww(self::ayygmosqcwyeaagw)->gswweykyogmsyawy(__("\120\115\120\122", PR__MDL__COMPONENT_MANAGER))))))->ogimmkwaymekmoky($this->mkcwgaeaaweamyyg("\155\165\x6c\x74\151\163\164\145\x70")->saemoowcasogykak(IconInterface::miecumwmuocmymoa)->gswweykyogmsyawy(__("\x4d\165\154\164\151\x73\164\x65\x70", PR__MDL__COMPONENT_MANAGER))->gucwmccyimoagwcm(__("\x4d\165\x6c\x74\151\x73\x74\x65\x70\x20\x43\x6f\156\146\x69\x67\x75\x72\x61\x74\151\157\156", PR__MDL__COMPONENT_MANAGER))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam(Constants::ioomakeyqiqowgmk)->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->gswweykyogmsyawy(__("\x47\145\x6e\x65\x72\141\x6c", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::qwqkccuwkqeoucqu)->gswweykyogmsyawy(__("\107\x6f\x20\164\157\40\101\146\x74\145\162\x20\101\x64\x64\40\164\x6f\x20\x43\141\162\x74", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(self::cwswygwykwgsqiwu, __("\120\x72\157\144\x75\143\x74\40\123\151\156\x67\x6c\x65", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(self::gmquuqmomuaqueyi, __("\103\141\x72\x74", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(self::qseekcawwuumgacy, __("\x43\x68\x65\143\x6b\x6f\x75\164", PR__MDL__COMPONENT_MANAGER))->eumecwmqmukqgyea()->eyygsasuqmommkua(self::cwswygwykwgsqiwu)))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam("\x73\164\145\160\163")->saemoowcasogykak(IconInterface::gwuqaauiiiqquecg)->gswweykyogmsyawy(__("\x53\164\x65\160\163\40\x64\x61\164\141", PR__MDL__COMPONENT_MANAGER))->aucimgwswmgaocae($this->doeuiogekyiwgsgw("\157\x72\144\x65\x72\137\x74\x79\x70\145")->saemoowcasogykak(IconInterface::qkqucweqeuyemamq)->gswweykyogmsyawy(sprintf(__("\45\163\40\123\164\x65\x70", PR__MDL__COMPONENT_MANAGER), __("\117\x72\x64\x65\162\40\x54\171\160\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::aqusgmmakasqamgq)->gswweykyogmsyawy(__("\120\x6c\165\x67\151\156\40\107\165\x69\x64\145\x20\124\151\164\x6c\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->quaegkgkucwyeiqg(self::iwseqweooieakqwk)->gswweykyogmsyawy(__("\x50\154\x75\147\151\156\40\107\165\x69\x64\x65\x20\x46\x69\154\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::wumiomcykccwmgei)->gswweykyogmsyawy(__("\x50\154\165\x67\151\x6e\x20\x47\x75\151\x64\145\x20\x42\165\164\164\157\x6e\x20\124\x65\x78\x74", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::ggswmwomsiccuqwg)->gswweykyogmsyawy(__("\x50\x6c\x75\x67\x69\x6e\x20\x47\165\x69\x64\145\x20\x44\x65\163\x63\x72\x69\160\164\151\x6f\x6e", PR__MDL__COMPONENT_MANAGER))->gsomueooycksswcy()->qsecygiycssgacqs(3)))->aucimgwswmgaocae($this->doeuiogekyiwgsgw("\x62\141\143\x6b\x6c\151\x6e\153")->saemoowcasogykak(IconInterface::emuwacasoaaageiq)->gswweykyogmsyawy(__("\102\141\143\x6b\x6c\151\x6e\153", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::oycqkmeykiouqcqo)->gswweykyogmsyawy(__("\x42\141\x63\153\154\151\156\x6b\40\124\x69\x74\x6c\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::aakugisgkoscaeys)->gsomueooycksswcy()->gswweykyogmsyawy(__("\102\x61\x63\153\x6c\x69\x6e\x6b\40\x44\x65\x73\x63\x72\151\x70\x74\x69\x6f\x6e", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->quaegkgkucwyeiqg(self::aaasmysammcocwcu)->gswweykyogmsyawy(__("\x42\x61\143\x6b\x6c\151\156\x6b\x20\x49\155\141\147\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::awqewimmscsokykc)->gsomueooycksswcy()->gswweykyogmsyawy(__("\102\141\x63\x6b\154\x69\x6e\153\x20\x41\x6c\x65\162\x74", PR__MDL__COMPONENT_MANAGER))->gsomueooycksswcy()->qsecygiycssgacqs(3)->eyygsasuqmommkua(__("\x69\x66\40\162\x65\x6d\157\166\145\x20\x69\x74\40\146\x72\x6f\155\x20\171\x6f\x75\x72\x20\x70\141\x67\x65\54\x20\x79\157\x75\162\x20\x61\x63\x63\157\x75\156\x74\x20\151\x73\x20\142\x61\x6e\156\145\144\56", PR__MDL__COMPONENT_MANAGER)))))); parent::ykwqaukkycogooii(); } public function gkiyamgwqciqwqwo() : ?string { return $this->giiuwsmyumqwwiyq(self::aaasmysammcocwcu, 0); } public function icioieqkoswsyouk(array $ywmkwiwkosakssii = []) : array { return $this->giiuwsmyumqwwiyq(self::umoycqkiaiqoqaau, [], $ywmkwiwkosakssii); } public function ksgygymiyeiukqoy() : array { $egsqwmeeeowomomi = (new Compare(Constants::ykywsqyeckcgqyik))->ckskqqqwakugsmoc(self::eisiyawomcsouiwe, __("\x57\157\162\144\x70\162\x65\163\163\x20\124\x68\145\155\145", PR__MDL__COMPONENT_MANAGER))->ckskqqqwakugsmoc(self::ayygmosqcwyeaagw, __("\x57\157\x72\x64\x70\x72\145\x73\x73\40\103\x6f\166\145\162", PR__MDL__COMPONENT_MANAGER)); $smqkocasociqsgai = (new Compare(Constants::aqikuweekkucgqoy))->ckskqqqwakugsmoc(self::eisiyawomcsouiwe, __("\x57\157\x72\144\x70\162\145\x73\163\40\120\154\x75\x67\151\x6e", PR__MDL__COMPONENT_MANAGER))->ckskqqqwakugsmoc(self::ayygmosqcwyeaagw, __("\x57\157\x72\x64\160\x72\145\163\x73\40\115\157\144\165\154\145", PR__MDL__COMPONENT_MANAGER)); $oammesyieqmwuwyi = $this->giiuwsmyumqwwiyq(self::ywgmisckaekgmagi, []); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if ($gkyciwoiiisgywcs->uuegkqwagymmusiy($igqsaukqcqscimok, [Constants::qescuiwgsyuikume, Constants::squoamkioomemiyi])) { goto uqokiksoqcwwqgio; } $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::squoamkioomemiyi); $ccamueccusigaaio = $smqkocasociqsgai; if (!($sqeykgyoooqysmca === Constants::ykywsqyeckcgqyik)) { goto kocqqoyymosmuksu; } $ccamueccusigaaio = $egsqwmeeeowomomi; kocqqoyymosmuksu: $meqocwsecsywiiqs = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::qescuiwgsyuikume); $ccamueccusigaaio->kywqieosgkokaiue($meqocwsecsywiiqs, [self::ayygmosqcwyeaagw => $gkyciwoiiisgywcs->get($igqsaukqcqscimok, self::ayygmosqcwyeaagw, true), self::eisiyawomcsouiwe => $gkyciwoiiisgywcs->get($igqsaukqcqscimok, self::eisiyawomcsouiwe, false)]); uqokiksoqcwwqgio: iuuuususuuuaieem: } uimeeckqksqeekqq: return [Constants::ykywsqyeckcgqyik => $egsqwmeeeowomomi->sacmkccceuywoqsq(), Constants::aqikuweekkucgqoy => $smqkocasociqsgai->sacmkccceuywoqsq()]; } public function iwgmiyoaskssmosa() : string { $cokwmmimiaeayiwi = $this->giiuwsmyumqwwiyq(self::msuwykmiggyawwok, 0); return $cokwmmimiaeayiwi > 0 ? sprintf(__("\111\x66\40\156\x65\145\144\x65\144\54\40\x79\157\165\x20\143\x61\156\x20\143\x6f\x6e\x74\x61\143\x74\40\x75\163\x20\164\150\162\x6f\165\147\150\x20\164\150\x65\40\x25\163\x2e", PR__MDL__COMPONENT_MANAGER), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(sprintf(__("\120\141\x67\145\x20\x25\163", PR__MDL__COMPONENT_MANAGER), $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($cokwmmimiaeayiwi)), $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($cokwmmimiaeayiwi), ["\x63\x6c\x61\163\x73" => "\x61\x6c\145\x72\164\x2d\x6c\x69\156\x6b"])) : ''; } public function wkcqmkyoskmemqek($syqougokmmgaoaee) : string { $haigguwksscaksqc = $this->giiuwsmyumqwwiyq(self::mamyakyiqcsmiyae, [], [Constants::aisguagukaewucii => Constants::ckmqoekmugkggeym, Constants::wkweqssoakmmmguq => [Constants::qgqyauaqwqmqseim, Constants::qescuiwgsyuikume, Constants::eqkeooqcsscoggia]]); $nsmgceoqaqogqmuw = ''; if (!is_array($haigguwksscaksqc)) { goto ieqesiiageaauiuw; } $aokagokqyuysuksm = "{$syqougokmmgaoaee}\137\151\x6e\x73\164\141\154\x6c\x61\x74\x69\x6f\156\137\x67\x75\151\x64\x65"; $ycsgmysgoaqikiui = new Multistep($aokagokqyuysuksm); $ycsgmysgoaqikiui->qigsyyqgewgskemg("\x69\156\163\164\141\154\154\141\164\x69\157\156\55\147\x75\151\x64\x65\x2d\155\x75\154\164\x69\x73\x74\x65\160"); $okguqgiiewywyoaq = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu(); $gaeqamemwmwsyukm = count($haigguwksscaksqc); $momcykaoccoymeig = 0; foreach ($haigguwksscaksqc as $uusmaiomayssaecw => $wysowamoceeqmiae) { $momcykaoccoymeig++; $wyeyeaaekyoyimqu = $ycsgmysgoaqikiui->yieymusoukkkmsww("{$aokagokqyuysuksm}\137\x73\x74\x65\160\x5f{$uusmaiomayssaecw}")->saemoowcasogykak($wysowamoceeqmiae[Constants::qgqyauaqwqmqseim])->gswweykyogmsyawy($wysowamoceeqmiae[Constants::qescuiwgsyuikume])->oguessuismosauuu($okguqgiiewywyoaq->aqiqkkuauegomyoi($wysowamoceeqmiae[Constants::eqkeooqcsscoggia])); if (!($momcykaoccoymeig === $gaeqamemwmwsyukm)) { goto yiowgigkkwsoqcci; } $wyeyeaaekyoyimqu->gwwmcykumqueaosa(__("\x43\154\x6f\x73\145", PR__MDL__COMPONENT_MANAGER)); yiowgigkkwsoqcci: $ycsgmysgoaqikiui->mgqggiyywoageqmo($wyeyeaaekyoyimqu); sioekkmekwygemyc: } qukocuwgakemmyga: $nsmgceoqaqogqmuw = $ycsgmysgoaqikiui->render(false, []); ieqesiiageaauiuw: return $nsmgceoqaqogqmuw; } public function aqsugsmskceikaee($wksoawcgagcgoask) : string { $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $syqougokmmgaoaee = $gcswwqwyaccgyoee->keeuqgyooycqoygw($wksoawcgagcgoask); $quisksguegkuygus = $gcswwqwyaccgyoee->uikgwcuascgeissw($wksoawcgagcgoask); return $this->caokeucsksukesyo()->kugiyqykwaskawsc()->icqkogwskuwscskk([Constants::gouqcwikiiygyasc => "\151\156\163\164\141\x6c\x6c\141\164\x69\157\x6e\x5f\147\165\151\x64\145\x5f{$syqougokmmgaoaee}", Constants::waguuiqqgsysuukq => Constants::esgegasyoiyogwqc, Constants::qescuiwgsyuikume => sprintf(__("\x25\x73\40\x49\x6e\x73\164\141\x6c\154\x61\164\x69\x6f\156\40\107\165\151\x64\x65", PR__MDL__COMPONENT_MANAGER), $quisksguegkuygus), Constants::ssmskyqgcmeiayco => $this->wkcqmkyoskmemqek($syqougokmmgaoaee), Constants::qaioykeumkssukis => true, Constants::uqgcmmosieyimiku => [Constants::TEXT => __("\107\x75\x69\x64\x65", PR__MDL__COMPONENT_MANAGER), Constants::ysskgssgwuwmqwym => ["\143\x6c\141\x73\163" => "\141\154\145\162\164\55\154\x69\156\153\x20\151\x6e\x73\164\x61\154\x6c\x61\164\151\x6f\156\55\x67\x75\x69\x64\x65\x2d\164\x6f\x67\x67\x6c\x65"], Constants::gqmuoaykeqeuoukm => false, Constants::ELEMENT => "\x61"]]); } }

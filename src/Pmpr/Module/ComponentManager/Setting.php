<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66cb5f0875a04             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager; use Pmpr\Common\Foundation\FormGenerator\Backend\Setting\Setting as BaseClass; use Pmpr\Common\Foundation\FormGenerator\Frontend\Component\Multistep; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Module\ComponentManager\Data\Compare; use Pmpr\Module\ComponentManager\Model\Component; class Setting extends BaseClass { const qwqkccuwkqeoucqu = "\147\x6f\164\x6f\137\141\x66\164\145\162\x5f\141\x64\x64\137\164\157\137\x63\x61\162\x74"; const okcgiwmueoyocegm = "\x72\x65\x71\165\x69\162\145\x6d\x65\156\164\163"; const msuwykmiggyawwok = "\143\157\x6e\164\x61\143\164\137\165\x73\137\x70\141\x67\145"; const mamyakyiqcsmiyae = "\x63\x6f\155\x70\x6f\156\145\x6e\x74\137\151\x6e\x73\x74\x61\x6c\154\x61\164\x69\157\x6e\137\x67\165\151\x64\x65\163"; const yicqiccsyqwigaqa = "\142\141\x63\x6b\x6c\x69\x6e\x6b\x5f"; const oycqkmeykiouqcqo = self::yicqiccsyqwigaqa . self::qescuiwgsyuikume; const aaasmysammcocwcu = self::yicqiccsyqwigaqa . self::mkousmkiawwousws; const awqewimmscsokykc = self::yicqiccsyqwigaqa . self::muocgwgqigscmqow; const aakugisgkoscaeys = self::yicqiccsyqwigaqa . self::eqkeooqcsscoggia; const kqykggkcgquswkea = "\x70\154\165\x67\151\156\x5f\x67\x75\151\x64\145\x5f"; const iwseqweooieakqwk = self::kqykggkcgquswkea . "\x66\151\x6c\145"; const aqusgmmakasqamgq = self::kqykggkcgquswkea . self::qescuiwgsyuikume; const wumiomcykccwmgei = self::kqykggkcgquswkea . self::gqmuoaykeqeuoukm; const ggswmwomsiccuqwg = self::kqykggkcgquswkea . self::eqkeooqcsscoggia; const eyiukesukwwsmyya = "\x70\x6c\x75\x67\x69\156\x5f\x74\141\x62\137"; const agskamgmowaiywus = self::eyiukesukwwsmyya . self::qescuiwgsyuikume; const ywgmisckaekgmagi = self::eyiukesukwwsmyya . "\x63\157\155\160\141\x72\x65\163"; const uckmggyuwgmmskyc = self::eyiukesukwwsmyya . self::eqkeooqcsscoggia; const umoycqkiaiqoqaau = "\x70\154\165\147\x69\156\137\142\x61\143\153\x6c\x69\x6e\x6b\x5f\155\157\x64\x61\154"; const ayygmosqcwyeaagw = "\160\155\x70\162\x5f\x76\x61\x6c\165\145"; const eisiyawomcsouiwe = "\x77\x6f\x72\144\160\162\x65\163\x73\137\166\141\x6c\x75\145"; const gmquuqmomuaqueyi = "\x63\x61\162\x74"; const cwswygwykwgsqiwu = "\163\x69\156\147\x6c\145"; const qseekcawwuumgacy = "\x63\150\145\x63\153\x6f\165\x74"; public function qiccuiwooiquycsg() { $this->id = $this->akuociswqmoigkas(); $this->igiywquyccyiaucw(self::qoquaeuooeycomks, $this->mwikyscisascoeea()); $this->hasLicense = false; parent::qiccuiwooiquycsg(); } public function wyyuauosmqoeucmg() { $this->title = __("\103\157\x6d\160\x6f\x6e\x65\156\x74\40\115\x61\x6e\x61\147\145\x72\x20\x53\145\164\164\151\x6e\x67", PR__MDL__COMPONENT_MANAGER); $this->igiywquyccyiaucw(self::qsegwakiwaiyimyy, __("\x53\145\164\164\151\156\x67", PR__MDL__COMPONENT_MANAGER)); } public function ykwqaukkycogooii() { $this->ogimmkwaymekmoky($this->mkcwgaeaaweamyyg("\x63\157\x6d\x70\x6f\x6e\x65\156\164\x73")->saemoowcasogykak(IconInterface::oweoqccsyyusoqei)->gswweykyogmsyawy(__("\x43\x6f\x6d\x70\157\156\145\156\164\x73", PR__MDL__COMPONENT_MANAGER))->gucwmccyimoagwcm(__("\x52\x65\x71\165\151\162\x65\x6d\145\x6e\x74\x73\54\40\125\160\x64\141\x74\x65\163\x2c\40\x2e\56\56", PR__MDL__COMPONENT_MANAGER))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam(self::ioomakeyqiqowgmk)->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->gswweykyogmsyawy(__("\x47\145\x6e\x65\x72\x61\x6c", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->qqmgmgasauucoago(self::mamyakyiqcsmiyae)->gswweykyogmsyawy(__("\111\x6e\163\164\x61\x6c\154\x61\164\x69\x6f\156\40\107\165\151\x64\x65\40\123\x74\x65\x70\x73", PR__MDL__COMPONENT_MANAGER))->omsoosuoikgueyke()->yoouesigykyekkag()->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::qescuiwgsyuikume)->gswweykyogmsyawy(__("\x54\x69\x74\154\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->gosycecgwuesyysq(self::qgqyauaqwqmqseim)->gswweykyogmsyawy(__("\111\x63\x6f\x6e", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::eqkeooqcsscoggia)->gsomueooycksswcy()->qsecygiycssgacqs(4)->gswweykyogmsyawy(__("\x44\145\163\x63\162\151\160\164\151\x6f\156", PR__MDL__COMPONENT_MANAGER))->uokyeqicycwwikwi(self::ocwsuwyiiasigqaa, __("\x43\x6f\155\160\157\156\145\156\x74\40\116\x61\x6d\x65", PR__MDL__COMPONENT_MANAGER))))->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::msuwykmiggyawwok)->gswweykyogmsyawy(__("\103\x6f\156\x74\141\x63\164\40\125\x53\x20\120\141\147\x65", PR__MDL__COMPONENT_MANAGER))->ukqywcsoogkyoaoa(self::imywcsggckkcywgk))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::ucoiewcoucauqwko)->gsomueooycksswcy()->gswweykyogmsyawy(__("\x54\x65\162\x6d\163\40\x6f\146\x20\x55\x73\145", PR__MDL__COMPONENT_MANAGER))))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam("\162\145\x71\x75\151\x72\145\x6d\145\x6e\164\163")->saemoowcasogykak(IconInterface::imoykkmkkkaqgouo)->gswweykyogmsyawy(__("\x52\145\161\165\151\x72\145\155\x65\x6e\x74\163", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->qqmgmgasauucoago(self::miucsckaeckegceq)->omsoosuoikgueyke()->yoouesigykyekkag()->gswweykyogmsyawy(__("\122\x65\161\x75\151\162\145\155\x65\x6e\164\x20\x47\x75\x69\x64\x65\x73", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::qescuiwgsyuikume)->gswweykyogmsyawy(__("\x41\x64\x6d\151\156\40\x41\x72\145\141\40\124\x69\164\x6c\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::qoawsacmmgmimqaw)->gswweykyogmsyawy(__("\x46\x72\x6f\x6e\x74\x20\x41\x72\x65\x61\40\x54\151\x74\x6c\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::eqkeooqcsscoggia)->gsomueooycksswcy()->gswweykyogmsyawy(__("\x44\x65\x73\x63\x72\151\160\x74\151\x6f\x6e", PR__MDL__COMPONENT_MANAGER))))->mkksewyosgeumwsa($this->qqmgmgasauucoago(self::okcgiwmueoyocegm)->omsoosuoikgueyke()->yoouesigykyekkag()->gswweykyogmsyawy(__("\122\145\x71\x75\151\162\x65\155\145\156\x74\40\x49\x74\145\155\163", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::NAME)->gswweykyogmsyawy(__("\116\x61\x6d\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->gosycecgwuesyysq(self::qgqyauaqwqmqseim)->gswweykyogmsyawy(__("\x49\x63\157\156", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::wikgqsqysyuoykse)->gswweykyogmsyawy(__("\x44\x65\x66\x61\x75\154\164\40\126\141\x6c\165\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::miucsckaeckegceq)->oikgogcweiiaocka()->gswweykyogmsyawy(__("\107\165\151\144\145\x73", PR__MDL__COMPONENT_MANAGER))->acauweqyyugwisqc($this->giiuwsmyumqwwiyq(self::miucsckaeckegceq, [], [self::aisguagukaewucii => self::eoaiagsgqsmskugs]))))))->ogimmkwaymekmoky($this->mkcwgaeaaweamyyg("\x70\x6d\160\x72\x5f\x70\x6c\165\147\151\x6e")->saemoowcasogykak(IconInterface::csoyqymugwqiggki)->gswweykyogmsyawy(__("\x50\x4d\120\122\x20\120\x6c\165\147\151\156", PR__MDL__COMPONENT_MANAGER))->gucwmccyimoagwcm(__("\120\154\x75\x67\x69\x6e\40\103\157\156\146\151\x67\x75\x72\141\x74\151\x6f\156", PR__MDL__COMPONENT_MANAGER))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam("\x70\x6c\165\147\151\x6e" . self::iusoecsswgekecks)->gswweykyogmsyawy(__("\x47\x65\156\145\x72\x61\154", PR__MDL__COMPONENT_MANAGER))->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->mkksewyosgeumwsa($this->qqmgmgasauucoago(self::umoycqkiaiqoqaau)->omsoosuoikgueyke()->gswweykyogmsyawy(__("\102\x61\143\153\x6c\151\x6e\x6b\x20\115\x6f\144\141\x6c", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::qescuiwgsyuikume)->gswweykyogmsyawy(__("\124\151\x74\154\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::TEXT)->gswweykyogmsyawy(__("\x54\x65\170\164", PR__MDL__COMPONENT_MANAGER))->qsecygiycssgacqs(3)->gsomueooycksswcy())))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam("\x70\154\x75\147\151\x6e\137\164\141\x62\137\x6d\141\151\x6e")->gswweykyogmsyawy(__("\124\x61\x62\x27\163\40\x4d\x61\x69\x6e\40\103\x6f\x6e\x74\x65\x6e\x74", PR__MDL__COMPONENT_MANAGER))->saemoowcasogykak(IconInterface::moyqoqmkkkaoeses)->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::agskamgmowaiywus)->gswweykyogmsyawy(__("\x54\141\142\x20\x54\151\164\154\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::uckmggyuwgmmskyc)->gswweykyogmsyawy(__("\115\x61\x69\x6e\x20\x44\x65\x73\x63\x72\151\160\x74\x69\x6f\156", PR__MDL__COMPONENT_MANAGER))->qsecygiycssgacqs(4)->gsomueooycksswcy())->mkksewyosgeumwsa($this->qqmgmgasauucoago(self::ywgmisckaekgmagi)->omsoosuoikgueyke()->gswweykyogmsyawy(__("\x43\x6f\x6d\x70\141\162\145\163", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::qescuiwgsyuikume)->gswweykyogmsyawy(__("\124\151\164\154\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->yyuwuqsiucweeoue(self::squoamkioomemiyi)->eumecwmqmukqgyea()->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\x54\x79\x70\x65", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(self::aqikuweekkucgqoy, __("\x4d\x6f\x64\x75\x6c\x65", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(self::ykywsqyeckcgqyik, __("\x43\157\x76\145\162", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->wcwmusaouiqaqeww(self::eisiyawomcsouiwe)->gswweykyogmsyawy(__("\127\157\162\x64\160\162\x65\163\x73", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->wcwmusaouiqaqeww(self::ayygmosqcwyeaagw)->gswweykyogmsyawy(__("\x50\115\x50\x52", PR__MDL__COMPONENT_MANAGER))))))->ogimmkwaymekmoky($this->mkcwgaeaaweamyyg("\155\165\x6c\x74\x69\x73\164\145\x70")->saemoowcasogykak(IconInterface::miecumwmuocmymoa)->gswweykyogmsyawy(__("\115\x75\154\164\151\163\x74\x65\160", PR__MDL__COMPONENT_MANAGER))->gucwmccyimoagwcm(__("\115\165\154\x74\x69\163\164\x65\160\40\x43\x6f\x6e\x66\151\147\x75\162\x61\x74\151\x6f\x6e", PR__MDL__COMPONENT_MANAGER))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam(self::ioomakeyqiqowgmk)->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->gswweykyogmsyawy(__("\x47\x65\156\x65\x72\141\154", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::qwqkccuwkqeoucqu)->gswweykyogmsyawy(__("\x47\157\40\x74\157\40\x41\146\164\145\162\40\x41\144\144\40\164\157\x20\x43\141\162\x74", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(self::cwswygwykwgsqiwu, __("\x50\x72\x6f\x64\165\143\164\40\x53\x69\156\147\x6c\x65", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(self::gmquuqmomuaqueyi, __("\x43\141\162\164", PR__MDL__COMPONENT_MANAGER))->kesomeowemmyygey(self::qseekcawwuumgacy, __("\103\x68\x65\143\x6b\157\x75\164", PR__MDL__COMPONENT_MANAGER))->eumecwmqmukqgyea()->eyygsasuqmommkua(self::cwswygwykwgsqiwu)))->kwkugmqouisgkqig($this->ycgeeoiieoiakgam("\163\x74\x65\160\163")->saemoowcasogykak(IconInterface::gwuqaauiiiqquecg)->gswweykyogmsyawy(__("\x53\x74\145\160\163\x20\x64\141\164\x61", PR__MDL__COMPONENT_MANAGER))->aucimgwswmgaocae($this->doeuiogekyiwgsgw("\157\x72\144\145\162\x5f\x74\171\x70\x65")->saemoowcasogykak(IconInterface::qkqucweqeuyemamq)->gswweykyogmsyawy(sprintf(__("\45\163\40\123\x74\x65\x70", PR__MDL__COMPONENT_MANAGER), __("\117\x72\144\145\162\40\x54\171\160\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::aqusgmmakasqamgq)->gswweykyogmsyawy(__("\120\154\x75\x67\x69\x6e\40\107\165\151\144\x65\x20\x54\151\x74\154\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->quaegkgkucwyeiqg(self::iwseqweooieakqwk)->gswweykyogmsyawy(__("\120\x6c\165\x67\151\x6e\x20\x47\165\151\x64\x65\x20\106\x69\x6c\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::wumiomcykccwmgei)->gswweykyogmsyawy(__("\x50\x6c\x75\147\x69\x6e\40\x47\x75\x69\144\145\40\x42\165\x74\164\157\156\40\124\145\170\x74", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::ggswmwomsiccuqwg)->gswweykyogmsyawy(__("\x50\154\165\147\151\x6e\40\x47\x75\x69\x64\x65\x20\x44\x65\163\143\162\x69\x70\x74\151\x6f\156", PR__MDL__COMPONENT_MANAGER))->gsomueooycksswcy()->qsecygiycssgacqs(3)))->aucimgwswmgaocae($this->doeuiogekyiwgsgw("\142\141\143\153\x6c\151\156\153")->saemoowcasogykak(IconInterface::emuwacasoaaageiq)->gswweykyogmsyawy(__("\102\x61\143\x6b\154\x69\156\x6b", PR__MDL__COMPONENT_MANAGER))->mkksewyosgeumwsa($this->ymuegqgyuagyucws(self::oycqkmeykiouqcqo)->gswweykyogmsyawy(__("\102\141\x63\153\x6c\x69\156\x6b\40\x54\151\164\154\145", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::aakugisgkoscaeys)->gsomueooycksswcy()->gswweykyogmsyawy(__("\102\141\143\153\x6c\x69\x6e\x6b\40\x44\145\x73\143\x72\151\x70\x74\x69\157\x6e", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->quaegkgkucwyeiqg(self::aaasmysammcocwcu)->gswweykyogmsyawy(__("\x42\141\143\x6b\154\151\x6e\153\40\x49\155\x61\147\x65", PR__MDL__COMPONENT_MANAGER)))->mkksewyosgeumwsa($this->sciaycsmsiekqueg(self::awqewimmscsokykc)->gsomueooycksswcy()->gswweykyogmsyawy(__("\x42\x61\143\153\x6c\151\156\153\x20\x41\x6c\145\x72\x74", PR__MDL__COMPONENT_MANAGER))->gsomueooycksswcy()->qsecygiycssgacqs(3)->eyygsasuqmommkua(__("\151\146\x20\x72\145\x6d\157\x76\145\x20\151\164\x20\x66\162\157\x6d\40\171\x6f\165\162\40\160\141\x67\145\54\x20\171\x6f\165\162\x20\x61\x63\x63\x6f\x75\x6e\x74\x20\151\163\40\x62\x61\x6e\x6e\x65\x64\56", PR__MDL__COMPONENT_MANAGER)))))); parent::ykwqaukkycogooii(); } public function gkiyamgwqciqwqwo() : ?string { return $this->giiuwsmyumqwwiyq(self::aaasmysammcocwcu, 0); } public function icioieqkoswsyouk(array $ywmkwiwkosakssii = []) : array { return $this->giiuwsmyumqwwiyq(self::umoycqkiaiqoqaau, [], $ywmkwiwkosakssii); } public function ksgygymiyeiukqoy() : array { $egsqwmeeeowomomi = (new Compare(self::ykywsqyeckcgqyik))->ckskqqqwakugsmoc(self::eisiyawomcsouiwe, __("\x57\x6f\162\144\160\162\145\x73\x73\40\x54\150\x65\155\x65", PR__MDL__COMPONENT_MANAGER))->ckskqqqwakugsmoc(self::ayygmosqcwyeaagw, __("\127\157\162\144\160\162\145\163\163\40\x43\157\166\x65\x72", PR__MDL__COMPONENT_MANAGER)); $smqkocasociqsgai = (new Compare(self::aqikuweekkucgqoy))->ckskqqqwakugsmoc(self::eisiyawomcsouiwe, __("\127\x6f\x72\x64\x70\162\x65\163\163\x20\x50\x6c\x75\147\151\x6e", PR__MDL__COMPONENT_MANAGER))->ckskqqqwakugsmoc(self::ayygmosqcwyeaagw, __("\127\x6f\162\144\160\162\x65\x73\x73\40\x4d\x6f\x64\x75\x6c\145", PR__MDL__COMPONENT_MANAGER)); $oammesyieqmwuwyi = $this->giiuwsmyumqwwiyq(self::ywgmisckaekgmagi, []); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if ($gkyciwoiiisgywcs->uuegkqwagymmusiy($igqsaukqcqscimok, [self::qescuiwgsyuikume, self::squoamkioomemiyi])) { goto gamqcwuwkikwqoay; } $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, self::squoamkioomemiyi); $ccamueccusigaaio = $smqkocasociqsgai; if (!($sqeykgyoooqysmca === self::ykywsqyeckcgqyik)) { goto ieqesiiageaauiuw; } $ccamueccusigaaio = $egsqwmeeeowomomi; ieqesiiageaauiuw: $meqocwsecsywiiqs = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, self::qescuiwgsyuikume); $ccamueccusigaaio->kywqieosgkokaiue($meqocwsecsywiiqs, [self::ayygmosqcwyeaagw => $gkyciwoiiisgywcs->get($igqsaukqcqscimok, self::ayygmosqcwyeaagw, true), self::eisiyawomcsouiwe => $gkyciwoiiisgywcs->get($igqsaukqcqscimok, self::eisiyawomcsouiwe, false)]); gamqcwuwkikwqoay: yiowgigkkwsoqcci: } sioekkmekwygemyc: return [self::ykywsqyeckcgqyik => $egsqwmeeeowomomi->sacmkccceuywoqsq(), self::aqikuweekkucgqoy => $smqkocasociqsgai->sacmkccceuywoqsq()]; } public function iwgmiyoaskssmosa() : string { $cokwmmimiaeayiwi = $this->giiuwsmyumqwwiyq(self::msuwykmiggyawwok, 0); return $cokwmmimiaeayiwi > 0 ? sprintf(__("\x49\x66\40\x6e\x65\145\144\145\144\54\40\171\157\x75\40\143\141\x6e\40\143\157\156\164\141\x63\164\x20\165\163\40\x74\x68\x72\x6f\x75\147\150\40\164\x68\x65\40\45\163\56", PR__MDL__COMPONENT_MANAGER), $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(sprintf(__("\x50\141\x67\x65\x20\x25\163", PR__MDL__COMPONENT_MANAGER), $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($cokwmmimiaeayiwi)), $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($cokwmmimiaeayiwi), ["\143\x6c\141\163\163" => "\141\154\145\162\x74\x2d\x6c\x69\x6e\153"])) : ''; } public function wkcqmkyoskmemqek($syqougokmmgaoaee) : string { $haigguwksscaksqc = $this->giiuwsmyumqwwiyq(self::mamyakyiqcsmiyae, [], [self::aisguagukaewucii => self::ckmqoekmugkggeym, self::wkweqssoakmmmguq => [self::qgqyauaqwqmqseim, self::qescuiwgsyuikume, self::eqkeooqcsscoggia]]); $nsmgceoqaqogqmuw = ''; if (!is_array($haigguwksscaksqc)) { goto wsesqmcqoiyyqkqi; } $aokagokqyuysuksm = "{$syqougokmmgaoaee}\x5f\x69\156\163\x74\141\x6c\154\x61\x74\x69\x6f\156\137\x67\165\151\x64\145"; $ycsgmysgoaqikiui = new Multistep($aokagokqyuysuksm); $ycsgmysgoaqikiui->qigsyyqgewgskemg("\151\x6e\163\x74\x61\154\154\141\164\151\157\156\55\147\x75\151\x64\145\55\x6d\165\154\x74\151\163\164\145\x70"); $okguqgiiewywyoaq = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu(); $gaeqamemwmwsyukm = count($haigguwksscaksqc); $momcykaoccoymeig = 0; foreach ($haigguwksscaksqc as $uusmaiomayssaecw => $wysowamoceeqmiae) { $momcykaoccoymeig++; $wyeyeaaekyoyimqu = $ycsgmysgoaqikiui->yieymusoukkkmsww("{$aokagokqyuysuksm}\137\x73\x74\x65\160\x5f{$uusmaiomayssaecw}")->saemoowcasogykak($wysowamoceeqmiae[self::qgqyauaqwqmqseim])->gswweykyogmsyawy($wysowamoceeqmiae[self::qescuiwgsyuikume])->oguessuismosauuu($okguqgiiewywyoaq->aqiqkkuauegomyoi($wysowamoceeqmiae[self::eqkeooqcsscoggia])); if (!($momcykaoccoymeig === $gaeqamemwmwsyukm)) { goto iesekaeqeomeuaui; } $wyeyeaaekyoyimqu->gwwmcykumqueaosa(__("\x43\x6c\157\163\145", PR__MDL__COMPONENT_MANAGER)); iesekaeqeomeuaui: $ycsgmysgoaqikiui->mgqggiyywoageqmo($wyeyeaaekyoyimqu); oyeyomcgkmgymogq: } mscyggqcesgqqksu: $nsmgceoqaqogqmuw = $ycsgmysgoaqikiui->render(false, []); wsesqmcqoiyyqkqi: return $nsmgceoqaqogqmuw; } public function aqsugsmskceikaee($wksoawcgagcgoask) : string { $gcswwqwyaccgyoee = Component::symcgieuakksimmu(); $syqougokmmgaoaee = $gcswwqwyaccgyoee->keeuqgyooycqoygw($wksoawcgagcgoask); $quisksguegkuygus = $gcswwqwyaccgyoee->uikgwcuascgeissw($wksoawcgagcgoask); return $this->caokeucsksukesyo()->kugiyqykwaskawsc()->icqkogwskuwscskk([self::gouqcwikiiygyasc => "\x69\156\163\x74\x61\154\154\141\164\x69\x6f\x6e\x5f\147\165\x69\x64\x65\x5f{$syqougokmmgaoaee}", self::waguuiqqgsysuukq => self::esgegasyoiyogwqc, self::qescuiwgsyuikume => sprintf(__("\45\163\x20\111\x6e\163\164\141\154\x6c\x61\x74\x69\157\x6e\x20\x47\165\x69\x64\x65", PR__MDL__COMPONENT_MANAGER), $quisksguegkuygus), self::ssmskyqgcmeiayco => $this->wkcqmkyoskmemqek($syqougokmmgaoaee), self::qaioykeumkssukis => true, self::uqgcmmosieyimiku => [self::TEXT => __("\107\165\x69\144\145", PR__MDL__COMPONENT_MANAGER), self::ysskgssgwuwmqwym => ["\143\154\141\x73\163" => "\x61\x6c\x65\x72\x74\x2d\x6c\151\156\x6b\x20\151\x6e\x73\x74\x61\x6c\x6c\141\x74\151\157\156\55\x67\x75\151\144\145\55\164\157\x67\x67\154\145"], self::gqmuoaykeqeuoukm => false, self::ELEMENT => "\141"]]); } }

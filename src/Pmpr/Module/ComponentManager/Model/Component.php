<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             626d4f9434abe             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Model; use Pmpr\Common\Foundation\Manipulate\ManipulateSetting; use Pmpr\Common\Foundation\Manipulate\Plugin\ManipulateWoocommerce; use Pmpr\Common\Foundation\Manipulate\Post\ManipulateAttachment; use Pmpr\Common\Foundation\Manipulate\Cover\ManipulateHTML; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; use Pmpr\Module\DomainManager\Backlink\Model as Backlink; use Pmpr\Module\DomainManager\Model\Domain; class Component extends Common { const auugqowqueaocgsu = "\166\x65\x72\x73\x69\x6f\x6e"; const ouwcgiuiymgwouec = "\x65\156\x5f\x74\x69\x74\154\145"; const wucysakokksokumi = "\x66\x61\137\164\151\164\154\x65"; const qkmqmaeuyokqgemg = "\144\x6f\x6d\x61\x69\x6e" . self::mswocgcucqoaesaa; const wygegsqueakqiccy = "\x62\141\x63\x6b\x6c\x69\x6e\153" . self::mswocgcucqoaesaa; const yegaaaygeimasokq = "\154\x61\163\x74\137\165\160\x64\141\x74\145"; const bsqkociucacssuum = "\160\x75\142\x6c\151\163\x68\137\144\x75\145"; const qscgeqoccoiyaeoi = "\145\x6e\x5f\x64\145\x73\x63\x72\x69\160\x74\151\x6f\156"; const zgcmquuuyyakwqqm = "\146\x61\x5f\x64\145\x73\143\162\151\x70\x74\x69\x6f\x6e"; const mkamewwosmwuwwqe = "\144\x6f\x77\156\154\157\x61\x64\137"; const ieagekqsqmcsqqeo = self::mkamewwosmwuwwqe . "\x73\164\141\x72\164\137\x63\x6f\x75\156\x74"; const caecscgwwciyemog = self::mkamewwosmwuwwqe . "\144\141\151\154\x79\137\x63\157\165\156\x74"; const keqoqmmgsiegwskg = self::mkamewwosmwuwwqe . "\x72\145\x61\154\x5f\143\x6f\165\x6e\164"; const mawokyacsmmqmsoo = "\x61\x63\164\x69\166\145\x5f\x69\x6e\163\164\x61\x6c\154"; const iuisqwiqesgyqsyg = "\143\157\155\x69\156\x67\137\x73\157\157\x6e"; public $timestamps = [self::CREATED_AT]; public function ckgmycmaukqgkosk() { $this->labelKey = ManipulateSetting::ksskkagoieiyuuwe() ? self::wucysakokksokumi : self::ouwcgiuiymgwouec; $this->showTimestamp = false; parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->yioesawwewqaigow(IconFontawesomeInterface::oimoeyacuioykmwo)->ckaeqgiaiqwsccke(0)->guiaswksukmgageq(__("\103\157\155\160\157\156\145\156\x74", PR__MDL__COMPONENT_MANAGER))->muuwuqssqkaieqge(__("\103\157\155\x70\x6f\x6e\145\156\x74\163", PR__MDL__COMPONENT_MANAGER))->gemkqqguesukeocw()->wkesqcmiekqoykag()->aseucqksocwomwos()->qemeyueyiwgsokuc(); } public function mcaggmuyamgsomaa($ccowyogiqwikkkie = [], $aokagokqyuysuksm = null, $tsuauommsquiesmk = null, $igqsaukqcqscimok = null) : array { $ccowyogiqwikkkie["\x75\x70\x64\141\164\145\x5f\x64\x61\x74\x61"] = ManipulateHTML::yuawgssgauywkiia(__("\x55\160\x64\141\x74\145\40\x44\x61\164\141", PR__MDL__COMPONENT_MANAGER), "\43", ["\143\154\x61\x73\163" => "\165\x70\144\x61\164\145\55\x63\157\155\x70\157\x6e\x65\x6e\164\55\141\x63\164\151\157\x6e", "\x64\x61\x74\x61\x2d\x69\x64" => $aokagokqyuysuksm, "\141\x72\151\141\x2d\x6c\x61\142\x65\x6c" => __("\x55\x70\x64\x61\x74\145\40\104\x61\x74\141", PR__MDL__COMPONENT_MANAGER)]); return parent::mcaggmuyamgsomaa($ccowyogiqwikkkie, $aokagokqyuysuksm, $tsuauommsquiesmk, $igqsaukqcqscimok); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->ymuegqgyuagyucws(self::NAME)->eccqsggkcosmqumc()->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\103\157\155\x70\x6f\156\145\x6e\x74\40\x4e\x61\155\x65", PR__MDL__COMPONENT_MANAGER)), $this->ymuegqgyuagyucws(self::wucysakokksokumi)->gswweykyogmsyawy(__("\120\145\162\x73\x69\x61\x6e\40\x54\151\x74\154\x65", PR__MDL__COMPONENT_MANAGER)), $this->ymuegqgyuagyucws(self::ouwcgiuiymgwouec)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\x45\156\147\x6c\x69\x73\x68\40\124\151\164\x6c\145", PR__MDL__COMPONENT_MANAGER)), $this->owgikiusoocuqqgo(self::squoamkioomemiyi, $this->mwoyqeeigwqoamiw())->gswweykyogmsyawy(__("\124\171\160\145", PR__MDL__COMPONENT_MANAGER))->eyygsasuqmommkua(self::aqikuweekkucgqoy), $this->owgikiusoocuqqgo(self::ciywsqoeiymemsys, $this->agausceiyceikeag())->gswweykyogmsyawy(__("\123\164\141\x74\x75\x73", PR__MDL__COMPONENT_MANAGER))->eyygsasuqmommkua(self::wmmucsiyiyusmssm), $this->geqyygqiwiqusekc(self::ieagekqsqmcsqqeo)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\123\164\x61\x72\x74\x20\103\157\165\x6e\x74", PR__MDL__COMPONENT_MANAGER))->eyygsasuqmommkua(0), $this->geqyygqiwiqusekc(self::caecscgwwciyemog)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\104\x61\x69\154\x79\40\x43\x6f\165\156\164", PR__MDL__COMPONENT_MANAGER))->eyygsasuqmommkua(0), $this->geqyygqiwiqusekc(self::keqoqmmgsiegwskg)->eyygsasuqmommkua(0)->gswweykyogmsyawy(__("\122\x65\141\x6c\x20\x43\x6f\165\156\164", PR__MDL__COMPONENT_MANAGER)), $this->qcyqgwuuymykkcke(self::bsqkociucacssuum)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\120\x75\x62\154\x69\163\x68\x20\104\165\x65", PR__MDL__COMPONENT_MANAGER)), $this->geqyygqiwiqusekc(self::oguseymmyyoyaako)->qcssowoqeqysosca()->gswweykyogmsyawy(__("\120\x72\157\144\x75\143\x74", PR__MDL__COMPONENT_MANAGER)), $this->ggiieomioscuigco(self::qkmqmaeuyokqgemg)->ckmqkgwcusyaegmm()->uwmyqckcyamwaiww(Domain::class)->wakqsiacyacmumuw()->gswweykyogmsyawy(__("\x41\163\x73\151\x67\x6e\x65\x64\x20\104\157\x6d\141\151\x6e\x73", PR__MDL__COMPONENT_MANAGER)), $this->kimoeccokowuaiic(self::mkousmkiawwousws)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\111\155\x61\147\x65", PR__MDL__COMPONENT_MANAGER))->jyumyyugiwwiqomk(0), $this->ymuegqgyuagyucws(self::zgcmquuuyyakwqqm)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\120\x65\x72\163\x69\141\x6e\x20\x44\145\x73\x63\162\151\160\164\x69\x6f\156", PR__MDL__COMPONENT_MANAGER)), $this->ymuegqgyuagyucws(self::qscgeqoccoiyaeoi)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\x45\x6e\147\154\151\163\x68\40\104\145\163\143\x72\x69\x70\x74\151\x6f\156", PR__MDL__COMPONENT_MANAGER)), $this->ggiieomioscuigco(self::wygegsqueakqiccy)->ckgquisaimmgwuyu()->uwmyqckcyamwaiww(Backlink::class)->acokiqqgsmoqaeyu()->gswweykyogmsyawy(__("\102\x61\143\x6b\154\151\x6e\x6b\163", PR__MDL__COMPONENT_MANAGER)), $this->qcyqgwuuymykkcke(self::auugqowqueaocgsu)->acceqyqygswoecwe(8)->gswweykyogmsyawy(__("\x56\145\162\163\151\157\x6e", PR__MDL__COMPONENT_MANAGER)), $this->ceqawoymcymsaeqo(self::yegaaaygeimasokq)->gswweykyogmsyawy(__("\114\x61\163\164\x20\x55\160\144\141\x74\x65", PR__MDL__COMPONENT_MANAGER))]); parent::ewaqwooqoqmcoomi(); } public function kssgsuewkcwgiksa() : array { return [self::NAME => ["\143\x6f\x6c" => "\x6d\144\x2d\64", self::squoamkioomemiyi => "\164\x65\170\164", "\154\x74\x72"], self::wucysakokksokumi => ["\x63\x6f\154" => "\x6d\x64\x2d\64", self::squoamkioomemiyi => "\164\145\170\164"], self::ouwcgiuiymgwouec => ["\x63\157\154" => "\155\x64\x2d\64", self::squoamkioomemiyi => "\x74\145\170\164", "\x6c\164\162"], self::squoamkioomemiyi => ["\143\x6f\x6c" => "\x6d\144\55\x33", "\151\147\156\157\x72\x61\142\x6c\x65" => [[self::ykqyicwaggyuuuwo => [self::kqeokggqcsesmqco, self::aqikuweekkucgqoy, self::ykywsqyeckcgqyik], self::ymckmcsiymwqucoq => self::qkmqmaeuyokqgemg], [self::ykqyicwaggyuuuwo => [self::aqikuweekkucgqoy, self::ykywsqyeckcgqyik], self::ymckmcsiymwqucoq => [self::oguseymmyyoyaako, self::ieagekqsqmcsqqeo, self::caecscgwwciyemog]]]], self::ciywsqoeiymemsys => ["\x63\157\154" => "\x6d\x64\55\63", "\151\147\x6e\157\x72\141\142\x6c\x65" => [[self::ykqyicwaggyuuuwo => self::iuisqwiqesgyqsyg, self::ymckmcsiymwqucoq => self::bsqkociucacssuum]]], self::ieagekqsqmcsqqeo => ["\x63\157\x6c" => "\x6d\x64\55\63", "\x61\163\x2d\x6e\165\155\x62\x65\162", self::wikgqsqysyuoykse => 0], self::caecscgwwciyemog => ["\143\x6f\154" => "\x6d\x64\x2d\x33", "\x61\163\55\x6e\165\155\142\x65\x72", self::wikgqsqysyuoykse => 0], self::bsqkociucacssuum => ["\x63\x6f\x6c" => "\x6d\x64\x2d\x33"], self::oguseymmyyoyaako => ["\x63\157\x6c" => "\155\144\55\x33", "\164\x79\160\145" => "\x73\x65\154\145\143\164\55\x70\157\163\164", "\x69\x74\x65\155\163" => [self::oguseymmyyoyaako]], self::qkmqmaeuyokqgemg => ["\143\157\154" => "\x6d\144\x2d\63"], self::zgcmquuuyyakwqqm => ["\143\x6f\154" => "\155\144\x2d\66", "\162\157\167\x73" => "\63"], self::qscgeqoccoiyaeoi => ["\143\x6f\154" => "\155\x64\55\66", "\x72\157\x77\163" => "\63", "\x6c\x74\x72"], self::mkousmkiawwousws => []]; } public function mwoyqeeigwqoamiw($sqeykgyoooqysmca = null) { $qgeeqyucwycemwmo = [self::cwacquagagwkcisc => __("\x43\157\155\155\157\156", PR__MDL__COMPONENT_MANAGER), self::kqeokggqcsesmqco => __("\x43\165\x73\164\x6f\x6d", PR__MDL__COMPONENT_MANAGER), self::aqikuweekkucgqoy => __("\x4d\x6f\x64\x75\154\145", PR__MDL__COMPONENT_MANAGER), self::ykywsqyeckcgqyik => __("\x43\157\166\x65\162", PR__MDL__COMPONENT_MANAGER)]; if (!$sqeykgyoooqysmca) { goto kgmeiwiakwicgkkk; } $qgeeqyucwycemwmo = ManipulateArray::get($qgeeqyucwycemwmo, $sqeykgyoooqysmca); kgmeiwiakwicgkkk: return $qgeeqyucwycemwmo; } public function agausceiyceikeag($iueymcwwscwqkiyq = null) { $oqseeekuqisekiwy = [self::wmmucsiyiyusmssm => __("\x50\x75\x62\x6c\151\x73\150", PR__MDL__COMPONENT_MANAGER), self::yokmsocosssowgke => __("\x52\145\x76\151\x65\167", PR__MDL__COMPONENT_MANAGER), self::ywskismomwmcsqam => __("\104\x72\x61\x66\164", PR__MDL__COMPONENT_MANAGER), self::iuisqwiqesgyqsyg => __("\103\x6f\155\x69\x6e\147\40\x53\x6f\157\156", PR__MDL__COMPONENT_MANAGER)]; if (!$iueymcwwscwqkiyq) { goto suuskagowwgsouqw; } $oqseeekuqisekiwy = ManipulateArray::get($oqseeekuqisekiwy, $iueymcwwscwqkiyq); suuskagowwgsouqw: return $oqseeekuqisekiwy; } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig = null) { switch ($qgoqiacsiccwoawi) { case self::wucysakokksokumi: case self::ouwcgiuiymgwouec: if (!$this->wmwguecgowcscues()) { goto aquqkiggamaoegoo; } $eqgoocgaqwqcimie = sprintf("\45\x73\74\x2f\x62\162\x3e\50\x25\x73\x29", $eqgoocgaqwqcimie, ManipulateArray::get($mksyucucyswaukig, self::NAME)); aquqkiggamaoegoo: goto omykokikgocoikec; case self::mkousmkiawwousws: if (!$eqgoocgaqwqcimie) { goto mykiyqcqiegkiqys; } $eqgoocgaqwqcimie = ManipulateAttachment::iaykyouimqoikagg($eqgoocgaqwqcimie); mykiyqcqiegkiqys: goto omykokikgocoikec; case self::oguseymmyyoyaako: if (!$eqgoocgaqwqcimie) { goto cquecqekuucwoumw; } $product = ManipulateWoocommerce::aqasygcsqysmmyke($eqgoocgaqwqcimie); if (!$product) { goto agemwookwseyycqo; } $eqgoocgaqwqcimie = $this->geyuyukmwaoksywa($product->get_permalink(), $product->get_name()); agemwookwseyycqo: cquecqekuucwoumw: goto omykokikgocoikec; case self::squoamkioomemiyi: $eqgoocgaqwqcimie = $this->mwoyqeeigwqoamiw($eqgoocgaqwqcimie); goto omykokikgocoikec; case self::ciywsqoeiymemsys: $eqgoocgaqwqcimie = $this->agausceiyceikeag($eqgoocgaqwqcimie); goto omykokikgocoikec; } csieaismmmocyacu: omykokikgocoikec: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } public function kosiqqekkquoseki($gwgucoaaqcwwciqq, ?string &$uamcoiueqaamsqma = null, ?string $sqeykgyoooqysmca = self::aqikuweekkucgqoy, bool $ogkqsyskamkuscqc = false, ?string $qwcmueausqgiwigy = null) { if (!$qwcmueausqgiwigy) { goto koiscokkkaimiecq; } $uiewakwqscemywuo = [self::ciyoccqkiamemcmm => "\45{$qwcmueausqgiwigy}\45", self::cwsguekoagqkaesm => self::ieiyckasqmcyekim, self::eugyciakiowwcuwm => self::augocsiaqqukkuui]; $uoomaookgsyciacm = [[self::euoaaiqkqcqcgeco => self::qmesccgukkkogskw, self::iowgsqgiaamyuswi => [self::NAME => $uiewakwqscemywuo, self::wucysakokksokumi => $uiewakwqscemywuo, self::ouwcgiuiymgwouec => $uiewakwqscemywuo]]]; koiscokkkaimiecq: $uoomaookgsyciacm[self::ciywsqoeiymemsys] = [self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc, self::ciyoccqkiamemcmm => [self::wmmucsiyiyusmssm, self::iuisqwiqesgyqsyg]]; $uoomaookgsyciacm[] = [self::euoaaiqkqcqcgeco => self::cqcimoqckgmaacyw, self::meisqwykgaymauka => self::ciywsqoeiymemsys, self::ciyoccqkiamemcmm => [self::wmmucsiyiyusmssm, self::iuisqwiqesgyqsyg]]; $siykeiywomwwuoiw = null; if (!($swgwkyqkakceqeia = Domain::symcgieuakksimmu())) { goto kwyimqumkuuyaiku; } if ($mokawwccycoiqeka = $swgwkyqkakceqeia->gwkkkwyoomgsiaou($gwgucoaaqcwwciqq)) { goto qwemkcoaseywkuuc; } $uamcoiueqaamsqma = __("\123\157\x72\x72\x79\40\142\165\164\x20\151\x74\47\x73\x20\x73\x61\x6d\x65\x73\x20\171\x6f\x75\162\x20\144\x6f\x6d\x61\x69\x6e\x20\x6e\157\164\40\x72\145\x67\151\163\x74\x65\x72\145\x64\56\x20\x70\x6c\145\141\163\145\x20\162\x65\147\x69\163\164\145\x72\x20\144\157\x6d\141\x69\x6e\x20\x61\156\x64\x20\164\x68\x65\x6e\x20\164\162\171\x20\141\147\141\x69\x6e", PR__MDL__COMPONENT_MANAGER); goto mqimkwickkgqqeoi; qwemkcoaseywkuuc: $uoomaookgsyciacm[self::squoamkioomemiyi] = $sqeykgyoooqysmca; $siykeiywomwwuoiw = false; if (self::kqeokggqcsesmqco === $sqeykgyoooqysmca || $ogkqsyskamkuscqc) { goto owuuuiekkaeoeacq; } [$syeseoiyagmgumcy] = $this->acamgaegcsioysiw(self::qkmqmaeuyokqgemg, true); $uoomaookgsyciacm[self::qkmqmaeuyokqgemg] = [self::euoaaiqkqcqcgeco => self::weigugswsgkycqkc, self::ugsuecoyuqcamsac => $syeseoiyagmgumcy]; $uoomaookgsyciacm[] = [self::ciyoccqkiamemcmm => $swgwkyqkakceqeia::ogqcgemayqiaucag, self::meisqwykgaymauka => self::qkmqmaeuyokqgemg, self::euoaaiqkqcqcgeco => self::imiesusgyysqwyew]; goto saauykgakaeiyoua; owuuuiekkaeoeacq: $siykeiywomwwuoiw = $swgwkyqkakceqeia->mgacegaoeamymmya($swgwkyqkakceqeia::ogqcgemayqiaucag, $mokawwccycoiqeka); saauykgakaeiyoua: $siykeiywomwwuoiw = $this->kqewyqqqiyiouaou($uoomaookgsyciacm, $siykeiywomwwuoiw); mqimkwickkgqqeoi: kwyimqumkuuyaiku: return $siykeiywomwwuoiw; } }

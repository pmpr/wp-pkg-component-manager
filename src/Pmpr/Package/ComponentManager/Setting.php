<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             614c93f27aa55             |
    |_______________________________________|
*/
 namespace Pmpr\Package\ComponentManager; use Pmpr\Common\Foundation\FormMaker\Admin\Element\Setting as BaseClass; use Pmpr\Common\Foundation\Media\Icon\Interfaces\IconFontawesomeInterface; class Setting extends BaseClass { const GOTO_AFTER_ADD_TO_CART = "\147\x6f\164\157\x5f\141\146\164\145\x72\x5f\141\x64\x64\137\164\x6f\137\x63\141\162\164"; const BACKLINK_ = "\142\141\143\153\x6c\151\x6e\153\x5f"; const BACKLINK_TITLE = self::BACKLINK_ . self::TITLE; const BACKLINK_IMAGE = self::BACKLINK_ . self::IMAGE; const BACKLINK_ALERT = self::BACKLINK_ . self::ALERT; const PLUGIN_GUIDE_ = "\160\154\165\x67\151\x6e\x5f\147\165\x69\x64\x65\x5f"; const PLUGIN_GUIDE_LINK = self::PLUGIN_GUIDE_ . self::LINK; const PLUGIN_GUIDE_TITLE = self::PLUGIN_GUIDE_ . self::TITLE; const PLUGIN_GUIDE_BUTTON = self::PLUGIN_GUIDE_ . self::BUTTON; const PLUGIN_GUIDE_DESCRIPTION = self::PLUGIN_GUIDE_ . self::DESCRIPTION; const CART = "\143\141\162\x74"; const SINGLE = "\x73\x69\156\147\x6c\x65"; const CHECKOUT = "\143\x68\x65\143\153\157\165\164"; public function __construct() { goto qwiyicoywcekgyce; qwiyicoywcekgyce: $wksoawcgagcgoask = self::akuociswqmoigkas(); goto tagquiiokseckkqs; swuggqyiaiqywgge: $this->hasLicense = false; goto ocwouquuwsaqakae; qoacckkkwsqkokye: $this->parentMenu = $wksoawcgagcgoask; goto swuggqyiaiqywgge; tagquiiokseckkqs: $this->name = $wksoawcgagcgoask; goto qoacckkkwsqkokye; ocwouquuwsaqakae: parent::__construct(); goto gcaykgmmmqomsyis; gcaykgmmmqomsyis: } public function gogaagekwoisaqgu() { goto yccuomocgmewkeca; kmseiouukkqiumum: parent::gogaagekwoisaqgu(); goto syuywgysqyckcqay; suiywiakesiegcwu: $this->menuTitle = __("\x53\145\164\x74\x69\x6e\147", PR__PKG__COMPONENT_MANAGER); goto kmseiouukkqiumum; yccuomocgmewkeca: $this->pageTitle = __("\x43\157\155\x70\157\156\x65\156\164\x20\x4d\141\156\x61\x67\x65\x72\40\123\145\x74\164\x69\156\x67", PR__PKG__COMPONENT_MANAGER); goto suiywiakesiegcwu; syuywgysqyckcqay: } public function ecwgiiuacoaokqkw() { goto ggewkaiwwgkmkwgc; kkieqqwwascekcmo: $this->aucimgwswmgaocae(self::sgsmqaoowiyocqaa("{$ymqmyyeuycgmigyo}\137\x6d\165\x6c\x74\151\x5f\x73\164\145\160", __("\x4d\x75\x6c\x74\x69\40\123\x74\x65\160", PR__PKG__COMPONENT_MANAGER))->sikqggwmmykuiymy(self::cgygmuguceeosoey($ymqmyyeuycgmigyo . self::_GENERAL, __("\x47\x65\156\145\x72\x61\x6c", PR__PKG__COMPONENT_MANAGER))->mkksewyosgeumwsa(self::ckuwucygcwsiawms(self::GOTO_AFTER_ADD_TO_CART, __("\x47\x6f\x20\x74\157\40\x41\x66\x74\145\162\40\x41\144\144\x20\164\x6f\x20\x43\x61\x72\x74", PR__PKG__COMPONENT_MANAGER), [self::SINGLE => __("\x50\162\x6f\x64\x75\x63\x74\40\x53\151\156\x67\x6c\145", PR__PKG__COMPONENT_MANAGER), self::CART => __("\103\141\162\x74", PR__PKG__COMPONENT_MANAGER), self::CHECKOUT => __("\103\x68\x65\143\x6b\157\165\x74", PR__PKG__COMPONENT_MANAGER)])->eumecwmqmukqgyea()->eyygsasuqmommkua(self::SINGLE))->saemoowcasogykak(IconFontawesomeInterface::ICON_GEAR))->sikqggwmmykuiymy(self::cgygmuguceeosoey($ymqmyyeuycgmigyo . "\137\x73\164\145\x70\x73", __("\x53\x74\x65\160\163\40\144\x61\164\141", PR__PKG__COMPONENT_MANAGER))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($ymqmyyeuycgmigyo . "\x6f\162\144\145\x72\x5f\164\171\160\145", sprintf(__("\x25\163\40\x53\x74\x65\160", PR__PKG__COMPONENT_MANAGER), __("\117\162\x64\x65\162\40\124\x79\x70\145", PR__PKG__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::PLUGIN_GUIDE_TITLE, __("\120\x6c\x75\147\x69\x6e\x20\107\165\151\x64\x65\40\124\x69\164\154\145", PR__PKG__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::PLUGIN_GUIDE_LINK, __("\x50\154\165\147\151\x6e\x20\x47\165\151\144\145\40\x54\151\x74\154\x65", PR__PKG__COMPONENT_MANAGER))->xkgcwkwsqysqamic())->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::PLUGIN_GUIDE_BUTTON, __("\x50\x6c\165\147\151\156\40\107\x75\x69\144\145\x20\x42\165\x74\164\x6f\156\x20\x54\x65\170\164", PR__PKG__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::sciaycsmsiekqueg(self::PLUGIN_GUIDE_DESCRIPTION, __("\120\x6c\165\x67\151\156\40\x47\165\x69\144\x65\40\104\145\163\143\x72\x69\160\x74\151\157\156", PR__PKG__COMPONENT_MANAGER))->gsomueooycksswcy()->qsecygiycssgacqs(3))->saemoowcasogykak(IconFontawesomeInterface::ICON_SQUARE_1))->aucimgwswmgaocae(self::sgsmqaoowiyocqaa($ymqmyyeuycgmigyo . "\x61\144\x64\137\x74\157\x5f\x63\141\162\164", sprintf(__("\45\163\x20\123\x74\145\x70", PR__PKG__COMPONENT_MANAGER), __("\x41\144\144\40\164\x6f\x20\x43\141\x72\164", PR__PKG__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::ymuegqgyuagyucws(self::BACKLINK_TITLE, __("\x42\141\143\x6b\154\x69\156\153\x20\x54\x69\x74\x6c\x65", PR__PKG__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::kimoeccokowuaiic(self::BACKLINK_IMAGE, __("\102\x61\143\x6b\154\151\x6e\x6b\x20\x49\x6d\x61\x67\145", PR__PKG__COMPONENT_MANAGER)))->mkksewyosgeumwsa(self::sciaycsmsiekqueg(self::BACKLINK_ALERT, __("\102\141\x63\153\154\x69\x6e\153\x20\x41\154\145\162\x74", PR__PKG__COMPONENT_MANAGER))->eyygsasuqmommkua(__("\x69\x66\40\x72\x65\155\x6f\x76\145\x20\151\x74\x20\146\162\x6f\155\40\171\x6f\x75\162\40\x70\141\147\x65\54\40\171\x6f\165\x72\40\141\x63\143\157\165\x6e\x74\40\x69\163\x20\x62\141\156\x6e\x65\144\56", PR__PKG__COMPONENT_MANAGER))->gsomueooycksswcy()->qsecygiycssgacqs(3))->saemoowcasogykak(IconFontawesomeInterface::ICON_SQUARE_4))->saemoowcasogykak(IconFontawesomeInterface::ICON_FORWARD_STEP))->saemoowcasogykak(IconFontawesomeInterface::ICON_RECTANGLE_VERTICAL_HISTORY)); goto ycueoqkeakismiqw; ycueoqkeakismiqw: parent::ecwgiiuacoaokqkw(); goto awimwukcyiceackk; ggewkaiwwgkmkwgc: $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu(); goto kkieqqwwascekcmo; awimwukcyiceackk: } public static function gkiyamgwqciqwqwo() : ?string { return self::eiwcuqigayigimak(self::BACKLINK_IMAGE . self::_ID, 0); } }

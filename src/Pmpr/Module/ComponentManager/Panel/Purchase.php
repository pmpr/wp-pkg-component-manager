<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             62d3192ae3fad             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Panel; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\Panel\REST\AbstractREST; use Pmpr\Module\ComponentManager\Model\Purchase as Model; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Purchase extends AbstractREST { public function __construct() { $this->rest_base = "\x63\x6f\155\x70\157\x6e\145\x6e\x74\x2d\155\141\156\x61\x67\x65\162"; parent::__construct(); } public function register_routes() { $this->register("\x2f\x67\x65\164\x2d\160\165\x72\143\x68\x61\x73\145\x73", ["\x61\162\147\163" => [], "\x6d\145\164\150\x6f\144\x73" => self::uigoseacoukemwqc, "\x63\141\x6c\x6c\142\141\143\153" => [$this, "\x6b\163\x79\x6b\x75\141\171\153\x79\171\x75\161\147\163\167\x67"]]); } public function ksykuaykyyuqgswg(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto mqimkwickkgqqeoi; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $wqogggcaamgeiwew = $swgwkyqkakceqeia->eqqmweomwciucoci($keccaugmemegoimu, true, false); if (!$wqogggcaamgeiwew) { goto qwemkcoaseywkuuc; } foreach ($wqogggcaamgeiwew as $momcykaoccoymeig => $mokawwccycoiqeka) { $wqogggcaamgeiwew[$momcykaoccoymeig] = ManipulateArray::get($mokawwccycoiqeka, $swgwkyqkakceqeia->kumuygiiqswoyasy(), 0); saauykgakaeiyoua: } owuuuiekkaeoeacq: $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, Model::symcgieuakksimmu(), [Model::qkmqmaeuyokqgemg => [self::ciyoccqkiamemcmm => $wqogggcaamgeiwew, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc]]); qwemkcoaseywkuuc: mqimkwickkgqqeoi: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }

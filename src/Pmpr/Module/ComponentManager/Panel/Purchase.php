<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6251c6d2479b2             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Panel; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\Panel\REST\AbstractREST; use Pmpr\Module\ComponentManager\Model\Purchase as Model; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Purchase extends AbstractREST { public function __construct() { $this->rest_base = "\143\x6f\155\160\x6f\156\x65\x6e\164\x2d\x6d\x61\x6e\141\x67\145\162"; parent::__construct(); } public function register_routes() { $this->register("\57\147\145\164\x2d\x70\x75\x72\143\150\x61\163\145\163", ["\141\x72\x67\x73" => [], "\155\x65\x74\x68\x6f\144\x73" => self::uigoseacoukemwqc, "\143\x61\154\x6c\142\x61\143\153" => [$this, "\153\163\x79\153\165\141\x79\x6b\x79\x79\x75\161\147\x73\x77\x67"]]); } public function ksykuaykyyuqgswg(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto iggyqogweyosuikc; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $wqogggcaamgeiwew = $swgwkyqkakceqeia->eqqmweomwciucoci($keccaugmemegoimu, true, false); if (!$wqogggcaamgeiwew) { goto kqksuugcgsyeoayy; } foreach ($wqogggcaamgeiwew as $momcykaoccoymeig => $mokawwccycoiqeka) { $wqogggcaamgeiwew[$momcykaoccoymeig] = ManipulateArray::get($mokawwccycoiqeka, $swgwkyqkakceqeia->kumuygiiqswoyasy(), 0); ygcsmkuycoagwyou: } omugkkesagcyagmk: $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, Model::symcgieuakksimmu(), [Model::qkmqmaeuyokqgemg => [self::ciyoccqkiamemcmm => $wqogggcaamgeiwew, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc]]); kqksuugcgsyeoayy: iggyqogweyosuikc: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }

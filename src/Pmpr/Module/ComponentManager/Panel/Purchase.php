<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             641f9b1365865             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Panel; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\Panel\REST\AbstractREST; use Pmpr\Module\ComponentManager\Model\Purchase as Model; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Purchase extends AbstractREST { public function __construct() { $this->rest_base = "\143\157\x6d\160\x6f\x6e\145\x6e\x74\x2d\155\x61\156\x61\147\145\162"; parent::__construct(); } public function register_routes() { $this->register("\57\147\145\x74\55\160\x75\162\143\150\x61\x73\145\163", ["\141\162\x67\163" => [], "\x6d\145\164\150\x6f\x64\x73" => self::uigoseacoukemwqc, "\x63\141\x6c\x6c\x62\141\143\x6b" => [$this, "\x6b\163\171\x6b\x75\141\x79\153\x79\x79\165\161\147\x73\167\x67"]]); } public function ksykuaykyyuqgswg(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto kqksuugcgsyeoayy; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $wqogggcaamgeiwew = $swgwkyqkakceqeia->eqqmweomwciucoci($keccaugmemegoimu, true, false); if (!$wqogggcaamgeiwew) { goto ygcsmkuycoagwyou; } foreach ($wqogggcaamgeiwew as $momcykaoccoymeig => $mokawwccycoiqeka) { $wqogggcaamgeiwew[$momcykaoccoymeig] = ManipulateArray::get($mokawwccycoiqeka, $swgwkyqkakceqeia->kumuygiiqswoyasy(), 0); omugkkesagcyagmk: } mosqsmqimqgqoase: $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, Model::symcgieuakksimmu(), [Model::qkmqmaeuyokqgemg => [self::ciyoccqkiamemcmm => $wqogggcaamgeiwew, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc]]); ygcsmkuycoagwyou: kqksuugcgsyeoayy: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }

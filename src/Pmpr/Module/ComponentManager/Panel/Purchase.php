<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             638a6bf15d012             |
    |_______________________________________|
*/
 namespace Pmpr\Module\ComponentManager\Panel; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\Panel\REST\AbstractREST; use Pmpr\Module\ComponentManager\Model\Purchase as Model; use WP_Error; use WP_HTTP_Response; use WP_REST_Request; use WP_REST_Response; class Purchase extends AbstractREST { public function __construct() { $this->rest_base = "\143\157\155\160\157\x6e\145\156\x74\x2d\x6d\x61\x6e\x61\147\x65\x72"; parent::__construct(); } public function register_routes() { $this->register("\x2f\x67\x65\164\55\160\165\162\x63\150\141\x73\145\x73", ["\141\162\x67\x73" => [], "\x6d\145\164\x68\157\x64\x73" => self::uigoseacoukemwqc, "\x63\141\154\x6c\142\x61\143\x6b" => [$this, "\x6b\x73\x79\x6b\x75\141\171\x6b\171\171\165\161\147\163\167\x67"]]); } public function ksykuaykyyuqgswg(WP_REST_Request $aqmwamyiwgeeymqa) { $keccaugmemegoimu = $this->issssuygyewuaswa($aqmwamyiwgeeymqa); if (is_wp_error($keccaugmemegoimu)) { goto ouamogymawucwswu; } $swgwkyqkakceqeia = Domain::symcgieuakksimmu(); $wqogggcaamgeiwew = $swgwkyqkakceqeia->eqqmweomwciucoci($keccaugmemegoimu, true, false); if (!$wqogggcaamgeiwew) { goto emmsycooskoqmgeg; } foreach ($wqogggcaamgeiwew as $momcykaoccoymeig => $mokawwccycoiqeka) { $wqogggcaamgeiwew[$momcykaoccoymeig] = ManipulateArray::get($mokawwccycoiqeka, $swgwkyqkakceqeia->kumuygiiqswoyasy(), 0); qgeugwymkkiacwoc: } mqicocmqegwukkwg: $keccaugmemegoimu = $this->agqsmkyeogkaeaww($aqmwamyiwgeeymqa, Model::symcgieuakksimmu(), [Model::qkmqmaeuyokqgemg => [self::ciyoccqkiamemcmm => $wqogggcaamgeiwew, self::euoaaiqkqcqcgeco => self::wuwqeigceueyqmsc]]); emmsycooskoqmgeg: ouamogymawucwswu: return $this->ewmkmmsuiuwmmwoy($keccaugmemegoimu); } }

<?php
/**
 * @file
 * SEC_User Table Seeder
 *
 * All ECSL2018 code is copyright by the original authors and released under the GNU Aferro General Public License version 3 (AGPLv3) or later.
 * See COPYRIGHT and LICENSE.
 */
namespace Mgallegos\ECSL2018\Seeders;

use DB;
use App\Kwaai\Security\Module;
use App\Kwaai\Security\Menu;
use App\Kwaai\Security\Permission;
use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder {

	public function run()
	{
		// Module::create(array('name' => 'Migrantes', 'lang_key' => 'psicologia::menu.psicologiaModule', 'icon' => 'fa fa-bus', 'created_by' => 1));
		// $psgModuleId = DB::table('SEC_Module')->max('id');
		//
		// Menu::create(array('name' => 'Configuración', 'lang_key' => 'psicologia::menu.setup', 'url' => null, 'icon' => 'fa fa-upload', 'parent_id' => null, 'module_id' => $psgModuleId, 'created_by' => 1));
		//
		// $parentMenuId = DB::table('SEC_Menu')->max('id');
		//
		// Menu::create(array('name' => 'Carga de archivo DGME', 'lang_key' => 'psicologia::menu.dataLoading', 'url' => '/migrantes/configuracion/carga-datos-rree', 'action_button_id' => '', 'action_lang_key' => 'psicologia::menu.dataLoadingAction', 'icon' => 'fa fa-upload', 'parent_id' => $parentMenuId, 'module_id' => $psgModuleId, 'created_by' => 1));
		//
		// Menu::create(array('name' => 'Herramientas de Análisis', 'lang_key' => 'psicologia::menu.analysisTools', 'url' => null, 'icon' => 'fa fa-bar-chart', 'parent_id' => null, 'module_id' => $psgModuleId, 'created_by' => 1));
		//
		// $parentMenuId = DB::table('SEC_Menu')->max('id');
		//
		// Menu::create(array('name' => 'Niños y Adultos Repatriados', 'lang_key' => 'psicologia::menu.ninosAdultosRepatriados', 'url' => '/migrantes/herramientas-analisis/ninos-adultos-repatriados', 'action_button_id' => '', 'action_lang_key' => 'psicologia::menu.ninosAdultosRepatriadosAction', 'icon' => 'fa fa-pie-chart', 'parent_id' => $parentMenuId, 'module_id' => $psgModuleId, 'created_by' => 1));
		// Menu::create(array('name' => 'Caracterización según Sexo', 'lang_key' => 'psicologia::menu.repatriados', 'url' => '/migrantes/herramientas-analisis/caracterizacion-segun-sexo', 'action_button_id' => '', 'action_lang_key' => 'psicologia::menu.repatriadosRepatriadosAction', 'icon' => 'fa fa-pie-chart', 'parent_id' => $parentMenuId, 'module_id' => $psgModuleId, 'created_by' => 1));
	}

}

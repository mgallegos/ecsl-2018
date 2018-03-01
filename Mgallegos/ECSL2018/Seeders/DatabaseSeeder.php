<?php
/**
 * @file
 * PHP Class to run the database seeds.
 *
 * All ECSL2018 code is copyright by the original authors and released under the GNU Aferro General Public License version 3 (AGPLv3) or later.
 * See COPYRIGHT and LICENSE.
 */
namespace Mgallegos\ECSL2018\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('Mgallegos\DecimaCms\Seeders\MenuTableSeeder');
	}

}

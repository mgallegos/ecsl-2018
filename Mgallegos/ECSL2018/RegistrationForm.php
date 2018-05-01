<?php
/**
 * @file
 * Currency Model.
 *
 * All DecimaERP code is copyright by the original authors and released under the GNU Aferro General Public License version 3 (AGPLv3) or later.
 * See COPYRIGHT and LICENSE.
 */
namespace Mgallegos\ECSL2018;

use Eloquent;

class RegistrationForm extends Eloquent{

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'ECSL_Registration_Form';

	/**
	 * The attributes that aren't mass assignable.
	 *
	 * @var array
	 */
	protected $guarded = array('id');

	/**
	 * Indicates if the model should soft delete.
	 *
	 * @var bool
	 */
	//protected $softDelete = true;

}

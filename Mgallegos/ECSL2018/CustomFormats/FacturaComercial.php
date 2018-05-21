<?php
/**
 * @file
 * SEC_User Table Seeder
 *
 * All DecimaCustom code is copyright by the original authors and released under the GNU Aferro General Public License version 3 (AGPLv3) or later.
 * See COPYRIGHT and LICENSE.
 */
namespace Mgallegos\ECSL2018\CustomFormats;

use App\Kwaai\Organization\Repositories\Organization\CustomFormatInterface;

use Barryvdh\DomPDF\PDF;

class FacturaComercial implements CustomFormatInterface {

	/**
	 * PDF Creator
	 *
	 * @var Barryvdh\DomPDF\PDF
	 */
	protected $Dompdf;

	public function __construct(PDF $Dompdf)
	{
			$this->Dompdf = $Dompdf;
	}

	/**
	 * Create a custom PDF format.
	 *
	 * @param array $data
	 * @param string $databaseConnectionName
	 *
	 * @return void
	 */
	public function run($data)
	{
		//anchoxalto
		//6.33x8.40inches
		//16.07x21.33cm
		//1,266x1680
		// var_dump('Hola y Adios!');die();

		return $this->Dompdf
			->loadView('ecsl-2018::factura-comercial-pdf', $data)
			// ->setPaper(array(0, 0, 500, 500))
			->stream('Factura Comercial.pdf');
	}

}

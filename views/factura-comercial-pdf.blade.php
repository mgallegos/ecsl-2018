<!DOCTYPE html>
<html>
  <head>
  <title>
    {{ $order['type'] }}
  </title>
    <style type="text/css">
      @page {
        /* margin-top: 40px; */
        margin-bottom: 20px;
      }

      body {
				margin-bottom: 20px;
			}

      .clearfix {
        overflow: auto;
      }

      .clearfix::after {
          content: "";
          clear: both;
          display: table;
      }

      .container {
        width:100%;
        font-size: 0;
      }

      .col-left,  .col-rigth, .col-fifty{
        display: inline-block;
        /* display: inline; */
        /* zoom: 1; */
        vertical-align: top;
        font-size: 12px;
      }

      .col-sixty, .col-forty {
        float: left;
      }
      .col-left {
        width: 80%;
      }
      .tittle-content {
        width: 100%;
      }
      .col-rigth {
        width: 19%;
        border-style: double;
      }
      .col-sixty {
        width: 60%;
      }
      .col-forty {
        width: 40%;
      }
      .col-fifty {
        width: 50%;
      }
      hr {
          display: block;
          margin-top: 0.5em;
          margin-bottom: 0.5em;
          margin-right: 20px;
          margin-left: 20px;
          border-width: 1px;
      }
      p{
        margin-top: 0;
        margin-bottom: 0;
        font-size: 14px;
      }
      img{
        width: auto;
        max-height: 80px;
      }
      h4{
        margin-top: 0;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: normal;
      }
      table, th, td {
          text-align: center;
      }

      table {
        /* table-layout: fixed; */
        border-collapse: collapse;
        background-color: transparent;
      }
      table td, table th {
        /*padding: 5px;*/
        font-size: 14px;
      }

      .table {
        width: 100%;
        max-width: 100%;
        margin-bottom: 1rem;
      }

      .table th,
      .table td {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid #eceeef;
      }

      .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #eceeef;
      }

      .table tbody + tbody {
        border-top: 2px solid #eceeef;
        /*border-top: none;*/
      }

      .table .table {
        background-color: #fff;
      }

      .table-sm th,
      .table-sm td {
        padding: 0.3rem;
      }

      .table-bordered {
        border: 1px solid #eceeef;
      }

      .table-bordered th,
      .table-bordered td {
        border: 1px solid #eceeef;
      }

      .table-bordered thead th,
      .table-bordered thead td {
        border-bottom-width: 2px;
      }

      .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0, 0, 0, 0.05);
      }

      .table-hover tbody tr:hover {
        background-color: rgba(0, 0, 0, 0.075);
      }

      .table-active,
      .table-active > th,
      .table-active > td {
        background-color: rgba(0, 0, 0, 0.075);
      }

      .table-hover .table-active:hover {
        background-color: rgba(0, 0, 0, 0.075);
      }

      .table-hover .table-active:hover > td,
      .table-hover .table-active:hover > th {
        background-color: rgba(0, 0, 0, 0.075);
      }

      .table-success,
      .table-success > th,
      .table-success > td {
        background-color: #dff0d8;
      }

      .table-hover .table-success:hover {
        background-color: #d0e9c6;
      }

      .table-hover .table-success:hover > td,
      .table-hover .table-success:hover > th {
        background-color: #d0e9c6;
      }

      .table-info,
      .table-info > th,
      .table-info > td {
        background-color: #d9edf7;
      }

      .table-hover .table-info:hover {
        background-color: #c4e3f3;
      }

      .table-hover .table-info:hover > td,
      .table-hover .table-info:hover > th {
        background-color: #c4e3f3;
      }

      .table-warning,
      .table-warning > th,
      .table-warning > td {
        background-color: #fcf8e3;
      }

      .table-hover .table-warning:hover {
        background-color: #faf2cc;
      }

      .table-hover .table-warning:hover > td,
      .table-hover .table-warning:hover > th {
        background-color: #faf2cc;
      }

      .table-danger,
      .table-danger > th,
      .table-danger > td {
        background-color: #f2dede;
      }

      .table-hover .table-danger:hover {
        background-color: #ebcccc;
      }

      .table-hover .table-danger:hover > td,
      .table-hover .table-danger:hover > th {
        background-color: #ebcccc;
      }

      .thead-inverse th {
        color: #fff;
        background-color: #292b2c;
      }

      .thead-default th {
        color: #464a4c;
        background-color: #eceeef;
      }

      .table-inverse {
        color: #fff;
        background-color: #292b2c;
      }

      .table-inverse th,
      .table-inverse td,
      .table-inverse thead th {
        border-color: #fff;
      }

      .table-inverse.table-bordered {
        border: 0;
      }

      .table-responsive {
        display: block;
        width: 100%;
        overflow-x: auto;
        -ms-overflow-style: -ms-autohiding-scrollbar;
      }

      .table-responsive.table-bordered {
        border: 0;
      }

      .page-break {
        page-break-after: always;
      }

      .page-break-avoid {
        page-break-inside:avoid;
        break-inside: avoid;
        -webkit-column-break-inside: avoid;
      }

      .footer { position: fixed; left: 0px; bottom: -50px; right: 0px; height: 50px;text-align: center;}

      .pagenum:before {
        content: counter(page);
      }

      footer { position: fixed; bottom: 50px; left: 0px; right: 0px;}
    </style>

  </head>
  <body>
    <div class="container">
      <div class="col-left">
        <img src="https://storage.googleapis.com/decimaerp/organizations/15/encabezado.png" style="width: 98%;height: auto;margin-top:10px;"/>
      <center style="margin-top:10px;">
        <div class="col-fifty">
          <p ><strong>{{ Lang::get('organization/organization-management.webSite') }}: </strong>https://ecsl2018.softwarelibre.ca</p>
        </div>
        <div class="col-fifty">
          <p ><strong>Correo: </strong>ecsl2018@softwarelibre.ca</p>
        </div>
      </center>
      </div>
      <div class="col-rigth">
        <div class="tittle-content">
            <center>
              <h4 style="padding-top: 5px; text-transform: uppercase;">
                <strong>
                  {{ $order['type'] }}
                </strong>
              </h4>
              <p style="padding-top:4px; font-size:18px; color:#D91E18;"><strong>N&ordm;</strong>
                @if($order['type'] == 'Orden')
                  {{ $order['document_number'] }}
                @else
                  {{ $order['number'] }}
                @endif
              </p>
              <!-- <p style="padding-top:4px;"><strong>{{ Lang::get('organization/organization-management.taxId') }}: </strong></p>
              <p>{{ $organization['tax_id'] }}</p>
              <p style="padding-bottom: 0px;"><strong>{{ Lang::get('organization/organization-management.companyRegistration') }}: </strong></p>
              <p>{{ $organization['company_registration'] }}</p> -->
          </center>
        </div>
      </div>
    </div>
    <div style="margin-top:15px;" class="clearfix">
      <div class="clearfix">
        <div class="col-sixty">
          <h4><strong>{{ Lang::get('decima-accounting::journal-management.clientId') }}: </strong>{{ $client['name'] }}</h4>
        </div>
        <div class="col-forty">
          <p><strong>{{ Lang::get('form.date') }}: </strong>
            {{ $order['date'] }}
          </p>
        </div>
      </div>
      <div class="clearfix">
        <div class="col-sixty">
          <h4 style="margin-top:2px;margin-bottom:0;padding-bottom:0"><strong>Departmento/Provincia: </strong>{{ $client['state_name'] }}</h4>
          <h4 style="margin-top:2px;margin-bottom:0;padding-bottom:0"><strong>Forma de pago: </strong>{{ $order['payment_term'] }}</h4>
        </div>
        <div class="col-forty">
            <h4 style="margin-top:2px;margin-bottom:0;padding-bottom:0"><strong>Municipio: </strong>{{ $client['city_name'] }}</h4>
            <h4 style="margin-top:2px;margin-bottom:0;padding-bottom:0"><strong>{{ Lang::get('form.status') }}: </strong>Pagado</h4>
        </div>
      </div>
    </div>
    <table class="table table-sm" style="width:100%;text-align:center;margin-top:15px;">
      <thead>
        <tr>
          <th scope="col" width="10%" style="font-size:12px; vertical-align: middle; text-transform: uppercase;">{{ Lang::get('decima-purchase::purch-order-management.cant') }}</th>
          <th scope="col" width="60%" style="font-size:12px; vertical-align: middle; text-transform: uppercase; letter-spacing: 8px;">{{ Lang::get('decima-accounting::journal-management.remark') }}</th>
          <th scope="col" width="15%" style="font-size:12px; vertical-align: middle; text-transform: uppercase;">{{ Lang::get('decima-sale::sale-order-management.unitaryPrice') }}</th>
          <!-- <th scope="col" width="10%" style="font-size:12px; vertical-align: middle; text-transform: uppercase;">{{ Lang::get('decima-purchase::purch-order-management.desc') }}</th> -->
          <!-- <th scope="col" width="14%" style="font-size:12px; vertical-align: middle; text-transform: uppercase;">{{ Lang::get('decima-sale::sale-order-management.price') }}</th> -->
          <!-- <th scope="col" width="14%" style="font-size:12px; vertical-align: middle; text-transform: uppercase;">{{ Lang::get('decima-sale::sale-order-management.notSubjectAmount') }}</th> -->
          <!-- <th scope="col" width="12%" style="font-size:12px; vertical-align: middle; text-transform: uppercase;">{{ Lang::get('decima-sale::sale-order-management.exemptAmount') }}</th> -->
          <th scope="col" width="15%" style="font-size:12px; vertical-align: middle; text-transform: uppercase;">{{ Lang::get('decima-sale::sale-order-management.subjectAmount') }}</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($details as $index => $row)
        <tr>
          <td> {{ number_format($row['quantity'], 2, Lang::get('form.decimalSeparator'), Lang::get('form.thousandsSeparator')) }} </td>
          <td style="text-align: left">{{ $row['remark'] }}</td>
          <td style="text-align: right">{{ $organization['symbol'] }} {{ number_format($row['price_without_discount'], AuthManager::getCurrentUserOrganizationCostPricePrecision(), Lang::get('form.decimalSeparator'), Lang::get('form.thousandsSeparator')) }}</td>
          <!-- <td style="text-align: right">{{ $row['discount'] }}</td>
          <td style="text-align: right">{{ $organization['symbol'] }} {{ number_format($row['price'], AuthManager::getCurrentUserOrganizationCostPricePrecision(), Lang::get('form.decimalSeparator'), Lang::get('form.thousandsSeparator')) }}</td>
          <td style="text-align: right">{{ $organization['symbol'] }} {{ number_format($row['not_subject_amount'], 2, Lang::get('form.decimalSeparator'), Lang::get('form.thousandsSeparator')) }}</td>
          <td style="text-align: right">{{ $organization['symbol'] }} {{ number_format($row['exempt_amount'], 2, Lang::get('form.decimalSeparator'), Lang::get('form.thousandsSeparator')) }}</td> -->
          <td style="text-align: right">{{ $organization['symbol'] }} {{ number_format($row['subject_amount'], 2, Lang::get('form.decimalSeparator'), Lang::get('form.thousandsSeparator')) }}</td>
        </tr>
        @endforeach
        <tr>
          <td style="text-align: left; font-size:12px;" rowspan="8" colspan="2"><strong>{{strtoupper(Lang::get('form.son'))}}:</strong> {{ numberToText($order['sales_total'] + $order['collected_tax_amount_sum'] - $order['withheld_tax_amount_sum'], true, $organization['currencyName']) }}</td>
          <!-- <td style="text-align: left; font-size:12px;"><strong>{{strtoupper(Lang::get('form.sums'))}}</strong></td> -->
          <td style="text-align: left; font-size:12px;"><strong>{{strtoupper(Lang::get('form.total'))}}</strong></td>
          <!-- <td style="text-align: right; font-weight: bold;">{{ $organization['symbol'] }} {{ number_format($order['not_subject_amount_sum'], 2, Lang::get('form.decimalSeparator'), Lang::get('form.thousandsSeparator')) }}</td>
          <td style="text-align: right; font-weight: bold;">{{ $organization['symbol'] }} {{ number_format($order['exempt_amount_sum'], 2, Lang::get('form.decimalSeparator'), Lang::get('form.thousandsSeparator')) }}</td> -->
          <td style="text-align: right; font-weight: bold;">{{ $organization['symbol'] }} {{ number_format($order['subject_amount_sum'], 2, Lang::get('form.decimalSeparator'), Lang::get('form.thousandsSeparator')) }}</td>
        </tr>
        @foreach ($taxes['percepcion'] as $index => $row)
        <tr>
          <th style="text-align: left; font-size:12px; text-transform: uppercase;" colspan="1">{{ $row['tax_name'] }}</th>
          <td style="text-align: right">{{ $organization['symbol'] }} {{ number_format($row['merge_subject_amount_tax_total'], 2, Lang::get('form.decimalSeparator'), Lang::get('form.thousandsSeparator')) }}</td>
        </tr>
        @endforeach
        @foreach ($taxes['retencion'] as $index => $row)
        <tr>
          <th style="text-align: left; font-size:12px; text-transform: uppercase;" colspan="1">{{ $row['tax_name'] }}</th>
          <td style="text-align: right">{{ $organization['symbol'] }} {{ number_format($row['merge_subject_amount_tax_total'], 2, Lang::get('form.decimalSeparator'), Lang::get('form.thousandsSeparator')) }}</td>
        </tr>
        @endforeach
        <!-- <tr>
          <th style="text-align: left; font-size:12px; text-transform: uppercase;" colspan="1">{{Lang::get('decima-sale::sale-order-management.notSubjectAmount')}}</th>
          <td style="text-align: right">{{ $organization['symbol'] }} {{ number_format($order['not_subject_amount_sum'], 2, Lang::get('form.decimalSeparator'), Lang::get('form.thousandsSeparator')) }}</td>
        </tr>
        <tr>
          <th style="text-align: left; font-size:12px; text-transform: uppercase;" colspan="1">{{Lang::get('decima-sale::sale-order-management.exemptAmount')}}</th>
          <td style="text-align: right">{{ $organization['symbol'] }} {{ number_format($order['exempt_amount_sum'], 2, Lang::get('form.decimalSeparator'), Lang::get('form.thousandsSeparator')) }}</td>
        </tr> -->
        <!-- <tr>
          <th style="text-align: left; font-size:12px; text-transform: uppercase;" colspan="1">{{Lang::get('form.total')}}</th>
          <td style="text-align: right; font-weight: bold;">{{ $organization['symbol'] }} {{ number_format(($order['sales_total'] + $order['collected_tax_amount_sum']) - $order['withheld_tax_amount_sum'], 2, Lang::get('form.decimalSeparator'), Lang::get('form.thousandsSeparator')) }}</td>
        </tr> -->
      </tbody>
    </table>
    <footer>
      <img  src="https://storage.googleapis.com/decimaerp/organizations/15/PieDePagina.png" style="width: 100%;height: auto;">
    </footer>
  </body>
</html>

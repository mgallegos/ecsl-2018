<style>
  /* @import url('https://fonts.googleapis.com/css?family=Anton|Cabin:400,700'); */
  /* @import url('https://fonts.googleapis.com/css?family=Pacifico'); */

  html {
    position: relative;
    min-height: 100%;
  }

  body {
    padding-top: 86px;
  }

  .card-logo{
    border: 0 !important;
  }

  .card-logo .card-body{
    display: none;
    /* padding: .4rem !important; */
  }

  .card-logo-title{
    color: #343a40 !important;
  }

  .card-header-logo {
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    margin: 0 auto;
  }

  .card-header-logo-padding {
    padding: 0 3rem;
  }

  .card-payment-deck .card-deck .card{
    cursor: pointer;
  }

  /* .card-payment-deck .card-deck .card .ul > li { */
  .card-payment-deck li {
    background-color: inherit !important;
  }

  .footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    line-height: 56px;
    /* background-color: #f5f5f5; */
  }

  tr.success>td {
    background-color: #dff0d8;
  }

  .app-mg-grid th.ui-th-column div, .app-mg-grid th.ui-th-column div{
		word-wrap: break-word; /* IE 5.5+ and CSS3 */
		white-space: pre-wrap; /* CSS3 */
		white-space: -moz-pre-wrap; /* Mozilla, since 1999 */
		white-space: -pre-wrap; /* Opera 4-6 */
		white-space: -o-pre-wrap; /* Opera 7 */
		overflow: hidden;
		height: auto;
		vertical-align: middle;
		padding-top: 3px;
		padding-bottom: 3px
	}

  .file-footer-caption {
    font-size: 8px !important;
    padding-top: 0 !important;
    margin: 0 auto !important;
  }

  .file-other-icon {
    font-size: 3.0em !important;
  }

  #pon-file-body .kv-file-remove {
    display: none;
  }

  .collage{
    line-height: 0;

    -webkit-column-count: 4;
    -webkit-column-gap:   0px;
    -moz-column-count:    4;
    -moz-column-gap:      0px;
    column-count:         4;
    column-gap:           0px;
  }

  .collage-img{
    width: 100% !important;
    height: auto !important;
  }

  header.masthead {
    height: 435px;
    text-align: center;
    color: white;
    background-image: url("https://storage.googleapis.com/decimaerp/organizations/15/ECSL_2018_OFICIAL.jpg");
    background-repeat: no-repeat;
    background-position: top center;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
  }


  header.masthead .intro-lead-in {
    font-size: 20px;
    text-shadow: 3px 3px 2px #696;
    font-style: italic;
    line-height: 20px;
    margin-bottom: 10px;
  }

  header.masthead .intro-heading {
    font-size: 30px;
    text-shadow: 3px 3px 2px #696;
    line-height: 30px;
    margin-bottom: 15px;
  }


  #facts .counters span {
    font-family: "Montserrat", sans-serif;
    font-weight: bold;
    font-size: 48px;
    display: block;
    color: #18d26e;
  }

  #facts .counters p {
    padding: 0;
    margin: 0 0 20px 0;
    font-family: "Montserrat", sans-serif;
    font-size: 14px;
    color: #111;
  }

  @media (min-width: 576px) and (max-width: 767.98px) {
    .card-header-logo {
      height: 192px;
    }
  }

  @media (max-width: 767.98px) {
    body {
      margin-bottom: 112px;
    }

    .footer {
      height: 112px;
    }

    .collage {
      -moz-column-count:    3;
      -webkit-column-count: 3;
      column-count:         3;
    }
    header.masthead .intro-lead-in {
      font-size: 15px;
      text-shadow: 3px 3px 2px #696;
      font-style: italic;
      line-height: 15px;
      margin-bottom: 10px;
    }

    header.masthead .intro-heading {
      font-size: 20px;
      text-shadow: 3px 3px 2px #696;
      line-height: 20px;
      margin-bottom: 15px;
    }

  }

  @media (min-width: 768px) {

    body {
      margin-bottom: 56px;
    }

    .footer {
      height: 56px;
    }

    .card-header-logo {
      height: 152px;
    }

    .collage{
      -moz-column-count:    3;
      -webkit-column-count: 3;
      column-count:         3;
    }
  }

  @media (max-width: 991px) {
    #btn-registration {
      width: 100%;
    }

    #btn-registration > a{
      white-space: normal;
    }

    .main-icons {
      font-size: 8em !important;
      color: #fff;
    }

    .back-to-top{
      display:block;
      font-size: 4em;
      color: #000000;
      position: fixed;
      bottom: 5px;
      right: 10px;
      cursor:pointer;
    }

    .icon-check{
      font-size: 1.5rem !important;
      color: #088c11;
      float:right;
    }

    .icon-null{
      font-size: 1.5rem !important;
      color: #fe0000;
      float:right;
    }

    .share-buttons{
  		text-align: left;
  	}

    .fb-share-button{
  		float: left;
  	}
  	.twitter-share-button{
  		float: left;
  		margin-left: 5px;
  	}


  }

  @media (min-width: 992px) {

    #ecsl-2017-card-title {
      height: 48px;
    }

    .main-icons {
      font-size: 12em !important;
      color: #fff;
    }
    .icon-check{
      font-size: 1rem !important;
      color: #088c11;
      float:right;
    }

    .icon-null{
      font-size: 1rem !important;
      color: #fe0000;
      float:right;
    }

    .side-bar{
      position: fixed;
      width: auto;
    }

    .side-bar-sticky{
      position: sticky;
      width: auto;
      top: 0px;
    }

    .card1{
      margin-left: 10px
    }

    #rowContainer .col-lg-3{
      padding-left: 0px;
    }

    #rowContainer .p-0{
      padding: 0rem !important;
    }

    #rowContainer .m-2{
      margin: .0rem !important;
    }

    .share-buttons{
  		text-align: right;
  	}

    .fb-share-button{
  		float: right;
  	}

  	.twitter-share-button{
  		float: right;
  		margin-right: 5px;
  	}

  }

  @media (min-width: 992px) and (max-width: 1199px){
    #btn-registration {
      width: 45%;
    }

    .collage{
      -moz-column-count:    4;
      -webkit-column-count: 4;
      column-count:         4;
    }
  }

  @media (min-width: 1200px) {

    #btn-registration {
      width: 40%;
    }

    .card-header-logo {
      height: 213px;
    }

    .collage{
      -moz-column-count:    4;
      -webkit-column-count: 4;
      column-count:         4;
    }
  }

  @media (max-width: 575px) {
    .card-header-logo {
      height: 192px;
    }

    .footer {
      line-height: 30px !important;
    }

    .collage {
      -moz-column-count:    2;
      -webkit-column-count: 2;
      column-count:         2;
    }

  }

  .carousel-item {
    height: 65vh;
    min-height: 300px;
    background: no-repeat center center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  }

  .portafolio-item{
    margin-bottom: 30px;
  }

  /* Custom Classes */

  .height-sponsors-img{
    height: 120px !important;
    width: 89px !important;

  }

  .obj-container {
    padding:  20px 20px
  }

  .tbl-container {
    width:  100%;
    height: auto;
    position: relative;
    padding:  0 !important;
    padding-bottom: 0 !important;
  }


  .right-block:before {
    display: block;
    content: " ";
    margin-top: -96px;
    height: 96px;
    visibility: hidden;
  }

  .bg-gray{
    background-color: #f2f2f2;
  }
  .shadow{
    text-shadow: 3px 3px 2px #696;
  }


</style>

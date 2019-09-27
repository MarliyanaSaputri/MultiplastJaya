<?php
if(isset($_GET['page'])){
		$page = $_GET['page'];
}else{
		$page = "home";
}

switch($page) {
		case "home":
			include "menuatas.php";
			include "head.php";
			include "sidebar.php";
			include "home.php";
			include "fot.php";
			break;
			
			case "cari":
			include "menuatas.php";
			include "head.php";
			include "sidebar.php";
			include "cari.php";
			include "fot.php";
			break;
			
			case "login":
			include "menuatas.php";
			include "head.php";
			include "proseslogin.php";
			include "home.php";
			include "fot.php";
			break;
			
		case "frmcustumer":
			include "menuatas.php";
			include "head.php";
			include "sidebar.php";
			include "custumer/frmcustumer.php";
			include "fot.php";
			break;	
			
		case "datacustumer":
			include "menuatas.php";
			include "head.php";
			include "sidebar.php";
			include "custumer/datacustumer.php";
			include "fot.php";
			break;	
			
		case "frmbarang":
			include "menuatas.php";
			include "head.php";
			include "sidebar.php";
			include "barang/frmbarang.php";
			include "fot.php";
			break;	
			
		case "databarang":
			include "menuatas.php";
			include "head.php";
			include "sidebar.php";
			include "barang/databarang.php";
			include "fot.php";
			break;

	case "frmkaryawan":
			include "menuatas.php";
			include "head.php";
			include "sidebar.php";
			include "karyawan/frmkaryawan.php";
			include "fot.php";
			break;	
			
		case "datakaryawan":
			include "menuatas.php";
			include "head.php";
			include "sidebar.php";
			include "karyawan/datakaryawan.php";
			include "fot.php";
			break;			

		case "frmselector":
			include "menuatas.php";
			include "head.php";
			include "sidebar.php";
			include "selector/frmselector.php";
			include "fot.php";
			break;				
			
		case "selector":
			include "menuatas.php";
			include "head.php";
			include "sidebar.php";
			include "selector/dataselector.php";
			include "fot.php";
			break;
			
		case "editselector":
			include "menuatas.php";
			include "head.php";
			include "sidebar.php";
			include "selector/editselector.php";
			include "fot.php";
			break;
			
		case "updateselector":
			include "selector/updateselector.php";
			break;			
		case "hasilpersonil":
			include "menuatas.php";
			include "head.php";
			include "sidebar.php";
			include "pages/charts/chthasil.php";
			include "fot.php";
			break;
			
		case "hpersonil":
			include "menuatas.php";
			include "head.php";
			include "sidebar.php";
			include "hasil/hpersonil.php";
			include "fot.php";
			break;

		case "simpancustumer":
			include "custumer/tmbcustumer.php";
			break;
		
		case "simpanselector":
			include "selector/tmbselector.php";
			break;

		case "simpanbarang":
			include "barang/tmbbarang.php";
			break;

case "simpancari":
			include "hasil/lap_hpersonil.php";
			break;			

		case "simpankaryawan":
			include "karyawan/tmbkaryawan.php";
			break;	

		case "editbarang":
			include "menuatas.php";
			include "head.php";
			include "sidebar.php";
			include "barang/editbarang.php";
				include "fot.php";
			break;	

		case "updatebarang":
			include "barang/updatebarang.php";
			break;	
			
		case "deletebarang":
			include "barang/deletebarang.php";
			break;

		case "editcustumer":
			include "menuatas.php";
			include "head.php";
			include "sidebar.php";
			include "custumer/editcustumer.php";
				include "fot.php";
			break;	
			
		case "deletecustumer":
			include "custumer/deletecustumer.php";
			break;

		case "updatecustumer":
			include "custumer/updatecustumer.php";
			break;			
			
		case "editkaryawan":
			include "menuatas.php";
			include "head.php";
			include "sidebar.php";
			include "karyawan/editkaryawan.php";
				include "fot.php";
			break;	
			
		case "deletekaryawan":
			include "karyawan/deletekaryawan.php";
			break;

		case "updatekaryawan":
			include "karyawan/updatekaryawan.php";
			break;			
					
		case "hasil":
			include "menuatas.php";
			include "head.php";
			include "sidebar.php";
			include "hasil/hasil.php";
			include "fot.php";
			break;
			
				case "hasils":
			include "menuatas.php";
			include "head.php";
			include "sidebar.php";
			include "hasil/hasil.php";
			include "fot.php";
			break;
			
			case "lap_hasil":
			include "hasil/lap_hasil.php";
			break;
			case "lap_hpersonil":
			include "hasil/lap_hpersonil.php";
			break;
			case "lap_barang":
			include "barang/lap_barang.php";
			break;
			
		case "hasilse":
			include "menuatas.php";
			include "head.php";
			include "sidebar.php";
			include "selector/hasilse.php";
			include "fot.php";
			break;
			
			
}
?>
<?php
include_once('../config/symbini.php');
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/templates/index.'.$LANG_TAG.'.php')) include_once($SERVER_ROOT.'/content/lang/templates/index.en.php');
else include_once($SERVER_ROOT.'/content/lang/templates/index.'.$LANG_TAG.'.php');
header('Content-Type: text/html; charset=' . $CHARSET);
?>
<!DOCTYPE html>
<html lang="<?php echo $LANG_TAG ?>">
<head>
	<title><?php echo $DEFAULT_TITLE; ?> <?php echo $LANG['HOME']; ?></title>
	<?php
	include_once($SERVER_ROOT . '/includes/head.php');
	include_once($SERVER_ROOT . '/includes/googleanalytics.php');
	?>
</head>
<body>
	<?php
	include($SERVER_ROOT.'/includes/header.php');
	?>	
	<div id="innertext">
		<h1>Bernice P. Bishop Museum Historical Maps</h1>
		<p>The maps below are historical maps collected and compiled by collectors and curators in the Malacology collection primarily across the islands of the Pacific.
		The <b>Description</b> column gives more detail about what each map contains, though some geographic areas are listed under old names.
		Click on the <b>View</b> column to view or download a map. </br></br>All data is owned by the Bernice P. Bishop Museum. If you have any questions, please contact BPBM Malacology staff.</p>
		
		<table>
			<tr>
				<th>BPBM Map Number</th>
				<th>Description</th>
				<th>View</th>
			</tr>
			<tbody>
				<tr>
					<td>1</td>
					<td>Belau; Belau; Beliliou (Peleliu)</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0001__Belau;_Belau;_Peleliu;_Kondo_(Hand_drawn).pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>2</td>
					<td>Belau; Belau; Oreor (Koror)</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0002__Belau;_Belau;_Koror;_Malakal_Harbor_&amp;_Approaches;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>3</td>
					<td>Belau; Belau; Angaur (Official name: Ngeaur)</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0003__Belau;_Belau;_Angaur_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>3.1</td>
					<td>Belau; Belau; Angaur (Official name: Ngeaur)</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0003.1__Belau.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>4</td>
					<td>Belau; Belau; Babelthuap, Koror, Urukthapel, Eil Malk, Ngardolok, Angaur I.  (Palai)</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0004__Belau.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>5</td>
					<td>Belau; Belau; Babeldaob, Ngaregolang, Ngerard, Ngardua; Goreor</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0005__Belau;_Babldaob_and_Ngarklden;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>6</td>
					<td>Belau; Belau; Isla Peleliu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0006__Belau;_Belau;_Peleliu;_Carl_G._Semper's_1862_trip.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>7</td>
					<td>Micronesia; Truk: Truk Islands; Moen; Dublon; Fefan; Udot; Tol</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0007__Micronesia;_Truk_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>8</td>
					<td>Micronesia; Truk: Truk Islands; Moen; Dublon; Dublon; Tol; Fefan</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0008__Micronesia;_Truk_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>9</td>
					<td>Marshall Islands, Gilberts, Caroline; Marianas, Kazan; Bonin</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0009__Pacific_Islands_(West).pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>10</td>
					<td>Micronesia; Pohnpei</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0010__Micronesia;_Ponape;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>11</td>
					<td>Micronesia; Pohnpei</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0011__Micronesia;_Pohnpei;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>13</td>
					<td>Micronesia; Pohnpei</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0013__Micronesia;_Pohnpei;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>14</td>
					<td>Micronesia; Pohnpei</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0014__Micronesia;_Pohnpei.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>15</td>
					<td>Micronesia; Yap</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0015__Micronesia;_Yap_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>16</td>
					<td>Micronesia; Yap</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0016__Micronesia;_Yap;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>17</td>
					<td>Micronesia; Kosrae</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0017__Micronesia;_Kosrae;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>17.1</td>
					<td>Micronesia; Kosrae</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0017.1__Micronesia;_Kosrae;_notation_on_back_side_or_#0017;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>18</td>
					<td>Micronesia</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0018__Micronesia_(Yoshio_Kondo's_notes).pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>19</td>
					<td>Micronesia; Yap; Fais (Carolines)</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0019__Micronesia;_Yap;_Fais_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>20</td>
					<td>Micronesia; Truk Truk Islands; Tol Island; Tol Harbor</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0020__Micronesia;_Truk;_Tol_Island;_Tol_Harbor.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>21</td>
					<td>Micronesia; Pohnpei</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0021__Micronesia;_Pohnpei_(German_and_Japanese_Survey_to_1918).pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>22</td>
					<td>Micronesia; Kosrae</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0022__Belau;_Belau;_Kosrae.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>23</td>
					<td>Micronesia; Pohnpei</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0023__Micronesia;_Pohnpei.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>24</td>
					<td>Micronesia; Truk Truk Island with Losan &amp; Nama Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0024__Micronesia;_Truk_Islands;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>25</td>
					<td>Micronesia; Truk Truk Islands; Tol Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0025__Micronesia;_Truk;_Tol_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>26</td>
					<td>Micronesia; Truk Truk Islands; Moen , Udot</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0026__Micronesia;_Truk;_Truk_Islands;_Moen_and_Udot.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>27</td>
					<td>Micronesia; Truk Truk Islands; Dublon, Fefan</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0027__Micronesia;_Truk;_Dublon_and_Fefan;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>28</td>
					<td>Micronesia; Yap; Woleai Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0028__Micronesia;_Yap;_Woleai_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>29</td>
					<td>Micronesia; Yap; Tomil Harbor</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0029__Micronesia;_Yap;_Yap;_Tomil_Harbor;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>30</td>
					<td>Micronesia; Truk; Truk Islands; Tol Group; Polle, Illick Harbor</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0030__Micronesia;_Truk;_Truk_Islands;_Tol_Group;_Polle_Island;_Illick_Harbor.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>31</td>
					<td>Micronesia; Truk Truk Islands; Tsis; Tsis Anchorage</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0031__Micronesia;_Truk;_Truk;_Tsis_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>38</td>
					<td>Trust Territory of the Pacific Islands, Northern Marianas, Caroline and Marshall Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0038__Pacific_Islands_(North).pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>40</td>
					<td>Pacific Ocean</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0040__Pacific_Islands;_1980_edition.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>41</td>
					<td>Pacific Ocean</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0041__Pacific_Islands;_1982_edition.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>42</td>
					<td>Family Distribution Chart</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0042__(Table_of_Terrestrial_mollusk_distribution).pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>45</td>
					<td>Belau; Belau; Oreor</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0045.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>46</td>
					<td>Pacific Islands West of Hawaii</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0046.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>47</td>
					<td>Belau; Ngcheangel (Kayangel)</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0047.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>48</td>
					<td>Belau; Kosso Reef                 </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0048.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>49</td>
					<td>Belau; Cormoran Reef</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0049.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>50</td>
					<td>Micronesia                            </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0050.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>51</td>
					<td>Pacific Area                          </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0051.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>52</td>
					<td>Belau; Palau Islands              </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0052.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>53</td>
					<td>Belau; Belau; Mecherchar (Eil Malk)</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0053.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>54</td>
					<td>Belau; Belau; Ngeaur             </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0054.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>55</td>
					<td>Belau; Belau; Oreor               </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0055.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>56</td>
					<td>Belau; Belau; Babeldaob I (N) </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0056.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>56.1</td>
					<td>Belau; Belau; Babeldaob I (N) </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0056.1.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>57</td>
					<td>Belau; Belau; Babeldaob I (N) </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0057.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>57.1</td>
					<td>Belau; Belau; Babeldaob I (N) </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0057.1.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>58</td>
					<td>Belau; West Reef</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0058.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>59</td>
					<td>Belau; Belau; Ngebedangel (Ngobasangel)</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0059.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>60</td>
					<td>Belau; Belau                         </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0060.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>61</td>
					<td>Belau; Belau; Oreor; Garreru Anchorage and Koror Road</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0061.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>62</td>
					<td>Belau; Belau; Babeldaob Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0062.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>63</td>
					<td>Belau; Belau; Babeldaob Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0063.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>64</td>
					<td>Belau; Belau; Babeldaob Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0064.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>65</td>
					<td>Micronesia; Truk; Truk Islands; Moen</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0065.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>66</td>
					<td>Micronesia; Truk; Truk Islands; Udot</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0066.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>67</td>
					<td>Micronesia; Truk; Truk Islands; Fefan</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0067.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>68</td>
					<td>Micronesia; Truk; Truk Islands; Polle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0068.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>69</td>
					<td>Micronesia; Yap; Faraulep Island to Belau; Belau</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0069.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>71</td>
					<td>Micronesia; Yap; Ulithi Island, Satawal Island, Gaferut Island, and Olimarao Islands; and Truk; Hall Islands; West Fayu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0071.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>73</td>
					<td>Micronesia; Kosrae                </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0073.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>74</td>
					<td>Micronesia; Pohnpei; Ponape, Pakin, and  Ant Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0074.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>75</td>
					<td>Micronesia                            </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0075.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>76</td>
					<td>Northern Marianas; Saipan and Tinian Islands  </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0076_Marianas;_Saipan_&amp;_Tinian.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>78</td>
					<td>Northern Marianas; Aguijan (Agiguan) Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0078_Marianas;_Aguijan_(Agiguan).pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>79</td>
					<td>Northern Marianas; Saipan and Tinian Islands  </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0079_Marianas;_Saipan,_Tinian_and_Agiguan.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>79.1</td>
					<td>Northern Marianas; Aguijan (Agiguan) Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0079.1_Marianas;_Agiguan.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>80</td>
					<td>Northern Marianas; Rota; Poniya Point</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0080_Marianas;_Rota_Island;_Poniya_Point.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>81</td>
					<td>Northern Marianas; Rota; Efuenaarukosu Point</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0081_Marianas;_Rota;__Efuenaarukos_Pt._(FADED).pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>82</td>
					<td>Northern Marianas; Aguijan (Agiguan) Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0082__Aguijan.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>83</td>
					<td>Guam</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0083__Guam.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>84</td>
					<td>Marianas</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0084_Marianas_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>85</td>
					<td>Marianas</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0085_Marianas_islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>86</td>
					<td>Northern Marianas; Rota</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0086_Marianas;_Rota_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>87</td>
					<td>Northern Marianas; Aguijan (Agiguan) Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0087_Marianas;_Agiguan;_1950.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>88</td>
					<td>Northern Marianas; Rota</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0088_Marianas;_Rota.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>89</td>
					<td>Northern Marianas; Saipan</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0089_Marianas;_Saipan.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>90</td>
					<td>Northern Marianas; Saipan</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0090_Marianas;_Saipan.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>91</td>
					<td>Northern Marianas; Rota; Northeast</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0091_Marianas;__Rota;_NE.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>92</td>
					<td>Northern Marianas; Rota; Southeast</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0092_Marianas;__Rota;_SE.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>93</td>
					<td>Northern Marianas; Rota; Southwest</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0093__Marianas;__Rota;_SW.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>94</td>
					<td>Northern Marianas; Rota</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0094__Marianas;__Rota.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>95</td>
					<td>Northern Marianas; Rota</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0095__Marianas;_Rota.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>96</td>
					<td>Northern Marianas; Saipan</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0096_Marianas;__Saipan.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>97</td>
					<td>Northern Marianas; Saipan &amp; Tinian Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0097__Marianas;__Saipan,_Tinian_and_Aguijan.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>98</td>
					<td>Northern Marianas; Saipan</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0098__Marianas;_Saipan;__March_1945.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>99</td>
					<td>Northern Marianas; Saipan &amp; Tinian Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0099_Marianas;__Saipan_and_Tinian.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>99.1</td>
					<td>Northern Marianas; Saipan &amp; Tinian Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0099.1__Marianas;__Saipan_and_Tinian.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>99.2</td>
					<td>Northern Marianas; Saipan &amp; Tinian Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0099.2__Marianas;__Saipan_and_Tinian.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>99.3</td>
					<td>Northern Marianas; Saipan &amp; Tinian Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0099.3__Marianas;___Saipan_and_Tinian;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>99.4</td>
					<td>Northern Marianas; Saipan &amp; Tinian Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0099.4_Marianas;_Saipan_and__Tinian;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>100</td>
					<td>Northern Marianas; Maniagassa Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0100_Maniagassa;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>100.1</td>
					<td>Northern Marianas; Saipan &amp; Tinian Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0100.1__Marianas;__Saipan_and_Tinian.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>100.2</td>
					<td>Northern Marianas; Saipan &amp; Tinian Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0100.2__Marianas;__Saipan_and_Tinian.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>100.3</td>
					<td>Northern Marianas; Saipan &amp; Tinian Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0100.3__Marianas;__Saipan_and_Tinian.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>100.4</td>
					<td>Northern Marianas; Saipan &amp; Tinian Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0100.4__Marianas;__Saipan_and_Tinian.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>101</td>
					<td>Northern Marianas; Saipan; Banadero</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0101__Marianas;__Saipan;_Banadero.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>102</td>
					<td>Northern Marianas; Saipan; Puntan Lau lau Katan</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0102__Marianas;__Saipan;_Punta_Laulau_Kantan.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>103</td>
					<td>Northern Marianas; Saipan; South Chalan Kanoa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0103__Marianas;__Saipan;_South_Chalan_Kanoa.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>104</td>
					<td>Northern Marianas; Saipan; Tanapag</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0104__Marianas;__Saipan;_Tanapag.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>105</td>
					<td>Northern Marianas; Saipan; North Chalan Kanoa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0105__Marianas;__Saipan;_North_Chalan_Kanoa.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>107</td>
					<td>Northern Marianas; Pagan Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0107_Marianas;_Pagan;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>108</td>
					<td>Northern Marianas</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0108_Marianas;_Pagan;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>109</td>
					<td>Northern Marianas</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0109__Marianas.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>110</td>
					<td>Northern Marianas; Anataun Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0110__Marianas;__Anatahan.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>111</td>
					<td>Northern Marianas; Agrihan Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0111__Marianas;__Agrihan,_Uracus,_and_Maug.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>112</td>
					<td>Northern Marianas; Pagan Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0112_Marianas;_Pagan;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>113</td>
					<td>Northern Marianas; Maug Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0113_Marianas;_Maug;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>114</td>
					<td>Northern Marianas; Pagan Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0114__Marianas;_Pagan.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>115</td>
					<td>Northern Marianas; Pagan Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0115__Marianas;_Pagan.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>116</td>
					<td>Northern Marianas; Pagan Island; Shomushom</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0116__Marianas;_Pagan;_Shomushon.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>117</td>
					<td>Northern Marianas; Pagan Island; Shomushom</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0117_Marianas;_Pagan;_Northern_half;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>118</td>
					<td>Northern Marianas; Pagan Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0118_Marianas;_Pagan;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>119</td>
					<td>Northern Marianas; Pagan Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0119_Marianas;__Pagan;_Southern_half;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>120</td>
					<td>Northern Marianas; Pagan Island; Shomushom</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0120_Marianas;__Pagan;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>121</td>
					<td>Northern Marianas; Farallon de Pajaros</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0121_Marianas;_Uracus;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>122</td>
					<td>Northern Marianas; Rota; Poniya Point</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0122__Marianas;__Rota;_Poniya_Point.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>123</td>
					<td>Northern Marianas; Rota</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0123__Marianas;__Rota.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>124</td>
					<td>Northern Marianas; Rota; Efuenaarukosu Point</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0124__Marianas;_Rota;_Efuenaarukosu_Point.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>125</td>
					<td>Northern Marianas; Farallon de Pajaros</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0125_Marianas;_Uracus.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>126</td>
					<td>Northern Marianas; Maug Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0126___Marianas;__Maug.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>127</td>
					<td>Northern Marianas; Saipan Island; Tanapag</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0127__Marianas;__Saipan;_Tanapag.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>128</td>
					<td>Northern Marianas; Saipan Island; Banadero</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0128__Marianas;__Saipan;_Banadero.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>129</td>
					<td>Northern Marianas; Saipan Island; Puntan Laulau Katan</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0129__Marianas;__Saipan;_Punta_Laulau_Katan.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>130</td>
					<td>Northern Marianas; Saipan Island; South Chalan Kanoa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0130__Marianas;__Saipan;_South_Chalan_Kanoa.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>131</td>
					<td>Northern Marianas; Saipan Island; North Chalan Kanoa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0131__Marianas;__Saipan;_North_Chalan_Kanoa.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>132</td>
					<td>Northern Marianas; Rota; Poniya Point</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0132__Marianas__Rota;_Poniya_Point.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>133</td>
					<td>Northern Marianas; Rota; Efuenaarukosu Point</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0133__Marianas;_Rota;_Efuenaarukosu_Point.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>134</td>
					<td>Northern Marianas; Rota Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0134__Marianas;_Rota.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>135</td>
					<td>Guam</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0135__Guam.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>136</td>
					<td>Guam</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0136__Guam;__Uruno_Point.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>136.1</td>
					<td>Guam</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0136.1__Guam;__Ritidian_Point.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>136.2</td>
					<td>Guam</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0136.2__Guam;_Tumon_Bay.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>136.3</td>
					<td>Guam</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0136.3__Guam;_Santa_Rosa.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>136.4</td>
					<td>Guam</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0136.4__Guam;_Apra_Harbor.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>136.5</td>
					<td>Guam</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0136.5__Guam;_Agana_Bay.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>136.6</td>
					<td>Guam</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0136.6__Guam;_Pagat_Point.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>136.7</td>
					<td>Guam</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0136.7__Guam;_Agat_Bay.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>136.8</td>
					<td>Guam</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0136.8__Guam;__Talofofo_Bay.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>136.9</td>
					<td>Guam</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0136.9__Guam;_Port_Merizo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>137</td>
					<td>Guam</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0137_Guam.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>138</td>
					<td>Guam</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0138_Guam;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>139</td>
					<td>Guam</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0139_Guam;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>140</td>
					<td>Guam</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0140__Guam.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>141</td>
					<td>Guam</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0141__Guam.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>142</td>
					<td>Guam</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0142__Guam.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>143</td>
					<td>Guam</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0143_Guam;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>144</td>
					<td>Ogasawara Gunto; Chichi Shima and Approaches</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0144__Ogasawara_Gunto;__Chichi_Shima.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>145</td>
					<td>Ogasawara Gunto; Haha Shima and Approaches</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0145__Ogasawara_Gunto;_Haha_Shima.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>146</td>
					<td>Ogasawara Gunto; Chichi Shima and Approaches</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0146__Ogasawara_Gunto;__Chichi_Shima.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>147</td>
					<td>Ogasawara Gunto; Haha Shima and Approaches</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0147__Ogasawara_Gunto;__Haha_Shima.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>148</td>
					<td>Ogasawara Gunto; and Volcano Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0148__Ogasawara_Gunto_and_Kazan_Retto.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>149</td>
					<td>Ogasawara Gunto; Muko-shima</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0149__Ogasawara_Gunto;_Muko_Shima.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>150</td>
					<td>Ogasawara Gunto; Nishino-Shima</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0150__Ogasawara_Gunto;__Nishino_Shima.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>151</td>
					<td>Ogasawara Gunto; Nakodo-shima</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0151_Ogasawara_Gunto;_Nakodo_Shima;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>152</td>
					<td>Ogasawara Gunto; Yome-shima</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0152__Ogasawara_Gunto;__Yome_Shima.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>153</td>
					<td>Ogasawara Gunto; Ototo-Jima</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0153__Ogasawara_Gunto;__Ototo_Jima.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>154</td>
					<td>Ogasawara Gunto; Chichi Shima</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0154__Ogasawara_Gunto;__Chichi_Shima.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>155</td>
					<td>Ogasawara Gunto; Haha Shima North</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0155__Ogasawara_Gunto;__Haha_Shima;_North.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>156</td>
					<td>Ogasawara Gunto; Ane-Shima South</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0156__Ogasawara_Gunto;__Ane_Shima;_South.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>157</td>
					<td>Japan; Southern Japanese Islands; Chichi-Jima</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0157_Ogasawara;_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>158</td>
					<td>Japan; Southern Japanese Islands; Haha-Jima</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0158__Ogasawara_Gunto;__Haha_Jima.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>159</td>
					<td>Northern Marianas; Farallon de Pajaros</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0159__Marianas;__Uracas_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>160</td>
					<td>Northern Marianas; Maug Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0160__Marianas;__Maug.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>161</td>
					<td>Northern Marianas; Asuncion Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0161__Marianas;__Asuncion_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>162</td>
					<td>Japan; Volcano Islands; Kita-Jo-Jima</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0162__Ogasawara_Gunto;__Kita_io_jima.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>163</td>
					<td>Japan; Volcano Islands; Io-Jima</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0163__Ogasawara_Gunto;__Io_Jima.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>164</td>
					<td>Japan; Volcano Islands; Minami-Io-Jima</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0164__Ogasawara_Gunto;__Minami_io_jima.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>165</td>
					<td>Japan; Iwo Jima</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0165__Japan;__Iwo_Jima.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>166</td>
					<td>Fiji Islands to Samoa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0166__Fiji_to_Samoa.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>167</td>
					<td>Fiji; Anchorage</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0167__Fiji;_Ono-I-Lau;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>167.1</td>
					<td>Fiji</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0167.1__Fiji;_Tuvana-I-Tholo;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>167.2</td>
					<td>Fiji</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0167.2__Fiji;_Ono-I-Lau;_Anchorage;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>168</td>
					<td>Fiji; Lau Group; Vatoa Islands; STH Lau Group</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0168__Fiji;_Lau_Group;_Vatoa_Island;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>169</td>
					<td>Fiji; </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0169__Fiji.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>170</td>
					<td>Fiji; Moala Group; Matuku</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0170__Fiji;_Moala_Group;_Matuku.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>171</td>
					<td>Fiji; Moala Group; Matuku</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0171__Fiji;_Lau_Group;_Matuku_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>172</td>
					<td>Fiji; Moala Group; Moala Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0172__Fiji;_Lau_Group;_Moala_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>173</td>
					<td>Fiji; Moala Group; Moala Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0173__Fiji;_Lau_Group;_Moala_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>174</td>
					<td>Fiji; Moala Group; Toyota Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0174__Fiji;_Lau_Group;_Totoya_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>175</td>
					<td>Fiji; Moala Group; Toyota Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0175__Fiji;_Totoya.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>176</td>
					<td>Fiji; Taeuni; North Vanua Levu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0176__Fiji;_Vanua_Levu;_Taveuni_North.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>177</td>
					<td>Fiji; Taeuni; South Vanua Levu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0177__Fiji;_Vanua_Levu;_Taveuni_South.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>178</td>
					<td>Fiji; Vanua Levu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0178__Fiji;_Vanua_Levu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>179</td>
					<td>Fiji; Eastern Archipelago</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0179__Fiji;_Eastern_Archipelago;_Yoshio_Kondo;_Annotated.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>180</td>
					<td>Fiji; Moala Group; Moala Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0180__Fiji;_Moala_Group;_Moala_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>181</td>
					<td>Fiji; Moala Group; Matuku</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0181__Fiji;_Moala_Group;_Matuku.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>182</td>
					<td>Fiji; Lomaiviti Group; Ngau</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0182__Fiji;_Lomaiviti_Group;_Ngau_which_is_now_Gau.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>183</td>
					<td>Fiji; Moala Group; Toyota Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0183__Fiji;_Lau_Group;_Totoya_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>184</td>
					<td>Fiji; Lau Group; North Central</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0184__Fiji;_Lau_Group;_C.M._Cooke_Jr..pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>185</td>
					<td>Fiji; Lau Group</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0185__Fiji;_Lau_Group;_Yoshio_Kondo;_Annotated.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>186</td>
					<td>Fiji; Lau Group</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0186__Fiji;_Lau_Group;_Annotated.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>187</td>
					<td>Fiji; Lau Group</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0187__Fiji;_Lau_Group.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>188</td>
					<td>Fiji; Lau Group; Southern Lau Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0188__Fiji;_Lau_Group;_southern_section.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>189</td>
					<td>Fiji; Viti Levu Group; Viti Levu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0189__Fiji;_Viti_Levu;_Yoshio_Kondo_and_St._John;_Annotated.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>190</td>
					<td>Fiji; </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0190_Fiji.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>191</td>
					<td>Fiji; Lau Group; Vanua Balava</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0191__Fiji;_Lau_Group;_Vanuabalavu;_Annotated.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>192</td>
					<td>Fiji; Viti Levu Group; Viti Levu; East coast and adjacent Islands to the Eastward</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0192_Fiji;_Viti_Levu;_east_coast.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>193</td>
					<td>Fiji; Eastern Archipelago (Southern Portion)</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0193__Fiji;_Eastern_Archipelago.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>194</td>
					<td>Fiji; Viti Levu Group; Viti Levu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0194__Fiji;_Viti_Levu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>195</td>
					<td>Fiji; </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0195__Fiji.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>196</td>
					<td>Fiji; Fiji Outliers; Rotuma</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0196__Fiji;_Rotuma;_Harold_St._John,_1938.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>197</td>
					<td>Fiji; Viti Levu Group; Ovalau and Motoriki</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0197__Fiji;_Lomaitiviti;_Ovalau_and_Moturiki_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>198</td>
					<td>Fiji; Viti Levu Group; Kandavu Island and Passage</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0198__Fiji;_Viti_Levu_Group;_Kandavu_Island_and_Passage.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>199</td>
					<td>Marshall Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0199__Pacific_Island_Groups.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>200</td>
					<td>Trust Territory of the Pacific Islands, Northern Marianas, Caroline and Marshall Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0200__Pacific_Island_Groups.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>201</td>
					<td>Marshall Islands; Ralik Chain; Enewetak Atoll and Vicinity</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0201__Marshall_Islands;_Enewitok.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>202</td>
					<td>Marshall Islands; Ralik chain; Bikini Lagoon</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0202__Marshall_Islands;_Bikini;_lagoon,_northeastern_corner;_countour_chart.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>203</td>
					<td>Marshall Islands; Ralik Chain; Rongelap</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0203__Marshall_Islands;_Rongelap;_lagoon;_contour_chart.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>204</td>
					<td>Marshall Islands; Ralik Chain; Enewetak</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0204__Marshall_Islands;_Enewetok;_lagoon.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>205</td>
					<td>Marshall Islands; Northeast</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0205__Marshall_Islands;_northern_side.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>206</td>
					<td>Marshall Islands; Ralik Chain; Rongrik</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0206__Marshall_Islands;_Rongerik;_lagoon;_contour_chart.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>207</td>
					<td>Marshall Islands; Ralik chain; Bikini Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0207__Marshall_Islands;_Bikini_Island;_distribution_of_bottom_material.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>208</td>
					<td>Marshall Islands; Ralik chain; Bikini Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0208__Marshall_Islands;_Bikini_Island;_beach_profile.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>208.1</td>
					<td>Marshall Islands; Ralik chain; Bikini Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0208.1__Marshall_Islands;_Bikini_Atoll;_sonic_soundings_off_reef.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>209</td>
					<td>Marshall Islands; Ralik Chain; Enewetak</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0209__Marshall_Islands;_Eniwetok_Atoll;_beach_profiles.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>210</td>
					<td>Marshall Islands; Ralik Chain; Rongelap</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0210__marshall_Islands;_Ralik_Chain;_Rongelap_Atoll;_beach_profiles.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>211</td>
					<td>Marshall Islands; </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0211__Marshall_Islands;_Chamisso's_hydrographic_chart_5413.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>212</td>
					<td>Marshall Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0212__World;_Distribution_of_reefs_and_related_controlling_sea_surface_temperatures;_1950.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>213</td>
					<td>Marshall Islands; </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0213__Marshall_Islands;_surge_channels_and_slump_areas.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>214</td>
					<td>Marshall Islands; Ralik Chain; Rongelap</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0214__Marshall_Islands;_Ralik_Chain;_Rongelap_Atoll;_sonic_soundings.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>215</td>
					<td>Marshall Islands; Ralik chain; Bikini Atoll</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0215__Marshall_Islands;_Guyot_northeast_of_Bikini_Atoll.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>216</td>
					<td>Marshall Islands; Ralik chain; Bikini Island; Bikini Lagoon</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0216__Marshall_Islands;_Ralik_Chain;_Bikini_Atoll.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>217</td>
					<td>Marshall Islands; Ralik chain; Bikini Atoll and Sylvania Guyot</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0217__Marshall_Islands;_Ralik_Chain;_Bikini_Atoll_and_Sylvania_Guyot.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>218</td>
					<td>Marshall Islands; Ralik Chain; Rongelap Atoll</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0218__Marshall_Islands;_Ralik_Chain;_Rongelap_Atoll.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>219</td>
					<td>Marshall Islands; Ralik Chain; Rongelap, Rongerik, and Ailinginae Atolls and Vicinity</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0219__Marshall_Islands;_Ralik_Chain;_Rongelap,_Rongerik,_Alinginae_Atoll.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>220</td>
					<td>Marshall Islands; Southern Part</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0220__Marshall_Islands;_South_part.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>221</td>
					<td>Pacific (South) Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0221__South_Pacific_Islands;_C.M._Cooke_Jr..pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>222</td>
					<td>French Polynesia; Tuamotu Archipelago; Raroia; and Gambier Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0222__French_Polynesia;_Raroia_and_Mangareva;_C.M._Cooke_Jr..pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>223</td>
					<td>French Polynesia; Gambier Islands; Mangareva Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0223__French_Polynesia;_Mangareva;_C.M._Cooke_Jr..pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>224</td>
					<td>French Polynesia; Gambier Islands; Mangareva Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0224__French_Polynesia;_Mangareva;_soil_distribution;_C.M._Cooke_Jr..pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>225</td>
					<td>Pacific; Hawaii to Marquesas; South Pacific</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0225__Pacific_Islands;_C.M._Cooke_Jr.,_1923.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>225.1</td>
					<td>Pacific; Hawaii to Marquesas; South Pacific</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0225.1__Pacific_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>225.2</td>
					<td>Pacific; Hawaii to Marquesas; South Pacific</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0225.2__Pacific_Ocean;_route_of_the_Mangarevan_Expedition.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>225.3</td>
					<td>Pacific; Hawaii to Marquesas; South Pacific</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0225.3__Pacific_Islands;_(South).pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>225.4</td>
					<td>Pacific; Hawaii to Marquesas; South Pacific</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0225.4_Pacific_Islands;_(south).pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>225.5</td>
					<td>Pacific; Hawaii to Marquesas; South Pacific</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0225.5__Pacific_Islands;_Mangarevan_Expedition;_Route_of_the_Islander.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>226</td>
					<td>Pitcairn Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0226.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>226.1</td>
					<td>Pitcairn Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0226.1.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>226.2</td>
					<td>Pitcairn Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0226.2.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>227</td>
					<td>Pacific (south); Marquesas, Tuamotu Archipelago, Society Islands, Tubuac or Austral Is., Rapa, Pitcairn, Henderson, Ducie</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0227__Pacific_Islands_(South);_routes_of_the_Cuming_and_Mangarevan_Expeditions.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>228</td>
					<td>French Polynesia; Gambier Islands; Mangareva Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0228__French_Polynesia;_Mangareva;_(hand_drawn_by_H._St._John).pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>229</td>
					<td>Pitcairn Islands; Oeno Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0229__Pitcairn;_Oeno_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>230</td>
					<td>Pitcairn Islands; Henderson, Ducie, Pitcairn, Oeno</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0230__Pacific_Islands_(South);_Henderson,_Ducie,_Oeno_and_Pitcairn.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>231</td>
					<td>Pitcairn Islands; Pitcairn Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0231__Pitcairn.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>232</td>
					<td>Pitcairn Islands; Henderson Island, and Ducie Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0232__Pitcairn;_Henderson_and_Ducie_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>233</td>
					<td>French Polynesia; Tuamotu Archipelago; Raroia; and Gambier Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0233__French_Polynesia;_Tuamotu;_Raroia_and_Mangareva.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>234</td>
					<td>French Polynesia; Gambier Islands; Mangareva Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0234__French_Polynesia;_Mangareva.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>235</td>
					<td>Pacific (South)</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0235__Pacific_Islands;_(Mangarevan_Expedition;_route_of_the_Islander).pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>236</td>
					<td>French Polynesia; Tuamotu Archipelago</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0236__French_Polynesia;_Tuamotu_Archipelago.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>237</td>
					<td>French Polynesia; Tuamotu Archipelago</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0237__French_Polynesia;_Tuamotu_Archipelago.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>238</td>
					<td>French Polynesia; Society Islands; Huahine</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0238__French_Polynesia;_Society_Islands;_Huahine_(Hand_drawn_1934).pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>239</td>
					<td>French Polynesia; Society Islands; Tahiti Nui</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0239__French_Polynesia;_Society_Islands;_Tahiti_Nui_(Hand_Drawn).pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>241</td>
					<td>French Polynesia; Society Islands; Tahiti</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0241__French_Polynesia;_Society_islands;_Tahiti_Nui;_Crampton.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>242</td>
					<td>French Polynesia; Society Islands; Moorea</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0242__French_Polynesia;_Society_Islands;_Moorea.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>243</td>
					<td>French Polynesia; Society Islands; Moorea</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0243__French_Polynesia;_Society_Islands;_Moorea.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>244</td>
					<td>French Polynesia; Society Islands; Huahine</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0244__French_Polynesia;_Society_Islands;_Huahine.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>245</td>
					<td>French Polynesia; Society Islands; Huahine to Maupiti</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0245__French_Polynesia;_Society_Islands;_Huanie_to_Maupiti.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>246</td>
					<td>French Polynesia; Society Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0246__French_Polynesia;_Society_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>247</td>
					<td>French Polynesia; Society Islands; Huahine</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0247__French_Polynesia;_Society_Islands;_Huahine.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>248</td>
					<td>Pacific Ocean</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0248__Pacific_Ocean;_Islands_and_continents.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>249</td>
					<td>French Polynesia; Society Islands; Bora Bora Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0249__French_Polynesia;_Society_Islands;_Bora_Bora.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>250</td>
					<td>French Polynesia; Society Islands; Tahaa and Raiatea</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0250__French_Polynesia;_Society_Islands;_Tahaa.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>251</td>
					<td>French Polynesia; Society Islands; Huahine to Maupiti</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0251__French_Polynesia;_Society_Islands;__Huahine_to_Maupiti.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>252</td>
					<td>French Polynesia; Society Islands; Huahine to Maupiti</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0252__French_Polynesia;_Society_Islands;_Huanine_to_Maupiti.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>253</td>
					<td>French Polynesia; Austral Islands; Rapa Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0253__French_Polynesia;_Austral_Islands;_Rapa.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>254</td>
					<td>French Polynesia; Austral Islands; Tubuai Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0254__French_Polynesia;_Austral_Islands;_Tubuai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>255</td>
					<td>French Polynesia; Austral Islands; Rurutu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0255__French_Polynesia;_Austral_Islands;_Rurutu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>256</td>
					<td>French Polynesia; Austral Islands; Rimatara; Raivavae</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0256__French_Polynesia;_Austral_Islands;_Raivavae_and_Rimatara_(Hand_Drawn_by_Yoshio_Kondo_8_Sept._1978).pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>257</td>
					<td>French Polynesia; Austral Islands; Tubuai Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0257__French_Polynesia;_Austral_Islands;_Tubuai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>258</td>
					<td>French Polynesia; Austral Islands; Tubuai Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0258__French_Polynesia;_Austral_Islands;_Tubuai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>259</td>
					<td>French Polynesia; Austral Islands; Vavitao or Raivavae</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0259__French_Polynesia;_Austral_Islands;_Ravaivae.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>260</td>
					<td>French Polynesia; Austral Islands; Rapa Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0260__French_Polynesia;_Austral_Islands;_Rapa;_(Sketched_by_H._St._John).pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>261</td>
					<td>French Polynesia; Austral Islands; Rapa Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0261__French_Polynesia;_Austral_Islands;_Rapa;_(Sketch_by_St._John).pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>262</td>
					<td>French Polynesia; Austral Islands; Raivavae Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0262__French_Polynesia;_Austral_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>265</td>
					<td>French Polynesia; Austral Islands; Rapa Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0265_Rapa.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>266</td>
					<td>French Polynesia; Austral Islands; Raivavae Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0266.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>267</td>
					<td>French Polynesia; Austral Islands; Rurutu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0267.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>268</td>
					<td>French Polynesia; Austral Islands; Raivavae Island </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0268.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>269</td>
					<td>French Polynesia; Austral Islands; Tubuai Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0269.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>270</td>
					<td>French Polynesia; Austral Islands; Tubuai Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0270__French_Polynesia;_Austral_Islands;_Tubuai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>271</td>
					<td>French Polynesia; Austral Islands; Raivavae Island </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0271__French_Polynesia;_Austral_Islands;_Raivavae_and_Rurutu_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>272</td>
					<td>French Polynesia; Austral Islands; Raivavae Island </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0272__French_Polynesia;_Austral_Islands;_Raivavae_and_Rurutu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>273</td>
					<td>French Polynesia; Austral Islands; Tubuai Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0273__French_Polynesia;_Austral_Islands;_Tubuai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>274</td>
					<td>French Polynesia; Society Islands; Raiatea</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0274.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>275</td>
					<td>French Polynesia; Society Islands; Raiatea</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0275.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>276</td>
					<td>Pacific; Hawaii to Rapa, and East to Ducie</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0276__Pacific_Islands;_(Mangarevan_Expedition;_route_of_the_Islander).pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>278</td>
					<td>French Polynesia; Marquesas</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0278.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>279</td>
					<td>French Polynesia; Marquesas; Hiva-oa, Tahuata, and Motane</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0279.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>280</td>
					<td>French Polynesia; Marquesas; Nuku Hiva</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0280.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>281</td>
					<td>French Polynesia; Marquesas; Fatu Hiva and Mouillages</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0281.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>282</td>
					<td>French Polynesia; Marquesas; Ua Huka et Ua Pou Mouillages</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0282.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>284</td>
					<td>French Polynesia; Marquesas; Hiva Oa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0284.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>285</td>
					<td>French Polynesia; Marquesas; Hiva Oa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0285.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>286</td>
					<td>French Polynesia; Marquesas; Nuku Hiva </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0286.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>287</td>
					<td>French Polynesia; Marquesas; Hiva Oa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0287.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>288</td>
					<td>French Polynesia</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0288.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>289</td>
					<td>French Polynesia; Marquesas; Hiva Oa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0289.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>290</td>
					<td>French Polynesia; Marquesas; Ua Pou Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0290.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>291</td>
					<td>French Polynesia; Marquesas; Ua Huka Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0291.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>292</td>
					<td>French Polynesia; Marquesas; Eiao Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0292.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>293</td>
					<td>French Polynesia; Marquesas; Hatutaa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0293.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>294</td>
					<td>French Polynesia; Marquesas; Mohotani</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0294.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>295</td>
					<td>French Polynesia; Marquesas; Hiva Oa?</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0295.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>296</td>
					<td>French Polynesia; Marquesas; Mohotani</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0296.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>297</td>
					<td>French Polynesia; Marquesas; Hatutaa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0297.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>298</td>
					<td>French Polynesia; Marquesas; Eiao Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0298.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>299</td>
					<td>French Polynesia; Marquesas; Hiva Oa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0299.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>300</td>
					<td>French Polynesia; Marquesas; Tahuata</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0300.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>300.1</td>
					<td>French Polynesia; Marquesas; Tahuata</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0300.1.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>300.2</td>
					<td>French Polynesia; Marquesas; Tahuata</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0300.2.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>300.3</td>
					<td>French Polynesia; Marquesas; Tahuata</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0300.3.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>301</td>
					<td>French Polynesia; Marquesas; Ua Pou Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0301.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>301.1</td>
					<td>French Polynesia; Marquesas; Ua Pou Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0301.1.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>301.2</td>
					<td>French Polynesia; Marquesas; Ua Pou Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0301.2.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>302</td>
					<td>French Polynesia; Marquesas; Hiva Oa  </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0302.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>302.1</td>
					<td>French Polynesia; Marquesas; Hiva Oa  </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0302.1.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>302.2</td>
					<td>French Polynesia; Marquesas; Hiva Oa  </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0302.2.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>302.3</td>
					<td>French Polynesia; Marquesas; Hiva Oa  </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0302.3.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>303</td>
					<td>French Polynesia; Marquesas; Nuku Hiva </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0303.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>303.1</td>
					<td>French Polynesia; Marquesas; Nuku Hiva </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0303.1.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>303.2</td>
					<td>French Polynesia; Marquesas; Nuku Hiva </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0303.2.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>304</td>
					<td>French Polynesia; Society Islands; Tahiti</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0304.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>305</td>
					<td>French Polynesia; Society Islands; Tahiti; Southeast</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0305.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>306</td>
					<td>French Polynesia; Society Islands; Tahiti; Nord-Est</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0306.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>307</td>
					<td>French Polynesia; Society Islands; Tahiti; Nord-Ouest</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0307.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>308</td>
					<td>French Polynesia; Society Islands; Tahiti; Sud-Ouest</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0308.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>309</td>
					<td>French Polynesia; Marquesas; Hiva Oa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0309.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>310</td>
					<td>French Polynesia; Society Islands; Tahiti</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0310.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>311</td>
					<td>French Polynesia; Marquesas; Hiva Oa, Tahu Ata, and Montae</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0311.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>312</td>
					<td>French Polynesia; Society Islands; Tahiti</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0312.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>313</td>
					<td>Pacific Ocean</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0313.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>314</td>
					<td>French Polynesia</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0314.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>314.1</td>
					<td>French Polynesia; Society Islands; Tahiti, Papeete</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/314.1.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>315</td>
					<td>French Polynesia; Society Islands; Tahiti It.</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0315.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>316</td>
					<td>French Polynesia; Society Islands; Moorea</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0316.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>317</td>
					<td>French Polynesia; Society Islands; Bora Bora Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0317.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>318</td>
					<td>French Polynesia; Society Islands; Moorea</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0318.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>319</td>
					<td>French Polynesia; Society Islands; Tahiti &amp; Moorea</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0319.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>320</td>
					<td>French Polynesia; Society Islands; Huahine</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0320.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>321</td>
					<td>French Polynesia; Society Islands; Tahaa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0321.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>322</td>
					<td>Philippines; Luzon</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0322__Philippines.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>322.1</td>
					<td>Philippines</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0322.1__Philippines.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>323</td>
					<td>Philippines; Luzon</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0323__Philippines.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>323.1</td>
					<td>Philippines</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0323.1__Philippines.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>324</td>
					<td>Philippines</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0324__Philippines.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>326</td>
					<td>Philippines</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0326__Philippines.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>327</td>
					<td>Philippines; Central and South Philippine Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0327__Philippines;_Central_and_South_Philippine_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>328</td>
					<td>Philippines</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0328__Philippine_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>329</td>
					<td>Philippines; Northern Pangutarang Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0329__Philippines;_Sulu_Archipelago;_Northern_Pangutarang__Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>330</td>
					<td>Philippines; Kulassein Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0330__Philippines;_Sulu_Archipelago;_Kulassein_and_Tubigan_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>331</td>
					<td>Philippines; Teomabal Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0331__Philippines;_Sulu_Archipelago;_Teomabal_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>332</td>
					<td>Philippines; Kawetan</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0332__Philippines;_Sulu_Archipelago;_Kawetan.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>333</td>
					<td>Philippines; Southern Pangutarang Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0333__Philippines;_Sulu_Archipelago;_Southern_Pangutarang_and_Panducan_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>334</td>
					<td>Philippines; Pantocunan Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0334__Philippines;_Sulu_Archipelago;_Pantocunan_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>335</td>
					<td>Philippines; Minis Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0335__Philippines;_Sulu_Archipelago;_Minis_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>336</td>
					<td>Philippines; Bolod Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0336__Philippines;_Sulu_Archipelago;_Bolod_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>337</td>
					<td>Philippines; Sunga Shoal</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0337__Philippines;_Sulu_Archipelago;_Sungu_Shoal.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>338</td>
					<td>Philippines; Tapiantana Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0338__Philippines;_Sulu_Archipelago;_Tapiantana_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>339</td>
					<td>Philippines; Timbungan Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0339__Philippines;_Sulu_Archipelago;_Timbungan_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>340</td>
					<td>Philippines; Tongquil Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0340__Philippines;_Sulu_Archipelago;_Tongquil_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>341</td>
					<td>Philippines; Balanguingui Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0341__Philippines;_Sulu_Archipelago;_Celebes_Sea;_Balanguigui_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>342</td>
					<td>Philippines; Bangalao Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0342__Philippines;_Sulu7_Archipelago;_BangalaoIisland.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>343</td>
					<td>Philippines; Tanda Bato</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0343__Philippines;_Sulu_Archipelago;_Tandu_Bato.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>344</td>
					<td>Philippines; East Jolo</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0344__Philippines;_Sulu_Archipelago;_East_Jolo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>345</td>
					<td>Philippines; West Jolo</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0345__Philippines;_Sulu_Archipelago;_West_Jolo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>346</td>
					<td>Philippines; Usada island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0346__Philippines;_Sulu_Archipelago;_Usada_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>347</td>
					<td>Philippines; North Ubian Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0347_Philippines;_Sulu_Archipelago;_North_Ubian_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>348</td>
					<td>Philippines; Pearl Bank</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0348__Philippines;_Sulu_Archipelago;_Pearl_Bank.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>349</td>
					<td>Philippines; Laparan Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0349__Philippines;_Sulu_Archipelago;_Laparan_island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>350</td>
					<td>Philippines; Cap Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0350__Philippines;_Sulu_Archipelago;_Cap,_Deatobato_and_Japaran_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>351</td>
					<td>Philippines; Datubato Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0351__Philippines;_Sulu_Archipelago;_Datubato_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>352</td>
					<td>Philippines; Tubalubac Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0352_Philippines;_sulu_Archipelago;_Tubalubac_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>353</td>
					<td>Philippines; Parang</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0353__Philippines;_Sulu_Archipelago;_Jolo_Island;_Parang.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>354</td>
					<td>Philippines; Maimbung</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0354_Philippines;_Sulu_Archipelago;_Jolo_Island;__Maimbung.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>355</td>
					<td>Philippines; Pandanpandan</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0355__Philippines;_Sulu_Archipelago;_Pandanpandan.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>356</td>
					<td>Philippines; Sukuban</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0356__Philippines;_Sulu_Archipelago;_Sukuban.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>357</td>
					<td>Philippines; Simisa Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0357__Philippines;_Sulu_Archipelago;_Simisa_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>358</td>
					<td>Philippines; Kamowi Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0358__Philippines;_Sulu_Archipelago;_Kamawi_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>359</td>
					<td>Philippines; Cabingaan island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0359__Philippines;_Sulu_Archipelago;_Cabingaan_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>360</td>
					<td>Philippines; Tapul Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0360__Philippines;_Sulu_Archipelago;_Tapul_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>361</td>
					<td>Philippines; Lugus Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0361__Philippines;_Sulu_Archipelago;_Lugus_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>362</td>
					<td>Philippines; Dammai Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0362__Philippines;_Sulu_Archipelago;_Dammai_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>363</td>
					<td>Philippines; Bilangan Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0363__Philippines;_Sulu_Archipelago;_Bilangan_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>364</td>
					<td>Philippines; Bambannan Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0364__Philippines;_Sulu_Archipelago;_Bambannan_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>365</td>
					<td>Philippines; Lapaa Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0365__Philippines;_Sulu_Archipelago;_Lapac_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>366</td>
					<td>Philippines; Siasi Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0366__Philippines;_Sulu_Archipelago;_Siasi_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>367</td>
					<td>Philippines; Tapaan Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0367__Philippines;_Sulu_Archipelago;_Tapaan_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>368</td>
					<td>Philippines; Maniacolat Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0368__Philippines;_Sulu_Archipelago;_Maniacolat_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>369</td>
					<td>Philippines; Sugbai Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0369__Philippines;_Sulu_Archipelago;_Sugbai_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>370</td>
					<td>Philippines; Tumbagaan Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0370__Philippines;_Sulu_Archipelago;_Tumbagaan_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>371</td>
					<td>Philippines; Tataan Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0371__Philippines;_Sulu_Archipealgo;_Tataan_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>372</td>
					<td>Philippines; Central Tawitawi Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0372__Philippines;_sulu_Archipelago;_Tawi_Tawi_Island;_central.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>373</td>
					<td>Philippines; Eastern Tawitawi Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0373__Philippines;_Sulu_Archipelago;_Tawi_Tawi_Island;_eastern.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>374</td>
					<td>Philippines; Dundangan Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0374__Philippines;_Sulu_Archipelago;_Dundangan_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>375</td>
					<td>Philippines; Tabawan Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0375__Philippines;_Sulu_Archipelago;_Tabawan,_Loran,_Bintoulan_and_Kinapusan_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>376</td>
					<td>Philippines; Tandubas Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0376__Philippines;_Sulu_Archipelago;_Tandubas_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>377</td>
					<td>Philippines; Baliungan Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0377__Philippines;_Sulu_Archipelago;_Baliungan_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>378</td>
					<td>Philippines; Banaran Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0378__Philippines;_Sulu_Archipelago;_Banaran_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>379</td>
					<td>Philippines; Western Tawitawi Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0379__Philippines;_Sulu_Archipelago;_Western_Tawitawi_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>380</td>
					<td>Philippines; Sanga Sanga Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0380__Philippines;_Sulu_Archipelago;_Sanga_Sanga_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>381</td>
					<td>Philippines; Bilatan Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0381__Philippines;_Sulu_Archipelago;_Bilatan_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>382</td>
					<td>Philippines; Tijitiji Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0382__Philippines;_Sulu_Archipelago;_Tijitiji_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>383</td>
					<td>Philippines; Simunal Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0383__Philippines;_Sulu_Archipelago;_Simunul_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>384</td>
					<td>Philippines; Manuk Manka Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0384__Philippines;_Sulu_Archipelago;_Manuk_Manka_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>385</td>
					<td>Philippines; Omapoy Reef</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0385__Philippines;_Sulu_Archipelago;_Omapoy_Reef.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>386</td>
					<td>Philippines; Alice Reef</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0386__Philippines;_Sulu_Archipelago;_Alice_Reef.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>387</td>
					<td>Philippines; Andulinang Reef</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0387__Philippines;_Sulu_Archipelago;_Andulinang_Reef.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>388</td>
					<td>Philippines; Sibutu Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0388__Philippines;_Sulu_Archipelago;_Sibutu_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>389</td>
					<td>Philippines; Tumindao Reef</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0389__Philippines;_Sulu_Archipelago;_Tumindao_Reef.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>390</td>
					<td>Philippines; Bajapa Reef</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0390__Philippines;_Sulu_Archipelago;_Bajapa_Reef.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>391</td>
					<td>Philippines; Francas Reef</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0391__Philippines;_Sulu_Archipelago;_Frances_Reef.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>392</td>
					<td>Philippines; Northern Pangutarang Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0392__Philippines;_Sulu_Archipelago;_Northern_Pangutarang_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>393</td>
					<td>Philippines; Kulassein Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0393__Philippines;_Sulu_Archipelago;_Kulassein_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>394</td>
					<td>Philippines; Teomabal Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0394__Philippines;_Sulu_Archipelago;_Teomabal_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>395</td>
					<td>Philippines; Kewetan</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0395__Philippines;_Sulu_Archipelago;_Kawetan.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>396</td>
					<td>Philippines; Southern Pangutarang Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0396__Philippines;_Sulu_Archipelago;_Southern_Pangutarnagi_Island_and_Panducan_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>397</td>
					<td>Philippines; Pantocunan Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0397__Philippines;_Sulu_Archipelago;_Pantocunan_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>398</td>
					<td>Philippines; Minis Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0398__Philippines;_Sulu_Archipelago;_Minis_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>399</td>
					<td>Philippines; Bolod Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0399__Philippines;_Sulu_Archipelago;_Bolod_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>400</td>
					<td>Philippines; Sunga Shoal</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0400__Philippines;_Sulu_Archipelago;_Sungu_Shoal.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>401</td>
					<td>Philippines; Tapiantana Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0401__Philippines;_Sulu_Archipelago;_Tapiantana_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>402</td>
					<td>Philippines; Timbungan Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0402__Philippines;_Sulu_Archipelago;_Timbungan_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>403</td>
					<td>Philippines; Tongquil Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0403__Philippines;_Sulu_Archipelago;_Tongquil_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>404</td>
					<td>Philippines; Balanguingui Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0404__Philippines;_Sulu_Archipelago;_Balanguingui_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>405</td>
					<td>Philippines; Bangalao Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0405__Philippines;_Sulu_Archipelago;_Bangalao_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>406</td>
					<td>Philippines; Tandu Bato</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0406__Philippines;_Sulu_Archipelago;_Jolo_Island;_Tando_Bato.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>407</td>
					<td>Philippines; East Jolo</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0407__Philippines;_Sulu_Archipelago;_Jolo_Island;_East.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>408</td>
					<td>Philippines; West Jolo</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0408__Philippines;_Sulu_Archipelago;_West_Jolo_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>409</td>
					<td>Philippines; Usada island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0409__Philippines;_Sulu_Archipelago;_Usad_and__Cunilan_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>410</td>
					<td>Philippines; North Ubian Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0410__Philippines;_Sulu_Archipelago;_North_Ubian_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>412</td>
					<td>Philippines; Pearl Bank</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0412__Philippines;_Sulu_Archipelago;_Pearl_Bank.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>413</td>
					<td>Philippines; Laparan Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0413__Philippines;_Sulu_Archipelago;_Laparan_island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>414</td>
					<td>Philippines; Cap Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0414__Philippines;_Sulu_Archipelago;_Cap_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>415</td>
					<td>Philippines; Datubato Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0415__Philippines;_Sulu_Archipelago;_Datubato_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>416</td>
					<td>Philippines; Tabalubac Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0416__Philippines;_Sulu_Archipelago;_Tubalubac_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>417</td>
					<td>Philippines; Parang</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0417__Philippines;_Sulu_Archipelago;_Jolo_Island;_Parang.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>418</td>
					<td>Philippines; Maimbung</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0418__Philippines;_Sulu_Archipelago;_Jolo_Island;_Maimbung.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>419</td>
					<td>Philippines; Pandanpandan</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0419__Philippines;_Sulu_Archipelalgo;_Jolo_Island;_Pandanpandan.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>420</td>
					<td>Philippines; Sukuban</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0420__Philippines;_Sulu_Archipelago;_Jolo_Island;_Sukuban.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>421</td>
					<td>Philippines; Simisa Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0421__Philippines;_Sulu_Archipelago;_Simisa_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>422</td>
					<td>Philippines; Kawawi Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0422__Philippines;_Sulu_Archipelago;_Kamawi_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>423</td>
					<td>Philippines; Cabingaan island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0423__Philippines;_Sulu_Archipelago;_Cabingaan_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>424</td>
					<td>Philippines; Tapul Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0424__Philippines;_Sulu_Archipelago;_Tapul_and_Lugus_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>425</td>
					<td>Philippines; Lugus Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0425__Philippines;_Sulu_Archipelago;_Lugus_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>426</td>
					<td>Philippines; Dammai Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0426__Philippines;_Sulu_Archipelago;_Dammai,_Singaan,_Dasaan,_and_Mamanuc_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>427</td>
					<td>Philippines; Bilangan Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0427__Philippines;_Sulu_Archipelago;_Bilangan_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>428</td>
					<td>Philippines; Bambannan Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0428__Philippines;_Sulu_Archipelago;_Bambannan_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>429</td>
					<td>Philippines; Lapac Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0429__Philippines;_Sulu_Archipelago;_Lapac_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>430</td>
					<td>Philippines; Tapaan Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0430__Philippines;_Sulu_Archipelago;_Celebes_Sea;_Tapaan_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>431</td>
					<td>Philippines; Maniacolat Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0431__Philippines;_Sulu_Archipelago;_Maniacolat_and_Bubuan_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>432</td>
					<td>Philippines; Sugbai Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0432__Philippines;_Sulu_Archipelago;_Sugbai_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>433</td>
					<td>Philippines; Tumbagaan Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0433__Philippines;_Sulu_Archipelago;_Tumbagaan,_kang_Tipayan_Diki,_Kang_Tipayan_Dakula,_Basbas,_and_Tawitawi_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>434</td>
					<td>Philippines; Tataan Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0434__Philippines;_Sulu_Archipelago;_Tataan_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>435</td>
					<td>Philippines; Central Tawitawi Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0435__Philippines;_Sulu_Archipelago;_Central_Tawitawi_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>436</td>
					<td>Philippines; Eastern Tawitawi Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0436__Philippines;_Sulu_Archipelago;_East_Tawitawi_and_Tandubatu_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>437</td>
					<td>Philippines; Dundangan Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0437__Philippines;_Sulu_Archipelago;_Dundangan_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>438</td>
					<td>Philippines; Tabawan Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0438__Philippines;_Sulu_Archipelago;_Celebes_Sea;_Tabawan,_Bintoulan,_Kinapusa,_and_Loran_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>439</td>
					<td>Philippines; Tandubas Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0439__Philippines;_Sulu_Archipelago;_Celebes_Sea;_Tangubas_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>440</td>
					<td>Philippines; Baliungan Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0440__Philippines;_Sulu_Archipelago;_Baliungan,_Secubun,_Tandubas,_Latuan_and_Mantabuan_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>441</td>
					<td>Philippines; Banaran Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0441__Philippines;_Sulu_Archipelago;_Celebes_Sea;_Banaran_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>442</td>
					<td>Philippines; Western Tawitawi Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0442__Philippines;_Sulu_Archipelago;_Western_Tawitawi_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>443</td>
					<td>Philippines; Sanga Sanga Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0443__Philippines;_Sulu_Archipelago;_Sanga_Sanga,_Bongao_and_Papahag_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>444</td>
					<td>Philippines; Bilatan Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0444__Philippines;_Sulu_Archipelago;_Bilatan_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>445</td>
					<td>Philippines; Tijitiji Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0445__Philippines;_Sulu_Archipelago;_Tijitiji_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>446</td>
					<td>Philippines; Simunal Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0446__Philippines;_Sulu_Archipelago;_Simunul_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>447</td>
					<td>Philippines; Manuk Manka Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0447__Philippines;_Sulu_Archipelago;_Manuk_Manka_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>448</td>
					<td>Philippines; Omapoy Reef</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0448__Philippines;_Sulu_Archipelago;_Omapoy_Reef.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>449</td>
					<td>Philippines; Alice Reef</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0449__Philippines;_Sulu_Archipelago;_Alice_Reef.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>450</td>
					<td>Philippines; Andulinang Reef</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0450__Philippines;_Sulu_Archipelago;_Andulinang_Reef.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>451</td>
					<td>Philippines; Sibutu Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0451__Philippines;_Sibutu_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>452</td>
					<td>Philippines; Tumindao Reef</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0452__Philippines;_Sulu_Archipelago;_Tumindao_Reef.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>453</td>
					<td>Philippines; Bajapa Reef</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0453__Philippines;_Sulu_Archipelago;_Bajapan_Reef.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>454</td>
					<td>Philippines; Frances Reef</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0454__Philippines;_Sulu_Archipelago;_Frances_Reef.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>456</td>
					<td>Philippines; Sulu Archipelago; Sibutu Passage</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0456__Philippines;_Sibutu_Passage.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>457</td>
					<td>Philippines; Sulu Archipelago</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0457__Philippines;_Sulu_Archipelago.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>458</td>
					<td>Philippines; West Coast of Mindanao; Zamboanga Peninsula</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0458__Philippines;_Zamboanga_Peninsula.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>459</td>
					<td>Philippines; Siasi &amp; Lapaa Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0459__Philippines;_Lapac,_Siasi,_and_Tapaan_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>460</td>
					<td>Philippines; Balabac &amp; Ramos Islands; Harbors</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0460__Philippines;_Balabac_and_Ramos_Islands;_harbors.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>461</td>
					<td>Philippines; Western Tawitawi Island; Harbors</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0461__Philippines;_Western_Tawitawi;_harbors.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>462</td>
					<td>Philippines; Central &amp; South Philippine Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0462__Philippines;_Central_and_South_Philippine_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>463</td>
					<td>Philippines; Central &amp; South Philippine Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0463__Philippines;_Central_and_south_Philippine_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>464</td>
					<td>Philippines; Jolo &amp; Tapul Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0464__Philippines;_Jolo_and_Tapul_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>465</td>
					<td>Philippines; Siasi Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0465__Philippines;_Sulu_Archipelago;_Siasi_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>466</td>
					<td>Philippines; Sibutu Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0466__Philippines;_Sibutu_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>467</td>
					<td>Philippines; Lapuanlapun Anchorage &amp; Cagayan Sulu &amp; Adjacent Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0467__Philippines;_Lapunlapun_Achorage,_Cagayan_Sulu_and_adjacent_islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>468</td>
					<td>Philippines; North Balabac Strait and Vicinity</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0468__Philippines;_Balabac_Strait;_North_Balabac_Strait_and_vicinity.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>469</td>
					<td>Philippines</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0469__Philippines;_Sulu_Archipelago.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>470</td>
					<td>Philippines</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0470__Philippines_and_East_Indies_areas.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>470.1</td>
					<td>Interisland passages of the Philippine Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0470.1__Philippines_and_Inter-Island_passages.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>471</td>
					<td>Philippines; Balabac Strait &amp; Approaches</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0471_Philippines;_Balabac_Strait_and_approaches.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>472</td>
					<td>Philippines; Balabac Strait </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0472__Philippines;_Balabac_Strait.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>473</td>
					<td>Philippines; Southern Coast of Palawan Malanao Island to Nariz Point</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0473__Philippines;_Palawan,_Southeast_coast;_Malanao_to_Nariz_Point.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>473.1</td>
					<td>Philippines; East Coast of Palawan Bold Point to Malanao Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0473.1__Philippines;_Palawan,_east_coast;_Bold_Point_to_Malanao_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>474</td>
					<td>Philippines; Southern Palawan</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0474__Philippines;_Palawan,_southern_portion.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>475</td>
					<td>Philippines; Southeast Coast of Palawan Nariz Point to Bugsuk Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0475__Philippines;_Palawan,_southeast_coast;_Nariz_Point_to_Bugsuk_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>476</td>
					<td>Philippines; East Coast of Palawan; Bold Point to Malanao Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0476__Philippines;_Palawan,_east_coast;_Bold_Point_to_Malanao_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>477</td>
					<td>Philippines; East Coast of palawan; Green Island Bay &amp; Vacinity</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0477__Philippines;_Palawan,_east_coast;_Green_Island_Bay_and_vicinity.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>478</td>
					<td>Philippines; East Coast of Palawan; Anchorage of the </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0478__Philippines;_Palawan,_east_coast_anchorages.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>479</td>
					<td>Philippines; East Coast of Palawan; Puerto Princes</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0479__Philippines;_Palawan,_east_coast;_Puerto_Princesa.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>480</td>
					<td>Philippines; Palawan</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0480__Philippines;_Palawan.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>481</td>
					<td>Philippines; Northeast Coast of Palawan; Shark Fin Bay to Flechas Point</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0481__Philippines;_Palawan,_northeast_coast;_Shark_Fin_Bay_to_Flechas_Point.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>486</td>
					<td>Kiribati; Line Islands; Fanning Island &amp; Anchorage</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0486__Kiribati;_Line_Islands;_Fanning;_English_Harbor.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>487</td>
					<td>Chile; Juan Fenandez</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0487__Chile;_Juan_Fernandez.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>488</td>
					<td>Kermadec Island; Raoul or Sunday Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0488__Kermadec;_Raoul_or_Sunday_island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>489</td>
					<td>Central Pacific; Wake Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0489__Central_Pacific;_Wake_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>489.1</td>
					<td>Central Pacific; Wake Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0489.1_Central_Pacific;_Wake_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>490</td>
					<td>World</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0490__World;_NRC_coded_areas.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>492</td>
					<td>Ligne Contractuelles de la Mediterranee et au Dela de Suez</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0492__World;_maritime.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>492.1</td>
					<td>Ligne Contractuelles de la Mediterranee et au Dela de Suez</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0492.1_World,_back_side_of_map_#0492.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>493</td>
					<td>Japan and its World Connection</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0493__Japan;_world_connections.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>494</td>
					<td>Japan; Route &amp; Ports of Call of the N.Y.K. Steamens; Pleasure Trips to Japan</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0494__Japan.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>494.1</td>
					<td>Japan</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0494.1___World;_route_of_N.Y.K._Steamers.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>495</td>
					<td>Kiribati; Phoenix Group; Phoenix and Canton</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0495__Kiribati;_Phoenix_Group;_Phoenix_and_Canton_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>496</td>
					<td>Japan; Hokkaido</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0496__Japan;_Hokkaido;_National_Parks.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>496.1</td>
					<td>Japan; Hokkaido</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0496.1__Japan;_Hokkaido;_backside_of_map_#0496.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>497</td>
					<td>Japan</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0497__Japan.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>498</td>
					<td>Pacific; Northwest Pacific</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0498__Pacific_Ocean;_northwest_portion.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>501</td>
					<td>Mauritius; Grand Port</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0501__Indian_Ocean;_Mauritius;_Grand_Port.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>511</td>
					<td>India &amp; Ceylon</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0511__India_and_Ceylon.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>511.1</td>
					<td>Atlas Index</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0511.1.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>513</td>
					<td>Papua New Guinea; Papua; southeast coast</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0513__Papua_New_Guinea;_Southeast_coast;_Port_Glasgow_and_Orangerie_Bay.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>514</td>
					<td>Papua New Guinea; Papua; southeast coast; Table Bay &amp; Amazon Bay</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0514__Papua_New_Guinea;_Southeast_coast;_Table_Bay_and_Amazon_Bay.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>515</td>
					<td>Papua New Guinea; Papua; southeast coast; Baxter Bay &amp; Table Bay</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0515__Papua_New_Guinea;_southeast_coast;_Baxter_Bay_and_Table_Bay.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>516</td>
					<td>Mullins Bay</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0516__Papua_New_Guinea;_Coral_Seas;_Mullins_harbor.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>517</td>
					<td>Papua New Guinea; Papua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0517__Papua_New_Guinea;_Papua;_Keakoro_Bay_and_Aroma.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>518</td>
					<td>Conflict Island Group</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0518__Papua_New_Guinea;_Conflict_Island_Group.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>519</td>
					<td>Papua New Guinea; Papua; Southeast Papua; Domara</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0519__Papua_New_Guinea;_Papua,_southeast;_Domara.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>520</td>
					<td>Australia</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0520__Australia.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>521</td>
					<td>Papua New Guinea; South D'Entrecasteaux Islands; South Normanby</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0521__Napua_New_Guinea;_D'Entrecasteaux_islands;_South_Normanby.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>521.1</td>
					<td>Papua New Guinea</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0521.1__Papua_New_Guinea;_D'Entrecasteaux;_South_Fergusson_and_North_Normanby.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>522</td>
					<td>Papua New Guinea; North D'Entrecasteaux Islands; Goodenough &amp; North Fergusson Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0522__Papua_New_Guinea;_E'Entrecasteaux;_Goodenough_and_North_Fergusson_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>523</td>
					<td>Papua New Guinea; Louisiade Archipelago; Louisiade Outliers; Samarai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0523__Papua_New_Guinea;_Louisiade_Archipelago;_Louisiade_Outliers;_Samarai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>524</td>
					<td>Papua New Guinea; D'Entrecasteaux Islands; Fergusson Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0524__Papua_New_Guinea;_D'Entrecasteax;_Fergusson_and_Goodenough_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>525</td>
					<td>Papua New Guinea; Solomon Sea Islands; Murua Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0525__Solomon_Seas;_Louisiades;_Muruai_island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>526</td>
					<td>Papua New Guinea; Cape Nelson</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0526__Papua_New_Guinea;_Cape_Nelson.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>527</td>
					<td>Papua New Guinea; Louisiade Archipelago</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0527__Papua_New_Guinea;_Louisiade_Archipelago.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>528</td>
					<td>Papua New Guinea; Louisiade Archipelago; Rossel Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0528__Papua_New_Guinea;_Louisiade_Archipelago;_Rossel_island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>531</td>
					<td>Papua New Guinea; Wamere River, Dogura Tames River</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0531__Papua_New_Guinea;_Wamera_and_Dogura_Tames_Rivers.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>532</td>
					<td>Papua New Guinea; D'Entrecasteaux Islands; Southeast Fergusson &amp; Northwest Normandy</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0532__Papua_New_Guinea;_D'Entrecasteaux;_Fergusson_and_Normanby_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>533</td>
					<td>Papua New Guinea; D'Entrecasteaux Islands; Southeast Fergusson &amp; Sanaroa Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0533__Papua_New_Guinea;_D'Entrecasteaux;_Fergusson_and_Sanaroa_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>534</td>
					<td>Papua New Guinea; Fourmil of Abau</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0534__Coral_Seas;_Fourmil_of_Abau.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>535</td>
					<td>Papua New Guinea; D'Entrecasteaux Islands; Goodenough</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0535__Papua_New_Guinea;_D'Entreacasteaux_Islands;_Goodenough_Bay.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>536</td>
					<td>Papua New Guinea; Papua?</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0536__Solomon_Islands;_Cheshunt_Bay.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>537</td>
					<td>Papua New Guinea; Papua?</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0537__Papua_New_Guinea;_Coral_Seas.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>538</td>
					<td>Papua New Guinea</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0538__Papua_New_Guinea.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>539</td>
					<td>Papua New Guinea; Louisiade Archipelago; Louisiade Outliers; Rogeia and Sariba Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0539__Papua_New_Guinea;_Louisiade_Archipelago;_Rogeia_and_Sariba_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>540</td>
					<td>Papua New Guinea; Papua; Hood &amp; Beagle Bay</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0540__Papua_New_Guinea;_Hood_and_Beagle_Bays.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>541</td>
					<td>Solomon Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0541__Solomon_Islands;_British_Solomon_Island_Protectorate.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>542</td>
					<td>Solomon Islands; Cape Surville</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0542__Solomon_Islands;_San_Cristobal_and_Rennell_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>543</td>
					<td>Solomon Islands; Santa Cruz Islands; Trevanion Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0543__Solomon_Islands;_Trevanion_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>544</td>
					<td>Solomon Islands; Santa Isabel Island, North</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0544__Solomon_Islands;_North_Santa_Isabel_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>545</td>
					<td>Solomon Islands; </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0545__Solomon_Islands;_geological_map.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>546</td>
					<td>Papua New Guinea; Bismark Archipelago; New Britain Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0546.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>546.1</td>
					<td>Papua New Guinea; Bismark Archipelago; New Britain Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0546.1.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>547</td>
					<td>Solomon Islands; Northern portion</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0547__Solomon_Islands;_northern_portion.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>548</td>
					<td>Solomon Islands; Southern portion</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0548__Solomon_Islands;_Southern_portion.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>549</td>
					<td>Papua New Guinea; Bismarck Archipelago; New Ireland; Kavieng</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0549__Papua_New_Guinea;_Bismarck_Archipelago;_New_Ireland,_Kavieng_and_New_Hanover.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>550</td>
					<td>Papua New Guinea; Folder; Manus Islands, Admiralty Islands; New Ireland (Three); New Hanover (Two)</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0550__Papua_New_Guinea;_Admiralty_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>550.1</td>
					<td>Solomon Islands; Manus Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0550.1__Solomon_Islands;_Admiralty_Islands;_Manus_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>550.2</td>
					<td>Solomon Islands; Bismark Sea</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0550.2__Solomon_Islands;_Bismarck_Sea.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>550.3</td>
					<td>Solomon Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0550.3__Solomon_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>550.4</td>
					<td>Solomon Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0550.4__Solomon_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>550.5</td>
					<td>Solomon Islands; New Hanover</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0550.5__Solomons;_New_Hanover.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>550.6</td>
					<td>Solomon Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0550.6__Solomon_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>551</td>
					<td>Papua New Guinea; North Solomon Islands; Buka island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0551__Papua_New_Guinea;_North_Solomon_Islands;_Buka_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>552</td>
					<td>Solomon Islands; Santa Cruz Islands; Vanikoro Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0552__Solomon_Islands;_Santa_Cruz_Islands;_Vanikoro_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>553</td>
					<td>Solomon Islands; Solomon Islands; Guadacanal</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0553__Solomon_Islands;_Guadalcanal.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>554</td>
					<td>Solomon Islands; Solomon Islands; Malaita</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0554__Solomon_Islands;_Choiseul,_Russell,_Malaita_and_New_Georgia.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>555</td>
					<td>Papua New Guinea; Bismarck Archipelago; New Ireland; Samo</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0555_Papua_New_Guinea;_Bismarck_Archipelago;_New_Ireland;_Samo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>556</td>
					<td>Papua New Guinea; Bismarck Archipelago; New Ireland; Namatani</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0556__Papua_New_Guinea;_Bismarck_Archipelago;_New_Ireland;_Namatanai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>557</td>
					<td>Papua New Guinea; Bismarck Archipelago; New Ireland; Cape St. George</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0557__Papua_new_Guinea;_Bismarck_Archipelago;_New_Ireland;_Cape_St._George.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>558</td>
					<td>Papua New Guinea; Bismarck Archipelago; Tabar Islands; Mabua;</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0558__Papua_New_Guinea;_Bismarck_Archipelago;_Tabar_Islands;_Mabua_Solomon.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>559</td>
					<td>Papua New Guinea; Solomon Sea Islands; Woodlark (Now called Muyua}; Milinch</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0559__Papua_New_Guinea;_Solomon_Seas;_Woodlark,_Milinch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>560</td>
					<td>Papua New Guinea; Papua; Milne Bay &amp; Central District</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0560__Papua_New_Guinea;_papua;_Milne_Bay_and_Central_district;_Burch_and_Lockwood_1966-366_to_481.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>561</td>
					<td>Papua New Guinea; Solomon Sea Islands; Trobriand Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0561__Papua_New_Guinea;_Solomon_Sea;_Trobriand_Islands;_J.B._Burch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>561.1</td>
					<td>Papua New Guinea; Solomon Sea Islands; Trobriand Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0561.1__Papua_New_Guinea;_Solomon_Sea_Islands;_Trobriand_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>562</td>
					<td>Papua New Guinea; D'Entrecasteaux Islands; Fourmil of Fergusson</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0562__Papua_New_Guinea;_D'Entrecasteaux;_Fourmil_of_Fergusson.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>563</td>
					<td>Papua New Guinea; D'Entrecasteaux Islands; Goodenough</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0563__Papua_New_Guinea;_D'Entrecasteaux;_Goodenough_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>564</td>
					<td>Papua New Guinea; D'Entrecasteaux Islands; Goodenough</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0564__Papua_New_Guinea;_D'Entrecasteaux;_Goodenough_and_Fergusson_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>565</td>
					<td>Papua New Guinea; D'Entrecasteaux Islands; Fergusson Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0565__papua_New_Guinea;_D'Entrecasteauux;_Fergusson_Island._south_and_southeast.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>566</td>
					<td>Papua New Guinea; D'Entrecasteaux Islands; Fergusson Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0566__Papua_New_Guinea;_D'Entrecastreaux;_Fergusson_Island,_southwest.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>567</td>
					<td>Papua New Guinea; D'Entrecasteaux Islands; Normanby Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0567__Papua_New_Guinea;_D'Entrecasteaux;_Normanby_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>568.1</td>
					<td>Papua New Guinea; Louisiade Archipelago; Rossel Island &amp; lagoon</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0568.1__Papua_New_Guinea;_Louisiade_Archipelago;_Rossel_Island_and_lagoon.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>568.2</td>
					<td>Papua New Guinea; D'Entrecasteaux Islands; Normanby Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0568.2__Papua_New_Guinea;_D'Entrecasteaux;_Normanby_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>569</td>
					<td>Papua New Guinea; D'Entrecasteaux Islands; Fourmil of Tufi</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0569__Papua_New_Guinea;_D'Entrecasteaux_islands;_Fourmil_of_Tufi.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>570</td>
					<td>Papua New Guinea; Louisiade Archipelago; Sudest (Tagula) Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0570__Papua_New_Guinea;_Louisiade_Archipelago;_Sudest_Island;_Tagula;_Yoshio_Kondo_1966.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>571</td>
					<td>Papua New Guinea; Louisiade Archipelago; Misima Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0571__Papua_New_Guinea;_Louisiade_Archipelago;_Misima_Island;_Yoshio_Kondo_1966__no._433-444.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>572</td>
					<td>Papua New Guinea; Louisiade Archipelago; Fourmil of Louisiade</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0572__Papua_New_Guinea;_Louisiade_Archipelago;_Fourmil_of_Louisiade;_Yoshio_Kondo_1966.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>573</td>
					<td>Papua New Guinea; New Guinea Group; Karkar Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0573__Papua_New_Guinea;_New_Guinea;_Karkar_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>574</td>
					<td>Papua New Guinea; Ambuti</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0574_Papua_New_Guinea;_Ambunti.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>575</td>
					<td>Papua New Guinea; Sepik</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0575__Papua_New_Guinea;_Sepik.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>576</td>
					<td>Papua New Guinea; Wau</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0576__Papua_New_Guinea;_Wau.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>577</td>
					<td>Papua New Guinea; Wewak</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0577__Papua_New_Guinea;_Wewak.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>578</td>
					<td>Papua New Guinea; Salamaua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0578__Papua_New_Guinea;_Salamaua.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>579</td>
					<td>Papua New Guinea; Tufi</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0579__Papua_New_Guinea;_tufi.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>580</td>
					<td>Papua New Guinea; Yule</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0580__Papua_New_Guinea;_Yule.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>581</td>
					<td>Papua New Guinea; Aroa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0581__Papua_New_Guinea;_Aroa.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>582</td>
					<td>Papua New Guinea; Buna</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0582__Papua_New_Guinea;_Buna.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>583</td>
					<td>Papua New Guinea; Port Moresby</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0583__Papua_New_Guinea;_Port_Moresby.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>584</td>
					<td>Papua New Guinea; Kalo</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0584__Papua_New_Guinea;_Kalo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>585</td>
					<td>Papua New Guinea; Abau</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0585__Papua_New_Guinea;_Abau.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>586</td>
					<td>Papua New Guinea; Maer Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0586__Papua_New_Guinea;_Maer_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>587</td>
					<td>Papua New Guinea; Daru</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0587_Papua_New_Guinea;_Daru.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>588</td>
					<td>Papua New Guinea; Kiwai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0588__Papua_New_Guinea;_Kiwai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>589</td>
					<td>Papua New Guinea; Fly River</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0589_Papua_New_Guinea;_fly_River.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>590</td>
					<td>Papua New Guinea; Boigu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0590__Papua_New_Guinea;_Boigu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>591</td>
					<td>Papua New Guinea; Aworra River</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0591__Papua_New_Guinea;_Aworra_river;.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>592</td>
					<td>Papua New Guinea; Lake Murray</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0592___Papua_New_Guinea;_Lake_Murray;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>593</td>
					<td>Indonesia; Muting</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0593__Indonesia;_Muting.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>594</td>
					<td>Indonesia; Kimaan</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0594__Indonesia;_Kimaan.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>595</td>
					<td>Papua New Guinea; Kikori</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0595__Papua_New_Guinea;_Kikori.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>596</td>
					<td>Papua New Guinea; Raggi</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0596__Papua_New_Guinea;_Raggi.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>597</td>
					<td>Indonesia; Merauke</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0597__Indonesia;_Merauke.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>598</td>
					<td>Indonesia; Tanahmerah</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0598__Indonesia;_Tanahmerah.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>599</td>
					<td>Papua New Guinea; Sable</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0599__Papua_New_Guinea;_Sable_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>601</td>
					<td>Western Samoa; West Samoa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0601__Samoa,_Western;_Savaii_and_Upolu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>602</td>
					<td>American Samoa; Tutuila Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0602__Samoa,_American;_Tutuila.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>603</td>
					<td>American Samoa; Tutuila Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0603__Samoa,_american;_Manua_Islands;_Tutuila,_Tau,_Ofu,_and_Olosega.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>604</td>
					<td>Western Samoa; Savai'i</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0604__Samoa,_Western;_Savaii.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>605</td>
					<td>Samoa Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0605__Samoa.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>606</td>
					<td>Western Samoa; Upolu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0606__Samoa,_Western;_Upolu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>607</td>
					<td>Western Samoa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0607__Samoa,_Westernl_Savaii_and_Upolu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>608</td>
					<td>American Samoa; Tutuila Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0608__Samoa,_American;_Tutuila.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>609</td>
					<td>Western Samoa; Upolu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0609__Samoa,_Western;_Upolu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>610</td>
					<td>American Samoa; Tutuila Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0610__Samoa,_American;_Tutuila,_Tau,_Ofu,_Olosega,_and_Rose.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>611</td>
					<td>Tonga</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0611__Tonga.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>611.1</td>
					<td>Tonga</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0611.1__Tonga.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>611.2</td>
					<td>Tonga</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0611.2__Tonga_Islands;_Map_Pamphlet.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>611.2</td>
					<td>Tonga</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0611.2_Tonga_Islands;_Map_Pamphlet;_front_side_of_map_#0611.2.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>611.3</td>
					<td>Tonga; Tongatapu Group; Eua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0611.3__Tonga;_Tongatapu;_Eau_Island_1956.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>612</td>
					<td>Tonga; Tongatapu Group; Eua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0612__Tonga;_Tongatapu;_Eua_Island;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>613</td>
					<td>Tonga; Tongatapu Group; Eua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0613__Tonga;_Tongatapu;_Eua_Island;_Landon_T._Ross_localities.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>615</td>
					<td>Tonga; Vava'u Group</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0615__Tonga;_Vavau_Group.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>616</td>
					<td>Tonga; Tongatapu Group; Tongatapu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0616__Tonga;_Tongatapu;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>617</td>
					<td>Tonga; Tongatapu Group; Eua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0617__Tonga;_Tongatapu;_Eua_Island;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>618</td>
					<td>New Caledonia</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0618__New_Caledonia.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>619</td>
					<td>New Caledonia</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0619__New_Caledonia;_Mare_Island;_Yoshio_Kondo_1968.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>620</td>
					<td>New Caledonia</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0620__New_Caledonia;_Lifou;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>621</td>
					<td>New Caledonia</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0621__New_Caledonia;_Loyalty_Islands;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>622</td>
					<td>New Caledonia</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0622__New_Caledonia;_Loyalty_Islands;_Ouvea_Islands;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>623</td>
					<td>Vanuatu; New Hebrides</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0623__Vanuatu_New_Hebrides.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>624</td>
					<td>Vanuatu; New Hebrides; Santo Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0624_Vanuatu_New_Hebrides;_Santo_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>625</td>
					<td>Vanuatu; New Hebrides; Aoba (Omba)</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0625__Vanuatu_New_Hebrides;_Aoba.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>626</td>
					<td>Vanuatu; Banks Islands; Santa Maria</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0626__Vanuatu;_Banks_Islands;_Santa_Maria;_Gaua.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>627</td>
					<td>Vanuatu; Banks Islands; Vanua Lava Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0627__Vanuatu;_Banks_Islands;_Vanua_Lava.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>628</td>
					<td>Vanuatu; Banks Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0628__Vanuatu;_Banks_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>629</td>
					<td>Vanuatu; New Hebrides; Aneytioum-Foutouna</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0629__Vanuatu;_New_Hebrides;_Aneytioum_Foutouna.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>630</td>
					<td>Vanuatu; New Hebrides; Efate Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0630__Vanuatu;_New_Hebrides;_Efate.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>631</td>
					<td>Vanuatu; Torres Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0631__Vanuatu;_Iles_Torres.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>632</td>
					<td>Vanuatu; New Hebrides;  Espiritu Santo Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0632__Vanuatu;_New_Hebrides;_Espiritu_Santo_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>633</td>
					<td>Vanuatu; New Hebrides; Epi-Shepard</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0633__Vanuatu;_New_Hebrides;_Epi_Shepherd.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>634</td>
					<td>Vanuatu; New Hebrides;  Espiritu Santo Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0634__Vanuatu;_New_Hebrides;_Espiritu_Santo_Island;_R._L._Summers.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>635</td>
					<td>Vanuatu; New Hebrides; Santo Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0635__Vanuatu;_New_Hebrides;_Santo;_Yoshio_Kondo_1967.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>636</td>
					<td>Vanuatu; New Hebrides; Ambrym</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0636__Vanuatu;_New_Hebrides;_Ile_Ambrym;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>637</td>
					<td>Vanuatu; New Hebrides; Erromango Island  </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0637__Vanuatu;_New_Hebrides;_Erromango;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>638</td>
					<td>Vanuatu; New Hebrides; Mallicolo Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0638__Vanuatu;_New_Hebrides;_Mallicolo;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>639</td>
					<td>Hawaiian Archipelago; Kahoolawe</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0639__Kahoolawee;_Irwin_Spalding_Collection.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>640</td>
					<td>Hawaiian Archipelago; Maui</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0640__Maui;_Districts_1885,_1903;_Irwin_Spalding.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>641</td>
					<td>Hawaiian Archipelago; Maui</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0641_Maui;_Districts_1885.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>642</td>
					<td>Hawaiian Archipelago; Maui</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0642__Maui;_Annotated.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>643</td>
					<td>Hawaiian Archipelago; Maui; Lahaina</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0643_Maui;_Lahaina_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>644</td>
					<td>Hawaiian Archipelago; Maui &amp; Kahoolawe</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0644_Maui.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>645</td>
					<td>Hawaiian Archipelago; Maui; Wailuku</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0645_Maui;_Wailuku_Quadrangle;_Annotated.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>646</td>
					<td>Hawaiian Archipelago; Maui; Maalaea Bay</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0646__Maui;_Maalaea_Quadrangle;_Annotated.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>647</td>
					<td>Hawaiian Archipelago; Maui; Mala</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0647__Maui;_Mala_Quadrangle;_Lahaina_Dist..pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>648</td>
					<td>Hawaiian Archipelago; Maui; Launiupoko</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0648__Maui;_Launiupoko_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>649</td>
					<td>Hawaiian Archipelago; Maui; Makawao</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0649__Maui;_Makawao_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>650</td>
					<td>Hawaiian Archipelago; Maui; Keokea</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0650__Maui;_Keokea_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>651</td>
					<td>Hawaiian Archipelago; Maui; Laulailua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0651__Maui;_Laulailua_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>652</td>
					<td>Hawaiian Archipelago; Maui; Paia</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0652__Maui;_Paia_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>653</td>
					<td>Hawaiian Archipelago; Maui; Kihei</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0653__Maui;_Kihei_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>654</td>
					<td>Hawaiian Archipelago; Maui; Ulupalakua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0654__Maui;_Ulupalakua_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>655</td>
					<td>Hawaiian Archipelago; Maui; Keoneoio</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0655__Maui;_Keoneoio_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>656</td>
					<td>Hawaiian Archipelago; Maui; Kailua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0656__Maui;_Kailua_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>657</td>
					<td>Hawaiian Archipelago; Maui; Honolua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0657__Maui;_Kaanapali_District;_Honolua_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>658</td>
					<td>Hawaiian Archipelago; Maui; Haiku</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0658__Maui;_Haiku_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>659</td>
					<td>Hawaiian Archipelago; Maui; Kipahulu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0659__Maui;_Keanae_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>660</td>
					<td>Hawaiian Archipelago; Maui; Kipahulu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0660__Maui;_Kaupo_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>661</td>
					<td>Hawaiian Archipelago; Maui; Kipahulu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0661__Maui;_Kipahulu_Quadrangle;_Hana_District.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>662</td>
					<td>Hawaiian Archipelago; Maui; Nahiku</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0662__Maui;_Nahiku_Quadrangle;_Hana_District.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>663</td>
					<td>Hawaiian Archipelago; Maui; Koolau</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0663__Maui;_Koolau_Quadrangle;_E._H._Bryan.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>664</td>
					<td>Hawaiian Archipelago; Maui; Haleakala</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0664__Maui;_Haleakala_Quadrangle;_E.H._Bryan.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>665</td>
					<td>Hawaiian Archipelago; Maui; Makeana</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0665_Maui;_Makena_Quadrangle;_E.H._Bryan.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>666</td>
					<td>Hawaiian Archipelago; Maui; Kahului</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0666_Maui;_Kahului_Quadrangle;_E.H._Bryan;_Annotated.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>667</td>
					<td>Hawaiian Archipelago; Maui</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0667__Maui;_Annotated.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>668</td>
					<td>Hawaiian Archipelago; Maui; Haleakala</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0668__Maui;_Haleakala;_Kenneth_Emory;_Occ._Pap._VII_no._11.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>670</td>
					<td>Hawaiian Archipelago; Maui; Nahiku </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0670__Maui;_Nahiku_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>671</td>
					<td>Hawaiian Archipelago; Maui; Wailuku</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0671__Maui;_Wailuku_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>672</td>
					<td>Hawaiian Archipelago; Maui; Makena</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0672_Maui;_Makena_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>673</td>
					<td>Hawaiian Archipelago; Maui; Lahaina</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0673__Maui;_Lahaina_Quadrangle;_Annotated.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>674</td>
					<td>Hawaiian Archipelago; Maui; Wailuku</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0674_Maui;_Wailuku.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>675</td>
					<td>Hawaiian Archipelago; Maui; Kipahulu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0675__Maui;_Kipahulu_Valley.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>676</td>
					<td>Hawaiian Archipelago; Kauai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0676__Kauai_District;_Kauai_and_Niihau.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>677</td>
					<td>Hawaiian Archipelago; Kauai; Lihue</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0677__Kauai;_Kapaa_Quadrangle;_Yoshio_Kondo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>678</td>
					<td>Hawaiian Archipelago; Kauai; Lihue Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0678__Kauai;_Lihue_Quadrangle;_Yoshio_Kondo;_Annotated.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>679</td>
					<td>Hawaiian Archipelago; Kauai; Hanapepe Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0679__Kauai;_Hanapepe_Quadrangle;_Yoshio_Kondo;_Annotated.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>680</td>
					<td>Hawaiian Archipelago; Kauai; Na Pali Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0680__Kauai;_Na_Pali_Quadrangle;_Yoshio_Kondo;_Annotated.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>681</td>
					<td>Hawaiian Archipelago; Kauai; Mana Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0681_Kauai;_Mana_Quadrangle;_Annotated.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>682</td>
					<td>Hawaiian Archipelago; Kauai; Kilauea Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0682__Kauai;_Kilauea_Quadrangle;_Annotated.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>683</td>
					<td>Hawaiian Archipelago; Kauai; Hanalei Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0683__Kauai;_Hanalei_Quadrangle;_Annotated.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>684.1</td>
					<td>Hawaiian Archipelago; Kauai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0684.1__Kauai;_Carelia_localities.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>685</td>
					<td>Hawaiian Archipelago; Kauai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0685__Kauai;_Irwin_Spalding.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>685.1</td>
					<td>Hawaiian Archipelago; Kauai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0685.1__Kauai;_Irwin_Spalding.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>686</td>
					<td>Hawaiian Archipelago</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0686__Hawaiian_Islands;_1896-1897;_Irwin_Spalding.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>687</td>
					<td>Hawaiian Archipelago; Niiahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0687__Niihau_and_Lehua;_Irwin_Spalding.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>688</td>
					<td>Hawaiian Archipelago; Northwestern Hawaiian Islands; Nihoa or Bird Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0688_Northwestern_Hawaiian_Islands;_Nihoa;_Cooke_and_Thaanum.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>689</td>
					<td>Hawaiian Archipelago; Niihau</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0689__Niihau;_E._H._Bryan;_Dec._1945.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>690</td>
					<td>Hawaiian Archipelago; Kauai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0690__Kauai;_E.H._Bryan.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>691</td>
					<td>Hawaiian Archipelago; Kauai; Kapaa Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0691__Kauai;_Kapaa_Quadrangle;_E.H._Bryan,_Dec._1945;_Annotated.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>692</td>
					<td>Hawaiian Archipelago; Kauai; Na Pali Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0692__Kauai;_Na_Pali_Quadrangle;_E._H._Bryan;_Annotated.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>693</td>
					<td>Hawaiian Archipelago; Kauai; Lihue Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0693__Kauai;_Arnemann_and_Kondo;_Annotated.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>694</td>
					<td>Hawaiian Archipelago; Kauai; Waimea Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0694__Kauai;_Waimea_Quadrangle;_Annotated.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>695</td>
					<td>Hawaiian Archipelago; Kauai; Waipa, Hanalei</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0695__Kauai;_Hanalei;_Waipa;_Tax_Map_5-6-04.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>696</td>
					<td>Hawaiian Archipelago; Kauai; Portion of Hanalei</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0696__Kauai;_Hanalei;_Tax_Map_5-5-07.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>696.1</td>
					<td>Hawaiian Archipelago; Kauai; Portion of Hanalei</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0696.1__Kauai;_Hanalei;_Waioli;_Tax_Map_5-5-06.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>697</td>
					<td>Hawaiian Archipelago; Kauai; Portion of Hanalei</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0697__Kauai;_Hanalei;_Tax_Map_5-5-09.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>698</td>
					<td>Hawaiian Archipelago; Kauai; Eastern Kauai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0698__Kauai;_Eastern_Kauai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>699</td>
					<td>Hawaiian Archipelago; Kauai; Hanalei Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0699__Kauai;_Hanalei_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>700</td>
					<td>Hawaiian Archipelago; Kauai; Hanalei Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0700__Kauai;_Hanalei_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>701</td>
					<td>Hawaiian Archipelago; Kauai; Western Kauai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0701__Kauai;_Western_Kauai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>702</td>
					<td>Hawaiian Archipelago; Kauai; Makaha Point Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0702__Kauai;_Makaha_Point_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>703</td>
					<td>Hawaiian Archipelago; Kauai; Haena Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0703__Kauai;_Haena_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>704</td>
					<td>Hawaiian Archipelago; Northwestern Hawaiian Islands; Necker Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0704__Northwestern_Hawaiian_Islands;_Necker_Island.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>704.1</td>
					<td>Central Pacific; Line Islands; Palmyra Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0704.1__Central_Pacific;_Line_Islands;_Palmyra.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>705</td>
					<td>Hawaiian Archipelago; Kauai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0705__Kauai;_North_shore,_coastline.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>706</td>
					<td>Hawaiian Archipelago; Kauai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0706__Kauai;_South_shore,_west_side.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>707</td>
					<td>Hawaiian Archipelago; Kauai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0707_Kauai;_Carelia_localities;_Yoshio_Kondo,_Nov._25,_1958;_Annotated.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>707.1</td>
					<td>Hawaiian Archipelago; Kauai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0707.1__Kauai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>708</td>
					<td>Hawaiian Archipelago; Kauai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0708__Kauai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>709</td>
					<td>Central Pacific; Line Islands; Palmyra Island</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0709__Central_Pacific;_Line_Islands;_Palmyra;_E.J._Jones.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>767</td>
					<td>Hawaiian Archipelago; Oahu; Kaena</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0767__Oahu;_Kaena.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>768</td>
					<td>Hawaiian Archipelago; Oahu; Schofield</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0768__Oahu;_Waialua_and_Wahiawa_Districts;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>769</td>
					<td>Hawaiian Archipelago; Oahu; Laie</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0769__Oahu;_north_shore;_Pupukea_to_Laie_Bay.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>770</td>
					<td>Hawaiian Archipelago; Oahu; Kahana, Punaluu, Kaluanui</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0770__Oahu;_Kahana,_Punaluu_and_Kaluanui.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>771</td>
					<td>Hawaiian Archipelago; Oahu; Waiahole, Kahaluu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0771__Oahu;_Waiahole,_Kahaluu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>772</td>
					<td>Hawaiian Archipelago; Oahu; Aiea (Lower), Waiau, Waiawa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0772__Oahu;_Waiawa_to_Manoa.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>773</td>
					<td>Hawaiian Archipelago; Oahu; Lualualei, Waianae, Makaha</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0773__Oahu;_Waianae_District.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>774</td>
					<td>Hawaiian Archipelago; Oahu; Lower Nanakuli, Lower Lualualei</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0774__Oahu;_Pokai_Bay_to_Lower_Lualualei.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>775</td>
					<td>Hawaiian Archipelago; Oahu; Waimanalo, Kailua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0775__Oahu;_Koolaupoko_District;_Waimanalo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>776</td>
					<td>Hawaiian Archipelago; Oahu; Waikiki, KooLaupoki, Dis{?}</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0776__Oahu;_Honolulu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>777</td>
					<td>Hawaiian Archipelago; Oahu; Pearl Harbor Area</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0777__Oahu;_Pearl_Harbor.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>779</td>
					<td>Hawaiian Archipelago; Oahu; Hawaii Loa Ridge-Waimanalo</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0779__Oahu;_Waimanalo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>780</td>
					<td>Hawaiian Archipelago; Oahu; Honolulu, Kalihi, Moanalua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0780__Oahu;_Honolulu;_Moanalua.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>782</td>
					<td>Hawaiian Archipelago; Oahu; Waipahu - Kipapa Gulch</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0782__Oahu;_Waipio_Lower;_Waipahu_to_Kipapa_gulch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>783</td>
					<td>Hawaiian Archipelago; Oahu; Haleiwa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0783__Oahu;_Koolau_Mts.;_Mokuleia_to_Helemano;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>784</td>
					<td>Hawaiian Archipelago; Oahu; Honolulu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0784__Oahu;_Mamala_Bay;_Kalihi_to_Diamond_Head.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>785</td>
					<td>Hawaiian Archipelago; Oahu; Ewa, Waipahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0785__Oahu;_Ewa_Plains.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>786</td>
					<td>Hawaiian Archipelago; Oahu; Wahiawa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0786__Oahu;_Wahiawa_and_Ewa_Districts;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>788</td>
					<td>Hawaiian Archipelago; Oahu; Kaipapua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0788_Oahu;_Pupukea_to_Koolauloa_District;_Kaipapua;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>789</td>
					<td>Hawaiian Archipelago; Oahu; Keawaula to Makua and Paulu to Kaena</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0789__Oahu;_Waianae_Mts.;_Kaena_Point_to_Waialua_District;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>790</td>
					<td>Hawaiian Archipelago; Oahu; Waiawa to North Kaukonahua &amp; Waihee to Kahana</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0790__Oahul_Wahiawa,_Kahaluu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>791</td>
					<td>Hawaiian Archipelago; Oahu; Honolulu to Kaneohe</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0791__Oahu;_Manana_to_Honolulu;_D'alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>792</td>
					<td>Hawaiian Archipelago; Oahu; Waupio, Wahiawa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0792__Oahu;_Waialua,_Wahiawa_and_Koolauloa_Districts.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>793</td>
					<td>Hawaiian Archipelago; Oahu; Waianae Mountains; Keaau-Makaha</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0793__Oahu;_Waianae_Mts.;_Meaau_to_Makaha;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>794</td>
					<td>Hawaiian Archipelago; Oahu; Haleno - Waimea Bay, Hanakaoe</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0794__Oahu;_Koolau_Mts.;_Haleno_to_Waimea_Bay,_Hanakaoe;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>795</td>
					<td>Hawaiian Archipelago; Oahu; Waianae Mountains; Kaloi to Haleauaua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0795__Oahu;_Waianae_Mts.;_Waialua_and_Wahiawa_Districts;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>796</td>
					<td>Hawaiian Archipelago; Oahu; Kaneohe</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0796__Oahu;_Heeia_to_Honolulu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>797</td>
					<td>Hawaiian Archipelago; Oahu; Kiapapau</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0797__Oahu;_north_shore;_Wahiawa_to_pupukea.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>798</td>
					<td>Hawaiian Archipelago; Oahu; Laie</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0798__Oahu;_Northshore;_Waimea_to_Kahuku.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>799</td>
					<td>Hawaiian Archipelago; Oahu; Pupukea - Laie</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0799__Oahu;_Koolau_Mts.;_Pupukea_to_Laie;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>800</td>
					<td>Hawaiian Archipelago; Oahu; Pearl Harbor, Koko Head - Waimanalo, Waialae - Kaau Crater, Ewa Beach</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0800__Oahu;_Koolau_Mts.,_south_section.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>801</td>
					<td>Hawaiian Archipelago; Oahu; Waiahole - Kaippau</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0801__Oahul_Koolauloa_District;_Waiahole_to_Kaipapau_to_Kaaawa.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>803</td>
					<td>Hawaiian Archipelago; Oahu; Laie Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0803__Oahu;_Laie_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>804</td>
					<td>Hawaiian Archipelago; Oahu; Kaen Point - Waianae</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0804__Oahu;_Kaena_Point.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>805</td>
					<td>Hawaiian Archipelago; Oahu; Waialua - Waiakele</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0805__Oahu;_Waialua,_Wahiawa,_and_Waianae_Districts.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>806</td>
					<td>Hawaiian Archipelago; Oahu; Waianae Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0806__Oahu;_Waianae_Quadrangle;_Lualualei_to_Kahe.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>807</td>
					<td>Hawaiian Archipelago; Oahu; Diamond Head - Moanalua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0807__Oahu;_Honolulu;_Diamond_Head_to_Moanalua.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>808</td>
					<td>Hawaiian Archipelago; Oahu; Makalapa - Waiahole Forest</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0808__Oahu;_Kaneohe;_Makalapa_to_Waiahole_forest.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>809</td>
					<td>Hawaiian Archipelago; Oahu; Kaneohe - Waimanalo </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0809__Oahu;_Mokapu_Peninsula;_D'alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>810</td>
					<td>Hawaiian Archipelago; Oahu; Koko Head - Waimanalo</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0810__Oahu;_Koko_Head_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>811</td>
					<td>Hawaiian Archipelago; Oahu; Kaaawa - Kaipapau</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0811__Oahu;_Kahana_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>812</td>
					<td>Hawaiian Archipelago; Oahu; Kaipapu Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0812__Oahu;_Kaipapau_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>813</td>
					<td>Hawaiian Archipelago; Oahu; Waikane Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0813__Oahu;_Waikane_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>814</td>
					<td>Hawaiian Archipelago; Oahu; Wailua - Waiawa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0814__Oahu;_Wahiawa_Quadrangle;_Wailua_to_Waiawa.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>815</td>
					<td>Hawaiian Archipelago; Oahu; Barbers Point</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0815__Oahu;_Honouliuli;_Barbers_Point;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>816</td>
					<td>Hawaiian Archipelago; Oahu; Ewa, Waipahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0816__Oahu;_Ewa,_Waipahu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>817</td>
					<td>Hawaiian Archipelago; Oahu; Kahana, Kaaawa, Kaneohe</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0817__Oahu;_Kahana_Bay_to_Kahaluu;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>818</td>
					<td>Hawaiian Archipelago; Oahu; Mokapu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0818__Oahu;_Mokapu;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>819</td>
					<td>Hawaiian Archipelago; Oahu; Waialua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0819__Oahu;_North_Shore;_Kaena_Point_to_Kahuku;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>820</td>
					<td>Hawaiian Archipelago; Oahu; Koko Head</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0820__Oahu;_Koko_Head;_D'alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>821</td>
					<td>Hawaiian Archipelago; Oahu; Kauhiuhi, Lualualei</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0821.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>822</td>
					<td>Hawaiian Archipelago; Oahu; 1st Valley West of Makaleha</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0822.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>823</td>
					<td>Hawaiian Archipelago; Oahu; Nuuanu - Kaelekae</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0823.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>824</td>
					<td>Hawaiian Archipelago; Oahu; Nana - Man - Manoa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0824.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>825</td>
					<td>Hawaiian Archipelago; Oahu; Lualualei - Pahipahialua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0825.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>826</td>
					<td>Hawaiian Archipelago; Oahu; Map 5; East Pulee - Kaawa Gulch &amp; Map 5a</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0826.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>827</td>
					<td>Hawaiian Archipelago; Oahu; Map 3 &amp; Map 3a; Central Makaleha Valley -  East Kapuahikahi Gulch</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0827.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>828</td>
					<td>Hawaiian Archipelago; Oahu; Map 1 &amp; Map 2; Makaha - Lualualei Area</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0828.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>829</td>
					<td>Hawaiian Archipelago; Oahu; Map 14 &amp; Map 14a; Palehua-North Pualii Gulch</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0829.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>830</td>
					<td>Hawaiian Archipelago; Oahu; Map 10 &amp; 10a; Makaha-Kaneamimi Gulch</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0830.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>831</td>
					<td>Hawaiian Archipelago; Oahu; Maps 7 &amp; 7a; Keaau</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0831.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>832</td>
					<td>Hawaiian Archipelago; Oahu; Maps 14 &amp; 14a; Palehua-North Pualii Gulch</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0832.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>833</td>
					<td>Hawaiian Archipelago; Oahu; Maps 9 &amp; 9a; Makua-Kumaipo</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0833.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>834</td>
					<td>Hawaiian Archipelago; Oahu; Maps 1 &amp; 2; Makaha-Lualualei Area</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0834.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>835</td>
					<td>Hawaiian Archipelago; Oahu; Map 1a ?</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0835.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>836</td>
					<td>Hawaiian Archipelago; Oahu; Map </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0836.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>837</td>
					<td>Hawaiian Archipelago; Oahu; Maps 10 &amp; 10a; Makaha-Kaneamimi Gulch</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0837.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>838</td>
					<td>Hawaiian Archipelago; Oahu; Maps 3 &amp; 3a; Central Makaleha Valley-East Kapuahi Gulch</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0838.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>839</td>
					<td>Hawaiian Archipelago; Oahu; Maps 11 &amp; 11a; Kaneamimi Gulch-West Pulee Gulch</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0839.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>840</td>
					<td>Hawaiian Archipelago; Oahu; </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0840.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>841</td>
					<td>Hawaiian Archipelago; Oahu; Maps 8 &amp; 8a; Kumaipo-Makaha</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0841.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>842</td>
					<td>Hawaiian Archipelago; Oahu; Maps 4 &amp; 4a; Mt. Kaala-West Makaleha Valley</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0842.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>843</td>
					<td>Hawaiian Archipelago; Oahu; Waianae Mountain Region; Rain guage Stations</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0843.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>844</td>
					<td>Hawaiian Archipelago; Oahu; Maps 13 &amp; 13a; Halona Lualualei-South Haliwai Gulch</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0844.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>845</td>
					<td>Hawaiian Archipelago; Oahu; Maps 6 &amp; 6a; Makua-Haili Gulch</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0845.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>846</td>
					<td>Hawaiian Archipelago; Oahu; Maps 5 &amp; 5a; Maile-Kaawa Gulch </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0846.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>847</td>
					<td>Hawaiian Archipelago; Oahu; Map </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0847.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>848</td>
					<td>Hawaiian Archipelago; Oahu; Map 12a; Kauhiuhi-East Maunauna Gulch</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0848.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>849</td>
					<td>Hawaiian Archipelago; Oahu; Map Makua-Mohiakea Gulch</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0849.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>850</td>
					<td>Hawaiian Archipelago; Oahu; Waianae Mountains; Showing land Districts</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0850.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>851</td>
					<td>Hawaiian Archipelago; Oahu; Plant zones</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0851.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>852</td>
					<td>Hawaiian Archipelago; Oahu; </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0852.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>852.1</td>
					<td>Hawaiian Archipelago; Oahu; Kaluaa Area</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0852.1.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>853</td>
					<td>Hawaiian Archipelago; Oahu; Kaluaa Area</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0853.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>854</td>
					<td>Hawaiian Archipelago; Oahu; South Kaaikukai-North Paulii Gulch</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0854.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>855</td>
					<td>Hawaiian Archipelago; Oahu; South Kaloi Gulch-South Palawai Gulch</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0855.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>856</td>
					<td>Hawaiian Archipelago; Oahu; North Pohakea Gulch-North Waieli Gulch</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0856.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>857</td>
					<td>Hawaiian Archipelago; Oahu; South Kaloi Gulch-South Palawai Gulch</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0857.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>857.1</td>
					<td>Hawaiian Archipelago; Oahu; South Kaloi Gulch-South Palawai Gulch</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0857.1.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>858</td>
					<td>Hawaiian Archipelago; Oahu; Halona-Palehua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0858.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>859</td>
					<td>Hawaiian Archipelago; Oahu; Kolekole</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0859.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>860</td>
					<td>Hawaiian Archipelago; Oahu; North Kumaipo-North Maile</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0860.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>860.1</td>
					<td>Hawaiian Archipelago; Oahu; North Kumaipo-North Maile</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0860.1.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>861</td>
					<td>Hawaiian Archipelago; Oahu; Est Makaleha-Kawaiu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0861.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>861.1</td>
					<td>Hawaiian Archipelago; Oahu; Est Makaleha-Kawaiu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0861.1.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>861.2</td>
					<td>Hawaiian Archipelago; Oahu; Est Makaleha-Kawaiu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0861.2.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>862</td>
					<td>Hawaiian Archipelago; Oahu; Kaena Point?</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0862.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>862.1</td>
					<td>Hawaiian Archipelago; Oahu; Mt. Olympus-Waialae Iki</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0862.1.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>863</td>
					<td>Hawaiian Archipelago; Oahu; Aiea, Kalauau, Waimalu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0863.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>864</td>
					<td>Hawaiian Archipelago; Oahu; Ekahanui-Waieli Gulch III</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0864.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>865</td>
					<td>Hawaiian Archipelago; Oahu; Kamokunui-Makua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0865.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>866</td>
					<td>Hawaiian Archipelago; Oahu; Waimalu-South Halawa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0866.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>867</td>
					<td>Hawaiian Archipelago; Oahu; South Halawa-Kalihi</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0867.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>868</td>
					<td>Hawaiian Archipelago; Oahu; Gulch I -Kaupakuhale; W4</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0868.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>869</td>
					<td>Hawaiian Archipelago; Oahu; Kaala-Kainimi; W8</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0869.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>870</td>
					<td>Hawaiian Archipelago; Oahu; Waianae Kai-Makua; W7</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0870.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>871</td>
					<td>Hawaiian Archipelago; Oahu; Kaewpilau-Haili</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0871.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>872</td>
					<td>Hawaiian Archipelago; Oahu; Kawainui-Opaeula</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0872.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>872.1</td>
					<td>Hawaiian Archipelago; Oahu; Kawainui-Kawaihatona; 10</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0872.1.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>873</td>
					<td>Hawaiian Archipelago; Oahu; Waiwa-Kaiau; 6a</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0873.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>874</td>
					<td>Hawaiian Archipelago; Oahu; North Helemano-Poamoho; 9a</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0874.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>875</td>
					<td>Hawaiian Archipelago; Oahu; Kaukunahua-south Kaukunanua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0875.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>876</td>
					<td>Hawaiian Archipelago; Oahu; North Kaukanohua-south Kaukanohua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0876.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>877</td>
					<td>Hawaiian Archipelago; Oahu; Huhwai-Popouwaia</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0877.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>878</td>
					<td>Hawaiian Archipelago; Oahu; Kawainui-Opaeuia; 10a</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0878.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>879</td>
					<td>Hawaiian Archipelago; Oahu; Kawainui-Kawaihalona; 10</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0879.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>880</td>
					<td>Hawaiian Archipelago; Oahu; Kamananui-Kawaiiki; 11</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0880.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>881</td>
					<td>Hawaiian Archipelago; Oahu; Hakauauensis</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0881.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>882</td>
					<td>Hawaiian Archipelago; Oahu; Kaaawa-Waikane; 17</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0882.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>883</td>
					<td>Hawaiian Archipelago; Oahu; Kawaihalona Poamoho; 9</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0883.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>884</td>
					<td>Hawaiian Archipelago; Oahu; Kaala-Makaha</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0884.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>887</td>
					<td>Hawaiian Archipelago; Oahu; Kamokunui-Makua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0887.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>888</td>
					<td>Hawaiian Archipelago; Oahu; Kaipapau-Kaluanui </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0888.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>889</td>
					<td>Hawaiian Archipelago; Oahu; Lamaloa-Kahawainui</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0889.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>890</td>
					<td>Hawaiian Archipelago; Oahu; Kepi-Waipilopilo</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0890.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>891</td>
					<td>Hawaiian Archipelago; Oahu; Kaukonahua-south Kaukonanua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0891.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>892</td>
					<td>Hawaiian Archipelago; Oahu; Kawaihalona-Poamoho; 9</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0892.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>893</td>
					<td>Oahu; Kawainui-Opaeuia</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0893.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>894</td>
					<td>Oahu; Kamananui-Kawaiiki</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0894.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>895</td>
					<td>Oahu; Kaleleiki-East Oio</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0895.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>896</td>
					<td>Oahu; Makaha-Haleauau</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0896.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>897</td>
					<td>Oahu; Kamokunui-Makua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0897.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>898</td>
					<td>Oahu; Kolekole Pass-Halona</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0898.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>899</td>
					<td>Oahu; Gulch I-Kaawa; W4</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0899.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>900</td>
					<td>Oahu; Huhwa?</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0900.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>901</td>
					<td>Oahu; Waimatu-South Halawa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0901.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>902</td>
					<td>Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0902.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>903</td>
					<td>Island of Oahu, Island of Maui</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0903.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>903.1</td>
					<td>O‘ahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0903.1.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>904</td>
					<td>Oahu; Puulu Gulch-Palinea</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0904.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>905</td>
					<td>O‘ahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0905.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>906</td>
					<td>Oahu; Manoa-Woodlawn</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0906.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>908</td>
					<td>O‘ahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0908.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>909</td>
					<td>O‘ahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0909.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>910</td>
					<td>Oahu; Gulch I-Kaawa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0910.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>911</td>
					<td>O‘ahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0911.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>912</td>
					<td>O‘ahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0912.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>913</td>
					<td>Oahu; Nanakuli</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0913.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>914</td>
					<td>Oahu; Aiea-Kahalua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0914.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>915</td>
					<td>Oahu; Waimanalo</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0915.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>916</td>
					<td>Oahu; Kaalakei</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0916.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>917</td>
					<td>Oahu; Wailupe-Niu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0917.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>918</td>
					<td>Oahu; Waialae Iki-Wailupe Gulch</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0918.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>919</td>
					<td>Oahu; Pukele Stream-Palolo</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0919.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>920</td>
					<td>Oahu; Nuuanu-Manoa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0920.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>921</td>
					<td>Oahu; Kapalama-Puu Lahuihuli</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0921.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>922</td>
					<td>Oahu; Kalihi</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0922.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>923</td>
					<td>Oahu; Halawa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0923.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>924</td>
					<td>Oahu; Kalauao</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0924.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>925</td>
					<td>Oahu; Waimano-Waimalu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0925.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>926</td>
					<td>Oahu; Waimalu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0926.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>927</td>
					<td>Oahu; Diamond Head</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0927.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>928</td>
					<td>Oahu; Puu Pia-Woodlawn</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0928.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>929</td>
					<td>Oahu; Pauoa Flats-Round Top</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0929.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>930</td>
					<td>Oahu; Halemano-Paalaa Uka</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0930.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>931</td>
					<td>Oahu; Poammoho Tunnel</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0931.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>932</td>
					<td>Oahu; Waipio-Puu Kamana</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0932.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>933</td>
					<td>Oahu; Waiawa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0933.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>934</td>
					<td>Oahu; Waikakalau-Waipio</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0934.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>935</td>
					<td>Oahu; Schofield Waikane Trail-Waian</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0935.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>936</td>
					<td>Oahu; Waianae Uka</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0936.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>937</td>
					<td>Oahu; Castle Trail-Punaluu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0937.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>938</td>
					<td>Oahu; Hanakaoa-Malaekahana</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0938.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>939</td>
					<td>Oahu; Kawailoa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0939.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>940</td>
					<td>Oahu; Laie</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0940.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>941</td>
					<td>Oahu; Kaipapau</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0941.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>943</td>
					<td>Oahu; Hauula-Kaluanu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0943.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>944</td>
					<td>Oahu; Paumalu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0944.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>945</td>
					<td>Oahu; Pahipahialua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0945.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>946</td>
					<td>Oahu; Punaluu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0946.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>947</td>
					<td>Oahu; Opaelu Gulch-Helemano</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0947.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>948</td>
					<td>Oahu; Unknown</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0948.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>950</td>
					<td>O‘ahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0950__Oahu;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>951</td>
					<td>O‘ahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0951__Oahu;_Maunalua;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>952</td>
					<td>Oahu; Laniloa Point-Pukalena</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0952__Oahu;_Kaluawaikaala_to_Laniloa_Point_to_Pukalena;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>953</td>
					<td>O‘ahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0953__Oahu;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>954</td>
					<td>O‘ahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0954__Oahu;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>955</td>
					<td>Oahu; Kahana-Ukoa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0955__Oahu;_Kahana_to_Ukoa;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>956</td>
					<td>Oahu; Waiahole-Omao Gulch</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0956__Oahu;_Hakipuu_to_Malaekahana;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>957</td>
					<td>Oahu; Koolau Range</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0957__Oahu;_Koolau_Mountains;_D'Alte_Welch;_mean_lengths_of_Achatinella.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>958</td>
					<td>Oahu; Koolau Range</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0958__Oahu;_Koolau_Mountains;_D'Alte_Welch;_color_forms.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>959</td>
					<td>Oahu; Kawaihalona-Waiawa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0959.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>960</td>
					<td>Oahu; Kaneohe-Wailupe</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0960.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>961</td>
					<td>Oahu; Waikane-Kahauiki Stream</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0961.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>962</td>
					<td>Oahu; Hoolapa Gulch-Kawainui</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0962.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>963</td>
					<td>Oahu; Kawainui Gulch-North Waiawa Stream</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0963.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>964</td>
					<td>O‘ahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0964.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>965</td>
					<td>Oahu; Waikane-Kahuiki Stream</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0965.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>966</td>
					<td>Oahu; Koolau Range;</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0966.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>967</td>
					<td>Oahu; Kaneohe-Wailupe</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0967.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>968</td>
					<td>Oahu; Kalihi-Kului</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0968.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>969</td>
					<td>Oahu; Koloa-Waiawa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0969.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>970</td>
					<td>Oahu; Waikane-Kahauiki Stream</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0970.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>971</td>
					<td>Oahu; Opaeula-Manana</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0971.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>972</td>
					<td>Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0972.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>973</td>
					<td>Oahu; Hoolapa Gulch-Kawainui</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0973.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>974</td>
					<td>Oahu; Laie-North Waiawa Stream</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0974.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>976</td>
					<td>Oahu; Waikane-Kahauiki Stream</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0976.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>977</td>
					<td>Oahu; Laie-North Waiawa Stream</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0977.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>978</td>
					<td>Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0978.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>979</td>
					<td>Island of Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0979.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>980</td>
					<td>Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0980.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>981</td>
					<td>Oahu; Koolau</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0981.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>982</td>
					<td>Island of Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0982.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>984</td>
					<td>Oahu; Kawainui Gulch-Waiawa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0984.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>985</td>
					<td>Oahu; Waikane-Kahuiki Stream</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0985.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>986</td>
					<td>Oahu; Kaneohe-Wailupe</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0986.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>986.1</td>
					<td>Kaneohe-Wailupe</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0986.1.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>987</td>
					<td>Oahu; Laie-North Waiawa Stream</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0987.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>987.1</td>
					<td>Laie-North Waiawa Stream</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0987.1.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>988</td>
					<td>Oahu; Hoolapa Gulch-Kawainui</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0988.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>988.1</td>
					<td>Hoolapa Gulch-Kawainui</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0988.1.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>990</td>
					<td>Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0990.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>991</td>
					<td>Oahu; Kahauiki-Wailupe</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0991.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>993</td>
					<td>Oahu; Waikane-Kahauiki Stream</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0993.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>994</td>
					<td>Oahu; Kipapa-Manaiki</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0994.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>995</td>
					<td>Oahu; Kipapa-Manaiki</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0995.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>996</td>
					<td>Oahu; Hoolapa Gulch-Kawainui</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0996.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>997</td>
					<td>Oahu; Kaneohe-Wailupe</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0997.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>999</td>
					<td>Island of Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0999.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>999.1</td>
					<td>Island of Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0999.1.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1000</td>
					<td>Oahu; Waianae Mountains</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1000.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1001</td>
					<td>Island of Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1001.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1002</td>
					<td>Island of Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1002.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1003</td>
					<td>Oahu; Hoolapa Gulch-Kawainui</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1003.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1005</td>
					<td>Island of Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1005.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1005.1</td>
					<td>Island of Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1005.1.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1006</td>
					<td>Island of Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1006.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1006.1</td>
					<td>Island of Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1006.1.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1007</td>
					<td>Oahu; East Oio Gulch-South Kaukonahua Stream</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1007__Oahu;_East_Oio_Gulch_to_South_Kaukonahua_Stream;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1007.1</td>
					<td>Oahu; East Oio Gulch-South Kaukonahua Stream</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1007.1__Oahu;_East_Oio_Gulch_to_South_Kaukonahua_Stream;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1008</td>
					<td>Oahu; Hakipuu-Zone 1</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1008__Oahu;_Hakipuu_to_Zone_1;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1009</td>
					<td>Oahu; Waialee-Punaluu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1009__Oahu;_Koolau_Mountains;_North_section;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1010</td>
					<td>Oahu; Koolau Mts., southeast section</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1010__Oahu;_Koolau_Mts.,_southeast_section;_D'alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1011</td>
					<td>Oahu; Kahuku-Waiawa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1011__Oahu;_Koolau_Mts.;_Kahuku_to_Waiawa;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1012</td>
					<td>Oahu; Hakipuu-Koloa Gulch</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1012__Oahu;_Hakipuu_to_Koloa_Gulch;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1013</td>
					<td>Oahu; East Oio Gulch-South Kaukonahua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1013__Oahu;_East_Oio_Gulch_to_South_Kaukonahua;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1014</td>
					<td>Oahu; Moanalua Stream-Kalihi</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1014__Oahu;_Moanalua_Stream_to_Kalihi;_D'alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1015</td>
					<td>Island of Oahu: Koolau Range</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1015__Oahu;_Koolau_Mts.;_Kaaawa_to_Malaekahana;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1016</td>
					<td>Island of Oahu: Koolau Range</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1016_Oahu;_Koolau_Mts;_Kaaawa_to_Malaekanaha;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1017</td>
					<td>Oahu; Palehua-North Waikele Gulch</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1017__Oahu;_Palehua_to_North_Waikele_Gulch;_D'alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1017.1</td>
					<td>Oahu; Palehua-North Waikele Gulch</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1017.1___Oahu;_Palehua_to_North_Waikele_Gulch;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1018</td>
					<td>O‘ahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1018__Oahu;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1019</td>
					<td>Oahu; Waikele-South Helemano</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1019__Oahu;_Waikele_to_South_Helemano;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1020</td>
					<td>Oahu; Koolau Range</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1020__Oahu;_Koolau_Range;_D'Alte_Welch;_mean_shell_length.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1021</td>
					<td>Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1021__Oahu;_D'alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1022</td>
					<td>Oahu; Kaluanui-South Helemano</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1022__Oahu;_Kaluanui_to_South_Helemano;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1023</td>
					<td>Oahu; North Kaukunahua-Wheatleyana</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1023__Oahu;_North_Kaukunahua-wheatleyana;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1024</td>
					<td>Oahu: Waianae Range</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1024__Oahu;_with_more_detail_on_the_Waianae_Mts.;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1025</td>
					<td>Oahu; Kaipapau</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1025__Oahu;_Achatinella_distribution;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1026</td>
					<td>Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1026__Oahu;_Pearl_Harbor_Section;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1027</td>
					<td>Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1027__Oahu;_Koolau_Mountains;_southeast_section;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1028</td>
					<td>Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1028__Oahu;_Koolau_Mountains;_southeast_section;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1029</td>
					<td>Oahu; Punaluu-Waiau</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1029__Oahu;_Punaluu_to_Waiau;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1030</td>
					<td>Oahu; Punaluu-Moanalua </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1030__Oahu;_Punaluu_to_Moanalua;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1031</td>
					<td>Oahu; Punaluu-Moanalua </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1031__Oahu;_Punaluu_to_Moanalua;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1032</td>
					<td>O‘ahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1032__Oahu;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1033</td>
					<td>Oahu; Nuuanu-East Niu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1033__Oahu;_Nuuanu_to_East_Niu;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1033.1</td>
					<td>Oahu; Nuuanu-East Niu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1033.1__Oahu;_Nuuanu_to_East_Niu;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1034</td>
					<td>Oahu; Waikane-Kahauiki Stream</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1034__Oahu;_Waikanae_to_Kahauiki_Stream;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1035</td>
					<td>Oahu; Laie-North Waiawa Stream</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1035__Oahu;_Laie_to_North_Waiawa_Stream;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1036</td>
					<td>Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1036;_Oahu;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1036.1</td>
					<td>Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1036.1__Oahu;_with_small_overlay_piece_on_the_north_section_of_the_Koolaus;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1037</td>
					<td>Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1037__Oahu;_Koolau_Mts.;_Pupukea_to_Makapuu;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1039</td>
					<td>Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1039__Oahu;_Achatinella_livida_areas;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1040</td>
					<td>Oahu;  Apexfulva Areas</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1040__Oahu;_Achatinella_apexfulva_areas;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1041</td>
					<td>Oahu; Fulgens and Viridans Areas</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1041__Oahu;_Achatinella_fulgens_and_A._viridans_areas;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1042</td>
					<td>Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1042__Oahu;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1043</td>
					<td>Oahu; Kawaihaona-Helemano</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1043__Oahu;_D'alte_Welch;_BACKWARDS.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1044</td>
					<td>Oahu; Waihi Stream-Manoa St.</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1044__Oahu;_Koolaus;_Manoa_Valley;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1045</td>
					<td>Oahu; Waikane-Kahauiki Stream</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1045__Oahu;_Koolaus;_Kaikane_-_Kahauiki_Stream;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1045.1</td>
					<td>Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1045.1.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1045.2</td>
					<td>Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1045.2___Oahu;_Koolau_Mts.;_Panikakea_Gulch,_Central_Wamano_and_Central_Halawa;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1046</td>
					<td>Oahu; Aiea Stream</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1046__Oahu;_Koolau_Mts.;_Aiea_Stream;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1047</td>
					<td>Oahu; Koolau Range</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1047__Oahu;_Koolau_Range;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1048</td>
					<td>Oahu; Pahipahialua-Central Poamoho</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1048__Oahu;_Koolaus;_Pahipahialua_-_Central_Poamoho;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1049</td>
					<td>Oahu; Pahipahialua-South Helemano</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1049__Oahu;_Koolaus;_Pahipahialua_-_South_Helemano.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1050</td>
					<td>Oahu; Hakipuu-Wailele</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1050__Oahu;_Hakipuu_-_Wailele.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1051</td>
					<td>Oahu; Waiahole-Kolea</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1051__Oahu;_Waiahole_-_Kolea;_D'alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1052</td>
					<td>Oahu; Oio Gulch-Ukoa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1052__Oahu;_Oio_Gulch_-_Ukoa;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1053</td>
					<td>Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1053__Oahu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1054</td>
					<td>Oahu; Punaluu-Ukoa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1054_Oahu;_Koolau_Mts._Punaluu_to_Helemano.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1055</td>
					<td>Oahu; A. apexfulva</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1055__Oahu;_Koolau_Mts.,_northern_section;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1056</td>
					<td>Oahu; South Kauonahua-Hauula</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1056__Oahu;_Koolau_Mts.;_South_Konahua_to_Hauula;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1057</td>
					<td>Oahu; Kahana-Iliihi Gulch</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1057__Oahu;_Kahana_-_Ihiihi_Gulch;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1058</td>
					<td>Oahu; Puu Manamana</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1058__Oahu;_Puu_Manamana;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1059</td>
					<td>Oahu; Kaloa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1059__Oahu;_Central_Kaluanui;_D'alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1060</td>
					<td>Oahu; Kahuku-North Kuukonahua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1060__Oahu;_Koolaus;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1060.1</td>
					<td>O‘ahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1060.1_Oahu;_Koolau_Mts.;_North_Kaukonahua_and_Central_Poamoho;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1061</td>
					<td>Island of Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1061__Oahu;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1062</td>
					<td>Oahu; Koolau Range</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1062__Oahu;_Koolau_Mountains;_North_section;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1063</td>
					<td>Oahu; Waianae Mountains</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1063__Oahu;_Waianae_Mts.;__Achatinella_mustelina_size_distributions;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1064</td>
					<td>Oahu; Waianae Mountains</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1064__Oahu;_Waianae_Mts.;_Achatinella_mustelina_color_form_distribution;_D'alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1065</td>
					<td>Oahu; Kahuku-Waikakalaua Stream</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1065__Oahu;_Koolaus;_Kahuku_-_Waikakalaua_Stream;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1067</td>
					<td>Oahu; Kaaawa-Nuuanu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1067_Oahu;_Koolau_Mts..pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1068</td>
					<td>Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1068_Oahu,_White_on_black;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1069</td>
					<td>O‘ahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1069__Oahu;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1070</td>
					<td>Oahu; Koolau Range</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1070__Oahu;_Koolau_Mountains;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1071</td>
					<td>Oahu; Koolau Range</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1071__Oahu;_Koolau_Mts.;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1072.1</td>
					<td>Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1072.1__Oahu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1073</td>
					<td>Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1073__Oahu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1074</td>
					<td>Oahu; Waolani Stream-Puu Lanihuli</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1074__Oahu;_Koolau_Mts.;_Nuuanu;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1075</td>
					<td>O‘ahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1075__Oahu;_Koolau_Mts.;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1076</td>
					<td>Oahu; Opaeula-Kaluakauila</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1076__Oahu;_Opaeula_-_Kaluakauila;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1077</td>
					<td>Island of Hawaii</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1077__Hawaii;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1077.1</td>
					<td>Kaua‘i</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1077.1__Kauai;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1078</td>
					<td>O‘ahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1078__Oahu;_Zones_i,_II,_III;_D'alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1079</td>
					<td>Oahu; Helemano Gulch-Wailupe</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1079__Oahu;_Koolau_Mts.;_Helemano_Gulch_-_Wailupe;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1080</td>
					<td>Oahu; Punaluu-Kaluakauila</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1080__Oahu;_Punaluu_-_Kaluakauila;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1081</td>
					<td>O‘ahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1081__Oahu;_Zone_II,_Zone_III_-_Malaekahau;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1082</td>
					<td>O‘ahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1082__Oahu;_Koolau_Mts.;_north;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1083</td>
					<td>Oahu; Koolau Range</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1083__Oahu;_Koolau_Mts.;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1084</td>
					<td>Oahu; Waiahole-Malaekahana</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1084_Oahu;_Koolaus;_Waiahole_-_Malaekahana;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1085</td>
					<td>Oahu; Kawaiiki-North Kaukonahue</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1085__Oahu;_Kawaiiki-North_Kaukonahue;_Welch;_Publ._3684,_similar_to_fig._5.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1086</td>
					<td>Oahu; Waianae Mountains</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1086__Oahu;_Waianae_Mountains;_D'Alte_Welch;_bull._152;_map_15_and_16.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1087</td>
					<td>Oahu; Punaiki Gulch-Hala Patch</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1087__Oahu;_Punaiki_Gulch-Hala_Patch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1088</td>
					<td>Oahu; Waiawa-Wailupe</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1088__Oahu;_Waiawa_to_Wailupe;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1089</td>
					<td>Oahu; Waianae Mountains</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1089__Oahu;_Waianae_Mountains;_D'Alte_Welch_map_15.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1090</td>
					<td>Oahu; Waianae Mountains</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1090__Oahu;_Waianae_Mountains;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1091</td>
					<td>Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1091__Oahu;_D'alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1092</td>
					<td>Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1092__Oahu;_D'alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1093</td>
					<td>Oahu; Kaipapau-south Paomoho</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1093__Oahu;_Koolau_Mts.;_Kaipapau_to_South_Poamoho;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1093.1</td>
					<td>Oahu; Kaipapau-south Paomoho</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1093.1__Oahu;_Koolau_Mts.;_Kaipapau_to_south_Poamoho;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1094</td>
					<td>Oahu; Kahuku-Waikane</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1094__Oahu;_Kahuku_-_Waikane;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1095</td>
					<td>Oahu; Kaaawa-Malaekahana</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1095__Oahu;_Koolau_Mountains;_A._bulimoides_distribution;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1096</td>
					<td>Oahu; Koolau Range</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1096__Oahu;_Koolau_Mountains;_Kaaawa_to_Waimea;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1096.1</td>
					<td>Oahu; Koolau Range</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1096.1_Oahu;_Koolau_Mts.;_Kaaawa_-_Waiawa;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1097</td>
					<td>Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1097__Oahu;_Koolau_Mts.;_Waialee_to_Hakipuu;_D'alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1097.1</td>
					<td>Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1097.1__Oahu;_Koolau_Mountains;_Waialee_to_Hakipuu;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1097.2</td>
					<td>Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1097.1__Oahu;_Koolaus;_Wauakee_-_Hakipuu;_D'Alte_Welch;.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1098</td>
					<td>Oahu; Waikane-Malaekahana</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1098__Oahu;_Koolau_Mountains;_D'alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1099</td>
					<td>Oahu; Kahana-Malaekahana</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1099_Oahu;_Koolau_Mountains;_D'Alte_Welch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1100</td>
					<td>Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1100__Oahu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1101</td>
					<td>Oahu; Punaluu-Waimea</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1101__Oahu;_Punaluu_-Waimea;_D'Alte_Welch;_White_on_black_background.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1126</td>
					<td>Hawaiian Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1126__Hawaiian_Islands;_Irwin_Spalding.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1127</td>
					<td>Hawaiian Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1127__Hawaiian_Islands;_1922.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1128</td>
					<td>O‘ahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1128__Oahu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1128.1</td>
					<td>O‘ahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1128.1__Oahu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1128.2</td>
					<td>O‘ahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1128.2__Oahu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1129</td>
					<td>Maui and Kahoolawe; Maui and Kaho‘olawe</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1129__Maui_and_Kahoolawe.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1130</td>
					<td>Island of Kauai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1130__Kauai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1130</td>
					<td>Oahu; Kahana</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1130_Oahu;_Kahana.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1131</td>
					<td>Island of Hawaii</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1131__Hawaii.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1133</td>
					<td>Islands of Molokai, Lanai, Kahoolawe</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1133__Molokai,_Lanai,_and_Kahoolawe.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1134</td>
					<td>Hawaiian Islands</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1134__Hawaiian_Islands.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1135</td>
					<td>O‘ahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1135__Oahu;_Dall,_1920;_Annotated.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1135.1</td>
					<td>Oahu; Pearl Harbor</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1135.1__Oahu;_Pearl_Harbor.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1136</td>
					<td>Kaua‘i</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1136__Kauai;_Annotated;_Dall.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1136.1</td>
					<td>Kaua‘i</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1136.1__Kauai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1137</td>
					<td>Island of Hawaii</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1137__Hawaii;_Dall;_Annotated.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1137.1</td>
					<td>Island of Hawaii</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1137.1__Hawaii.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1138</td>
					<td>Island of Maui</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1138__Maui;_Dall.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1138.1</td>
					<td>Maui; Crater of Haleakala</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1138.1__Maui.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1139</td>
					<td>Oahu; Koolau Mountains, Punaluu to Waimea</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1139__Oahu;_Koolau_Mts.;_Punaluu_to_Waimea.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1140</td>
					<td>Oahu; Koolau Mountains, Punaluu to Waimea</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1140__Oahu;_Koolau_Mts.;_Punaluu_to_Waimea.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1142</td>
					<td>Island of Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1142__Oahu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1143</td>
					<td>Oahu; Nanakuli</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1143__Oahu;_Nanakuli_to_Honouliuli;_Carl_C._Christensen.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1144</td>
					<td>Oahu; Fort Shafter Military Reservation</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1144__Oahu;_fort_Shafter_Military_Reserve;_Carl_C._Christensen,_POst_1930.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1145</td>
					<td>Oahu; Makua Military Reservation</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1145__Oahu;_Makua;_Achatinella_mustelina_distrib.;_C.C._Christensen,_1980.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1147</td>
					<td>Oahu; Makua Military Reservation</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1147__Oahu;_Makua_Military_Reservation;_Carl_C._Christensen.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1148</td>
					<td>Oahu; Makua Military Reservation</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1148__Oahu;_Makua_Military_Reservation;_Carl_C._Christensen;_1980.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1149</td>
					<td>Oahu; Makua Military Reservation</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1149__Oahu;_Makua_Military_Reservation;_Carl_C._Christensen,_1980.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1150</td>
					<td>Oahu; Makua Military Reservation</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1150__Oahu;_Makua_Military_Reservation;_Carl_C._Christensen,_1980.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1151</td>
					<td>Oahu; Kahuku Forest</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1151__Oahu;_Kahuku_training_Area;_Carl_C._Christensen,_1980.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1152</td>
					<td>Oahu; Puu Kaumaua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1152__Oahu;_Puu_Kaumaua.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1153</td>
					<td>Oahu; Schofild Military Reservation</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1153__Oahu;_Schofield_Barracks_Military_Reservation;_Achatinella_localities;_Carl_C._Christensen.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1154</td>
					<td>Oahu; Kahuku Forest Reserve; Pupukea to Paalaa Uka</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1154__Oahu;_Kawailoa_training_Area;_and_Pupukea_to_Paalaa_Uka;_Achatinella_localities;_Carl_C._Christensen.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1155</td>
					<td>Oahu; Schofild Military Reserve, Waianae Uka</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1155__Oahu;_Schofield_Barracks;_Achatinella_localities;_Carl_C._Christensen.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1156</td>
					<td>Oahu; Waimea; Kahuku Forest Reserve</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1156__Oahu;_Sunset_to_Kahuku;_Carl_C._Christensen.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1158</td>
					<td>Oahu; Barbers Point</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1158__Oahu;_Barbers_Point;_Christensen_and_Kirch.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1199</td>
					<td>Oahu, Maui; Island of Oahu, Island of Maui</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1199__Oahu_and_Maui.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1200</td>
					<td>Oahu; Kanehoa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1200__Oahu;_Kanehoa.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1201</td>
					<td>Oahu; Pupukea to Kahuku</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1201__Oahu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1202</td>
					<td>Kauai; Lihue</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1202__Oahu;_Kondo's_localities.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1203</td>
					<td>Kauai; Kaluaa to Huliwai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1203__Oahu;_Kole_Kole,_Kaluaa_to_Huliwai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1204</td>
					<td>Oahu; Punaluu to Waimea</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1204__Oahu;_Punaluu_to_Waimea.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1205</td>
					<td>Oahu; Honouliuli</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1205__Oahu;_Kole_Kole_to_Honouliuli;_Pelehua.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1206</td>
					<td>Oahu; Kawaiiki</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1206__Oahu;_Kawaiiki.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1207</td>
					<td>Island of Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1207__Oahu;_Yoshio_Kondo;_Annotated.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1208</td>
					<td>Oahu; Kaipapau to Waimea</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1208__Oahu;_Kaipapau_to_Waimea.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1209</td>
					<td>Island of Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1209__Oahu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1210</td>
					<td>Oahu; Honolulu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1210__Oahu;_Honolulu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1211</td>
					<td>Oahu; Mokapu Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1211__Oahu;_Mokapu_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1212</td>
					<td>Oahu; Pearl Harbor</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1212__Oahu;_Pearl_Harbor.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1213</td>
					<td>Oahu; Haleiwa Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1213__Oahu;_Haleiwa.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1214</td>
					<td>Oahu; Kahana</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1214__Oahu;_Kahana.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1215</td>
					<td>Oahu; Kaneohe</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1215__Oahu;_Kaneohe.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1216</td>
					<td>Oahu; Kahuku</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1216__Oahu;_Kahuku.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1217</td>
					<td>Oahu; Kahuku</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1217__Oahu;_Kahuku.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1218</td>
					<td>Oahu; Kaneohe</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1218__Oahu;_Kaneohe.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1219</td>
					<td>Oahu; Kaena Point</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1219__Oahu;_Kaena_Point.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1220</td>
					<td>Oahu; Kaena Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1220__Oahu;_Kaena_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1221</td>
					<td>Oahu; Hauula</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1221__Oahu;_Hauula.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1222</td>
					<td>Oahu; Waipahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1222__Oahu;_Waipahu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1223</td>
					<td>Oahu; Schofield Barracks</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1223__Oahu;_Schofield_Barracks.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1225</td>
					<td>Oahu; Kaena</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1225__Oahu;_Kaena.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1226</td>
					<td>Oahu; Hauula</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1226__Oahu;_Hauula.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1227</td>
					<td>Oahu; Haleiwa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1227__Oahu;_Haleiwa.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1228</td>
					<td>Oahu; Waianae</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1228__Oahu;_Waianae.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1231</td>
					<td>Oahu; Waimea</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1231__Oahu;_Waimea.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1232</td>
					<td>Oahu; Waimea</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1232__Oahu;_Waimea;_same_as_#1231.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1233</td>
					<td>Oahu; Waimea to Waianae</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1233__Oahu;_NAP_of_Earth_Training_Map.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1234</td>
					<td>Oahu; Waimea to Waianae</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1234__Oahu;_NAP_of_Earth_Training_Map;_same_as_#1233.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1235</td>
					<td>Island of Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1235__Oahu;_Crash_Grid_Map.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1235.1</td>
					<td>Island of Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1235.1__Oahu;_Crash_Grid_Map.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1236</td>
					<td>Oahu; Waimea to Waianae</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1236__Oahu;_NAP_of_Earth_Training_Map;_same_as_#1233_and_#1234.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1237</td>
					<td>Notes</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1237_Yoshio_Kondo's__Notes_on_maps.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1237.1</td>
					<td>Oahu; Waianae Mountains</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1237.1__Oahu;_Waianae_Mts.__Meinecke.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1237.2</td>
					<td>Oahu; Waianae Mountains</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1237.2__Oahu;_Waianae_Mts.__Meinecke;_hand_drawn.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1237.3</td>
					<td>Oahu; Kawaihalona Gulch</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1237.3__Graph_of_A._bulimoides_rosea_from_Meinecke.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1238</td>
					<td>Island of Kauai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1238__Kauai;___Meinecke_1978.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1239</td>
					<td>Oahu; Kaena; Waialua to Waianae</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1239__Oahu;_Waianae_Coast.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1240</td>
					<td>Oahu; North Koolau</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1240__Oahu;_Kahana_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1241</td>
					<td>Oahu; Haleiwa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1241__Oahu;_Haleiwa.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1242</td>
					<td>Oahu; Laie</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1242__Oahu;_Laie.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1243</td>
					<td>Oahu; Ewa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1243__Oahu;_Ewa_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1244</td>
					<td>Oahu; Barbers Point; Waianae Mountains</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1244__Oahu;_Barbers_Point_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1245</td>
					<td>Oahu; Mokapu </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1245__Oahu;_Mokapu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1246</td>
					<td>Oahu; Koko Head</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1246__Oahu;_Koko_Head.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1247</td>
					<td>Oahu; Honolulu Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1247__Oahu;_Honolulu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1248</td>
					<td>Oahu; Waikane</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1248__Oahu;_Waikane.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1249</td>
					<td>Oahu; Kaneohe</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1249_Oahu,_Kaneohe_Quadrangle-Meinecke.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1250</td>
					<td>Oahu; Waipahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1250__Oahu;_Waipahu,_Pearl_harbor.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1251</td>
					<td>Oahu; Wahiawa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1251__Oahu;_Wahiawa.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1252</td>
					<td>Oahu; Schofield</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1252__Oahu;_Schofield_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1253</td>
					<td>Oahu; Kaipapau</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1253__Oahu;_Kaipapau.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1254</td>
					<td>Oahu; Waianae</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1254__oahu;_Waianae_Mountains.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1255</td>
					<td>Oahu; Honolulu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1255__Oahu;_Honolulu;_1810.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1259</td>
					<td>Island of Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1259__Oahu;_1881.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1260</td>
					<td>Island of Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1260__Oahu;_1902.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1261</td>
					<td>Island of Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1261__Oahu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1261.1</td>
					<td>Oahu; Waianae, Waialua, Ewa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1261.1__Oahu;_Waianae_coast.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1261.2</td>
					<td>Oahu; Koolau Mountains, Achatinella species</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1261.2__Oahu;_Koolau_Mountains;_Achatinella_species_distribution.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1263</td>
					<td>Oahu; Koko Head Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1263__Oahu;_Koko_Head_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1264</td>
					<td>Oahu; Honolulu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1264__Oahu;_Honolulu_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1265</td>
					<td>Oahu; Honolulu Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1265__oahu;_Honolulu_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1266</td>
					<td>Oahu; Kaneohe Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1266__Oahu;_Kaneohe_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1267</td>
					<td>Oahu; Waipahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1267__Oahu;_Waipahu_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1268</td>
					<td>Oahu; Wahiawa Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1268__Oahu;_Wahiawa_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1269</td>
					<td>Oahu; Kaipapau Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1269__Oahu;_Kaipapau_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1270</td>
					<td>Oahu; Laie Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1270__Oahu;_laie_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1271</td>
					<td>Oahu; Haleiwa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1271__Oahu;_Haleiwa_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1272</td>
					<td>Oahu; Kahana</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1272__Oahu;_Kahana_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1273</td>
					<td>Oahu; Waikane</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1273__Oahu;_Waikane_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1274</td>
					<td>Oahu; Mokapu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1274__Oahu;_Mokapu_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1275</td>
					<td>Oahu; Ewa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1275__Oahu;_Ewa_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1276</td>
					<td>Oahu; Waianae</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1276__Oahu;_Waianae_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1277</td>
					<td>Oahu; Schofield</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1277__Oahu;_Schofield_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1278</td>
					<td>Oahu; Kaena</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1278__Oahu;_Northwest_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1279</td>
					<td>Oahu; Koko Head</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1279__Oahu;_Koko_Head_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1280</td>
					<td>Oahu; Mokapu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1280__Oahu;_Mokapu_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1281</td>
					<td>Oahu; Honolulu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1281__Oahu;_Honolulu_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1282</td>
					<td>Oahu; Kaneohe</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1282__Oahu;_Kaneohe_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1283</td>
					<td>Oahu; Kaipapau</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1283__Oahu;_Kaipapau_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1284</td>
					<td>Oahu; Ewa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1284__Oahu;_Ewa_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1285</td>
					<td>Oahu; Barbers Poin</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1285__Oahu;_Barbers_Point_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1286</td>
					<td>Oahu; Kahana</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1286__Oahu;_Kahana_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1287</td>
					<td>Oahu; Waipahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1287__Oahu;_Waipahu_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1288</td>
					<td>Oahu; Wahiawa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1288__Oahu;_Wahiawa_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1289</td>
					<td>Oahu; Laie</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1289__Oahu;_Laie_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1290</td>
					<td>Oahu; Waikane</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1290__Oahu;_Waikane_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1291</td>
					<td>Oahu; Haleiwa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1291__Oahu;_Haleiwa_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1292</td>
					<td>Oahu; Waianae</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1292__Oahu;_Waianae_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1293</td>
					<td>Oahu; Schofield</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1293__Oahu;_Schofield_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1294</td>
					<td>Oahu; Kaena</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1294__Oahu;_Kaena_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1295</td>
					<td>Oahu; NAP Ttraining map</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1295__Oahu;_NAP_Training_Map.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1296</td>
					<td>Oahu; Kaena</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1296__Oahu;_Kaena;__map_2B;_Territory_of_Hawaii.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1297</td>
					<td>Oahu; Waianae</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1297__Oahu;_Waianae;_map_5B;_Territory_of_Hawaii.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1298</td>
					<td>Oahu; Waianae</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1298__Oahu;_Waianae;_map_5A;_Territory_of_Hawaii.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1299</td>
					<td>Oahu; Koko Head</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1299__Oahu;_Koko_Head;_map_13A;_Territory_of_Hawaii.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1300</td>
					<td>Oahu; Honolulu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1300__Oahu;_Honolulu;_map_12B;_Territory_of_Hawaii.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1301</td>
					<td>Oahu; Nanakuli</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1301__Oahu;_Nanakuli;_map_8B;_Territory_of_Hawaii.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1302</td>
					<td>Oahu; Nanakuli</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1302__Oahu;_Nanakuli;_map_8A;_Territory_of_Hawaii.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1303</td>
					<td>Oahu; Honolulu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1303__Oahu;_Honolulu;_no._12A;_Territory_of_Hawaii.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1304</td>
					<td>Oahu; Kahana</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1304__Oahu;_Kahana;_map_4B;_Territory_of_Hawaii.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1305</td>
					<td>Oahu; Kahana</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1305__Oahu;_Kahana;_map_no._4A;_Territory_of_Hawaii.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1306</td>
					<td>Oahu; Kaena</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1306__Oahu;_Kaena;_map_no._2A;_Territory_of_Hawaii.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1307</td>
					<td>Oahu; Wahiawa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1307__Oahu;_Wahiawa;_map_no._6B;_Territory_of_Hawaii.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1308</td>
					<td>Oahu; Wahiawa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1308__Oahu;_Wahiawa;_map_no._6A;_Territory_of_Hawaii.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1309</td>
					<td>Oahu; Waialua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1309__Oahu;_Waialua;_map_3A;_Territory_of_Hawaii.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1310</td>
					<td>Oahu; Kahuku</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1310__Oahu;_Kahuku;_map_1A;_Territory_of_Hawaii.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1311</td>
					<td>Oahu; Kahuku</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1311__Oahu;_Kahuku;_map_1B;_Territory_of_Hawaii.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1312</td>
					<td>Oahu; Waialua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1312__Oahu;_Waialua;_map_3B;_(T.H.).pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1313</td>
					<td>Oahu; Kaneohe</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1313__Oahu;_Kaneohe;_map_7A;_(T.H.).pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1314</td>
					<td>Oahu; Pearl Harbor</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1314__Oahu;_Kaneohe;_map_7B;_Territory_of_Hawaii.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1315</td>
					<td>Oahu; Koko Head</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1315__Oahu;_Pearl_Harbor;_map_9B;_Territory_of_Hawaii.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1316</td>
					<td>Oahu; Koko Head</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1316__Oahu;_Koko_Head;_map_13B;_Territory_of_Hawaii.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1317</td>
					<td>Oahu; Pearl Harbor</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1317__Oahu;_Pearl_Harbor;_map_9A;_Territory_of_Hawaii.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1318</td>
					<td>Oahu; Waimanalo</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1318__Oahu;_Waimanalo;_map_10B;_Territory_of_Hawaii.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1319</td>
					<td>Oahu; Waimanalo</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1319__Oahu;_Waimanalo;_map_10A;_Territory_of_Hawaii.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1320</td>
					<td>Oahu; Barbers Point</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1320__Oahu;_Barbers_Point;_map_11B;_Territory_of_Hawaii.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1321</td>
					<td>Oahu; Barbers Point</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1321__Oahu;_Barbers_Point;_map_11A;_Territory_of_Hawaii.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1322</td>
					<td>Oahu; Waimea</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1322__Oahu;_Waimea_Quadrangle;_terrain_map.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1323</td>
					<td>Oahu; Kahuku</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1323__Oahu;_Kahuku_quadrangle;_terrain_map.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1324</td>
					<td>Oahu; Kaena</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1324__Oahu;_Kaena_Quadrangle;_terrain_map.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1325</td>
					<td>Oahu; Haleiwa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1325__Oahu;_haleiwa_Quadrangle;_terrain_map.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1326</td>
					<td>Oahu; Paalaa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1326__Oahu;_Paalaa_Quadrangle;_terrain_map.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1327</td>
					<td>Oahu; Kahana</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1327__Oahu;_Kahana_Quadrangle;_terrain_map.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1328</td>
					<td>Oahu; Waianae</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1328__Oahu;_Waianae_Quadrangle;_terrain_map.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1329</td>
					<td>Oahu; Schofield</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1329__Oahu;_Schofield_quadrangle;_terrain_map.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1330</td>
					<td>Oahu; Kaukonahua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1330__Oahu;_Kaukonahua_Quadrangle;_terrain_map.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1331</td>
					<td>Oahu; Waikane</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1331__Oahu;_Waikane_Quadrangle;_terrain_map.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1332</td>
					<td>Oahu; Ulupau Head</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1332__oahu;_Ulupau_Head_Quadrangle;_terrain_map.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1333</td>
					<td>Oahu; Nanakuli</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1333__oahu;_nanakuli_Quadrangle;_terrain_map.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1334</td>
					<td>Oahu; Waipahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1334__Oahu;_Waipahu_Quadrangle;_terrain_map.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1335</td>
					<td>Oahu; Kaneohe, Kailua, Manoa, Kapalama, Kahuiki, Kahaluu, Kalihi</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1335__Oahu;_Kaneohe_Quadrangle;_terrain_map.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1336</td>
					<td>Oahu; Kailua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1336__oahu;_kailua_Quadrangle;_terrain_map.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1337</td>
					<td>Oahu; Barbers Point</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1337__Oahu;_Barbers_Point_quadrangle;_terrain_map.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1338</td>
					<td>Oahu; Ewa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1338__Oahu;_Ewa_Quadrangle;_terrain_map.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1339</td>
					<td>Oahu; Honolulu, Kalihi, Nuuanu, Pauoa, Kahuiki</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1339__Oahu;_Honolulu_Quadrangle;_terrain_map.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1340</td>
					<td>Oahu; Diamond Head, Wailupe, Waialae, Palolo, Honolulu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1340__Oahu;_Honolulu;_Diamond_Head_Quadrangle;_terrain_map.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1341</td>
					<td>Island of Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1341__Oahu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1342</td>
					<td>Island of Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1342__Oahu,_1929.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1343</td>
					<td>Island of Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1343__Oahu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1344</td>
					<td>Island of Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1344__Oahu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1345</td>
					<td>Island of Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1345__Oahu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1346</td>
					<td>Island of Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1346__Oahu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1346.1</td>
					<td>Oahu; Honolulu, Kalihi, Kapalama, Nuuanu, Pauoa, Makiki, Manoa, Palolo, Waialae</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1346.1__Oahu;_Honolulu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1347</td>
					<td>Island of Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1347__Oahu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1348</td>
					<td>Oahu; Honolulu, Kalihi, Kapalama, Nuuanu, Pauoa, Makiki, Manoa, Palolo</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1348__Oahu;_Honollulu_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1349</td>
					<td>Oahu; Kaena, Makaha, Waianae, Keaau, Makua, Kahanaiki, Waialua, Mokuleia, Kealia, Kawaihapai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1349__Oahu;_Kaena_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1350</td>
					<td>Oahu; Babers Point, Honouliuli, Waimanalo, Kualakai, Ewa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1350__Oahu;_Barbers_Point_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1351</td>
					<td>Oahu; Barbers Point, Honouliuli, Waimanalo, Kualakai, Ewa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1351__Oahu;_Barbers_Point_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1352</td>
					<td>Oahu; Kahuku, Waialua, Wahiawa, Waianae</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1352__Oahu;_Northwest_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1353</td>
					<td>Oahu; Ewa, Pearl Harbor, Waimanalo, Koko Head, Kailua, Kaneohe</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1353__Oahu;_Southeast_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1354</td>
					<td>Oahu; Ewa, Honouliuli</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1354__Oahu;_Southwest_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1355</td>
					<td>Oahu; Koolauloa, Waikane</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1355__Oahu;_Northeast_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1356</td>
					<td>Oahu; Pauoa Valley</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1356.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1357</td>
					<td>Oahu; Laie, Mokuauia</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1357.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1359</td>
					<td>Oahu; Kalihi Valley</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1359.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1360</td>
					<td>Island of Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1360__Oahu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1361</td>
					<td>Oahu; Kalihi, Nuuanu, Pauoa, Makiki, Manoa, Palolo</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1361__Oahu;_Honolulu;_mountain_trails.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1362</td>
					<td>Island of Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1362__Oahu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1363</td>
					<td>Island of Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1363__Oahu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1364</td>
					<td>Oahu; Waianae, Ewa, Wahiawa, Kawailoa, Waimea, Laie</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1364__Oahu;_NAP_Training_Map.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1366</td>
					<td>Islands of Oahu, Maui, Kauai, Molokai , Lanai, Niihau, Kahoolawe</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1366__Hawaiian_Islands;_Military_Installations_and_facilities.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1366.1</td>
					<td>Island of Oahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1366.1__Oahu;_Military_Installations_and_facilities.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1368</td>
					<td>Oahu; Honolulu, Moanalu, Kahauiki, Kalihi, Kapalama, Nuuanu, Pauoa, Makiki,Manoa, Palolo, Waianae</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1368__Oahu;_Honolulu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1370</td>
					<td>Oahu; Waianae Coast</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1370__Oahu;_Waianae_coast.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1371</td>
					<td>Island of Hawaii</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1371__Hawaii;__(Geological_map).pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1372</td>
					<td>Hawaii; Waiakea, Laupahoehoe to Volcano</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1372__Hawaii;_Laupahoehoe_to_Volcano_National_Park.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1373</td>
					<td>Hawaii; Kahuku, Kapapala, Southwest Section</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1373__Hawaii;_Southwest_section.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1374</td>
					<td>Island of Hawaii</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1374__Hawaii;_(December_1928).pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1375</td>
					<td>Island of Hawaii</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1375__Hawaii;_(December_1928).pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1376</td>
					<td>Hawaii; Waiakea</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1376__Hawaii;_Waiakea;_Timber_Management_map.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1377</td>
					<td>Hawaii; Waiakea, Hilo</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1377__Hawaii;_Waiakea;_proposed_new_prison_site.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1378</td>
					<td>Hawaii; Kulani Prison</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1378__Hawaii;_Stainback_Highway;_Kulani_Prison.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1379</td>
					<td>Island of Hawaii</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1379__Hawaii,_1801.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1380</td>
					<td>Island of Hawaii</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1380__Hawaii,_1901.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1381</td>
					<td>Hawaii; North Kona Coast, Kohala to Volcanoes National Park</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1381__Hawaii;_North_Kona_Coast.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1382</td>
					<td>Island of Hawaii</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1382__Hawaii;_(Map_Index,_19.XII.19).pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1383</td>
					<td>Hawaii; Kohala</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1383__Hawaii;_Kohala_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1384</td>
					<td>Hawaii; Waipio</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1384__Hawaii;_Waipio_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1385</td>
					<td>Hawaii; Hamakua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1385__Hawaii;_Hamakua_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1386</td>
					<td>Hawaii; Puako</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1386__Hawaii;_Puako_Quadrangle_(might_have_to_see_original_map_for_some_site_info).pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1387</td>
					<td>Hawaii; Waikii, Paauhau, Mauna Kea, Kaohe</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1387__Hawaii;_Waikii_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1388</td>
					<td>Hawaii; Mauna Kea, Hilo</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1388__Hawaii;_Mauna_Kea_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1389</td>
					<td>Hawaii; Honomu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1389__Hawaii;_Honomu_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1390</td>
					<td>Hawaii; Keahole</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1390__Hawaii;_Keahole_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1391</td>
					<td>Hawaii; Kailua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1391__Hawaii;_Kailua_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1392</td>
					<td>Hawaii; Kaohe</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1392__Hawaii;_Kaohe.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1393</td>
					<td>Hawaii; Humuula</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1393__Hawaii;_Humuula_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1394</td>
					<td>Hawaii; Hilo</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1394__Hawaii;_Hilo_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1395</td>
					<td>Hawaii; Makuu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1395__Hawaii;_Makuu_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1396</td>
					<td>Hawaii; Honaunau</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1396__Hawaii;_Honaunau_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1397</td>
					<td>Hawaii; Mauna Loa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1397__Hawaii;_Mauna_Loa_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1398</td>
					<td>Hawaii; Kilauea</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1398__Hawaii;_Kilauea_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1399</td>
					<td>Hawaii; Puna</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1399__Hawaii;_Puna_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1400</td>
					<td>Hawaii; Kalapana</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1400__Hawaii;_Kalapana_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1401</td>
					<td>Hawaii; Hoopuloa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1401__Hawaii;_Hoopuloa_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1402</td>
					<td>Hawaii; Honuapo</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1402__Hawaii;_Honuapo_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1403</td>
					<td>Hawaii; Pahala</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1403__Hawaii;_Pahala_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1404</td>
					<td>Hawaii; Kalae</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1404__Hawaii;_Kalae_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1405</td>
					<td>Hawaii; Kainaliu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1405__Hawaii;_Kainaliu_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1406</td>
					<td>Hawaii; Puu Lehua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1406__Hawaii;_Puu_Lehua_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1407</td>
					<td>Hawaii; Puu o Uo</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1407__Hawaii;_Puu_o_Uo_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1408</td>
					<td>Hawaii; Kokoolau</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1408__Hawaii;_Koloolau_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1409</td>
					<td>Hawaii; Kokoolau</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1409__Hawaii;_Koolau_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1410</td>
					<td>Hawaii; Puu Ulaula</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1410__Hawaii;_Puu_Ula_Ula_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1411</td>
					<td>Hawaii; Kulani</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1411__Hawaii;_kulani_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1412</td>
					<td>Hawaii; Olaa Back Road</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1412__Hawaii;_Olaa;_back_road_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1413</td>
					<td>Hawaii; Mountain View, Waiakea, Puna, Waiakahekahe</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1413__Hawaii;_Mountain_view_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1414</td>
					<td>Hawaii; Pahoa Junction</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1414__Hawaii;_Pahoa_Junction_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1415</td>
					<td>Hawaii; Pahoa Junction</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1415__Hawaii;_Pahoa_Junction_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1416</td>
					<td>Hawaii; Kapoho</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1416__Hawaii;_Kapoho_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1417</td>
					<td>Hawaii; Honaunau</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1417__Hawaii;_South_Kona;_Honaunau_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1418</td>
					<td>Hawaii; Kaunehe</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1418__Hawaii;_Kaunene_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1419</td>
					<td>Hawaii; Sulphur Cone, Kona, Kau, Keauhou, Kahuku</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1419__Hawaii;_Sulphur_Cone_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1420</td>
					<td>Hawaii; Mokuaweoweo, Kahuku, Anipeahi, Kapapala</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1420__Hawaii;_Mokuaweoweo_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1421</td>
					<td>Hawaii; Pahuamimi, Kapapala, Anipeahi, Ainapo</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1421__Hawaii;_Kau_District;_Pahuamimi_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1422</td>
					<td>Hawaii; Kilauea Crater, Ohaikea, Keamoku, Olaa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1422__Hawaii;_Kilauea_Crater_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1423</td>
					<td>Hawaii; Glenwood, Kahalualea, Olaa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1423__Hawaii;_Glenwood_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1424</td>
					<td>Hawaii; Puna Forest, Keaau, Kahaualea, Kamoamoa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1424__Hawaii;_Puna_Forest_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1425</td>
					<td>Hawaii; Pahoa, Keahialaka, Puna, Kahueleau</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1425__Hawaii;_Pahoa_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1426</td>
					<td>Hawaii; Pahoehoe, Waiea, Kaohe, Olelomoana, Kaapuna</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1426__Hawaii;_Pahoehoe_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1427</td>
					<td>Hawaii; Alika Cone, Kahuku</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1427__Hawaii;_Kau_District;_Alika_Cone_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1428</td>
					<td>Hawaii; Clark Tunnel, Kapapala, Kahuku, Kau, Kauhuuhuula</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1428__Hawaii;_Kau_District;_Clark_Tunnel_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1429</td>
					<td>Hawaii; Kapapala, Kaalaala Makakupu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1429__Hawaii;_Kau_District;_Kapapai_A_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1430</td>
					<td>Hawaii; Kau Desert, Hawai National Park</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1430__Hawaii;_Kau_District;_Kau_Desert_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1431</td>
					<td>Hawaii; Keauhou, Panau Nui, Kealakomo</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1431__Hawaii;_Keauhou_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1432</td>
					<td>Hawaii; Wahaula Heiau, Kamoamoa, Laeapuki, Panau Nui, Kahaulea, Pulama</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1432__Hawaii;_Wahaula_Heiau_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1433</td>
					<td>Hawaii; Milolii, Kipahoehoe, Alika, Paoa, Hoopuloa, Kapua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1433__Hawaii;_South_Kona_District;_Milolii_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1434</td>
					<td>Hawaii; Papa, Alika, Honomalino, Manuka, Kapua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1434__Hawaii;_Papa_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1435</td>
					<td>Hawaii; Puu Keokeo, Kau</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1435__Hawaii;_Kau_district;_Puu_Keokeo_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1436</td>
					<td>Hawaii; Punaluu, Kau, Mohokea</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1436__Hawaii;_Kau_District;_Punaluu_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1437</td>
					<td>Hawaii; Palima Point, Kauhuhuula, Kaalaala Makai, Hionamoa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1437__Hawaii;_Kau_District;_Palima_Point_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1438</td>
					<td>Hawaii; Nalikakani</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1438__Hawaii;_Kau_District;_Naliikakani_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1439</td>
					<td>Hawaii; Manuka, Kona, Kau</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1439__Hawaii;_Manuka_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1440</td>
					<td>Hawaii; Kamaoa, Kapua, Manuka, Kau, Kahuku</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1440__Hawaii;_Kamaoa_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1441</td>
					<td>Hawaii; Kahuku, Kiolakaakeaa, Pakini</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1441__Hawaii;_Kau_District;_Kahuku_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1442</td>
					<td>Hawaii; Naalehu, Honuapo, Waiohinu, Kahili Pali Nui</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1442__Hawaii;_Kau_District;_Naalehu_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1443</td>
					<td>Hawaii; Kalae, Pakini, Kamaoa, Puueo</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1443__Hawaii;_Kau_District;_Kalae_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1444</td>
					<td>Island of Hawaii</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1444__Hawaii.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1445</td>
					<td>Hawaii; Hawi, North Kohala</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1445__Hawaii;_North_Kohala_District;__Hawi_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1446</td>
					<td>Hawaii; Hawai‘i; Honokane</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1446__Hawaii;_Honokane_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1446</td>
					<td>Oahu; Makua Military Reservation</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1446_Oahu;_Makua_Military_Reservation;_Carl_C._Christensen.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1447</td>
					<td>Hawaii; Kawaihae, Kohala, Kahuanui, Waika</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1447__Hawaii;_Kawaihae_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1448</td>
					<td>Hawaii; Kamuela Quadrangle, Kohala, Kawaihae</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1448__Hawaii;_Kamuela_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1449</td>
					<td>Hawaii; Kukuihaele, Waikoekoe, Waikoloa, Kapulena, Honoka</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1449__Hawaii;_Kukuihaele_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1450</td>
					<td>Hawaii; Honokaa Quadrangle, Hamakua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1450__Hawaii;_Hamakua_District;_Honokaa_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1451</td>
					<td>Hawaii; Kukaiau Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1451__Hawaii;_Kukaiau_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1452</td>
					<td>Hawaii; Anaehoomalu Quadrangle, South Kohala, North Kona</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1452__Hawaii;_Anaehoomalu_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1453</td>
					<td>Hawaii; Puu Hinai, Waikoloa, Kohala, Puu Anahulu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1453__Hawaii;_Puu_Hinai_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1454</td>
					<td>Hawaii; Puu Pa Quadrangle, Waikoloa, Kohola</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1454__Hawaii;__Hawaii;_Puu_Pa_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1455</td>
					<td>Hawaii; Makahalau Quadrangle, Kamakua, Paauhau, Waikoloa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1455__Hawaii;_Makahalau_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1456</td>
					<td>Hawaii; Umikoa Quadrangle, Paauhau, Kohalalele, Maunakea</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1456__Hawaii;_Umikoa_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1457</td>
					<td>Hawaii; Keanakolu Quadrangle, Hamakua, Hilo, Laupahoehoe, Maulua Nui</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1457__Hawaii;_Keanakolu_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1458</td>
					<td>Hawaii; Papaaloa Quadrangle, Laupahoehoe to Kawaiki</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1458__Hawaii;_Papaaloa_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1459</td>
					<td>Hawaii; Makalawena Quadrange, North Kona, Kukio to Haleohiu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1459__Hawaii;_North_Kona_district;_Makalawena_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1460</td>
					<td>Hawaii; Kihilo Quadrangle, North Kona, Puuwaawaa, Kaupulehu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1460__Hawaii;_North_Kona_District;_Kiholo_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1461</td>
					<td>Hawaii; Puu Anahulu Quadrangle,North Kona</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1461__Hawaii;_Puu_Anahulu_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1462</td>
					<td>Hawaii; Keamuku Quadrangle, Waikoloa, Puuanahulu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1462__Hawaii;_Keamuku_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1463</td>
					<td>Hawaii; Ahumoa Quadrangle, Paauhau, Hamakua, Kaohe</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1463__Hawaii;_Ahumoa_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1464</td>
					<td>Hawaii; Lake Waiau Quadrangle, Haamkua, Mauna Kea, Norh Hilo</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1464__Hawaii;_Lake_Waiau_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1465</td>
					<td>Hawaii; Pua Akala Quadrangle, Hilo, Makahanaloa, Papaikou, Maulua Nui</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1465__Hawaii;_Pua_Akala_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1466</td>
					<td>Hawaii; Kaiwiki Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1466__Hawaii;_Kaiwiki_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1467</td>
					<td>Hawaii; Onomea Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1467__Hawaii;_Onomea_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1468</td>
					<td>Hawaii; Keahole Point Quadrangle, North Kona</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1468__Hawaii;_North_Kona_District;_Keahole_Point_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1469</td>
					<td>Hawaii; Kalaoa Quadrangle, North Kona, Kaloko, Keahuolu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1469__Hawaii;_North_Kona_District;_Kalaoa_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1470</td>
					<td>Hawaii; Hualalai Quadrangle, North Kona, Puuwaawaa, Puu Anahulu, Keauhou </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1470__Hawaii;_North_Kona_District;_Hualalai_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1471</td>
					<td>Hawaii; Naohueleelua Quadrangle, North Kona, Kaohe, Hamakua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1471__Hawaii;_Naohueleelua_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1472</td>
					<td>Hawaii; Puu Koli, Kaohe, Humuula</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1472__Hawaii;_Puu_Koli_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1473</td>
					<td>Hawaii; Puu Oo Quadrangle, North Hilo, Humuula</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1473__Hawaii;_Puu_Oo_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1474</td>
					<td>Hawaii; Upper Piihonua, Hilo, Waiakea</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1474__Hawaii;_Upper_Piihonua_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1475</td>
					<td>Hawaii; Piihonua Quadrangle, Hilo, Kukuau</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1475__Hawaii;_Piihonua_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1476</td>
					<td>Hawaii; Keaau Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1476__Hawaii;_Keaau_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1477</td>
					<td>Island of Hawaii</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1477_Hawaii;_(W.H._Meinecke).pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1478</td>
					<td>Island of Hawaii</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1478.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1478.1</td>
					<td>Hawaii; Hilo</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1478.1__Hawaii;_Hilo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1479</td>
					<td>Hawaii; Hamakua Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1479__Hawaii;_Hamakua_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1479.1</td>
					<td>Hawaii; The back of map #1479</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1479.1__Back_of_#1479;_(notes_on_topographic_maps).pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1480</td>
					<td>Island of Hawaii</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1480__Hawaii.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1480.1</td>
					<td>Island of Hawaii</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1480.1__Hawaii;_(information__on_back_of_Map_#1480).pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1481</td>
					<td>Island of Hawaii</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1481__Hawaii_(Tourist_Map).pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1481.1</td>
					<td>Hawaii; The back of map #1481</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1481.1__Hawaii_(information_on_the_back_of_map_#1481).pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1482</td>
					<td>Islands of Hawaii &amp; Kauai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1482__Hawaiian_Archipelago;_Kauai_and_Hawaii_(Tourist_maps).pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1483</td>
					<td>Hawaii; Punahoa, Ponahawai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1483__Hawaii;_Punahoa;_Powerline_Survey;_Section_1.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1484</td>
					<td>Hawaii; Hilo, Waiakea</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1484__Hawaii;_Waiakea_Forest_Reserve;_Powerline_Survey;_Section_2.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1485</td>
					<td>Hawaii; Puu Oo Quadrangle, Kaohe, Ihonua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1485__Hawaii;_Puu_Oo_Quadrangle;_Powerline_Survey;_Section_3.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1486</td>
					<td>Hawaii; Kaohe Quadrangle, Mauna Loa, Mauna Kea</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1486__Hawaii;_NE4_Kaohe_15_Quadrangle;_Powerline_Survey;_Section_4.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1487</td>
					<td>Hawaii; Kaohe, Ahumoa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1487__Hawaii;_Ahumoa;_Powerline_Survey;_Section_5.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1488</td>
					<td>Hawaii; Keamuku Quadrangle, Paauhau, Puuanahulu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1488_Hawaii;_Keamuku_Quadrangle;_Powerline_Survey;_Section_6.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1489</td>
					<td>Hawaii; Keamuku </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1489__Hawaii;_Keamuku_Sub;_Poserline_Survey;_Section_7.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1490</td>
					<td>Hawaii; Waikaloa, Puuanahulu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1490__Hawaii;_Anaehoomalu_Sub;_Powerline_Survey;_Section_8.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1491</td>
					<td>Hawaii; Kulani, Waiakea, Puu Makaala, Keauhou</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1491__Hawaii;_Kulani_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1492</td>
					<td>Hawaii; Puu Makaala, Waiakea, Olaa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1492__Hawaii;_Puu_Makaala_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1493</td>
					<td>Hawaii; Volcano Quadrangle, Olaa, Keaau, Kahaualea</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1493__Hawaii;_Volcano_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1494</td>
					<td>Hawaii; Papa Quadrangle, Kahuku, Hipahoehoe, Kaulanamauna</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1494__Hawaii;_Papa_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1495</td>
					<td>Hawaii; Kilauea Crater Quadrangle, Kapahala, Keauhou</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1495__Hawaii;_Kilauea_Crater_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1496</td>
					<td>Hawaii; Kauluoa Point Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1496__Hawaii;_Kauluoa_Point_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1497</td>
					<td>Hawaii; Puu Pohakuloa, Honokua, Pahoehoe, Kahuku</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1497__Hawaii;_Puu_Pohakuloa_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1498</td>
					<td>Hawaii; Milolii Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1498__Hawaii;_Milolii_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1499</td>
					<td>Hawaii; Manuka Bay Quadrangle, Kapua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1499__Hawaii;_Manuka_Bay_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1500</td>
					<td>Hawaii; Honokane Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1500__Hawaii;_Honokane_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1501</td>
					<td>Hawaii; Kalalua Quadrangle, Puna, Kahaualea</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1501__Hawaii;_Kalalua_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1502</td>
					<td>Hawaii; Kamuela Quadrangle, Kohala, Puukapu, Lalamilo</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1502__Hawaii;_Kamuela_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1503</td>
					<td>Island of Hawaii</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1503__Hawaii;__Achatinellidae_sites.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1503.1</td>
					<td>Hawaii; Kilauea Crater</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1503.1__Hawaii.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1504</td>
					<td>Island of Molokai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1504__Molokai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1505</td>
					<td>Island of Molokai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1505__Molokai;_Stgn_Chu_(6)_23-VIII-63;_1959-x_8172_Ernest_Uu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1506</td>
					<td>Island of Molokai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1506__Molokai;_Yoshio_Kondo;_5-VI-62.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1507</td>
					<td>Molokai; East Section; Kahanui to Halawa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1507__Molokai;_east_section.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1508</td>
					<td>Molokai; Halawa Bay</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1508__Molokai;_east_side;_Halawa_Bay.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1509</td>
					<td>Island of Molokai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1509__Molokai;_Chart_no._354.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1510</td>
					<td>Island of Molokai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1510__Molokai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1511</td>
					<td>Molokai; Kalaupapa Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1511__Molokai;_Kalaupapa_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1512</td>
					<td>Molokai; Mapulehu Quadrangle, Halawa, Waialua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1512__Molokai;_Mapulehu_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1513</td>
					<td>Molokai; Halawa Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1513__Molokai;_Halawa_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1514</td>
					<td>Molokai; Papohaku Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1514__Molokai;_Papohaku_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1515</td>
					<td>Molokai; Papohaku Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1515__Molokai;_Papohaku_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1516</td>
					<td>Molokai; Mahana Quadrangle, Kaluakoi, Punakou</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1516__Molokai;_Mahana_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1517</td>
					<td>Molokai; Kualapuu Quadrangle, Hoolehua, Naiwa, Kahanu, Kalamaula</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1517__Molokai;_Kualapuu_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1518</td>
					<td>Molokai; Mahana Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1518__Molokai;_Mahana_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1519</td>
					<td>Island of Molokai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1519__Moloka_(1897).pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1520</td>
					<td>Molokai; Kalaukoi</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1520__Molokai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1520.1</td>
					<td>Molokai; Kahanu, Kalamaula, Kaunakai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1520.1__Molokai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1520.2</td>
					<td>Molokai; Waikolu, Kalaupapa, Makanalua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1520.2__Molokai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1520.3</td>
					<td>Molokai; Makakupa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1520.3__Molokai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1520.4</td>
					<td>Molokai; Halawa Bay, Wailau</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1520.4__Molokai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1520.5</td>
					<td>East Molokai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1520.5__Molokai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1521</td>
					<td>Island of Molokai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1521_Molokai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1522</td>
					<td>Island of Molokai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1522_Molokai;_east_side.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1523</td>
					<td>West Molokai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1523_Molokai;_west_side.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1524</td>
					<td>Island of Molokai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1524_Molokai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1525</td>
					<td>Island of Molokai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1525_Molokai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1526</td>
					<td>Molokai; Kamalo Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1526_Molokai;_Kamalo.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1527</td>
					<td>Eastern Molokai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1527_Molokai;_east_side.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1528</td>
					<td>Lanai; Kealiakapu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1528__Lanai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1529</td>
					<td>Island of Lanai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1529_Lanai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1530</td>
					<td>Lanai; Maunalei, Pawili, Kaoha</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1530_Lanai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1531</td>
					<td>Maui, Lanai, Molokai; Islands of Maui, Lanai, and Molokai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1531_Maui,_Lanai,_Molokai,_Kahoolawe.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1532</td>
					<td>Maui, Lanai, Molokai; Islands of Maui, Lanai, and Molokai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1532_Maui_County.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1533</td>
					<td>List of Molokai localities</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1533_Molokai_places.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1534</td>
					<td>Island of Lanai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1534_Lanai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1535</td>
					<td>Island of Lanai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1535_Lanai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1536</td>
					<td>Island of Lanai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1536_Lanai;_(line_drawing).pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1537</td>
					<td>Island of Lanai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1537_Lanai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1538</td>
					<td>Island of Lanai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1538_Lanai;_year_1878.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1539</td>
					<td>Island of Lanai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1539_Lanai;_year_1878.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1540</td>
					<td>Island of Kahoolawe</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1540_Kahoolawe.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1541</td>
					<td>Island of Kahoolawe</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1541_Kahoolawe.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1542</td>
					<td>Island of Kahoolawe</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1542_Kahoolawe.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1545</td>
					<td>Island of Niihau</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1545_Niihau.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1546</td>
					<td>Kauai; Anahola Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1546.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1547</td>
					<td>Kauai; Hanapepe Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1547.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1548</td>
					<td>Kauai; Waimea</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1548.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1549</td>
					<td>Kauai; Lihue</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1549.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1550</td>
					<td>Lanai; Koloa Quadrangle</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1550.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1551</td>
					<td>Island of Kauai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1551.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1573</td>
					<td>Maui; Wailuku</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1573__Maui,_Wailuku.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1574</td>
					<td>Maui; Honolua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1574_Maui,_Honolua_Quad.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1575</td>
					<td>Island of Maui</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1575.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1576</td>
					<td>Maui; Lahaina</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1576_Maui,_Lahaina.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1577</td>
					<td>Island of Lanai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1577_Lanai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1578</td>
					<td>Island of Molokai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1578_Molokai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1579</td>
					<td>Hawaii; Kohala</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1579_Hawaii_Island,_Kohala_Quadrangle,_Carl_C._Christensen.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1580</td>
					<td>Hawaii; Kukuihaele</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1580_Hawaii_Island,_Kukuihaele_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1581</td>
					<td>Hawaii North, Kohala, Honuaula, Mauna Kea, Waiakea, Mauna Loa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1581.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1582</td>
					<td>Hawaii South, Muana Loa, Honaunau, Kona, Kapua Manuka, Kau, Puna</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1582_Hawaii_Island,_south_Hawaii.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1583</td>
					<td>Hawaii; Honokane</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1583_Hawaii,_Honokane_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1584</td>
					<td>Hawaii; Kamuela</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1584_Hawaii,_Kamuela_Quad.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1585</td>
					<td>Maui; Kahakuloa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1585_Hawaii,_Kahakuloa_Quad.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1586</td>
					<td>Arizona; Coronado National Forest, Gila and Salt River Meridian</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1586.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1587</td>
					<td>South Coast of Oahu, Honolulu, Kaimuki</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1587.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>1237.10</td>
					<td>Oahu; North Koolau</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/1237.10__Oahu;_Koolau_Range_North.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>136.10</td>
					<td>Guam</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0136.10__Guam;_Port_Inarajan.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>LPR10</td>
					<td>Hawaiian Archipelago; Oahu; Waipahu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0010LPR__Oahu;_Waipahu_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>LPR11</td>
					<td>Hawaiian Archipelago; Oahu; Kaneohe</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0011LPR__Oahu;_Kaneohe_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>LPR12</td>
					<td>Hawaiian Archipelago; Oahu; Mokapu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0012LPR__Oahu;_Mokapu_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>LPR13</td>
					<td>Hawaiian Archipelago; Oahu; Barbers Point</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0013LPR__Oahu;_Barbers_Point_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>LPR14</td>
					<td>Hawaiian Archipelago; Oahu; Ewa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0014LPR__Oahu;_Ewa_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>LPR15</td>
					<td>Hawaiian Archipelago; Oahu; Honolulu</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0015LPR__Oahu;_Honolulu_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>LPR16</td>
					<td>Hawaiian Archipelago; Oahu; Koko Head</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0016LPR__Oahu;_Koko_Head_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>LPR17</td>
					<td>Hawaiian Archipelago; Oahu; </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0017LPR__Oahu.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>LPR18</td>
					<td>Hawaiian Archipelago; Molokai</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0018LPR__Molokai.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>LPR19</td>
					<td>Hawaiian Archipelago; Oahu; Moanalua</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0019_LPR.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>LPR2</td>
					<td>Hawaiian Archipelago; Oahu; Haleiwa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0002LPR__Oahu;_Haleiwa_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>LPR20</td>
					<td>Hawaiian Archipelago; Oahu; Nuuanu Valley</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0020_LPR.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>LPR21</td>
					<td>Hawaiian Archipelago; Oahu; Waimanalo</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0021_LPR.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>LPR23</td>
					<td>Hawaiian Archipelago; Oahu; Waimano V</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0023_LPR.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>LPR24</td>
					<td>Hawaiian Archipelago; Oahu; Kawailoa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0024_LPR.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>LPR24.1</td>
					<td>Hawaiian Archipelago; Oahu; Kawailoa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0024.1_LPR.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>LPR25</td>
					<td>Hawaiian Archipelago; Oahu; Kaluanui Stream</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0025_LPR.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>LPR26</td>
					<td>Hawaiian Archipelago; Oahu; Waikane - Waihole</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0026_LPR.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>LPR27</td>
					<td>Hawaiian Archipelago; Oahu; Laie area </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0027_LPR.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>LPR27.1</td>
					<td>Hawaiian Archipelago; Oahu; Laie area </td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0027.1_LPR.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>LPR28</td>
					<td>Hawaiian Archipelago; Oahu; Kipapa &amp; Waiawa Streams</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0028_LPR.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>LPR29</td>
					<td>Hawaiian Archipelago; Oahu; Mt. Kaala</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0029_LPR.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>LPR3</td>
					<td>Hawaiian Archipelago; Oahu; Kaipapau</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0003LPR__Oahu;_Kaipapau_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>LPR4</td>
					<td>Hawaiian Archipelago; Oahu; Kahana</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0004LPR__Oahu;_Kahana_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>LPR5</td>
					<td>Hawaiian Archipelago; Oahu; Keana</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0005LPR__Oahu;_Kaena_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>LPR6</td>
					<td>Hawaiian Archipelago; Oahu; Schofield</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0006LPR__Oahu;_Schofield_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>LPR7</td>
					<td>Hawaiian Archipelago; Oahu; Wahiawa</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0007LPR__Oahu;_Wahiawa_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>LPR8</td>
					<td>Hawaiian Archipelago; Oahu; Waikane</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0008LPR__Oahu;_Waikane_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
				<tr>
					<td>LPR9</td>
					<td>Hawaiian Archipelago; Oahu; Waianae</td>
					<td><a href="http://db.bishopmuseum.org/malamedia/literature/scanned_maps/pdf/0009LPR__Oahu;_Waianae_Quadrangle.pdf" target="_blank">View</a></td>
				</tr>
			</tbody>
		</table>		
		
		
		</table>
		
		
	</div>
	<?php
	include($SERVER_ROOT.'/includes/footer.php');
	?>
</body>
</html>
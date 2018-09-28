										<?php 
										require("config.php");

										if (isset($_POST['course'])) {
											$c_name = secure($_POST['course']);

											$string = "SELECT l.`L_name` 
											FROM `level` AS l 
											INNER JOIN `course` AS c 
											ON l.`L_CID`=c.CID AND c.`C_name`='$c_name'";
											$temp = $sql->query($string);
											while($demo = $temp->fetch_row()){
												?>
												<option value="<?php echo $demo[0]; ?>"><?php echo $demo[0]; ?></option>
												<?php
											}
										}

										// fetching data from attempt
										if(isset($_POST['level'])){
											$l_name = secure($_POST['level']);

											$string = "SELECT a.`A_name` 
											FROM `attempt` AS a
											INNER JOIN `level` AS l 
											ON a.`A_LID`=l.LID AND l.`L_name`='$l_name'";
											$temp = $sql->query($string);
											while($demo = $temp->fetch_row()){
												?>
												<option value="<?php echo $demo[0]; ?>"><?php echo $demo[0]; ?></option>
												<?php
											}
										}

										//fetching data from subject
										if (isset($_POST['levels'])) {
											$l_name = secure($_POST['levels']);

											$string = "SELECT s.`S_name` 
											FROM `subject` AS s
											INNER JOIN `level` AS l 
											ON s.`S_LID`=l.LID AND l.`L_name`='$l_name'";
											$temp = $sql->query($string);
											while ($demo = $temp->fetch_row()) {
												?>
												<option value="<?php echo $demo[0]; ?>"><?php echo $demo[0]; ?></option>
												<?php
											}
										}
										if (isset($_POST['lname'])) {

											$lname = secure($_POST['lname']);

											$string = "SELECT a.`A_name` 
											FROM `attempt` AS a
											INNER JOIN `level` AS l 
											ON a.`A_LID`=l.LID AND l.`L_name`='$lname'";
											$temp = $sql->query($string);

											$string1 = "SELECT s.`S_name` 
											FROM `subject` AS s
											INNER JOIN `level` AS l 
											ON s.`S_LID`=l.LID AND l.`L_name`='$lname'";
											$temp1 = $sql->query($string1);

											$data = array();
											while ($demo = $temp->fetch_row() AND $demo1 = $temp1->fetch_row()) {
												$aname = "<option value='$demo[0]'>$demo[0]</option>";
												$sname = "<option value='$demo1[0]'>$demo1[0]</option>";
												$response = array("aname" => $aname, "sname" => $sname);
											}
												array_push($data,$response);
												echo json_encode($response);
										}
										?>
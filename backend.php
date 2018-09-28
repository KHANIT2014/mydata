			<?php 
			require("config.php");
			//fetching data from level
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

			// fetching data from attempt and subjec
			
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

				$response = "";
				$data = array();

				while ($demo = $temp->fetch_row()) {
					$response = $response . "<option value='$demo[0]'>$demo[0]</option>";
				}
				array_push($data,$response);

				$response = "";
				while ($demo1 = $temp1->fetch_row()) {
					$response = $response . "<option value='$demo1[0]'>$demo1[0]</option>";
				}
				array_push($data,$response);
				
				echo json_encode($data);

			}

			//fetching data from topic
			if (isset($_POST['sname'])) {
				$sname = secure($_POST['sname']);
				// echo "<script>alert($sname);</script>";
				$string = "SELECT t.T_name
				FROM `topic` AS t
				INNER JOIN `subject` AS s
				ON t.T_SID=s.SID AND s.S_name='$sname'";
				$temp = $sql->query($string);

				while($demo = $temp->fetch_row()){
					?>
					<option value="<?php echo $demo[0]; ?>"><?php echo $demo[0]; ?></option>
					<?php
				}
			}

			//fetching data from sub-topic
			if (isset($_POST['tname'])) {
				$sname = secure($_POST['tname']);

				$string = "SELECT st.ST_name
				FROM `subtopic` AS st
				INNER JOIN `topic` AS t
				ON st.ST_TID=t.TID AND t.T_name='$sname'";
				$temp = $sql->query($string);

				while($demo = $temp->fetch_row()){
					?>
				<option value="<?php echo $demo[0]; ?>"><?php echo $demo[0]; ?></option>
					<?php
				}
			}
			?>
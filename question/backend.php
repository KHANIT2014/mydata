			<?php 
			require("../config.php");
			//fetching data from level
			if (isset($_POST['course'])) {
				$c_name = secure($_POST['course']);

				$string = "SELECT l.`L_name`
				FROM `course` AS c
				INNER JOIN `level` AS l
				ON l.`L_CID`=c.CID AND c.`C_name`='$c_name'";
				$temp = $sql->query($string);

				$string1 = "SELECT r.`R_name`
				FROM `course` AS c
				INNER JOIN `reference` AS r
				ON r.`R_CID`=c.CID AND c.`C_name`='$c_name'";
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


			//fetching multiple values from st_name
			if (isset($_POST['stname'])) {
				$stname = secure($_POST['stname']);

				$string = "SELECT q.QID , q.Q_ans_ID , t.T_name , q.Q_time , q.Q_marks , st.STID
				FROM `subtopic` AS st
				INNER JOIN `question` AS q
				ON st.ST_name='$stname' AND q.Q_STID=st.STID
				INNER JOIN `topic` AS t
				ON t.TID=st.ST_TID
				INNER JOIN `subject` AS s
				ON s.SID=t.T_SID
				";
				$temp = $sql->query($string);
				while($demo = $temp->fetch_row()){
					?>
					<button class="clickable btn btn-block btn-light" onclick="view(<?php echo $demo[0].",".$demo[5] ; ?>)">
						<div style="text-align: left;">
							<div>
								<?php echo "<b><em>C".$demo[1]."</em></b>&nbsp&nbsp&nbsp".$demo[2]; ?>
							</div>
							<div>
								<?php echo "M(".$demo[4].")"; ?>&nbsp<span style="color: red;"><?php echo $stname; ?></span>
								<div style="float: right;clear: both;"><?php echo "<i class='fa fa-clock' aria-hidden='true'></i>".$demo[3].":00"; ?></div>
							</div>
						</div>
					</button>
					<?php
				}
			}

			//fetching data from question
			if (isset($_POST['qid']) && !empty($_POST['stid'])) {
				$qid = secure($_POST['qid']);
				$stid = secure($_POST['stid']);
				$string = "SELECT * FROM `question` WHERE Q_STID=$stid AND QID=$qid";
				$temp = $sql->query($string);

				if($demo = $temp->fetch_row()){
					?>
					<div class="card">
						<div class="card-header">
							<div style="float : right;"><span id="ansTime"><label id="minutes">00</label>:<label id="seconds">00</label></span></div>
						</div>
						<div class="card-body question-display">
							<?php echo $demo[2]; ?>
						</div>
						<div class="card-footer">
							<button class="btn btn-info adapt" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
								Show Answer
							</button>
						</div>
					</div>
					<!-- collpasible -->
					<div class="collapse" id="collapseExample">
						<div class="card card-body">
							<?php echo $demo[7]; ?>
						</div>
					</div>
					<?php
				}
			}

			?>

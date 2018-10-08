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

				$string = "SELECT c.CID , s.SID , q.QID , t.T_name , q.Q_time , q.Q_marks , st.STID
				FROM `subtopic` AS st
				INNER JOIN `question` AS q
				ON st.ST_name='$stname' AND q.Q_STID=st.STID
				INNER JOIN `topic` AS t
				ON t.TID=st.ST_TID
				INNER JOIN `subject` AS s
				ON s.SID=t.T_SID
				INNER JOIN `level` AS l
				ON l.LID=s.S_LID
				INNER JOIN `course` AS c
				ON c.CID=l.L_CID
				";
				$temp = $sql->query($string);
				while($demo = $temp->fetch_row()){
					?>
					<button class="clickable btn btn-block btn-light" onclick="view(<?php echo $demo[2].",".$demo[6] ; ?>)">
						<div style="text-align: left;">
							<div>
								<?php echo "<b><em>C".$demo[0].".".$demo[1].".".$demo[2]."</em></b>&nbsp&nbsp&nbsp".$demo[3]; ?>
							</div>
							<div>
								<?php echo "M(".$demo[5].")"; ?>&nbsp<span style="color: red;"><?php echo $stname; ?></span>
								<div style="float: right;clear: both;"><?php echo "<i class='fa fa-clock' aria-hidden='true'></i>".$demo[4].":00"; ?></div>
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
							<?php echo $demo[2]; ?>
							<!-- <div style="float : right;" id="time"></div> -->
							<div style="float : right;"><span id="ansTime"><label id="minutes">00</label>:<label id="seconds">00</label></span></div>
						</div>
						<div class="card-body">
							<h5 class="card-title text-center">Option</h5>
							<p class="card-text"><?php echo $demo[3]; ?></p>
						</div>
						<div class="card-footer text-muted">
							<button type="button" class="btn btn-info adapt" data-toggle="modal" 
							data-target="#exampleModal">
								Show Answer
							</button>
							<!-- Modal -->
							<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Answer</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											<?php echo $demo[7]; ?>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
				}
			}

			?>

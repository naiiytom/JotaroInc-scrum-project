<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class='App'>
	<div class='container-fluid'>
		<div class='row cardContainer px-lg-5 justify-content-around'>
			<div class='col-xl-11 mainContainer'>
				<div class='containerHeader'>
					<h4>รายชื่อพนักงาน</h4>
				</div>
				<div class='row'>
					<?php
                    if ($isShow) {
                        echo "<button type=\"button\" class=\"btn btn-success\" style=\"margin-bottom: 25px;\" data-toggle=\"modal\"
						data-target=\"#addModel\">เพิ่มพนักงานใหม่</button>";
                    }
                    ?>
					<table class="table" id="enable">
						<thead>
							<tr>
								<th scope="col">รหัสพนักงาน</th>
								<th scope="col">อีเมล</th>
								<th scope="col">ชื่อ</th>
								<th scope="col">เบอร์โทร</th>
								<th scope="col">วันที่เริ่มทำงาน</th>
								<th scope="col">วันที่ลาออก</th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
							<?php
                            foreach ($sellers as $seller) {
                                echo "<tr>";
                                echo "<th width='5%' scope=\"row\">".$seller['EmployeeID']."</th>";
                                echo "<td width='10%'>".$seller['Email']."</td>";
                                echo "<td width='25%'>".$seller['Name']."</td>";
                                echo "<td width='30%'>".$seller['Tel']."</td>";
                                echo "<td width='15%'>".$seller['StartDate']."</td>";
                                echo "<td width='10%'>".$seller['QuitDate']."</td>";
                                echo "<td width='5%'>";
                                if ($isShow || $seller['EmployeeID'] == $_SESSION['userid']) {
                                    if (!$seller['QuitDate']) {
                                        echo "<button type=\"button\" class=\"btn btn-warning\"";
                                        echo "data-emp-id=\"".$seller['EmployeeID']."\"";
                                        echo "data-emp-name=\"".$seller['Name']."\"";
                                        echo "data-emp-tel=\"".$seller['Tel']."\"";
                                        echo "data-emp-email=\"".$seller['Email']."\"";
                                        echo "data-emp-user=\"".$seller['Username']."\"";
                                        echo "data-emp-dis=\"".$seller['Disabled']."\"";
                                        echo " data-toggle=\"modal\" data-target=\"#editModel\">แก้ไข</button>";
                                    }
                                }
                                echo "</td>";
                                echo "</tr>";
                            }
                            ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="addModel" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="addModalLabel">Add Employee</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="./seller/add/">
				<div class="modal-body">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" id="name" name="name" maxlength="100"
							placeholder="Employee Name" required>
					</div>
					<div class="form-group">
						<label for="tel">TelNo.</label>
						<input type="text" class="form-control" id="tel" name="tel" maxlength="15"
							placeholder="Employee Tel number" required>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email" maxlength="255"
							placeholder="Email" required>
					</div>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" id="username" name="username" maxlength="25"
							placeholder="Employee Username" required>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password" maxlength="255"
							placeholder="Employee Email" required>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancle</button>
					<button type="submit" class="btn btn-primary">Add</button>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade seller" id="editModel" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="editModalLabel">Edit Employee</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="./seller/edit/">
				<input type="text" name="id" readonly hidden>
				<div class="modal-body">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" id="name" name="name" maxlength="100"
							placeholder="Employee Name" required>
					</div>
					<div class="form-group">
						<label for="tel">TelNo.</label>
						<input type="text" class="form-control" id="tel" name="tel" maxlength="15"
							placeholder="Employee Tel number" required>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email" maxlength="255"
							placeholder="Email" required>
					</div>
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" id="username" name="username" maxlength="25"
							placeholder="Employee Username" required>
					</div>
					<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" id="password" name="password" maxlength="255"
							placeholder="Leave it if you not going to change password">
					</div>
				</div>
				<div class="modal-footer">
					<?php
                        if ($isShow) {
                            echo "<button type=\"submit\" class=\"btn btn-danger\" name=\"fire\">ไล่ออก</button>";
                        }
                    ?>
					<button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
					<button type="submit" class="btn btn-warning">บันทึก</button>
				</div>
			</form>
		</div>
	</div>
</div>
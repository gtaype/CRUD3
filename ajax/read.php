<?php

require 'lib.php';

$object = new CRUD();

// Design initial table header
$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>No.</th>
							<th>Hostname</th>
							<th>Ip</th>
                            <th>User SO</th>
                            <th>Password</th>
                            <th>SO</th>
                            <th>Observaciones</th>
							<th>Update</th>
							<th>Delete</th>
						</tr>';


$users = $object->Read();

if (count($users) > 0) {
    $number = 1;
    foreach ($users as $user) {
        $data .= '<tr>
				<td>' . $number . '</td>
				<td>' . $user['hostname'] . '</td>
				<td>' . $user['ip'] . '</td>
                <td>' . $user['user_so'] . '</td>
                <td>' . $user['pass'] . '</td>
                <td>' . $user['so'] . '</td>
                <td>' . $user['obser'] . '</td>
				<td>
					<button onclick="GetUserDetails(' . $user['id'] . ')" class="btn btn-warning">Update</button>
				</td>
				<td>
					<button onclick="DeleteUser(' . $user['id'] . ')" class="btn btn-danger">Delete</button>
				</td>
    		</tr>';
        $number++;
    }
} else {
    // records not found
    $data .= '<tr><td colspan="6">Records not found!</td></tr>';
}

$data .= '</table>';

echo $data;

?>
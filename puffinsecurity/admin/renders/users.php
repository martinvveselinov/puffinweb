<?phpsession_start();include "../../php/db/db_manipulation.php";$users = display();echo "<table border='1' ><tr><td> <b>FN</b></td><td> <b>Username</b></td><td><b>Password</b></td><td  ><b>Email</b></td><td  ><b>Admin</b></td></td><td  ><b>Banned</b></td></td><td  ><b>Promote to Admin/Demote to user</b></td></td><td  ><b>Block/unblock user</b></td></td>";foreach ($users as $data) {        $id = $data["id"];        $name = $data["username"];        echo "<tr>";        echo "<td  >" . $id . "</td>";        echo "<td  >" . $data["username"] . "</td>";        echo "<td  >" . $data["password"] . "</td>";        echo "<td  >" . $data["email"] . "</td>";        echo "<td class=\"privilege\" id=" . $data["id"] . " >" . $data["admin"] . "</td>";        echo "<td class=\"ban\" id=" . $data["id"] . " >" . $data["ban"] . "</td>";        if($_SESSION['uname'] != $data["username"]){            if($data["admin"] == 0)    echo "<td ><button class=\"clickpromote\" id=" . $data['id'] . " onclick=\"changestatus($id, 'promote')\">Promote</button></td>";            else     echo "<td ><button class=\"clickpromote\" id=" . $data['id'] . " onclick=\"changestatus($id, 'demote')\">Demote</button></td>";            if($data["ban"] == 0)    echo "<td ><button class=\"clickban\"  id=" . $data['id'] . " onclick=\"changestatus($id, 'block')\">Block user</button></td>";            else     echo "<td ><button class=\"clickban\"  id=" . $data['id'] . " onclick=\"changestatus($id, 'unblock')\">Unblock user</button></td>";        }        else{            echo "<td></td>";            echo "<td></td>";        }        echo "</tr>";}echo "</table>";echo "<script src=\"../../js/status.js\"></script>";?>
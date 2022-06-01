<?php
    session_start();

    /**
     * Logic Authenticating
     */
    
    if(isset($_SESSION['valid'])) {
        $result = $db->query("SELECT * FROM users WHERE id={$_SESSION['valid']}");

		$row = [];

		foreach ($result as $key => $item) {
			$row = $item;
		}

        if( isset($row['id']) ){
            $user = $row;

            if( isset($role) ){
                if( $role == $user['role'] ){
                    return $user;
                }else {
                    header('Location: ../dashboard');
                }
            }else {
                return $user;
            }

        }else {
            header('Location: ../login/logout.php');
        }

    }else {
        header('Location: ../login/logout.php');
    }

?>
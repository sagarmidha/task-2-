<!-- $stmt->bind_param("ssssssssss", $name, $email, $familiar, $why, $role, $recommend, $mostlike, $prefer, $text, $comment); -->
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $cnum = $stmt->num_rows;    <!-- $stmt->bind_param("ssssssssss", $name, $email, $familiar, $why, $role, $recommend, $mostlike, $prefer, $text, $comment); -->
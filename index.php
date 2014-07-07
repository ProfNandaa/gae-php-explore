<?php
  use google\appengine\api\users\User;
  use google\appengine\api\users\UserService;

  $user = UserService::getCurrentUser();

  if ($user) {
    echo 'Hello, ' . htmlspecialchars($user->getNickname());
  }
  else {
    header('Location: ' . UserService::createLoginURL($_SERVER['REQUEST_URI']));
  }
  ?>

  <h2>Guestbook Entries</h2>
  <?php
  // Create a connection.

  include 'db.php';

  if(isset($_POST)){
  	try {
	  if (array_key_exists('content', $_POST)) {
	    $stmt = $db->prepare('INSERT INTO entries (guestName, content) VALUES (:name, :content)');
	    $stmt->execute(array(':name' => htmlspecialchars($user->getNickname()), ':content' => htmlspecialchars($_POST['content'])));
	    $affected_rows = $stmt->rowCount();
	    // Log $affected_rows.
	  }
	} catch (PDOException $ex) {
	  // Log error.
	}
  }

  try {
    // Show existing guestbook entries.
    foreach($db->query('SELECT * from entries') as $row) {
            echo "<div><strong>" . $row['guestName'] . "</strong> wrote <br> " . $row['content'] . "</div>";
     }
  } catch (PDOException $ex) {
    echo "An error occurred in reading or writing to guestbook.";
  }

  $db = null;

  ?>

  <h2>Sign the Guestbook</h2>
  <form action="" method="post">
    <div><textarea name="content" rows="3" cols="60"></textarea></div>
    <div><input type="submit" value="Sign Guestbook"></div>
  </form>
  </body>
</html>

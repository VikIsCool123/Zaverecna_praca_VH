<?php

// Get associated info from current user session
session_start();
// DESTROYYY all logged-in cached information about the user in the session 💀💀💀
session_destroy();
// Then go back to the home page
header("Location: index.php");

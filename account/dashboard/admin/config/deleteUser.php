<!-- 
:: How did the data get in there?

Once a user comments on a blog, the first thing that happens is that there is a row added
in the userBlog table, this stores the userid and the id of the blog that the user just
commented on.

The comment is then added along with an id of the row that was just added in the userBlog table

Now that you understand how the data got in there, you now need to work out how to delete all
the related information.

:: The problem ::
The user and all their associated comments must be deleted no other data should be affected

First of all you will need to delete the user
You will then find all the rows in the userBlog table with the deleted users id
Then delete all the rows in the comments table that had a matching id with the rows
that have been deleted in the userBlog table

need to look at how this is written - rewrite if neccessary

one variable is passed in and it deletes in a cascade over the multiple tables, we access
all the data via one id (the users) - This is why it is important to set up the tables correctly initially


 -->

<?php
    include '../../../auth/dbConfig.php';

    $userId = $_GET['uid'];

    $deleteComments = $conn->prepare('DELETE FROM comments WHERE fk_userBlog IN (SELECT id FROM userBlog WHERE fk_user_id = '.$userId.')');
    $deleteUserBlog = $conn->prepare('DELETE FROM userBlog WHERE fk_user_id = '.$userId.'');
    $deleteUser = $conn->prepare('DELETE FROM users WHERE users.id = '.$userId.' ');

    $deleteComments->execute();
    $deleteUserBlog->execute();
    $deleteUser->execute();

    header('Location: ../../../../a/allUsers');

    ?>

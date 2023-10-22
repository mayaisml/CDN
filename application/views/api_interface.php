<!DOCTYPE html>
<html>
<head>
    <title>Complete Developer Network</title>
</head>
<body>
    <h1>Complete Developer Network</h1>

    <!-- Create User Form -->
    <h2>Create User</h2>
    <form id="create-user-form" method="POST" action="/cdn/index.php/makan/insertuser">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>
        <br>
        <br>
        <label for="Skills">Skills:</label>
        <input type="text" id="skills" name="skills" required>
        <br>
        <br>
        <label for="hobby">Hobby:</label>
        <input type="text" id="hobby" name="hobby" required>
        <br>
        <button type="submit">Create User</button>
    </form>

    <!-- Update User Form -->
    <h2>Update User</h2>
    <form id="update-user-form" method="PUT" action="/cdn/index.php/makan/updateuser">
        <label for="update-id">User ID to Update:</label>
        <input type="number" id="update-id" name="id" required>
        <br>
        <label for="new-username">New Username:</label>
        <input type="text" id="new-username" name="username" required>
        <br>
        <label for="new-email">New Email:</label>
        <input type="email" id="new-email" name="email" required>
        <br>
        <label for="new-phone">New Phone Number:</label>
        <input type="tel" id="new-phone" name="phone" required>
        <br>
        <button type="submit">Update User</button>
    </form>

    <!-- Delete User Form -->
    <h2>Delete User</h2>
    <form id="delete-user-form" method="DELETE" action="/cdn/index.php/makan/insertuser">
        <label for="delete-id">User ID to Delete:</label>
        <input type="number" id="delete-id" name="id" required>
        <br>
        <button type="submit">Delete User</button>
    </form>
</body>
</html>

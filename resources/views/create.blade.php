<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }
        form {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            width: 300px;
            margin: 0 auto;
        }
        label {
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }
        button[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }
        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form method="POST" action="store">
        @csrf
         <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        
        <label for="phone">Phone:</label><br>
        <input type="number" id="phone" name="phone"><br>
        
        <label for="address">Address:</label><br>
        <input type="text" id="address" name="address"><br>
        
        <label for="city">City:</label><br>
        <input type="text" id="city" name="city"><br>
        
        <label for="state">State:</label><br>
        <input type="text" id="state" name="state"><br>
        
        <label for="country">Country:</label><br>
        <input type="text" id="country" name="country"><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>

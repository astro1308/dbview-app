<h1>Add User in DB</h1>
<form action="" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Enter Your Name"> <br> <br>
    <input type="password" name="fname" placeholder="Enter Your Password"> <br> <br>
    <input type="text" name="age" placeholder="Enter Your Hint"> <br> <br>
    <button type="submit">Add Member</button>
</form>